<?php /* Smarty version Smarty-3.1.7, created on 2021-02-17 02:14:28
         compiled from "C:\xampp\htdocs\bayan911demo\includes\runtime/../../layouts/v7\modules\Reports\partials\SidebarHeader.tpl" */ ?>
<?php /*%%SmartyHeaderCode:954934662602c7c0479a416-12713618%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f95a7de4f14a2648da6cb99c9acdba1195314d55' => 
    array (
      0 => 'C:\\xampp\\htdocs\\bayan911demo\\includes\\runtime/../../layouts/v7\\modules\\Reports\\partials\\SidebarHeader.tpl',
      1 => 1611602016,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '954934662602c7c0479a416-12713618',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_602c7c0479d1d',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_602c7c0479d1d')) {function content_602c7c0479d1d($_smarty_tpl) {?>

<?php $_smarty_tpl->tpl_vars['APP_IMAGE_MAP'] = new Smarty_variable(Vtiger_MenuStructure_Model::getAppIcons(), null, 0);?>



<?php echo $_smarty_tpl->getSubTemplate ("modules/Vtiger/partials/SidebarAppMenu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>