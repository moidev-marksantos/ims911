<?php /* Smarty version Smarty-3.1.7, created on 2021-02-10 03:09:59
         compiled from "C:\xampp\htdocs\bayan911demo\includes\runtime/../../layouts/v7\modules\Vtiger\DetailViewHeader.tpl" */ ?>
<?php /*%%SmartyHeaderCode:179416175360234e8716fb46-55086090%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'aa8736cf4f4796d7786af2fc2bfce484197a6b3e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\bayan911demo\\includes\\runtime/../../layouts/v7\\modules\\Vtiger\\DetailViewHeader.tpl',
      1 => 1611597834,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '179416175360234e8716fb46-55086090',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'MODULE' => 0,
    'RECORD' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_60234e8718e96',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60234e8718e96')) {function content_60234e8718e96($_smarty_tpl) {?>
<?php if ($_smarty_tpl->tpl_vars['MODULE']->value=='HelpDesk'){?><div class=" detailview-header-block"><div class="detailview-header"><div class="row"><div class="col-md-6"><h4><?php echo $_smarty_tpl->tpl_vars['RECORD']->value->get('ticket_title');?>
</h4>&nbsp;</div><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path("DetailViewActions.tpl",$_smarty_tpl->tpl_vars['MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
</div></div><?php }else{ ?><div class=" detailview-header-block"><div class="detailview-header"><div class="row"><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path("DetailViewHeaderTitle.tpl",$_smarty_tpl->tpl_vars['MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php echo $_smarty_tpl->getSubTemplate (vtemplate_path("DetailViewActions.tpl",$_smarty_tpl->tpl_vars['MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
</div></div><?php }?><?php }} ?>