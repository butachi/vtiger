<?php
/* Smarty version 4.5.4, created on 2024-10-02 08:30:40
  from '/usr/src/layouts/v7/modules/Vtiger/partials/SidebarHeader.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.4',
  'unifunc' => 'content_66fd04b0f0dc32_40925632',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1e2e848fc939bbb95c314267e728e84beca7b4f6' => 
    array (
      0 => '/usr/src/layouts/v7/modules/Vtiger/partials/SidebarHeader.tpl',
      1 => 1727609712,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:modules/Vtiger/partials/SidebarAppMenu.tpl' => 1,
  ),
),false)) {
function content_66fd04b0f0dc32_40925632 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_assignInScope('APP_IMAGE_MAP', Vtiger_MenuStructure_Model::getAppIcons());?>

<div class="col-sm-1 col-xs-2 app-indicator-icon-container app-<?php echo $_smarty_tpl->tpl_vars['SELECTED_MENU_CATEGORY']->value;?>
">
	<div class="row" title="<?php if ($_smarty_tpl->tpl_vars['MODULE']->value == 'Home' || !$_smarty_tpl->tpl_vars['MODULE']->value) {?> <?php echo vtranslate('LBL_DASHBOARD');?>
 <?php } else {
echo vtranslate("LBL_".((string)$_smarty_tpl->tpl_vars['SELECTED_MENU_CATEGORY']->value));
}?>">
		<span class="app-indicator-icon fa <?php if ($_smarty_tpl->tpl_vars['MODULE']->value == 'Home' || !$_smarty_tpl->tpl_vars['MODULE']->value) {?>fa-dashboard<?php } else {
echo $_smarty_tpl->tpl_vars['APP_IMAGE_MAP']->value[$_smarty_tpl->tpl_vars['SELECTED_MENU_CATEGORY']->value];
}?>"></span>
	</div>
</div>

<?php $_smarty_tpl->_subTemplateRender("file:modules/Vtiger/partials/SidebarAppMenu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
