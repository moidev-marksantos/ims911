<?php /* Smarty version Smarty-3.1.7, created on 2021-02-08 06:41:18
         compiled from "/home/radifjev/bayan911.com/demo/includes/runtime/../../layouts/v7/modules/Import/ImportStepThree.tpl" */ ?>
<?php /*%%SmartyHeaderCode:18054044096020dd0e391894-09715600%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '39131eeeaf0fdb95c0fa107b0943efde9220fb51' => 
    array (
      0 => '/home/radifjev/bayan911.com/demo/includes/runtime/../../layouts/v7/modules/Import/ImportStepThree.tpl',
      1 => 1607521264,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18054044096020dd0e391894-09715600',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'MODULE' => 0,
    'IMPORTABLE_FIELDS' => 0,
    'AVAILABLE_FIELDS' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_6020dd0e39902',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6020dd0e39902')) {function content_6020dd0e39902($_smarty_tpl) {?>



<span>
    <h4><?php echo vtranslate('LBL_IMPORT_MAP_FIELDS',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</h4>
</span>
<hr>
<div id="savedMapsContainer"><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path("Import_Saved_Maps.tpl",'Import'), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
</div>
<div><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path("Import_Mapping.tpl",'Import'), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
</div>
<div class="form-inline" style="padding-bottom: 10%;">
    <input type="checkbox" name="save_map" id="save_map">&nbsp;&nbsp;<label for="save_map"><?php echo vtranslate('LBL_SAVE_AS_CUSTOM_MAPPING',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</label>
    &nbsp;&nbsp;<input type="text" name="save_map_as" id="save_map_as" class = "form-control">
</div>
<?php if (!$_smarty_tpl->tpl_vars['IMPORTABLE_FIELDS']->value){?>
	<?php $_smarty_tpl->tpl_vars['IMPORTABLE_FIELDS'] = new Smarty_variable($_smarty_tpl->tpl_vars['AVAILABLE_FIELDS']->value, null, 0);?>
<?php }?>
<?php echo $_smarty_tpl->getSubTemplate (vtemplate_path("Import_Default_Values_Widget.tpl",'Import'), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('IMPORTABLE_FIELDS'=>$_smarty_tpl->tpl_vars['IMPORTABLE_FIELDS']->value), 0);?>
<?php }} ?>