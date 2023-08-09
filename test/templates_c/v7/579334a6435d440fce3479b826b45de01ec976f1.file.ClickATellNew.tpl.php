<?php /* Smarty version Smarty-3.1.7, created on 2020-12-10 08:03:09
         compiled from "C:\xampp\htdocs\nuevaviscaya\includes\runtime/../../layouts/v7\modules\Settings\SMSNotifier\ClickATellNew.tpl" */ ?>
<?php /*%%SmartyHeaderCode:7033332485fd1d63da6ce20-96746021%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '579334a6435d440fce3479b826b45de01ec976f1' => 
    array (
      0 => 'C:\\xampp\\htdocs\\nuevaviscaya\\includes\\runtime/../../layouts/v7\\modules\\Settings\\SMSNotifier\\ClickATellNew.tpl',
      1 => 1607474632,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7033332485fd1d63da6ce20-96746021',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'PROVIDER_MODEL' => 0,
    'FIELD_MODEL' => 0,
    'FIELD_NAME' => 0,
    'QUALIFIED_MODULE_NAME' => 0,
    'RECORD_MODEL' => 0,
    'FIELD_VALUE' => 0,
    'FIELD_TYPE' => 0,
    'PICKLIST_VALUES' => 0,
    'PICKLIST_KEY' => 0,
    'PICKLIST_VALUE' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5fd1d63dab117',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5fd1d63dab117')) {function content_5fd1d63dab117($_smarty_tpl) {?>
<?php  $_smarty_tpl->tpl_vars['FIELD_MODEL'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['FIELD_MODEL']->_loop = false;
 $_smarty_tpl->tpl_vars['FIELD_NAME'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['PROVIDER_MODEL']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['FIELD_MODEL']->key => $_smarty_tpl->tpl_vars['FIELD_MODEL']->value){
$_smarty_tpl->tpl_vars['FIELD_MODEL']->_loop = true;
 $_smarty_tpl->tpl_vars['FIELD_NAME']->value = $_smarty_tpl->tpl_vars['FIELD_MODEL']->key;
?><div class="col-lg-12"><div class="form-group"><?php $_smarty_tpl->tpl_vars['FIELD_NAME'] = new Smarty_variable($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('name'), null, 0);?><div class = "col-lg-4"><label for="<?php echo $_smarty_tpl->tpl_vars['FIELD_NAME']->value;?>
"><?php echo vtranslate($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('label'),$_smarty_tpl->tpl_vars['QUALIFIED_MODULE_NAME']->value);?>
</label></div><div class = "col-lg-6"><?php $_smarty_tpl->tpl_vars['FIELD_TYPE'] = new Smarty_variable($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldDataType(), null, 0);?><?php $_smarty_tpl->tpl_vars['FIELD_VALUE'] = new Smarty_variable($_smarty_tpl->tpl_vars['RECORD_MODEL']->value->get($_smarty_tpl->tpl_vars['FIELD_NAME']->value), null, 0);?><?php if ($_smarty_tpl->tpl_vars['FIELD_NAME']->value=='username'||$_smarty_tpl->tpl_vars['FIELD_NAME']->value=='password'){?> continue;<?php }?><?php if (empty($_smarty_tpl->tpl_vars['FIELD_VALUE']->value)&&$_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('value')){?><?php $_smarty_tpl->tpl_vars['FIELD_VALUE'] = new Smarty_variable($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('value'), null, 0);?><?php }?><?php if ($_smarty_tpl->tpl_vars['FIELD_TYPE']->value=='picklist'){?><select class="select2 form-control" id="<?php echo $_smarty_tpl->tpl_vars['FIELD_NAME']->value;?>
" name="<?php echo $_smarty_tpl->tpl_vars['FIELD_NAME']->value;?>
" placeholder="<?php echo vtranslate('LBL_SELECT_ONE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE_NAME']->value);?>
"><option></option><?php $_smarty_tpl->tpl_vars['PICKLIST_VALUES'] = new Smarty_variable($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('picklistvalues'), null, 0);?><?php  $_smarty_tpl->tpl_vars['PICKLIST_VALUE'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['PICKLIST_VALUE']->_loop = false;
 $_smarty_tpl->tpl_vars['PICKLIST_KEY'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['PICKLIST_VALUES']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['PICKLIST_VALUE']->key => $_smarty_tpl->tpl_vars['PICKLIST_VALUE']->value){
$_smarty_tpl->tpl_vars['PICKLIST_VALUE']->_loop = true;
 $_smarty_tpl->tpl_vars['PICKLIST_KEY']->value = $_smarty_tpl->tpl_vars['PICKLIST_VALUE']->key;
?><option value="<?php echo $_smarty_tpl->tpl_vars['PICKLIST_KEY']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['FIELD_VALUE']->value==$_smarty_tpl->tpl_vars['PICKLIST_KEY']->value){?> selected <?php }?>><?php echo vtranslate($_smarty_tpl->tpl_vars['PICKLIST_VALUE']->value,$_smarty_tpl->tpl_vars['QUALIFIED_MODULE_NAME']->value);?>
</option><?php } ?></select><?php }elseif($_smarty_tpl->tpl_vars['FIELD_TYPE']->value=='radio'){?><input type="radio" name="<?php echo $_smarty_tpl->tpl_vars['FIELD_NAME']->value;?>
" value='1' id="<?php echo $_smarty_tpl->tpl_vars['FIELD_NAME']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['FIELD_VALUE']->value){?> checked="checked" <?php }?> />&nbsp;<?php echo vtranslate('LBL_YES',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE_NAME']->value);?>
&nbsp;&nbsp;&nbsp;<input type="radio" name="<?php echo $_smarty_tpl->tpl_vars['FIELD_NAME']->value;?>
" value='0' id="<?php echo $_smarty_tpl->tpl_vars['FIELD_NAME']->value;?>
" <?php if (!$_smarty_tpl->tpl_vars['FIELD_VALUE']->value){?> checked="checked" <?php }?>/>&nbsp;<?php echo vtranslate('LBL_NO',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE_NAME']->value);?>
<?php }elseif($_smarty_tpl->tpl_vars['FIELD_TYPE']->value=='password'){?><input type="password" id="<?php echo $_smarty_tpl->tpl_vars['FIELD_NAME']->value;?>
" class="form-control" data-rule-required="true" name="<?php echo $_smarty_tpl->tpl_vars['FIELD_NAME']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['FIELD_VALUE']->value;?>
" /><?php }elseif($_smarty_tpl->tpl_vars['FIELD_TYPE']->value=='url'){?><div class="input-group pull-left col-lg-11 col-sm-11 col-xs-11"><input type="text" id="<?php echo $_smarty_tpl->tpl_vars['FIELD_NAME']->value;?>
" class="form-control" data-rule-required="true" readonly="readonly" name="<?php echo $_smarty_tpl->tpl_vars['FIELD_NAME']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['FIELD_VALUE']->value;?>
" /><span class="input-group-addon cursorPointer"><i class="fa fa-clipboard copyToClipboard"></i></span></div><?php if ($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('helpText')){?>&nbsp;<i class="fa fa-info-circle" data-toggle="tooltip" title="<?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('helpText');?>
" style="margin-top: 8px;"></i><?php }?><?php }else{ ?><input type="text" name="<?php echo $_smarty_tpl->tpl_vars['FIELD_NAME']->value;?>
" id="<?php echo $_smarty_tpl->tpl_vars['FIELD_NAME']->value;?>
" class="form-control" <?php if ($_smarty_tpl->tpl_vars['FIELD_NAME']->value=='username'){?> <?php }?> value="<?php echo $_smarty_tpl->tpl_vars['FIELD_VALUE']->value;?>
" /><?php }?></div></div></div><?php } ?>
<?php }} ?>