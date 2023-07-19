<?php /* Smarty version Smarty-3.1.7, created on 2021-11-08 11:54:39
         compiled from "C:\xampp7.4\htdocs\bayan911\includes\runtime/../../layouts/v7\modules\Vtiger\ShowAllComments.tpl" */ ?>
<?php /*%%SmartyHeaderCode:213373812160ee3ba4eef1b5-42981243%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cbf6827dc2285e9652aa89b076e30a6b67a0a05e' => 
    array (
      0 => 'C:\\xampp7.4\\htdocs\\bayan911\\includes\\runtime/../../layouts/v7\\modules\\Vtiger\\ShowAllComments.tpl',
      1 => 1636343678,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '213373812160ee3ba4eef1b5-42981243',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_60ee3ba5028d5',
  'variables' => 
  array (
    'COMMENTS_MODULE_MODEL' => 0,
    'IS_CREATABLE' => 0,
    'MODULE_NAME' => 0,
    'COMMENT_TEXTAREA_DEFAULT_ROWS' => 0,
    'FIELD_MODEL' => 0,
    'MODULE' => 0,
    'IS_EDITABLE' => 0,
    'PRIVATE_COMMENT_MODULES' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60ee3ba5028d5')) {function content_60ee3ba5028d5($_smarty_tpl) {?>
<form id="detailView" method="POST"><?php $_smarty_tpl->tpl_vars["COMMENT_TEXTAREA_DEFAULT_ROWS"] = new Smarty_variable("2", null, 0);?><?php $_smarty_tpl->tpl_vars["PRIVATE_COMMENT_MODULES"] = new Smarty_variable(Vtiger_Functions::getPrivateCommentModules(), null, 0);?><?php $_smarty_tpl->tpl_vars['IS_CREATABLE'] = new Smarty_variable($_smarty_tpl->tpl_vars['COMMENTS_MODULE_MODEL']->value->isPermitted('CreateView'), null, 0);?><?php $_smarty_tpl->tpl_vars['IS_EDITABLE'] = new Smarty_variable($_smarty_tpl->tpl_vars['COMMENTS_MODULE_MODEL']->value->isPermitted('EditView'), null, 0);?><div class="commentContainer commentsRelatedContainer container-fluid"><?php if ($_smarty_tpl->tpl_vars['IS_CREATABLE']->value){?><div class="commentTitle row"><div class="addCommentBlock"><div class="commentTextArea"><textarea name="commentcontent" class="commentcontent form-control"  placeholder="<?php echo vtranslate('LBL_POST_YOUR_COMMENT_HERE',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
" rows="<?php echo $_smarty_tpl->tpl_vars['COMMENT_TEXTAREA_DEFAULT_ROWS']->value;?>
"></textarea></div><div class="row"><div class="col-xs-4 pull-right"><div class="pull-right"><button class="btn btn-success btn-sm saveComment" type="button" data-mode="add"><strong><?php echo vtranslate('LBL_POST',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
</strong></button></div></div><?php if ($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getProfileReadWritePermission()){?><div class="col-xs-8 pull-left"><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getUITypeModel()->getTemplateName(),$_smarty_tpl->tpl_vars['MODULE_NAME']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('MODULE'=>"ModComments"), 0);?>
</div><?php }?></div></div></div><?php }?><div class="showcomments container-fluid row" style="margin-top:10px;"><div class="recentCommentsHeader row"><h4 class="display-inline-block col-lg-7 textOverflowEllipsis" title="<?php echo vtranslate('LBL_RECENT_COMMENTS',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
"><?php echo vtranslate('LBL_COMMENTS',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</h4><?php if ($_smarty_tpl->tpl_vars['MODULE_NAME']->value!='Leads'){?><div class="col-lg-5 commentHeader pull-right" style="margin-top:5px;text-align:right;padding-right:20px;"></div><?php }?></div><hr><div class="commentsList commentsBody marginBottom15"><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path('CommentsList.tpl'), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('COMMENT_MODULE_MODEL'=>$_smarty_tpl->tpl_vars['COMMENTS_MODULE_MODEL']->value,'IS_CREATABLE'=>$_smarty_tpl->tpl_vars['IS_CREATABLE']->value,'IS_EDITABLE'=>$_smarty_tpl->tpl_vars['IS_EDITABLE']->value), 0);?>
</div><div class="hide basicAddCommentBlock container-fluid"><div class="commentTextArea row"><textarea name="commentcontent" class="commentcontent" placeholder="<?php echo vtranslate('LBL_POST_YOUR_COMMENT_HERE',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
" rows="<?php echo $_smarty_tpl->tpl_vars['COMMENT_TEXTAREA_DEFAULT_ROWS']->value;?>
"></textarea></div><div class="pull-right row"><?php if (in_array($_smarty_tpl->tpl_vars['MODULE_NAME']->value,$_smarty_tpl->tpl_vars['PRIVATE_COMMENT_MODULES']->value)){?><input type="checkbox" id="is_private">&nbsp;&nbsp;<?php echo vtranslate('LBL_INTERNAL_COMMENT');?>
&nbsp;&nbsp;<?php }?><button class="btn btn-success btn-sm saveComment" type="button" data-mode="add"><strong><?php echo vtranslate('LBL_POST',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
</strong></button><a href="javascript:void(0);" class="cursorPointer closeCommentBlock cancelLink" type="reset"><?php echo vtranslate('LBL_CANCEL',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
</a></div></div><div class="hide basicEditCommentBlock container-fluid"><div class="row" style="padding-bottom: 10px;"><input style="width:100%;height:30px;" type="text" name="reasonToEdit" placeholder="<?php echo vtranslate('LBL_REASON_FOR_CHANGING_COMMENT',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
" class="input-block-level"/></div><div class="row"><div class="commentTextArea"><textarea name="commentcontent" class="commentcontenthidden"  placeholder="<?php echo vtranslate('LBL_ADD_YOUR_COMMENT_HERE',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
" rows="<?php echo $_smarty_tpl->tpl_vars['COMMENT_TEXTAREA_DEFAULT_ROWS']->value;?>
"></textarea></div></div><input type="hidden" name="is_private"><div class="pull-right row"><button class="btn btn-success btn-sm saveComment" type="button" data-mode="edit"><strong><?php echo vtranslate('LBL_POST',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
</strong></button><a href="javascript:void(0);" class="cursorPointer closeCommentBlock cancelLink" type="reset"><?php echo vtranslate('LBL_CANCEL',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
</a></div></div></div></div></form><?php }} ?>