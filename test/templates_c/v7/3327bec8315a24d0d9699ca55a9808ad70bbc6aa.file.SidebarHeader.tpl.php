<?php /* Smarty version Smarty-3.1.7, created on 2021-07-14 02:26:06
         compiled from "C:\xampp7.4\htdocs\bayan911\includes\runtime/../../layouts/v7\modules\Reports\partials\SidebarHeader.tpl" */ ?>
<?php /*%%SmartyHeaderCode:102229263460ee4b3e239bd4-82347357%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3327bec8315a24d0d9699ca55a9808ad70bbc6aa' => 
    array (
      0 => 'C:\\xampp7.4\\htdocs\\bayan911\\includes\\runtime/../../layouts/v7\\modules\\Reports\\partials\\SidebarHeader.tpl',
      1 => 1611648816,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '102229263460ee4b3e239bd4-82347357',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_60ee4b3e23ba8',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60ee4b3e23ba8')) {function content_60ee4b3e23ba8($_smarty_tpl) {?>

<?php $_smarty_tpl->tpl_vars['APP_IMAGE_MAP'] = new Smarty_variable(Vtiger_MenuStructure_Model::getAppIcons(), null, 0);?>



<?php echo $_smarty_tpl->getSubTemplate ("modules/Vtiger/partials/SidebarAppMenu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>