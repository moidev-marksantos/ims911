<?php /* Smarty version Smarty-3.1.7, created on 2021-02-10 03:16:02
         compiled from "C:\xampp\htdocs\bayan911demo\includes\runtime/../../layouts/v7\modules\Vtiger\uitypes\FilelocationtypeFieldSearchView.tpl" */ ?>
<?php /*%%SmartyHeaderCode:62801904660234ff2380783-55178038%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a837248ae512594f4d693dbfb45b941f47e552fe' => 
    array (
      0 => 'C:\\xampp\\htdocs\\bayan911demo\\includes\\runtime/../../layouts/v7\\modules\\Vtiger\\uitypes\\FilelocationtypeFieldSearchView.tpl',
      1 => 1602630994,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '62801904660234ff2380783-55178038',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'FIELD_MODEL' => 0,
    'SEARCH_INFO' => 0,
    'FIELD_INFO' => 0,
    'PICKLIST_VALUES' => 0,
    'PICKLIST_KEY' => 0,
    'SEARCH_VALUES' => 0,
    'PICKLIST_LABEL' => 0,
    'MODULE' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_60234ff23896d',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60234ff23896d')) {function content_60234ff23896d($_smarty_tpl) {?>
<?php $_smarty_tpl->tpl_vars["FIELD_INFO"] = new Smarty_variable(Zend_Json::encode($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldInfo()), null, 0);?><?php $_smarty_tpl->tpl_vars['PICKLIST_VALUES'] = new Smarty_variable($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFileLocationType(), null, 0);?><?php $_smarty_tpl->tpl_vars['SEARCH_VALUES'] = new Smarty_variable(explode(',',$_smarty_tpl->tpl_vars['SEARCH_INFO']->value['searchValue']), null, 0);?><div class="select2_search_div"><input type="text" class="listSearchContributor inputElement select2_input_element"/><select class="select2 listSearchContributor" name="<?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('name');?>
" multiple data-fieldinfo='<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['FIELD_INFO']->value, ENT_QUOTES, 'UTF-8', true);?>
' style="display:none"><?php  $_smarty_tpl->tpl_vars['PICKLIST_LABEL'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['PICKLIST_LABEL']->_loop = false;
 $_smarty_tpl->tpl_vars['PICKLIST_KEY'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['PICKLIST_VALUES']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['PICKLIST_LABEL']->key => $_smarty_tpl->tpl_vars['PICKLIST_LABEL']->value){
$_smarty_tpl->tpl_vars['PICKLIST_LABEL']->_loop = true;
 $_smarty_tpl->tpl_vars['PICKLIST_KEY']->value = $_smarty_tpl->tpl_vars['PICKLIST_LABEL']->key;
?><option value="<?php echo $_smarty_tpl->tpl_vars['PICKLIST_KEY']->value;?>
" <?php if (in_array($_smarty_tpl->tpl_vars['PICKLIST_KEY']->value,$_smarty_tpl->tpl_vars['SEARCH_VALUES']->value)&&($_smarty_tpl->tpl_vars['PICKLIST_KEY']->value!='')){?> selected<?php }?>><?php echo vtranslate($_smarty_tpl->tpl_vars['PICKLIST_LABEL']->value,$_smarty_tpl->tpl_vars['MODULE']->value);?>
</option><?php } ?></select></div><?php }} ?>