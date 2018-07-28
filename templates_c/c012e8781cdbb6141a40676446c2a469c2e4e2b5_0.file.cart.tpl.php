<?php
/* Smarty version 3.1.32, created on 2018-07-28 11:15:28
  from 'C:\xampp\web\templates\cart.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b5c3430b01024_13353205',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c012e8781cdbb6141a40676446c2a469c2e4e2b5' => 
    array (
      0 => 'C:\\xampp\\web\\templates\\cart.tpl',
      1 => 1532769327,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b5c3430b01024_13353205 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>




<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12278359825b5c3430aed795_52225742', 'body');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "layout.tpl");
}
/* {block 'body'} */
class Block_12278359825b5c3430aed795_52225742 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_12278359825b5c3430aed795_52225742',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <?php if (isset($_GET['message'])) {?>
        <div style="color: green"><?php echo $_GET['message'];?>
</div>
    <?php }?>
    <table class="table table-bordered table-stripped">
        <thead>
            <th>ID</th>
            <th>NAME</th>
            <th>CATEGORY</th>
            <th>PRICE</th>
            <th>COUNT</th>
            <th>TOTAL</th>
        </thead>
        <tbody>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['items']->value, 'item');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
?>
                <tr>
                    <td><?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['item']->value['category'];?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['item']->value['price'];?>
$</td>
                    <td><a href="/?action=inc">+</a> <?php echo $_smarty_tpl->tpl_vars['item']->value['count'];?>
 <a href="/?action=dec">-</a></td>
                    <td><?php echo $_smarty_tpl->tpl_vars['item']->value['total'];?>
$</td>
                </tr>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </tbody>

    </table>

    <a href="/?action=createOrder" class="btn btn-success">Create Order</a>
<?php
}
}
/* {/block 'body'} */
}
