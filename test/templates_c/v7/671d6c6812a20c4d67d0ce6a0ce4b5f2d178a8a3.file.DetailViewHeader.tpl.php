<?php /* Smarty version Smarty-3.1.7, created on 2023-08-09 19:37:00
         compiled from "/home/bayakfbx/public_html/ims911/includes/runtime/../../layouts/v7/modules/Vtiger/DetailViewHeader.tpl" */ ?>
<?php /*%%SmartyHeaderCode:76476119764d37a5c692e81-18701672%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '671d6c6812a20c4d67d0ce6a0ce4b5f2d178a8a3' => 
    array (
      0 => '/home/bayakfbx/public_html/ims911/includes/runtime/../../layouts/v7/modules/Vtiger/DetailViewHeader.tpl',
      1 => 1691578347,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '76476119764d37a5c692e81-18701672',
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
  'unifunc' => 'content_64d37a5c69cb2',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_64d37a5c69cb2')) {function content_64d37a5c69cb2($_smarty_tpl) {?>
<?php if ($_smarty_tpl->tpl_vars['MODULE']->value=='HelpDesk'){?><div class=" detailview-header-block"><div class="detailview-header"><div class="row"><div class="col-md-6"><h4 id="ticket_title" name="ticket_title"><?php echo $_smarty_tpl->tpl_vars['RECORD']->value->get('ticket_no');?>
</h4>&nbsp;<table style="font-size: 15px;"><tr><td>Incident Type</td><td>&nbsp;&nbsp;:</td><td>&nbsp;&nbsp;<?php echo $_smarty_tpl->tpl_vars['RECORD']->value->get('ticketcategories');?>
</td></tr><tr><td>Status</td><td>&nbsp;&nbsp;:</td><td>&nbsp;&nbsp;<?php echo $_smarty_tpl->tpl_vars['RECORD']->value->get('ticketstatus');?>
</td></tr><tr><td>Street</td><td>&nbsp;&nbsp;:</td><td>&nbsp;&nbsp;<?php echo $_smarty_tpl->tpl_vars['RECORD']->value->get('cf_860');?>
</td></tr><tr><td>Landmark</td><td>&nbsp;&nbsp;:</td><td>&nbsp;&nbsp;<?php echo $_smarty_tpl->tpl_vars['RECORD']->value->get('cf_862');?>
</td></tr></table><!-- <p style="margin-top: -20px;font-weight: bold; font-size: 13px;">Incident Type  : <b><?php echo $_smarty_tpl->tpl_vars['RECORD']->value->get('ticketcategories');?>
</b></p> --><!-- <p style="margin-top: -5px; font-weight: bold; font-size: 13px;">Incident Status: <b id="ticket_status"><?php echo $_smarty_tpl->tpl_vars['RECORD']->value->get('ticketstatus');?>
</b></p> --><!-- <p style="margin-top: -5px; font-weight: bold; font-size: 13px;">Street: <b id="ticket_status"><?php echo $_smarty_tpl->tpl_vars['RECORD']->value->get('cf_860');?>
</b></p> --><!-- <p style="margin-top: -5px; font-weight: bold; font-size: 13px;">Landmark: <b id="ticket_status"><?php echo $_smarty_tpl->tpl_vars['RECORD']->value->get('cf_862');?>
</b></p> --></div><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path("DetailViewActions.tpl",$_smarty_tpl->tpl_vars['MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
</div></div><?php }else{ ?><div class=" detailview-header-block"><div class="detailview-header"><div class="row"><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path("DetailViewHeaderTitle.tpl",$_smarty_tpl->tpl_vars['MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php echo $_smarty_tpl->getSubTemplate (vtemplate_path("DetailViewActions.tpl",$_smarty_tpl->tpl_vars['MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
</div></div><?php }?><?php }} ?>