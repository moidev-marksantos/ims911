<?php /* Smarty version Smarty-3.1.7, created on 2022-09-13 16:46:19
         compiled from "/opt/lampp/htdocs/bayan911/includes/runtime/../../layouts/v7/modules/Reports/MoveReports.tpl" */ ?>
<?php /*%%SmartyHeaderCode:4248154496320435bc69a97-61886477%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ae69cb020c045370af1c20fac12d08e5b5b48c42' => 
    array (
      0 => '/opt/lampp/htdocs/bayan911/includes/runtime/../../layouts/v7/modules/Reports/MoveReports.tpl',
      1 => 1637898757,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4248154496320435bc69a97-61886477',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'MODULE' => 0,
    'SELECTED_IDS' => 0,
    'EXCLUDED_IDS' => 0,
    'VIEWNAME' => 0,
    'SEARCH_PARAMS' => 0,
    'FOLDERS' => 0,
    'FOLDER' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_6320435bc9c92',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6320435bc9c92')) {function content_6320435bc9c92($_smarty_tpl) {?>
<div id="moveReportsContainer" class='modal-dialog'><div class="modal-header"><button data-dismiss="modal" class="close" title="<?php echo vtranslate('LBL_CLOSE');?>
">x</button><h4><?php echo vtranslate('LBL_MOVE_REPORT',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</h4></div><div class="modal-content"><form class="form-horizontal contentsBackground" id="moveReports" method="post" action="index.php"><input type="hidden" name="module" value="<?php echo $_smarty_tpl->tpl_vars['MODULE']->value;?>
" /><input type="hidden" name="action" value="MoveReports" /><input type="hidden" name="selected_ids" value=<?php echo ZEND_JSON::encode($_smarty_tpl->tpl_vars['SELECTED_IDS']->value);?>
 /><input type="hidden" name="excluded_ids" value=<?php echo ZEND_JSON::encode($_smarty_tpl->tpl_vars['EXCLUDED_IDS']->value);?>
 /><input type="hidden" name="viewname" value="<?php echo $_smarty_tpl->tpl_vars['VIEWNAME']->value;?>
" /><input type="hidden" name="search_params" value='<?php echo Vtiger_Util_Helper::toSafeHTML(ZEND_JSON::encode($_smarty_tpl->tpl_vars['SEARCH_PARAMS']->value));?>
' /><div class="modal-body"><div class="form-group"><label for="inputEmail3" class="col-sm-4 control-label"><?php echo vtranslate('LBL_FOLDERS_LIST',$_smarty_tpl->tpl_vars['MODULE']->value);?>
<span class="redColor">*</span></label><div><select class="select2 col-sm-6 " name="folderid"><optgroup label="<?php echo vtranslate('LBL_FOLDERS',$_smarty_tpl->tpl_vars['MODULE']->value);?>
"><?php  $_smarty_tpl->tpl_vars['FOLDER'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['FOLDER']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['FOLDERS']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['FOLDER']->key => $_smarty_tpl->tpl_vars['FOLDER']->value){
$_smarty_tpl->tpl_vars['FOLDER']->_loop = true;
?><option value="<?php echo $_smarty_tpl->tpl_vars['FOLDER']->value->getId();?>
"><?php echo vtranslate($_smarty_tpl->tpl_vars['FOLDER']->value->getName(),$_smarty_tpl->tpl_vars['MODULE']->value);?>
</option><?php } ?></optgroup></select></div></div></div><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path('ModalFooter.tpl',$_smarty_tpl->tpl_vars['MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
</form></div></div>
<?php }} ?>