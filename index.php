<?php
require_once "functions.php";
require_once "libs/Smarty.class.php";
require_once "db.php";



session_start();
$smarty = new Smarty();
$smarty->setTemplateDir("templates");
$smarty->assign('cart_count' , getCartItemsCount());
$action = $_REQUEST['action'] ?? 'main';

switch ($action) {
    case "main":
        getMainView();
        break;
    case "login":
        if($_SERVER['REQUEST_METHOD'] === "GET") {
            getLoginView();
            exit;
        }
        login();
        break;
    case "register":
        if($_SERVER['REQUEST_METHOD'] === "GET") {
            getRegisterView();
            exit;
        }
        register();
        break;
    case "logout":
        logout();
        break;
    case "cart":
        if(!isset($_SESSION['user'])) {
            header("Location: /?action=login");
            exit;
        }
        getCartView();
        break;
    case "addCart":
        addCart();
        break;
    case "removeCart":
        removeFromCart();
        break;
    case "orders":
        getOrdersView();
        break;
    case "createOrder":
        addToOrder();
        break;
}