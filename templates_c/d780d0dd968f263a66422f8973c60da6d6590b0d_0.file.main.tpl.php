<?php
/* Smarty version 3.1.32, created on 2018-07-28 10:48:50
  from 'C:\xampp\web\templates\main.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b5c2df24f47b0_04977683',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd780d0dd968f263a66422f8973c60da6d6590b0d' => 
    array (
      0 => 'C:\\xampp\\web\\templates\\main.tpl',
      1 => 1532767392,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b5c2df24f47b0_04977683 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3219928495b5c2df24dd0a9_16481849', 'body');
?>
















<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "layout.tpl");
}
/* {block 'body'} */
class Block_3219928495b5c2df24dd0a9_16481849 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_3219928495b5c2df24dd0a9_16481849',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="col-sm-4">
        <ul class="nav nav-pills nav-stacked">
            <li
                    <?php if (!isset($_GET['category'])) {?> class="active"<?php }?>
                    role="presentation"><a href="/?action=main">All</a></li>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categories']->value, 'category');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['category']->value) {
?>
                <li
                        <?php if ((isset($_GET['category']) && ($_GET['category'] == $_smarty_tpl->tpl_vars['category']->value['id']))) {?>
                            class="active"
                        <?php }?>
                        role="presentation"><a href="/?action=main&category=<?php echo $_smarty_tpl->tpl_vars['category']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['category']->value['name'];?>
</a></li>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </ul>
    </div>
    <div class="col-sm-8">
        <table class="table table-bordered table-stripped">
            <thead>
                <th>ID</th>
                <th>Name</th>
                <th>Price</th>
                <th>Category</th>
                <th>Add to cart</th>
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
                    <td><?php echo $_smarty_tpl->tpl_vars['item']->value['price'];?>
$</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['item']->value['category'];?>
</td>
                    <td><a href="/?action=addCart&id=<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" class="btn btn-primary"><span class="glyphicon glyphicon glyphicon-shopping-cart" aria-hidden="true"></span>Add to cart</td>
                </tr>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

            </tbody>
        </table>
    </div>
<?php
}
}
/* {/block 'body'} */
}
