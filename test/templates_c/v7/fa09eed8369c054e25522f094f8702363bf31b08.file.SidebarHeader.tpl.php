<?php /* Smarty version Smarty-3.1.7, created on 2021-05-31 05:06:33
         compiled from "C:\xampp7.4\htdocs\sbma\includes\runtime/../../layouts/v7\modules\Reports\partials\SidebarHeader.tpl" */ ?>
<?php /*%%SmartyHeaderCode:174119191860b46ed9c27f55-03686742%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fa09eed8369c054e25522f094f8702363bf31b08' => 
    array (
      0 => 'C:\\xampp7.4\\htdocs\\sbma\\includes\\runtime/../../layouts/v7\\modules\\Reports\\partials\\SidebarHeader.tpl',
      1 => 1611648816,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '174119191860b46ed9c27f55-03686742',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_60b46ed9c5635',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60b46ed9c5635')) {function content_60b46ed9c5635($_smarty_tpl) {?>

<?php $_smarty_tpl->tpl_vars['APP_IMAGE_MAP'] = new Smarty_variable(Vtiger_MenuStructure_Model::getAppIcons(), null, 0);?>



<?php echo $_smarty_tpl->getSubTemplate ("modules/Vtiger/partials/SidebarAppMenu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>