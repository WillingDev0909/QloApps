<?php /* Smarty version Smarty-3.1.19, created on 2015-11-05 16:48:00
         compiled from "/home/sumit/public_html/html/ps-hotel-reservation-system/admin464itamgr/themes/default/template/controllers/products/helpers/tree/tree_toolbar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1644494074563b3ae8e4c477-58818091%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ad5b86eb68dc7fbfed490bb90197d895060af473' => 
    array (
      0 => '/home/sumit/public_html/html/ps-hotel-reservation-system/admin464itamgr/themes/default/template/controllers/products/helpers/tree/tree_toolbar.tpl',
      1 => 1446483944,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1644494074563b3ae8e4c477-58818091',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'actions' => 0,
    'action' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_563b3ae8eb6461_29444861',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_563b3ae8eb6461_29444861')) {function content_563b3ae8eb6461_29444861($_smarty_tpl) {?>
<div class="tree-actions pull-right">
	<?php if (isset($_smarty_tpl->tpl_vars['actions']->value)) {?>
	<?php  $_smarty_tpl->tpl_vars['action'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['action']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['actions']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['action']->key => $_smarty_tpl->tpl_vars['action']->value) {
$_smarty_tpl->tpl_vars['action']->_loop = true;
?>
		<?php echo $_smarty_tpl->tpl_vars['action']->value->render();?>

	<?php } ?>
	<?php }?>
</div><?php }} ?>
