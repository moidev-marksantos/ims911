<?php /* Smarty version Smarty-3.1.7, created on 2022-03-08 14:21:00
         compiled from "/opt/lampp/htdocs/bayan911/includes/runtime/../../layouts/v7/modules/Vtiger/uitypes/Boolean.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2124299862619dfb6859e370-08073317%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3322fc913f3c6e7c9f9d9a94ef39697c7622a22c' => 
    array (
      0 => '/opt/lampp/htdocs/bayan911/includes/runtime/../../layouts/v7/modules/Vtiger/uitypes/Boolean.tpl',
      1 => 1637898757,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2124299862619dfb6859e370-08073317',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_619dfb685a5a5',
  'variables' => 
  array (
    'FIELD_MODEL' => 0,
    'FIELD_NAME' => 0,
    'MODULE' => 0,
    'SPECIAL_VALIDATOR' => 0,
    'FIELD_INFO' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_619dfb685a5a5')) {function content_619dfb685a5a5($_smarty_tpl) {?>
<?php $_smarty_tpl->tpl_vars["FIELD_INFO"] = new Smarty_variable($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldInfo(), null, 0);?><?php $_smarty_tpl->tpl_vars["SPECIAL_VALIDATOR"] = new Smarty_variable($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getValidator(), null, 0);?><?php $_smarty_tpl->tpl_vars["FIELD_NAME"] = new Smarty_variable($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('name'), null, 0);?><?php if ((!$_smarty_tpl->tpl_vars['FIELD_NAME']->value)){?><?php $_smarty_tpl->tpl_vars["FIELD_NAME"] = new Smarty_variable($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldName(), null, 0);?><?php }?><input type="hidden" name="<?php echo $_smarty_tpl->tpl_vars['FIELD_NAME']->value;?>
" value=0 /><input id="<?php echo $_smarty_tpl->tpl_vars['MODULE']->value;?>
_editView_fieldName_<?php echo $_smarty_tpl->tpl_vars['FIELD_NAME']->value;?>
" class="inputElement" style="width:15px;height:15px;" data-fieldname="<?php echo $_smarty_tpl->tpl_vars['FIELD_NAME']->value;?>
" data-fieldtype="checkbox" type="checkbox" name="<?php echo $_smarty_tpl->tpl_vars['FIELD_NAME']->value;?>
"<?php if ($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('fieldvalue')==true){?> checked <?php }?> <?php if (!empty($_smarty_tpl->tpl_vars['SPECIAL_VALIDATOR']->value)){?>data-validator="<?php echo Zend_Json::encode($_smarty_tpl->tpl_vars['SPECIAL_VALIDATOR']->value);?>
"<?php }?><?php if ($_smarty_tpl->tpl_vars['FIELD_INFO']->value["mandatory"]==true){?> data-rule-required = "true" <?php }?><?php if (count($_smarty_tpl->tpl_vars['FIELD_INFO']->value['validator'])){?>data-specific-rules='<?php echo ZEND_JSON::encode($_smarty_tpl->tpl_vars['FIELD_INFO']->value["validator"]);?>
'<?php }?>/>
<?php }} ?>