<?php /* Smarty version Smarty-3.1.7, created on 2021-05-24 07:37:21
         compiled from "/home/radifjev/bayan911.com/sbmademo/includes/runtime/../../layouts/v7/modules/Emails/SendEmailResult.tpl" */ ?>
<?php /*%%SmartyHeaderCode:37239962460ab57b1939367-19406623%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '31d180324d8a651dd4816e94f5063bfde708ab30' => 
    array (
      0 => '/home/radifjev/bayan911.com/sbmademo/includes/runtime/../../layouts/v7/modules/Emails/SendEmailResult.tpl',
      1 => 1602674194,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '37239962460ab57b1939367-19406623',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'MODULE' => 0,
    'SUCCESS' => 0,
    'RELATED_LOAD' => 0,
    'FLAG' => 0,
    'MESSAGE' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_60ab57b1947d9',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60ab57b1947d9')) {function content_60ab57b1947d9($_smarty_tpl) {?>




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