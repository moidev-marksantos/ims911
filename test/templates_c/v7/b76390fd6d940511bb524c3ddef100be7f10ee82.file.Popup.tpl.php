<?php /* Smarty version Smarty-3.1.7, created on 2022-09-08 08:56:55
         compiled from "/opt/lampp/htdocs/bayan911/includes/runtime/../../layouts/v7/modules/Settings/Roles/Popup.tpl" */ ?>
<?php /*%%SmartyHeaderCode:189984215863193dd7d17286-54588617%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b76390fd6d940511bb524c3ddef100be7f10ee82' => 
    array (
      0 => '/opt/lampp/htdocs/bayan911/includes/runtime/../../layouts/v7/modules/Settings/Roles/Popup.tpl',
      1 => 1637898757,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '189984215863193dd7d17286-54588617',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'MODULE' => 0,
    'ROOT_ROLE' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_63193dd7d2b76',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_63193dd7d2b76')) {function content_63193dd7d2b76($_smarty_tpl) {?>



<div class="modal-dialog modal-lg"><div class="modal-content"><?php ob_start();?><?php echo vtranslate('LBL_ASSIGN_ROLE',"Settings:Roles");?>
<?php $_tmp1=ob_get_clean();?><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path("ModalHeader.tpl",$_smarty_tpl->tpl_vars['MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('TITLE'=>$_tmp1), 0);?>
<div class="modal-body"><div id="popupPageContainer" class="contentsDiv padding30px"><div class="clearfix treeView"><ul><li data-role="<?php echo $_smarty_tpl->tpl_vars['ROOT_ROLE']->value->getParentRoleString();?>
" data-roleid="<?php echo $_smarty_tpl->tpl_vars['ROOT_ROLE']->value->getId();?>
"><div class="toolbar-handle"><a href="javascript:;" class="btn btn-primary"><?php echo $_smarty_tpl->tpl_vars['ROOT_ROLE']->value->getName();?>
</a></div><?php $_smarty_tpl->tpl_vars["ROLE"] = new Smarty_variable($_smarty_tpl->tpl_vars['ROOT_ROLE']->value, null, 0);?><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path("RoleTree.tpl","Settings:Roles"), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
</li></ul></div></div></div></div></div>
<?php }} ?>