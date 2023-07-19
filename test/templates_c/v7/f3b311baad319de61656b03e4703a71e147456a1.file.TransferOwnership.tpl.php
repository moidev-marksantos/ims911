<?php /* Smarty version Smarty-3.1.7, created on 2021-05-31 05:59:33
         compiled from "C:\xampp7.4\htdocs\sbma\includes\runtime/../../layouts/v7\modules\Users\TransferOwnership.tpl" */ ?>
<?php /*%%SmartyHeaderCode:119191966860b47b45ee3785-51843461%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f3b311baad319de61656b03e4703a71e147456a1' => 
    array (
      0 => 'C:\\xampp7.4\\htdocs\\sbma\\includes\\runtime/../../layouts/v7\\modules\\Users\\TransferOwnership.tpl',
      1 => 1602674194,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '119191966860b47b45ee3785-51843461',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'MODULE' => 0,
    'HEADER_TITLE' => 0,
    'USERS_MODEL' => 0,
    'USER_ID' => 0,
    'USER_MODEL' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_60b47b45f3e4c',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60b47b45f3e4c')) {function content_60b47b45f3e4c($_smarty_tpl) {?>



<div class="modal-dialog modelContainer"'><?php ob_start();?><?php echo vtranslate('LBL_TRANSFER_OWNERSHIP',$_smarty_tpl->tpl_vars['MODULE']->value);?>
<?php $_tmp1=ob_get_clean();?><?php $_smarty_tpl->tpl_vars['HEADER_TITLE'] = new Smarty_variable($_tmp1, null, 0);?><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path("ModalHeader.tpl",$_smarty_tpl->tpl_vars['MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('TITLE'=>$_smarty_tpl->tpl_vars['HEADER_TITLE']->value), 0);?>
<div class="modal-content"><form class="form-horizontal" id="transferOwner" method="post"><input type="hidden" name="module" value="<?php echo $_smarty_tpl->tpl_vars['MODULE']->value;?>
"><input type="hidden" name="action" value="SaveAjax"><input type="hidden" name="mode" value="transferOwner"><div name='massEditContent'><div class="modal-body"><div class="form-group"><label class="control-label fieldLabel col-sm-5"><?php echo vtranslate('LBL_TRANSFER_OWNERSHIP_TO_USER',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</label><div class="controls fieldValue col-xs-6"><select class="select2" name="record" style="width: 50%;"><?php  $_smarty_tpl->tpl_vars['USER_MODEL'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['USER_MODEL']->_loop = false;
 $_smarty_tpl->tpl_vars['USER_ID'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['USERS_MODEL']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['USER_MODEL']->key => $_smarty_tpl->tpl_vars['USER_MODEL']->value){
$_smarty_tpl->tpl_vars['USER_MODEL']->_loop = true;
 $_smarty_tpl->tpl_vars['USER_ID']->value = $_smarty_tpl->tpl_vars['USER_MODEL']->key;
?><option value="<?php echo $_smarty_tpl->tpl_vars['USER_ID']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['USER_MODEL']->value->getDisplayName();?>
</option><?php } ?></select></div></div></div></div><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path('ModalFooter.tpl',$_smarty_tpl->tpl_vars['MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
</form></div></div>

<?php }} ?>