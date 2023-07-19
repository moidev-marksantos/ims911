<?php /* Smarty version Smarty-3.1.7, created on 2021-10-06 07:28:18
         compiled from "C:\xampp7.4\htdocs\bayan911\includes\runtime/../../layouts/v7\modules\Vtiger\DetailViewHeader.tpl" */ ?>
<?php /*%%SmartyHeaderCode:203394780660e69132ac7415-71620016%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e24fc6f07847c9d14ef742d76439dead7d2a48e5' => 
    array (
      0 => 'C:\\xampp7.4\\htdocs\\bayan911\\includes\\runtime/../../layouts/v7\\modules\\Vtiger\\DetailViewHeader.tpl',
      1 => 1633498091,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '203394780660e69132ac7415-71620016',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_60e69132ae8f1',
  'variables' => 
  array (
    'MODULE' => 0,
    'RECORD' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60e69132ae8f1')) {function content_60e69132ae8f1($_smarty_tpl) {?>
<?php if ($_smarty_tpl->tpl_vars['MODULE']->value=='HelpDesk'){?><div class=" detailview-header-block"><div class="detailview-header"><div class="row"><div class="col-md-6"><h4 id="ticket_title" name="ticket_title"><?php echo $_smarty_tpl->tpl_vars['RECORD']->value->get('ticket_title');?>
</h4>&nbsp;<p style="margin-top: -20px;font-weight: 500;">Incident Type : <b><?php echo $_smarty_tpl->tpl_vars['RECORD']->value->get('ticketcategories');?>
</b></p><p style="margin-top: -5px; font-weight: 500;">Incident Status: <b><?php echo $_smarty_tpl->tpl_vars['RECORD']->value->get('ticketstatus');?>
</b></p></div><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path("DetailViewActions.tpl",$_smarty_tpl->tpl_vars['MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
</div></div><?php }else{ ?><div class=" detailview-header-block"><div class="detailview-header"><div class="row"><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path("DetailViewHeaderTitle.tpl",$_smarty_tpl->tpl_vars['MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php echo $_smarty_tpl->getSubTemplate (vtemplate_path("DetailViewActions.tpl",$_smarty_tpl->tpl_vars['MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
</div></div><?php }?><?php }} ?>