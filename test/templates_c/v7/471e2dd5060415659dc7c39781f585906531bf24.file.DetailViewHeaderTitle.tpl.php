<?php /* Smarty version Smarty-3.1.7, created on 2020-12-09 06:25:40
         compiled from "C:\xampp\htdocs\nuevaviscaya\includes\runtime/../../layouts/v7\modules\HelpDesk\DetailViewHeaderTitle.tpl" */ ?>
<?php /*%%SmartyHeaderCode:10711510335fd03939e64762-48695011%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '471e2dd5060415659dc7c39781f585906531bf24' => 
    array (
      0 => 'C:\\xampp\\htdocs\\nuevaviscaya\\includes\\runtime/../../layouts/v7\\modules\\HelpDesk\\DetailViewHeaderTitle.tpl',
      1 => 1607495135,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10711510335fd03939e64762-48695011',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5fd03939e72a1',
  'variables' => 
  array (
    'RECORD' => 0,
    'MODULE_MODEL' => 0,
    'NAME_FIELD' => 0,
    'FIELD_MODEL' => 0,
    'MODULE' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5fd03939e72a1')) {function content_5fd03939e72a1($_smarty_tpl) {?>
<div class="col-sm-6 col-lg-6 col-md-6"><div class="record-header clearfix"><div style="padding-left: 2px;" class="recordBasicInfo"><div class="info-row"><h4 style="height: 35px;"><span class="recordLabel pushDown" title="<?php echo $_smarty_tpl->tpl_vars['RECORD']->value->getName();?>
"><?php  $_smarty_tpl->tpl_vars['NAME_FIELD'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['NAME_FIELD']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['MODULE_MODEL']->value->getNameFields(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['NAME_FIELD']->key => $_smarty_tpl->tpl_vars['NAME_FIELD']->value){
$_smarty_tpl->tpl_vars['NAME_FIELD']->_loop = true;
?><?php $_smarty_tpl->tpl_vars['FIELD_MODEL'] = new Smarty_variable($_smarty_tpl->tpl_vars['MODULE_MODEL']->value->getField($_smarty_tpl->tpl_vars['NAME_FIELD']->value), null, 0);?><?php if ($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getPermissions()){?><button class="btn btn-success" onclick="copyTextFunction('#ticket_title')" title="Copy Title"><i class="fa fa-copy"></i> Copy</button>&nbsp;&nbsp;<span id="ticket_title" class="<?php echo $_smarty_tpl->tpl_vars['NAME_FIELD']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['RECORD']->value->get($_smarty_tpl->tpl_vars['NAME_FIELD']->value);?>
</span>&nbsp;
                                        <script>
                                            function copyTextFunction(element) {
                                                var $temp = $("<input>");
                                                $("body").append($temp);
                                                $temp.val($(element).text()).select();
                                                document.execCommand("copy");
                                                $temp.remove();
                                            }
                                        </script>
                                    <?php }?><?php } ?></span></h4></div><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path("DetailViewHeaderFieldsView.tpl",$_smarty_tpl->tpl_vars['MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
</div></div></div><?php }} ?>