<?php /* Smarty version Smarty-3.1.19, created on 2016-01-07 10:53:33
         compiled from "/home/sumit/public_html/html/hotel-reservation-system/modules/wkthemeconfigurator/views/templates/hook/hook.tpl" */ ?>
<?php /*%%SmartyHeaderCode:698971972568d37b14d3f11-81360369%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b3312478dcecf71adf6fb673ff57ffc39069f0e3' => 
    array (
      0 => '/home/sumit/public_html/html/hotel-reservation-system/modules/wkthemeconfigurator/views/templates/hook/hook.tpl',
      1 => 1452142877,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '698971972568d37b14d3f11-81360369',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_568d37b1508099_05304203',
  'variables' => 
  array (
    'htmlitems' => 0,
    'hook' => 0,
    'module_dir' => 0,
    'hItem' => 0,
    'link' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_568d37b1508099_05304203')) {function content_568d37b1508099_05304203($_smarty_tpl) {?>
<?php if (isset($_smarty_tpl->tpl_vars['htmlitems']->value)&&$_smarty_tpl->tpl_vars['htmlitems']->value) {?>
<div id="htmlcontent_<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['hook']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
"<?php if ($_smarty_tpl->tpl_vars['hook']->value=='footer') {?> class="footer-block col-xs-12 col-sm-4"<?php }?>>
	<ul class="htmlcontent-home clearfix row">
		<?php  $_smarty_tpl->tpl_vars['hItem'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['hItem']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['htmlitems']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['items']['iteration']=0;
foreach ($_from as $_smarty_tpl->tpl_vars['hItem']->key => $_smarty_tpl->tpl_vars['hItem']->value) {
$_smarty_tpl->tpl_vars['hItem']->_loop = true;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['items']['iteration']++;
?>
			<?php if ($_smarty_tpl->tpl_vars['hook']->value=='left'||$_smarty_tpl->tpl_vars['hook']->value=='right') {?>
				<li class="htmlcontent-item-<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->getVariable('smarty')->value['foreach']['items']['iteration'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
 col-xs-12 margin-btm-20">
			<?php } else { ?>
				<li class="htmlcontent-item-<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->getVariable('smarty')->value['foreach']['items']['iteration'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
 col-xs-12 margin-btm-20">
			<?php }?>
					<div class="row">
						<div class="col-sm-12 col-xs-12 item-img parent-rm-div <?php if ($_smarty_tpl->tpl_vars['hook']->value=='left'||$_smarty_tpl->tpl_vars['hook']->value=='right') {?>img-responsive<?php }?>" style='background-image:url("<?php echo $_smarty_tpl->tpl_vars['link']->value->getMediaLink(((string)$_smarty_tpl->tpl_vars['module_dir']->value)."img/".((string)$_smarty_tpl->tpl_vars['hItem']->value['image']));?>
")'>
							<div class="row">
								<div class="outer-image-content-div col-sm-7 col-md-6 col-lg-5 col-xs-12 <?php if ($_smarty_tpl->tpl_vars['hItem']->value['content_side']=='right') {?>pull-right<?php }?>">
									<p class="des_head"><?php echo $_smarty_tpl->tpl_vars['hItem']->value['product_name'];?>
</p>
									<div class="des_content"><?php echo $_smarty_tpl->tpl_vars['hItem']->value['html'];?>
</div>
									<div>
										<a target="blank" class="btn btn-default btn_view_details" href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getProductLink($_smarty_tpl->tpl_vars['hItem']->value['id_product']);?>
"><?php echo smartyTranslate(array('s'=>'View Details','mod'=>'themeconfigurator'),$_smarty_tpl);?>
</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</li>
		<?php } ?>
	</ul>
</div>
<?php }?>
<?php }} ?>
