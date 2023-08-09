<?php /* Smarty version Smarty-3.1.7, created on 2021-05-31 03:46:46
         compiled from "C:\xampp7.4\htdocs\sbma\includes\runtime/../../layouts/v7\modules\Vtiger\Footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:63575338460b45c26591dd6-16440119%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0ee0a3ac3286e6b052f3074e0a7432fe1a043222' => 
    array (
      0 => 'C:\\xampp7.4\\htdocs\\sbma\\includes\\runtime/../../layouts/v7\\modules\\Vtiger\\Footer.tpl',
      1 => 1612839076,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '63575338460b45c26591dd6-16440119',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'LANGUAGE_STRINGS' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_60b45c2662766',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60b45c2662766')) {function content_60b45c2662766($_smarty_tpl) {?>

<footer class="app-footer">
	<p>
		Bayan911 Incident Management System | Powered by Microbiz One Inc
	</p>
</footer>
</div>
<div id='overlayPage'>
	<!-- arrow is added to point arrow to the clicked element (Ex:- TaskManagement), 
	any one can use this by adding "show" class to it -->
	<div class='arrow'></div>
	<div class='data'>
	</div>
</div>
<div id='helpPageOverlay'></div>
<div id="js_strings" class="hide noprint"><?php echo Zend_Json::encode($_smarty_tpl->tpl_vars['LANGUAGE_STRINGS']->value);?>
</div>
<div class="modal myModal fade"></div>
<?php echo $_smarty_tpl->getSubTemplate (vtemplate_path('JSResources.tpl'), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

</body>

</html><?php }} ?>