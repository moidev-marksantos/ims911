{*+**********************************************************************************
 * The contents of this file are subject to the vtiger CRM Public License Version 1.1
 * ("License"); You may not use this file except in compliance with the License
 * The Original Code is: vtiger CRM Open Source
 * The Initial Developer of the Original Code is vtiger.
 * Portions created by vtiger are Copyright (C) vtiger.
 * All Rights Reserved.
 ************************************************************************************}

 {strip}
	<!DOCTYPE html>
	<html>
		<head>
			<title>2 Factor Authentication</title>
			<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

			<link rel="shortcut icon" href="favicon.png">
			<link rel="stylesheet" href="libraries/bootstrap/css/bootstrap.css" type="text/css" media="screen" />
			<link rel="stylesheet" href="resources/styles.css" type="text/css" media="screen" />
			<link rel="stylesheet" href="libraries/jquery/select2/select2.css" />
			<link rel="stylesheet" href="libraries/jquery/posabsolute-jQuery-Validation-Engine/css/validationEngine.jquery.css" />

			<script type="text/javascript" src="libraries/jquery/jquery.min.js"></script>
			<script type="text/javascript" src="libraries/bootstrap/js/bootstrap-tooltip.js"></script>
			<script type="text/javascript" src="libraries/jquery/select2/select2.min.js"></script>
			<script type="text/javascript" src="libraries/jquery/posabsolute-jQuery-Validation-Engine/js/jquery.validationEngine.js" ></script>
			<script type="text/javascript" src="libraries/jquery/posabsolute-jQuery-Validation-Engine/js/jquery.validationEngine-en.js" ></script>

			<script type="text/javascript">
				{literal}
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
				{/literal}
			</script>
			<style type="text/css">
				{literal}
					body { background: #ffffff url('layouts/v7/resources/Images/pexels-anna-shvets-3902883.jpg') no-repeat center top; background-size: 100%; font-size: 14px; }
					.modal-backdrop { opacity: 0.35; }
					.tooltip { z-index: 1055; }
					input, select, textarea { font-size: 14px; }
				{/literal}
			</style>
		</head>
		<body>
			<div class="container">
				<div class="modal-backdrop"></div>
				<form class="form" method="POST" action="index.php?module=Users&action=2FactorAuthenticationSave">
					<input type="hidden" name="record" value="{$CURRENT_USER_MODEL->getId()}">
					<div class="modal"> 
						<div class="modal-header">
							<h3>Verification Required!</h3>
						</div>
						<div class="modal-body">
							<div class="row">
                                <div class="span6">
                                Verification code has just been sent to <b>{$EMAIL}</b>. Please enter the code to proceed.
                                </div>
                                <div class="span7">
									<input type="text" autocomplete="off" id="authenticationcode" name="authenticationcode" class="form-control" required>									
								</div>
								{if $ERROR neq ""}
								<div class="span7">
									<p style="color: red; font-size: 12px;">Verification not correct please try again.</p>	
								</div>
								{/if}
							</div>
						</div>
						<div class="modal-footer">
							<button class="btn btn-success" type="submit">Continue</button>
						</div>
					</div>
				</form>
			</div>
		</body>
	</html>
{/strip}