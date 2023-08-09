<?php /* Smarty version Smarty-3.1.7, created on 2021-07-14 00:31:56
         compiled from "C:\xampp7.4\htdocs\bayan911\includes\runtime/../../layouts/v7\modules\Settings\Vtiger\SidebarHeader.tpl" */ ?>
<?php /*%%SmartyHeaderCode:94192295860ee307c749e60-16870971%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2b415adbb04e2d0824c5a60672a2d86738f85b49' => 
    array (
      0 => 'C:\\xampp7.4\\htdocs\\bayan911\\includes\\runtime/../../layouts/v7\\modules\\Settings\\Vtiger\\SidebarHeader.tpl',
      1 => 1602674194,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '94192295860ee307c749e60-16870971',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'SELECTED_MENU_CATEGORY' => 0,
    'MODULE' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_60ee307c78067',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60ee307c78067')) {function content_60ee307c78067($_smarty_tpl) {?>

<?php $_smarty_tpl->tpl_vars['APP_IMAGE_MAP'] = new Smarty_variable(Vtiger_MenuStructure_Model::getAppIcons(), null, 0);?>
<div class="col-sm-12 col-xs-12 app-indicator-icon-container app-<?php echo $_smarty_tpl->tpl_vars['SELECTED_MENU_CATEGORY']->value;?>
">
    <div class="row" title="<?php echo vtranslate("LBL_SETTINGS",$_smarty_tpl->tpl_vars['MODULE']->value);?>
">
        <span class="app-indicator-icon fa fa-cog"></span>
    </div>
</div>
    
<?php echo $_smarty_tpl->getSubTemplate ("modules/Vtiger/partials/SidebarAppMenu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>