<?php /* Smarty version Smarty-3.1.7, created on 2021-07-14 06:39:58
         compiled from "C:\xampp7.4\htdocs\bayan911\includes\runtime/../../layouts/v7\modules\Vtiger\MassEditForm.tpl" */ ?>
<?php /*%%SmartyHeaderCode:122707443760ee86be717b28-45651835%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '493218d0dbb34e6b748aa15c9d70a1d6a5398144' => 
    array (
      0 => 'C:\\xampp7.4\\htdocs\\bayan911\\includes\\runtime/../../layouts/v7\\modules\\Vtiger\\MassEditForm.tpl',
      1 => 1602674194,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '122707443760ee86be717b28-45651835',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'MODULE' => 0,
    'CVID' => 0,
    'SELECTED_IDS' => 0,
    'EXCLUDED_IDS' => 0,
    'TAG_PARAMS' => 0,
    'SEARCH_PARAMS' => 0,
    'TITLE' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_60ee86be76fee',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60ee86be76fee')) {function content_60ee86be76fee($_smarty_tpl) {?>
<?php $_smarty_tpl->tpl_vars["MASS_EDITION_MODE"] = new Smarty_variable(true, null, 0);?><div id="massEditContainer" class='fc-overlay-modal modal-content'><form class="form-horizontal" id="massEdit" name="MassEdit" method="post" action="index.php"><input type="hidden" name="module" value="<?php echo $_smarty_tpl->tpl_vars['MODULE']->value;?>
" /><input type="hidden" name="action" value="MassSave" /><input type="hidden" name="viewname" value="<?php echo $_smarty_tpl->tpl_vars['CVID']->value;?>
" /><input type="hidden" name="selected_ids" value=<?php echo ZEND_JSON::encode($_smarty_tpl->tpl_vars['SELECTED_IDS']->value);?>
><input type="hidden" name="excluded_ids" value=<?php echo ZEND_JSON::encode($_smarty_tpl->tpl_vars['EXCLUDED_IDS']->value);?>
><input type="hidden" name="tag_params" value=<?php echo ZEND_JSON::encode($_smarty_tpl->tpl_vars['TAG_PARAMS']->value);?>
><input type="hidden" name="search_params" value='<?php echo Vtiger_Util_Helper::toSafeHTML(ZEND_JSON::encode($_smarty_tpl->tpl_vars['SEARCH_PARAMS']->value));?>
' /><div><header class="overlayHeader" style='flex:0 0 auto;'><?php ob_start();?><?php echo vtranslate('LBL_MASS_EDITING',$_smarty_tpl->tpl_vars['MODULE']->value);?>
<?php $_tmp1=ob_get_clean();?><?php $_smarty_tpl->tpl_vars['TITLE'] = new Smarty_variable($_tmp1, null, 0);?><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path("ModalHeader.tpl",$_smarty_tpl->tpl_vars['MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('TITLE'=>$_smarty_tpl->tpl_vars['TITLE']->value), 0);?>
</header><div class='modal-body' style="margin-bottom:60px"><div class='datacontent editViewContents'><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path("partials/EditViewContents.tpl",$_smarty_tpl->tpl_vars['MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
</div></div><footer class='modal-footer overlayFooter'><center><button type='submit' class='btn btn-success saveButton'><?php echo vtranslate('LBL_SAVE',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</button>&nbsp;&nbsp;<a class='cancelLink' data-dismiss="modal" href="#"><?php echo vtranslate('LBL_CANCEL',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</a></center></footer></div></form></div><?php }} ?>