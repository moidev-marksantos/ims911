<?php /* Smarty version Smarty-3.1.7, created on 2021-02-10 03:10:06
         compiled from "C:\xampp\htdocs\bayan911demo\includes\runtime/../../layouts/v7\modules\Vtiger\uitypes\FileLocationType.tpl" */ ?>
<?php /*%%SmartyHeaderCode:174719065760234e8e360241-49609570%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1e1e4857a3e8973e9235809a33b6be6f73768e81' => 
    array (
      0 => 'C:\\xampp\\htdocs\\bayan911demo\\includes\\runtime/../../layouts/v7\\modules\\Vtiger\\uitypes\\FileLocationType.tpl',
      1 => 1602630994,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '174719065760234e8e360241-49609570',
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
  'unifunc' => 'content_60234e8e37fc7',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60234e8e37fc7')) {function content_60234e8e37fc7($_smarty_tpl) {?>
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