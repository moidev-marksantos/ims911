<?php /* Smarty version Smarty-3.1.7, created on 2022-01-04 11:16:36
         compiled from "/opt/lampp/htdocs/bayan911/includes/runtime/../../layouts/v7/modules/Users/FPLogin.tpl" */ ?>
<?php /*%%SmartyHeaderCode:122203916561d3bc142aeb15-06254618%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e4ce36a4733058f982be3738dd24e808cec54a87' => 
    array (
      0 => '/opt/lampp/htdocs/bayan911/includes/runtime/../../layouts/v7/modules/Users/FPLogin.tpl',
      1 => 1637898757,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '122203916561d3bc142aeb15-06254618',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'ERROR' => 0,
    'USERNAME' => 0,
    'PASSWORD' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_61d3bc142c403',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_61d3bc142c403')) {function content_61d3bc142c403($_smarty_tpl) {?>





<?php if ($_smarty_tpl->tpl_vars['ERROR']->value){?>
	Error, please retry setting the password!!
<?php }else{ ?>
	<h4>Loading .... </h4>
	<form class="form-horizontal" name="login" id="login" method="post" action="../../../index.php?module=Users&action=Login">
		<input type=hidden name="username" value="<?php echo $_smarty_tpl->tpl_vars['USERNAME']->value;?>
" >
		<input type=hidden name="password" value="<?php echo $_smarty_tpl->tpl_vars['PASSWORD']->value;?>
" >
	</form>
	<script type="text/javascript">
		function autoLogin () {
			var form = document.getElementById("login");
			form.submit();
		}
		window.onload = autoLogin;
	</script>
<?php }?><?php }} ?>