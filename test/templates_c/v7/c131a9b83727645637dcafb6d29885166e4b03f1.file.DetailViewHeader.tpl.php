<?php /* Smarty version Smarty-3.1.7, created on 2022-09-09 15:25:30
         compiled from "/opt/lampp/htdocs/bayan911/includes/runtime/../../layouts/v7/modules/Vtiger/DetailViewHeader.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2076391573619df71ec45b11-52152115%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c131a9b83727645637dcafb6d29885166e4b03f1' => 
    array (
      0 => '/opt/lampp/htdocs/bayan911/includes/runtime/../../layouts/v7/modules/Vtiger/DetailViewHeader.tpl',
      1 => 1662708327,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2076391573619df71ec45b11-52152115',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_619df71ec4a85',
  'variables' => 
  array (
    'MODULE' => 0,
    'RECORD' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_619df71ec4a85')) {function content_619df71ec4a85($_smarty_tpl) {?>
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