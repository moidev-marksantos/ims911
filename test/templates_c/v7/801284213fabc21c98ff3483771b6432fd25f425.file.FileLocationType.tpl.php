<?php /* Smarty version Smarty-3.1.7, created on 2021-03-16 05:34:43
         compiled from "/home/radifjev/bayan911.com/sbmademo/includes/runtime/../../layouts/v7/modules/Vtiger/uitypes/FileLocationType.tpl" */ ?>
<?php /*%%SmartyHeaderCode:7902173836050437398e7b3-09641223%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '801284213fabc21c98ff3483771b6432fd25f425' => 
    array (
      0 => '/home/radifjev/bayan911.com/sbmademo/includes/runtime/../../layouts/v7/modules/Vtiger/uitypes/FileLocationType.tpl',
      1 => 1602674194,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7902173836050437398e7b3-09641223',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'FIELD_MODEL' => 0,
    'FIELD_VALUES' => 0,
    'KEY' => 0,
    'TYPE' => 0,
    'MODULE' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_605043739959d',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_605043739959d')) {function content_605043739959d($_smarty_tpl) {?>
<?php $_smarty_tpl->tpl_vars['FIELD_VALUES'] = new Smarty_variable($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFileLocationType(), null, 0);?><select class="select2" name="<?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldName();?>
"><?php  $_smarty_tpl->tpl_vars['TYPE'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['TYPE']->_loop = false;
 $_smarty_tpl->tpl_vars['KEY'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['FIELD_VALUES']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['TYPE']->key => $_smarty_tpl->tpl_vars['TYPE']->value){
$_smarty_tpl->tpl_vars['TYPE']->_loop = true;
 $_smarty_tpl->tpl_vars['KEY']->value = $_smarty_tpl->tpl_vars['TYPE']->key;
?><option value="<?php echo $_smarty_tpl->tpl_vars['KEY']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('fieldvalue')==$_smarty_tpl->tpl_vars['KEY']->value){?> selected <?php }?>><?php echo vtranslate($_smarty_tpl->tpl_vars['TYPE']->value,$_smarty_tpl->tpl_vars['MODULE']->value);?>
</option><?php } ?></select><?php }} ?>