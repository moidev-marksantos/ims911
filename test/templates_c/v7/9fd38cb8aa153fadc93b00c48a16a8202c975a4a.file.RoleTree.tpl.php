<?php /* Smarty version Smarty-3.1.7, created on 2021-02-15 02:04:48
         compiled from "C:\xampp\htdocs\bayan911demo\includes\runtime/../../layouts/v7\modules\Settings\Roles\RoleTree.tpl" */ ?>
<?php /*%%SmartyHeaderCode:303931576029d6c0d69551-84641721%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9fd38cb8aa153fadc93b00c48a16a8202c975a4a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\bayan911demo\\includes\\runtime/../../layouts/v7\\modules\\Settings\\Roles\\RoleTree.tpl',
      1 => 1607529438,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '303931576029d6c0d69551-84641721',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'ROLE' => 0,
    'CHILD_ROLE' => 0,
    'SOURCE_ROLE' => 0,
    'SOURCE_ROLE_SUBPATTERN' => 0,
    'QUALIFIED_MODULE' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_6029d6c0e1fb5',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6029d6c0e1fb5')) {function content_6029d6c0e1fb5($_smarty_tpl) {?>
<ul><?php  $_smarty_tpl->tpl_vars['CHILD_ROLE'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['CHILD_ROLE']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['ROLE']->value->getChildren(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['CHILD_ROLE']->key => $_smarty_tpl->tpl_vars['CHILD_ROLE']->value){
$_smarty_tpl->tpl_vars['CHILD_ROLE']->_loop = true;
?><li data-role="<?php echo $_smarty_tpl->tpl_vars['CHILD_ROLE']->value->getParentRoleString();?>
" data-roleid="<?php echo $_smarty_tpl->tpl_vars['CHILD_ROLE']->value->getId();?>
"><div class="toolbar-handle"><?php if ($_REQUEST['type']=='Transfer'){?><?php $_smarty_tpl->tpl_vars["SOURCE_ROLE_SUBPATTERN"] = new Smarty_variable(('::').($_smarty_tpl->tpl_vars['SOURCE_ROLE']->value->getId()), null, 0);?><?php if (strpos($_smarty_tpl->tpl_vars['CHILD_ROLE']->value->getParentRoleString(),$_smarty_tpl->tpl_vars['SOURCE_ROLE_SUBPATTERN']->value)!==false){?><a style="white-space: nowrap" data-url="<?php echo $_smarty_tpl->tpl_vars['CHILD_ROLE']->value->getEditViewUrl();?>
" class="btn btn-default" disabled data-toggle="tooltip" data-placement="top" ><span class="muted"><?php echo $_smarty_tpl->tpl_vars['CHILD_ROLE']->value->getName();?>
</span></a><?php }else{ ?><a style="white-space: nowrap" href="" data-url="<?php echo $_smarty_tpl->tpl_vars['CHILD_ROLE']->value->getEditViewUrl();?>
" class="btn btn-default roleEle" data-toggle="tooltip" data-placement="top" ><?php echo $_smarty_tpl->tpl_vars['CHILD_ROLE']->value->getName();?>
</a><?php }?><?php }else{ ?><a style="white-space: nowrap" href="<?php echo $_smarty_tpl->tpl_vars['CHILD_ROLE']->value->getEditViewUrl();?>
" data-url="<?php echo $_smarty_tpl->tpl_vars['CHILD_ROLE']->value->getEditViewUrl();?>
" class="btn btn-default draggable droppable" data-toggle="tooltip" data-placement="top" data-animation="true" title="<?php echo vtranslate('LBL_CLICK_TO_EDIT_OR_DRAG_TO_MOVE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
"><?php echo $_smarty_tpl->tpl_vars['CHILD_ROLE']->value->getName();?>
</a><?php }?><?php if ($_REQUEST['view']!='Popup'){?><div class="toolbar">&nbsp;<a href="<?php echo $_smarty_tpl->tpl_vars['CHILD_ROLE']->value->getCreateChildUrl();?>
" data-url="<?php echo $_smarty_tpl->tpl_vars['CHILD_ROLE']->value->getCreateChildUrl();?>
" title="<?php echo vtranslate('LBL_ADD_RECORD',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
"><span class="ti-plus-circle"></span></a>&nbsp;<a data-id="<?php echo $_smarty_tpl->tpl_vars['CHILD_ROLE']->value->getId();?>
" href="javascript:;" data-url="<?php echo $_smarty_tpl->tpl_vars['CHILD_ROLE']->value->getDeleteActionUrl();?>
" data-action="modal" title="<?php echo vtranslate('LBL_DELETE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
"><span class="fa fa-trash"></span></a></div><?php }?></div><?php $_smarty_tpl->tpl_vars["ROLE"] = new Smarty_variable($_smarty_tpl->tpl_vars['CHILD_ROLE']->value, null, 0);?><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path("RoleTree.tpl","Settings:Roles"), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
</li><?php } ?></ul><?php }} ?>