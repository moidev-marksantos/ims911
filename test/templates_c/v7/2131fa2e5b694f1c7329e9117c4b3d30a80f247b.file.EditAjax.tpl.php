<?php /* Smarty version Smarty-3.1.7, created on 2021-01-25 07:48:03
         compiled from "C:\xampp\htdocs\nuevaviscaya\includes\runtime/../../layouts/v7\modules\Settings\Tags\EditAjax.tpl" */ ?>
<?php /*%%SmartyHeaderCode:787282160600e77b3be14b0-14801540%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2131fa2e5b694f1c7329e9117c4b3d30a80f247b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\nuevaviscaya\\includes\\runtime/../../layouts/v7\\modules\\Settings\\Tags\\EditAjax.tpl',
      1 => 1602587794,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '787282160600e77b3be14b0-14801540',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'QUALIFIED_MODULE' => 0,
    'MODULE' => 0,
    'HEADER_TITLE' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_600e77b3c113d',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_600e77b3c113d')) {function content_600e77b3c113d($_smarty_tpl) {?>
<div class="modal-dialog modal-content"><?php ob_start();?><?php echo vtranslate('LBL_ADD_NEW_TAG',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
<?php $_tmp1=ob_get_clean();?><?php $_smarty_tpl->tpl_vars["HEADER_TITLE"] = new Smarty_variable($_tmp1, null, 0);?><form id="addTagSettings" method="POST"><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path("ModalHeader.tpl",$_smarty_tpl->tpl_vars['MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('TITLE'=>$_smarty_tpl->tpl_vars['HEADER_TITLE']->value), 0);?>
<div class="modal-body"><div class="row-fluid"><div class="form-group"><label class="control-label"><?php echo vtranslate('LBL_CREATE_NEW_TAG',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</label><div><input name="createNewTag" value="" data-rule-required = "true" class="form-control" placeholder="<?php echo vtranslate('LBL_CREATE_NEW_TAG',$_smarty_tpl->tpl_vars['MODULE']->value);?>
"/></div></div><div class="form-group"><div><div class="checkbox"><label><input type="hidden" name="visibility" value="<?php echo Vtiger_Tag_Model::PRIVATE_TYPE;?>
"/><input type="checkbox" name="visibility" value="<?php echo Vtiger_Tag_Model::PUBLIC_TYPE;?>
" />&nbsp; <?php echo vtranslate('LBL_SHARE_TAGS',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</label></div><div class="pull-right"></div></div></div><div class="form-group"><div class=" vt-default-callout vt-info-callout tagInfoblock"><h5 class="vt-callout-header"><span class="fa fa-info-circle"></span>&nbsp; Info </h5><div><?php echo vtranslate('LBL_TAG_SEPARATOR_DESC',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</div><br><div><?php echo vtranslate('LBL_SHARED_TAGS_ACCESS',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</div></div></div></div></div><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path('ModalFooter.tpl','Vtiger'), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
</form></div>
<?php }} ?>