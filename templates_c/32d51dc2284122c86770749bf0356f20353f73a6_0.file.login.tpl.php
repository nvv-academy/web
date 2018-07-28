<?php
/* Smarty version 3.1.32, created on 2018-07-28 10:13:05
  from 'C:\xampp\web\templates\login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b5c25919108b1_05621723',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '32d51dc2284122c86770749bf0356f20353f73a6' => 
    array (
      0 => 'C:\\xampp\\web\\templates\\login.tpl',
      1 => 1532765584,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b5c25919108b1_05621723 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20926421945b5c2591900eb5_62388042', 'body');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "layout.tpl");
}
/* {block 'body'} */
class Block_20926421945b5c2591900eb5_62388042 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_20926421945b5c2591900eb5_62388042',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <h2>Login</h2>
    <?php if (isset($_GET['err'])) {?>
        <div style="color: red;"><?php echo $_GET['err'];?>
</div>
    <?php }?>
    <form action="/?action=login" method="POST" style="width: 300px">
        <div class="form-group">
            <label for="exampleInputEmail1">Email address</label>
            <input type="text" class="form-control" name="login" placeholder="Email">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input type="password" class="form-control" name="pass" placeholder="Password">
        </div>
        <button type="submit" class="btn btn-success">Login</button>
    </form>
    <a href="/?action=register">Register</a>
<?php
}
}
/* {/block 'body'} */
}
