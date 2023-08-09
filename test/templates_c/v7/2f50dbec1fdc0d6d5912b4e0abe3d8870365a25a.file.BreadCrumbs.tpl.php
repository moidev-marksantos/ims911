<?php /* Smarty version Smarty-3.1.7, created on 2021-09-09 08:10:49
         compiled from "C:\xampp7.4\htdocs\bayan911\includes\runtime/../../layouts/v7\modules\Vtiger\BreadCrumbs.tpl" */ ?>
<?php /*%%SmartyHeaderCode:15319334886139c18918f689-06090558%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2f50dbec1fdc0d6d5912b4e0abe3d8870365a25a' => 
    array (
      0 => 'C:\\xampp7.4\\htdocs\\bayan911\\includes\\runtime/../../layouts/v7\\modules\\Vtiger\\BreadCrumbs.tpl',
      1 => 1602674194,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15319334886139c18918f689-06090558',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'BREADCRUMB_ID' => 0,
    'BREADCRUMB_LABELS' => 0,
    'INDEX' => 0,
    'FIRSTBREADCRUMB' => 0,
    'ADDTIONALCLASS' => 0,
    'ACTIVESTEP' => 0,
    'CRUMBID' => 0,
    'ZINDEX' => 0,
    'STEPTEXT' => 0,
    'MODULE' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_6139c18919f9b',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6139c18919f9b')) {function content_6139c18919f9b($_smarty_tpl) {?>

<div id="<?php echo $_smarty_tpl->tpl_vars['BREADCRUMB_ID']->value;?>
" class="breadcrumb">
	<ul class="crumbs">
		<?php $_smarty_tpl->tpl_vars['ZINDEX'] = new Smarty_variable(9, null, 0);?>
		<?php  $_smarty_tpl->tpl_vars['STEPTEXT'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['STEPTEXT']->_loop = false;
 $_smarty_tpl->tpl_vars['CRUMBID'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['BREADCRUMB_LABELS']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['STEPTEXT']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['STEPTEXT']->iteration=0;
 $_smarty_tpl->tpl_vars['STEPTEXT']->index=-1;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['breadcrumbLabels']['index']=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['STEPTEXT']->key => $_smarty_tpl->tpl_vars['STEPTEXT']->value){
$_smarty_tpl->tpl_vars['STEPTEXT']->_loop = true;
 $_smarty_tpl->tpl_vars['CRUMBID']->value = $_smarty_tpl->tpl_vars['STEPTEXT']->key;
 $_smarty_tpl->tpl_vars['STEPTEXT']->iteration++;
 $_smarty_tpl->tpl_vars['STEPTEXT']->index++;
 $_smarty_tpl->tpl_vars['STEPTEXT']->first = $_smarty_tpl->tpl_vars['STEPTEXT']->index === 0;
 $_smarty_tpl->tpl_vars['STEPTEXT']->last = $_smarty_tpl->tpl_vars['STEPTEXT']->iteration === $_smarty_tpl->tpl_vars['STEPTEXT']->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['breadcrumbLabels']['first'] = $_smarty_tpl->tpl_vars['STEPTEXT']->first;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['breadcrumbLabels']['index']++;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['breadcrumbLabels']['last'] = $_smarty_tpl->tpl_vars['STEPTEXT']->last;
?>
			<?php $_smarty_tpl->tpl_vars['INDEX'] = new Smarty_variable($_smarty_tpl->getVariable('smarty')->value['foreach']['breadcrumbLabels']['index'], null, 0);?>
			<?php $_smarty_tpl->tpl_vars['INDEX'] = new Smarty_variable($_smarty_tpl->tpl_vars['INDEX']->value+1, null, 0);?>
			<li class="step <?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['breadcrumbLabels']['first']){?> first <?php echo $_smarty_tpl->tpl_vars['FIRSTBREADCRUMB']->value;?>
 <?php }else{ ?> <?php echo $_smarty_tpl->tpl_vars['ADDTIONALCLASS']->value;?>
 <?php }?> <?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['breadcrumbLabels']['last']){?> last <?php }?> <?php if ($_smarty_tpl->tpl_vars['ACTIVESTEP']->value==$_smarty_tpl->tpl_vars['INDEX']->value){?>active<?php }?>"
				id="<?php echo $_smarty_tpl->tpl_vars['CRUMBID']->value;?>
" data-value="<?php echo $_smarty_tpl->tpl_vars['INDEX']->value;?>
" style="z-index:<?php echo $_smarty_tpl->tpl_vars['ZINDEX']->value;?>
">
				<a href="#">
					<span class="stepNum"><?php echo $_smarty_tpl->tpl_vars['INDEX']->value;?>
</span>
					<span class="stepText" title="<?php echo vtranslate($_smarty_tpl->tpl_vars['STEPTEXT']->value,$_smarty_tpl->tpl_vars['MODULE']->value);?>
"><?php echo vtranslate($_smarty_tpl->tpl_vars['STEPTEXT']->value,$_smarty_tpl->tpl_vars['MODULE']->value);?>
</span>
				</a>
			</li>
			<?php $_smarty_tpl->tpl_vars['ZINDEX'] = new Smarty_variable($_smarty_tpl->tpl_vars['ZINDEX']->value-1, null, 0);?>
		<?php } ?>
	</ul>
</div><?php }} ?>