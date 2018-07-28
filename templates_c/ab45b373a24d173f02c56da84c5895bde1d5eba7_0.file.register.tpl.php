<?php
/* Smarty version 3.1.32, created on 2018-07-28 09:59:32
  from 'C:\xampp\web\templates\register.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b5c2264034d57_49821668',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ab45b373a24d173f02c56da84c5895bde1d5eba7' => 
    array (
      0 => 'C:\\xampp\\web\\templates\\register.tpl',
      1 => 1532764771,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b5c2264034d57_49821668 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2911799285b5c22640291d5_21871440', 'body');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "layout.tpl");
}
/* {block 'body'} */
class Block_2911799285b5c22640291d5_21871440 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_2911799285b5c22640291d5_21871440',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <h2>Register</h2>
    <?php if (isset($_GET['err'])) {?>
        <div style="color: red;"><?php echo $_GET['err'];?>
</div>
    <?php }?>
    <form action="/?action=register" method="POST" style="width: 300px">
        <div class="form-group">
            <label for="exampleInputEmail1">Email address</label>
            <input type="text" class="form-control" name="login" placeholder="Email">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input type="password" class="form-control" name="pass" placeholder="Password">
        </div>
        <button type="submit" class="btn btn-success">Register</button>
    </form>
    <a href="/?action=login">Login</a>
<?php
}
}
/* {/block 'body'} */
}
