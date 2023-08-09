<?php /* Smarty version Smarty-3.1.7, created on 2020-12-09 04:06:57
         compiled from "C:\xampp\htdocs\nuevaviscaya\includes\runtime/../../layouts/v7\modules\Settings\ExtensionStore\Index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:11534529525fd04d61bc25a8-98768300%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '84834868e805eaa7d0a5dfec06c54c2d31044acd' => 
    array (
      0 => 'C:\\xampp\\htdocs\\nuevaviscaya\\includes\\runtime/../../layouts/v7\\modules\\Settings\\ExtensionStore\\Index.tpl',
      1 => 1602587794,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11534529525fd04d61bc25a8-98768300',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'QUALIFIED_MODULE' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5fd04d61bc86b',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5fd04d61bc86b')) {function content_5fd04d61bc86b($_smarty_tpl) {?>
<div class="col-sm-12 col-xs-12 content-area" id="importModules"><div class="row"><div class="col-sm-4 col-xs-4"><div class="row"><div class="col-sm-8 col-xs-8"><input type="text" id="searchExtension" class="extensionSearch form-control" placeholder="<?php echo vtranslate('Search for an extension..',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
"/></div></div></div></div><br><div class="contents row"><div class="col-sm-12 col-xs-12" id="extensionContainer"><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path('ExtensionModules.tpl',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
</div></div><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path("CardSetupModals.tpl",$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
</div><?php }} ?>