<?php /* Smarty version Smarty-3.1.7, created on 2021-01-21 07:23:41
         compiled from "C:\xampp\htdocs\nuevaviscaya\includes\runtime/../../layouts/v7\modules\Vtiger\partials\SidebarHeader.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9930059605fd02016423319-33475382%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b7ae81f8473eb4510b21ff68f9c18cf6c326da2b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\nuevaviscaya\\includes\\runtime/../../layouts/v7\\modules\\Vtiger\\partials\\SidebarHeader.tpl',
      1 => 1611213724,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9930059605fd02016423319-33475382',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5fd0201646446',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5fd0201646446')) {function content_5fd0201646446($_smarty_tpl) {?>

<?php $_smarty_tpl->tpl_vars['APP_IMAGE_MAP'] = new Smarty_variable(Vtiger_MenuStructure_Model::getAppIcons(), null, 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("modules/Vtiger/partials/SidebarAppMenu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>