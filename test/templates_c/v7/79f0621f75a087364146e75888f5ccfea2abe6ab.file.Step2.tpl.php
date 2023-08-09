<?php /* Smarty version Smarty-3.1.7, created on 2022-07-07 10:46:54
         compiled from "/opt/lampp/htdocs/bayan911/includes/runtime/../../layouts/v7/modules/Settings/MailConverter/Step2.tpl" */ ?>
<?php /*%%SmartyHeaderCode:139748198962c6491ea487b3-24356702%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '79f0621f75a087364146e75888f5ccfea2abe6ab' => 
    array (
      0 => '/opt/lampp/htdocs/bayan911/includes/runtime/../../layouts/v7/modules/Settings/MailConverter/Step2.tpl',
      1 => 1637898757,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '139748198962c6491ea487b3-24356702',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'IMAP_ERROR' => 0,
    'CONNECTION_ERROR' => 0,
    'QUALIFIED_MODULE' => 0,
    'FOLDERS' => 0,
    'FOLDER' => 0,
    'SELECTED' => 0,
    'CREATE' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_62c6491ea6043',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_62c6491ea6043')) {function content_62c6491ea6043($_smarty_tpl) {?>

<?php if ($_smarty_tpl->tpl_vars['IMAP_ERROR']->value||$_smarty_tpl->tpl_vars['CONNECTION_ERROR']->value){?><div class="block"><strong><?php if ($_smarty_tpl->tpl_vars['IMAP_ERROR']->value){?><?php echo $_smarty_tpl->tpl_vars['IMAP_ERROR']->value;?>
<?php }elseif($_smarty_tpl->tpl_vars['CONNECTION_ERROR']->value){?><?php echo vtranslate('LBL_CONNECTION_ERROR',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
<?php }?></strong></div><br><?php }?><div class="addMailBoxBlock"><div class="row col-lg-12 padding-bottom1per"><div id="mailConverterDragIcon"><i class="icon-info-sign"></i>&nbsp;&nbsp;<?php echo vtranslate('TO_CHANGE_THE_FOLDER_SELECTION_DESELECT_ANY_OF_THE_SELECTED_FOLDERS',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</div></div><br><br><form class="form-horizontal" id="mailBoxEditView" name="step2"><div class="block"><div class="addMailBoxStep row" style="margin-top: 10px; margin-bottom: 10px;"><?php  $_smarty_tpl->tpl_vars['SELECTED'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['SELECTED']->_loop = false;
 $_smarty_tpl->tpl_vars['FOLDER'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['FOLDERS']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['SELECTED']->key => $_smarty_tpl->tpl_vars['SELECTED']->value){
$_smarty_tpl->tpl_vars['SELECTED']->_loop = true;
 $_smarty_tpl->tpl_vars['FOLDER']->value = $_smarty_tpl->tpl_vars['SELECTED']->key;
?><div class="col-lg-3"><label><input type="checkbox" name="folders" value="<?php echo $_smarty_tpl->tpl_vars['FOLDER']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['SELECTED']->value=='checked'){?>checked<?php }?>><span>&nbsp;&nbsp;<?php echo $_smarty_tpl->tpl_vars['FOLDER']->value;?>
</span></label></div><?php } ?></div><div class="border1px modal-overlay-footer clearfix"><div class="row clearfix"><div class="textAlignCenter col-lg-12 col-md-12 col-lg-12 "><button class="btn btn-danger backStep" type="button" onclick="javascript:window.history.back();"><strong><?php echo vtranslate('LBL_BACK',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</strong></button>&nbsp;&nbsp;<button class="btn btn-success" onclick="javascript:Settings_MailConverter_Edit_Js.secondStep()"><strong><?php if ($_smarty_tpl->tpl_vars['CREATE']->value=='new'){?><?php echo vtranslate('LBL_NEXT',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
<?php }else{ ?><?php echo vtranslate('LBL_FINISH',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
<?php }?></strong></button><a class="cancelLink" type="reset" onclick="javascript:window.history.go(-2);"><?php echo vtranslate('LBL_CANCEL',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</a></div></div></div></div></form></div></div></div><?php }} ?>