<?php /* Smarty version Smarty-3.1.19, created on 2016-01-07 10:35:29
         compiled from "/home/sumit/public_html/html/hotel-reservation-system/admin/themes/default/template/helpers/list/list_action_removestock.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1064633096568df219c76518-67829023%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '34427262507aac89d1ecdea808a442e11f532f7b' => 
    array (
      0 => '/home/sumit/public_html/html/hotel-reservation-system/admin/themes/default/template/helpers/list/list_action_removestock.tpl',
      1 => 1452142888,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1064633096568df219c76518-67829023',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'href' => 0,
    'action' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_568df219c804d7_45253070',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_568df219c804d7_45253070')) {function content_568df219c804d7_45253070($_smarty_tpl) {?>
<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['href']->value, ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['action']->value, ENT_QUOTES, 'UTF-8', true);?>
">
	<i class="icon-circle-arrow-down"></i> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['action']->value, ENT_QUOTES, 'UTF-8', true);?>

</a>
<?php }} ?>
