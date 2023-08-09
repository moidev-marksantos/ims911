<?php /* Smarty version Smarty-3.1.7, created on 2023-08-09 19:37:00
         compiled from "/home/bayakfbx/public_html/ims911/includes/runtime/../../layouts/v7/modules/Vtiger/DetailViewTagList.tpl" */ ?>
<?php /*%%SmartyHeaderCode:198791762864d37a5c6ba3e5-14542367%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cf19c9c6e092f9ee8f50efc8fa55879c91cee8d5' => 
    array (
      0 => '/home/bayakfbx/public_html/ims911/includes/runtime/../../layouts/v7/modules/Vtiger/DetailViewTagList.tpl',
      1 => 1691578347,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '198791762864d37a5c6ba3e5-14542367',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'MODULE' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_64d37a5c6bde1',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_64d37a5c6bde1')) {function content_64d37a5c6bde1($_smarty_tpl) {?>
<div id="dummyTagElement" class="hide">
<?php $_smarty_tpl->tpl_vars['TAG_MODEL'] = new Smarty_variable(Vtiger_Tag_Model::getCleanInstance(), null, 0);?>
<?php echo $_smarty_tpl->getSubTemplate (vtemplate_path("Tag.tpl",$_smarty_tpl->tpl_vars['MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

</div>
<div>
    <div  class="editTagContainer hide" >
        <input type="hidden" name="id" value="" />
        <div class="editTagContents">
            <div>
                <input type="text" name="tagName" value="Teee" style="width:100%" />
            </div>
            <div>
                <div class="checkbox">
                    <label>
                        <input type="hidden" name="visibility" value="<?php echo Vtiger_Tag_Model::PRIVATE_TYPE;?>
"/>
                        <input type="checkbox" name="visibility" value="<?php echo Vtiger_Tag_Model::PUBLIC_TYPE;?>
" />
                        &nbsp; <?php echo vtranslate('LBL_SHARE_TAG',$_smarty_tpl->tpl_vars['MODULE']->value);?>

                    </label>
                </div>
            </div>
        </div>
        <div>
            <button class="btn btn-mini btn-success saveTag" type="button" style="width:50%;float:left">
                <center> <i class="fa fa-check"></i> </center>
            </button>
            <button class="btn btn-mini btn-danger cancelSaveTag" type="button" style="width:50%">
                <center> <i class="ti-close"></i> </center>
            </button>
        </div>
    </div>
</div>
      <?php }} ?>