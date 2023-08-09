<?php /* Smarty version Smarty-3.1.7, created on 2021-07-16 02:20:18
         compiled from "C:\xampp7.4\htdocs\bayan911\includes\runtime/../../layouts/v7\modules\Users\FPLogin.tpl" */ ?>
<?php /*%%SmartyHeaderCode:68888254760f0ece2375748-75378727%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '996c7d4e11db021cd441029b1742f6257930fa76' => 
    array (
      0 => 'C:\\xampp7.4\\htdocs\\bayan911\\includes\\runtime/../../layouts/v7\\modules\\Users\\FPLogin.tpl',
      1 => 1602674194,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '68888254760f0ece2375748-75378727',
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
  'unifunc' => 'content_60f0ece23e4f2',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60f0ece23e4f2')) {function content_60f0ece23e4f2($_smarty_tpl) {?>





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