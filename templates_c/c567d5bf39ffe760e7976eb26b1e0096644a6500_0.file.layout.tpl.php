<?php
/* Smarty version 3.1.32, created on 2018-07-28 10:50:35
  from 'C:\xampp\web\templates\layout.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b5c2e5b9ee031_96404476',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c567d5bf39ffe760e7976eb26b1e0096644a6500' => 
    array (
      0 => 'C:\\xampp\\web\\templates\\layout.tpl',
      1 => 1532767833,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b5c2e5b9ee031_96404476 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<html>
<head>
    <?php echo '<script'; ?>
 src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"><?php echo '</script'; ?>
>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <?php echo '<script'; ?>
 src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"><?php echo '</script'; ?>
>
</head>
<body>
<nav class="navbar navbar-default">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/">Brand</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

            <ul class="nav navbar-nav">
                <?php if (!isset($_SESSION['user'])) {?>
                    <li><a href="/?action=login">Sign In</a></li>
                    <li><a href="/?action=register">Sign Up</a></li>
                <?php } else { ?>
                    <?php if (($_SESSION['user']['admin'])) {?>
                        <li><a href="#">ADMIN</a></li>
                    <?php }?>
                <?php }?>


            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="/?action=cart">Cart (<?php echo $_smarty_tpl->tpl_vars['cart_count']->value;?>
)</a></li>
                <?php if (isset($_SESSION['user'])) {?>
                    <li><a href="/?action=orders">Orders</a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><?php echo $_SESSION['user']['login'];?>
 <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="/?action=logout">Logout</a></li>
                        </ul>
                    </li>
                <?php }?>

            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>
</body>
<div class="container">
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5065304015b5c2e5b9ea1b4_35143144', 'body');
?>

</div>
</html><?php }
/* {block 'body'} */
class Block_5065304015b5c2e5b9ea1b4_35143144 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_5065304015b5c2e5b9ea1b4_35143144',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'body'} */
}
