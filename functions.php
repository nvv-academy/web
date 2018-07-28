<?php

function getMainView()
{
    global $smarty;
    global $db;

    $categories = $db
        ->query("SELECT * FROM `categories` ORDER BY `weight` DESC")
        ->fetch_all(MYSQLI_ASSOC);

    $query = "SELECT `items`.`id`, `items`.`name`, `categories`.`name` as `category`, `items`.`price` FROM `items` INNER JOIN `categories` ON `items`.`category_id` = `categories`.`id` ";
    if(isset($_REQUEST['category'])) {
        $id = (int) $_REQUEST['category'];
        $query .= " WHERE `category_id` = $id";
    }
    $items = $db->query($query)->fetch_all(MYSQLI_ASSOC);
    $smarty->assign('categories', $categories);
    $smarty->assign('items', $items);
    $smarty->display("main.tpl");
}
function getLoginView()
{
    global $smarty;
    $smarty->display("login.tpl");
}
function login()
{
    $login = $_POST['login'] ?? null;
    $pass = $_POST['pass'] ?? null;

    if(!$login || !$pass) {
        header("Location: /?action=login&err=Invalid Parameters");
        exit;
    }

    global $db;

    $pass = md5($pass);
    $query = "SELECT * FROM `users` WHERE `login` = '$login' AND `pass` = '$pass' LIMIT 1";
    $user = $db->query($query)->fetch_assoc();

    if (!$user) {
        header("Location: /?action=login&err=User does not exist or credentials are incorrect");
        exit;
    }

    $_SESSION['user'] = $user;
    header("Location: /?action=main");
}
function getRegisterView()
{
    global $smarty;
    $smarty->display("register.tpl");
}
function register()
{
    $login = $_POST['login'] ?? null;
    $pass = $_POST['pass'] ?? null;

    if(!$login || !$pass) {
        header("Location: /?action=register&err=Invalid Parameters");
        exit;
    }

    global $db;

    $pass = md5($pass);
    $query = "SELECT * FROM `users` WHERE `login` = '$login' LIMIT 1";
    $res = $db->query($query)->fetch_assoc();

    if ($res) {
        header("Location: /?action=register&err=User exists");
        exit;
    }

    $query = "INSERT INTO `users` SET `login` = '$login', `pass` = '$pass'";
    $db->query($query);
    if(!($id = $db->insert_id)) {
        header("Location: /?action=register&err=Server error");
        exit;
    }

    $user = [
        'login' => $login,
        'admin' => 0,
        'id' => $id
    ];

    $_SESSION['user'] = $user;
    header("Location: /");
}
function logout(){
    unset($_SESSION['user']);
    header("Location: /?action=login");
    exit;
}
function getCartView(){
    global $smarty;
    $items = $_SESSION['items'] ?? [];
    $keys = array_keys($items);
    $dbItems = [];
    if($keys) {
        $dbItems = getItemsByKeys($keys);
    }

    foreach ($dbItems as &$item) {
        $item['count'] = $items[$item['id']];
        $item['total'] = $items[$item['id']] * $item['price'];
    }

    $smarty->assign('items', $dbItems);
    $smarty->display("cart.tpl");
}

function getItemsByKeys(array $keys): array
{
    global $db;
    $query = "
          SELECT 
            `items`.`id`, 
            `items`.`name`, 
            `categories`.`name` as `category`, 
            `items`.`price` 
          FROM `items` 
          INNER JOIN `categories` 
            ON `items`.`category_id` = `categories`.`id` 
          WHERE `items`.`id` IN (".implode(",", $keys).")";
    return $db->query($query)->fetch_all(MYSQLI_ASSOC);
}

function addCart()
{
    $id = (int) ($_GET['id'] ?? null);

    if (!$id) {
        header("location: /");
        exit;
    }

    global $db;
    $item = $db
        ->query("SELECT * FROM `items` WHERE `id` = $id LIMIT 1")
        ->fetch_assoc();

    $items = $_SESSION['items'] ?? [];


    if(isset($items[$id])) {
        $items[$id]++;
    } else {
        $items[$id] = 1;
    }

    $_SESSION['items'] = $items;
    header("Location: /");
}
function removeFromCart(){} 
function getOrdersView(){
    global $smarty;
    $smarty->display("orders.tpl");
}
function addToOrder(){
    global $db;
    $userId = (int) $_SESSION['user']['id'];
    $query = "INSERT INTO `orders` SET `user_id` = $userId";
    $db->query($query);

    $orderId = $db->insert_id;

    $items = $_SESSION['items'] ?? [];

    $data = [];
    foreach ($items as $itemId => $count) {
        $data[] = "($itemId, $orderId, $count)";
    }

    $query = "INSERT INTO `order_items` (`item_id`, `order_id`, `count`) VALUES ".implode(",", $data);
    $db->query($query);
    unset($_SESSION['items']);
    header("Location: /?action=cart&msg=Order created");

}


function getCartItemsCount(): int
{
    $items = $_SESSION['items'] ?? [];

    if(!$items) {
        return 0;
    }

    return array_sum($items);
}