<?php /* Smarty version Smarty-3.1.7, created on 2022-01-05 13:30:43
         compiled from "/opt/lampp/htdocs/bayan911/includes/runtime/../../layouts/v7/modules/Emails/SendEmailResult.tpl" */ ?>
<?php /*%%SmartyHeaderCode:158357978761a03eae4d0f98-72925736%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f27a222c1ad12a1c1e48490661db6a7fca0f13c2' => 
    array (
      0 => '/opt/lampp/htdocs/bayan911/includes/runtime/../../layouts/v7/modules/Emails/SendEmailResult.tpl',
      1 => 1637898757,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '158357978761a03eae4d0f98-72925736',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_61a03eae4ea75',
  'variables' => 
  array (
    'MODULE' => 0,
    'SUCCESS' => 0,
    'RELATED_LOAD' => 0,
    'FLAG' => 0,
    'MESSAGE' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_61a03eae4ea75')) {function content_61a03eae4ea75($_smarty_tpl) {?>




<div class="modal-dialog">
	<div class="modal-content">
		<?php echo $_smarty_tpl->getSubTemplate (vtemplate_path("ModalHeader.tpl",$_smarty_tpl->tpl_vars['MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('TITLE'=>"Result"), 0);?>
 
		<div class="modal-body">
			<?php if ($_smarty_tpl->tpl_vars['SUCCESS']->value){?>
				<div class="mailSentSuccessfully" data-relatedload="<?php echo $_smarty_tpl->tpl_vars['RELATED_LOAD']->value;?>
">
                                    <?php if ($_smarty_tpl->tpl_vars['FLAG']->value=='SENT'){?>
                                        <?php echo vtranslate('LBL_MAIL_SENT_SUCCESSFULLY');?>

                                    <?php }else{ ?>
                                        <?php echo vtranslate('LBL_MAIL_SAVED_SUCCESSFULLY');?>

                                    <?php }?>
				</div>
				<?php if ($_smarty_tpl->tpl_vars['FLAG']->value){?>
					<input type="hidden" id="flag" value="<?php echo $_smarty_tpl->tpl_vars['FLAG']->value;?>
">
				<?php }?>
			<?php }else{ ?>
				<div class="failedToSend" data-relatedload="false">
					<?php echo vtranslate('LBL_FAILED_TO_SEND');?>

					<br>
					<?php echo $_smarty_tpl->tpl_vars['MESSAGE']->value;?>

				</div>
			<?php }?>
		</div>
	</div>
</div>
<?php }} ?>