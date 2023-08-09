<?php /* Smarty version Smarty-3.1.7, created on 2022-07-01 14:27:59
         compiled from "/opt/lampp/htdocs/bayan911/includes/runtime/../../layouts/v7/modules/Users/ChangeUsername.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2029846724619dfb7fec3420-10147701%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ca0ea3d06ccf6064a5a4cae22b5e04cf4f78ff6b' => 
    array (
      0 => '/opt/lampp/htdocs/bayan911/includes/runtime/../../layouts/v7/modules/Users/ChangeUsername.tpl',
      1 => 1637898757,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2029846724619dfb7fec3420-10147701',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_619dfb7feda59',
  'variables' => 
  array (
    'MODULE' => 0,
    'HEADER_TITLE' => 0,
    'USER_MODEL' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_619dfb7feda59')) {function content_619dfb7feda59($_smarty_tpl) {?>

<div id="massEditContainer" class="modal-dialog modelContainer"><?php ob_start();?><?php echo vtranslate('LBL_CHANGE_USERNAME',$_smarty_tpl->tpl_vars['MODULE']->value);?>
<?php $_tmp1=ob_get_clean();?><?php $_smarty_tpl->tpl_vars['HEADER_TITLE'] = new Smarty_variable($_tmp1, null, 0);?><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path("ModalHeader.tpl",$_smarty_tpl->tpl_vars['MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('TITLE'=>$_smarty_tpl->tpl_vars['HEADER_TITLE']->value), 0);?>
<div class="modal-content"><form class="form-horizontal" id="changeUsername" name="changeUsername" method="post" action="index.php"><input type="hidden" name="module" value="<?php echo $_smarty_tpl->tpl_vars['MODULE']->value;?>
" /><input type="hidden" name="userid" value="<?php echo $_smarty_tpl->tpl_vars['USER_MODEL']->value->getId();?>
" /><input type="hidden" name="username" value="<?php echo $_smarty_tpl->tpl_vars['USER_MODEL']->value->get('user_name');?>
" /><div name='massEditContent'><div class="modal-body "><div class="form-group"><label class="control-label fieldLabel col-sm-5"><?php echo vtranslate('New Username',$_smarty_tpl->tpl_vars['MODULE']->value);?>
&nbsp;<span class="redColor">*</span></label><div class="controls col-sm-6"><input type="text" name="new_username" data-rule-required="true" data-rule-illegal="true"/></div></div><div class="form-group"><label class="control-label fieldLabel col-sm-5"><?php echo vtranslate('LBL_NEW_PASSWORD',$_smarty_tpl->tpl_vars['MODULE']->value);?>
&nbsp;<span class="redColor">*</span></label><div class="controls col-xs-6"><input type="password" name="new_password" data-rule-required="true"/></div></div><div class="form-group"><label class="control-label fieldLabel col-sm-5"><?php echo vtranslate('LBL_CONFIRM_PASSWORD',$_smarty_tpl->tpl_vars['MODULE']->value);?>
&nbsp;<span class="redColor">*</span></label><div class="controls col-xs-6"><input type="password" name="confirm_password" data-rule-required="true"/></div></div></div></div><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path('ModalFooter.tpl',$_smarty_tpl->tpl_vars['MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
</form></div></div>
<?php }} ?>