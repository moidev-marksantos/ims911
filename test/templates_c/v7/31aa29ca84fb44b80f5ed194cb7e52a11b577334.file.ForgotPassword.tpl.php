<?php /* Smarty version Smarty-3.1.7, created on 2022-01-04 11:16:27
         compiled from "/opt/lampp/htdocs/bayan911/includes/runtime/../../layouts/v7/modules/Users/ForgotPassword.tpl" */ ?>
<?php /*%%SmartyHeaderCode:189916425761d3bc0b1e01b4-07006883%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '31aa29ca84fb44b80f5ed194cb7e52a11b577334' => 
    array (
      0 => '/opt/lampp/htdocs/bayan911/includes/runtime/../../layouts/v7/modules/Users/ForgotPassword.tpl',
      1 => 1637898757,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '189916425761d3bc0b1e01b4-07006883',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'LOGOURL' => 0,
    'TITLE' => 0,
    'LINK_EXPIRED' => 0,
    'MODULE' => 0,
    'TRACKURL' => 0,
    'USERNAME' => 0,
    'SHORTURL_ID' => 0,
    'SECRET_HASH' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_61d3bc0b21fe9',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_61d3bc0b21fe9')) {function content_61d3bc0b21fe9($_smarty_tpl) {?><!--/* +********************************************************************************
 * The contents of this file are subject to the vtiger CRM Public License Version 1.0
 * ("License"); You may not use this file except in compliance with the License
 * The Original Code is: vtiger CRM Open Source
 * The Initial Developer of the Original Code is vtiger.
 * Portions created by vtiger are Copyright (C) vtiger.
 * All Rights Reserved.
 * ******************************************************************************* */-->

<!DOCTYPE html>
<html>
    <head>
        <style type="text/css">
            body{
                font-family: Tahoma, "Trebuchet MS","Lucida Grande",Verdana !important;
                //background: #F5FAEE !important;/*#f1f6e8;*/
                color : #555 !important;
                font-size: 85% !important;
                height: 98% !important;
            }
            hr{
                border: 0;
                height: 1px;
                background-image: linear-gradient(to right, rgba(0, 0, 0, 0), rgba(0, 0, 0, 0.75), rgba(0, 0, 0, 0));
            }
            #container{
                min-width:280px;
                width:50%;
                margin-top:2%;
            }
            #btn{
                color: white;
                border-radius: 4px;
                text-shadow: 0 1px 1px rgba(0, 0, 0, 0.2);
                background: rgb(28, 184, 65);
                border-style: none;
                width: 86px;
                height: 27px;
                font-size: 12px;
            }
            #password,#confirmPassword{
                height:20px;
                width:140px;

            }
            .control-label{
                font-size: 12px;
            }
            #content{
                padding:8px 20px;
                border:1px solid #ddd;
                background:#fff;
                border-radius:5px;
            }
            #footer{
                float:right;
            }
            #footer p{
                text-align:right;
                margin-right:20px;
            }
            .button-container a{
                text-decoration: none;
            }
            .button-container{
                float: right;
            }
            .button-container .btn{
                margin-left: 15px;
                min-width: 100px;
                font-weight: bold;
            }
            .logo{
                padding: 15px 0 ;
            }
            .line{

            }
        </style>
        <script language='JavaScript'>
            function checkPassword() {
                var password = document.getElementById('password').value;
                var confirmPassword = document.getElementById('confirmPassword').value;
                if (password == '' && confirmPassword == '') {
                    alert('Please enter new Password');
                    return false;
                } else if (password != confirmPassword) {
                    alert('Password and Confirm Password should be same');
                    return false;
                } else {
                    return true;
                }
            }
        </script>
    </head>
    <body>
        <div id="container">
            <div class="logo" style = "padding-left:50%">
                <img  src="<?php echo $_smarty_tpl->tpl_vars['LOGOURL']->value;?>
" alt="<?php echo $_smarty_tpl->tpl_vars['TITLE']->value;?>
" style="height: 4em;width: 12em;"><br><br><br>
            </div>
            <div style = "padding-left:50%;width:100%">
                <?php if ($_smarty_tpl->tpl_vars['LINK_EXPIRED']->value!='true'){?>
                    <div id="content">
                        <span><h2 style = "font-size:16px"><?php echo vtranslate('LBL_CHANGE_PASSWORD',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</h2></span>
                        <hr class="line">
                        <div id="changePasswordBlock" align='left'>
                            <form name="changePassword" id="changePassword" action="<?php echo $_smarty_tpl->tpl_vars['TRACKURL']->value;?>
" method="post" accept-charset="utf-8">
                                <input type="hidden" name="username" value="<?php echo $_smarty_tpl->tpl_vars['USERNAME']->value;?>
">
                                <input type="hidden" name="shorturl_id" value="<?php echo $_smarty_tpl->tpl_vars['SHORTURL_ID']->value;?>
">
                                <input type="hidden" name="secret_hash" value="<?php echo $_smarty_tpl->tpl_vars['SECRET_HASH']->value;?>
">
                                <table align='center'>
                                    <tr>
                                        <td style="text-align:right"><label class="control-label" for="password"><?php echo vtranslate('LBL_NEW_PASSWORD',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</label></td>
                                        <td><input type="password" id="password" name="password"></td>
                                    </tr>
                                    <tr><td></td></tr>
                                    <tr>
                                        <td style="text-align:right"><label class="control-label" for="confirmPassword"><?php echo vtranslate('LBL_CONFIRM_PASSWORD',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</label></td>
                                        <td><input type="password" id="confirmPassword" name="confirmPassword"></td>
                                    </tr>
                                    <tr><td></td></tr>
                                    <tr>
                                        <td></td>
                                        <td style="text-align:right"><input type="submit" id="btn" value="Submit" onclick="return checkPassword();"/></td>
                                    </tr>
                                </table>
                            </form>
                        </div>
                        <div id="footer">
                            <p></p>
                        </div>
                        <div style="clear:both;"></div>
                    </div>
                <?php }else{ ?>
                    <div id="content">
                        <?php echo vtranslate('LBL_PASSWORD_LINK_EXPIRED_OR_INVALID_PASSWORD',$_smarty_tpl->tpl_vars['MODULE']->value);?>

                    </div>
                <?php }?>
            </div>
        </div>
    </div>
</div>
</body>
</html>
<?php }} ?>