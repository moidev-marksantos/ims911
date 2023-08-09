<?php /* Smarty version Smarty-3.1.7, created on 2020-12-10 08:03:12
         compiled from "C:\xampp\htdocs\nuevaviscaya\includes\runtime/../../layouts/v7\modules\Settings\SMSNotifier\ProviderEditFields.tpl" */ ?>
<?php /*%%SmartyHeaderCode:6231604745fd1d6405d5d04-00910423%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2eb667491ea4e53a16276b022a76edb8a9890a2d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\nuevaviscaya\\includes\\runtime/../../layouts/v7\\modules\\Settings\\SMSNotifier\\ProviderEditFields.tpl',
      1 => 1607474632,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6231604745fd1d6405d5d04-00910423',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'QUALIFIED_MODULE_NAME' => 0,
    'RECORD_MODEL' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5fd1d64060373',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5fd1d64060373')) {function content_5fd1d64060373($_smarty_tpl) {?>

<div class="col-lg-12"><div class="form-group"><div class = "col-lg-4"><label for="username"><?php echo vtranslate('username',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE_NAME']->value);?>
</label></div><div class = "col-lg-6"><input type="text" class="form-control" name="username" data-rule-required="true" id="username" value="<?php echo $_smarty_tpl->tpl_vars['RECORD_MODEL']->value->get('username');?>
" /></div></div></div><div class="col-lg-12"><div class="form-group"><div class = "col-lg-4"><label for="password"><?php echo vtranslate('password',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE_NAME']->value);?>
</label></div><div class = "col-lg-6"><input type="password" class = "form-control" data-rule-required="true" name="password" id ="password" value="<?php echo $_smarty_tpl->tpl_vars['RECORD_MODEL']->value->get('password');?>
" /></div></div></div><br><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path('BaseProviderEditFields.tpl',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE_NAME']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('RECORD_MODEL'=>$_smarty_tpl->tpl_vars['RECORD_MODEL']->value), 0);?>
<?php }} ?>