<?php /* Smarty version Smarty-3.1.7, created on 2021-07-16 02:45:37
         compiled from "C:\xampp7.4\htdocs\bayan911\includes\runtime/../../layouts/v7\modules\Users\2FactorAuthentication.tpl" */ ?>
<?php /*%%SmartyHeaderCode:35174309960f0f2d17d5353-15971903%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b4c88f5c054beb1299fa4813ac8063680ce2b0d6' => 
    array (
      0 => 'C:\\xampp7.4\\htdocs\\bayan911\\includes\\runtime/../../layouts/v7\\modules\\Users\\2FactorAuthentication.tpl',
      1 => 1622438425,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '35174309960f0f2d17d5353-15971903',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'CURRENT_USER_MODEL' => 0,
    'EMAIL' => 0,
    'ERROR' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_60f0f2d1856eb',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60f0f2d1856eb')) {function content_60f0f2d1856eb($_smarty_tpl) {?>

 <!DOCTYPE html><html><head><title>2 Factor Authentication</title><meta http-equiv="Content-Type" content="text/html; charset=UTF-8"><link rel="shortcut icon" href="favicon.png"><link rel="stylesheet" href="libraries/bootstrap/css/bootstrap.css" type="text/css" media="screen" /><link rel="stylesheet" href="resources/styles.css" type="text/css" media="screen" /><link rel="stylesheet" href="libraries/jquery/select2/select2.css" /><link rel="stylesheet" href="libraries/jquery/posabsolute-jQuery-Validation-Engine/css/validationEngine.jquery.css" /><script type="text/javascript" src="libraries/jquery/jquery.min.js"></script><script type="text/javascript" src="libraries/bootstrap/js/bootstrap-tooltip.js"></script><script type="text/javascript" src="libraries/jquery/select2/select2.min.js"></script><script type="text/javascript" src="libraries/jquery/posabsolute-jQuery-Validation-Engine/js/jquery.validationEngine.js" ></script><script type="text/javascript" src="libraries/jquery/posabsolute-jQuery-Validation-Engine/js/jquery.validationEngine-en.js" ></script><script type="text/javascript">
				jQuery(function(){
					jQuery('select').select2({blurOnChange:true});
					jQuery('[rel="tooltip"]').tooltip();
					jQuery('form').validationEngine({
						prettySelect: true,
						usePrefix: 's2id_',
						autoPositionUpdate: true,
						promptPosition : "topLeft",
						showOneMessage: true
					});
					jQuery('#currency_name_controls').mouseenter(function() {
						jQuery('#currency_name_tooltip').tooltip('show');
					});
					jQuery('#currency_name_controls').mouseleave(function() {
						jQuery('#currency_name_tooltip').tooltip('hide');
					});
				});
				</script><style type="text/css">
					body { background: #ffffff url('layouts/v7/resources/Images/pexels-anna-shvets-3902883.jpg') no-repeat center top; background-size: 100%; font-size: 14px; }
					.modal-backdrop { opacity: 0.35; }
					.tooltip { z-index: 1055; }
					input, select, textarea { font-size: 14px; }
				</style></head><body><div class="container"><div class="modal-backdrop"></div><form class="form" method="POST" action="index.php?module=Users&action=2FactorAuthenticationSave"><input type="hidden" name="record" value="<?php echo $_smarty_tpl->tpl_vars['CURRENT_USER_MODEL']->value->getId();?>
"><div class="modal"><div class="modal-header"><h3>Verification Required!</h3></div><div class="modal-body"><div class="row"><div class="span6">Verification code has just been sent to <b><?php echo $_smarty_tpl->tpl_vars['EMAIL']->value;?>
</b>. Please enter the code to proceed.</div><div class="span7"><input type="text" autocomplete="off" id="authenticationcode" name="authenticationcode" class="form-control" required></div><?php if ($_smarty_tpl->tpl_vars['ERROR']->value!=''){?><div class="span7"><p style="color: red; font-size: 12px;">Verification not correct please try again.</p></div><?php }?></div></div><div class="modal-footer"><button class="btn btn-success" type="submit">Continue</button></div></div></form></div></body></html><?php }} ?>