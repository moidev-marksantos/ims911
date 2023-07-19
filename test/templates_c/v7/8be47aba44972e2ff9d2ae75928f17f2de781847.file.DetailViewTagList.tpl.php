<?php /* Smarty version Smarty-3.1.7, created on 2021-01-21 07:35:48
         compiled from "C:\xampp\htdocs\nuevaviscaya\includes\runtime/../../layouts/v7\modules\Vtiger\DetailViewTagList.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12025970055fd0393a1e5173-19053313%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8be47aba44972e2ff9d2ae75928f17f2de781847' => 
    array (
      0 => 'C:\\xampp\\htdocs\\nuevaviscaya\\includes\\runtime/../../layouts/v7\\modules\\Vtiger\\DetailViewTagList.tpl',
      1 => 1611213472,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12025970055fd0393a1e5173-19053313',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5fd0393a2016f',
  'variables' => 
  array (
    'MODULE' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5fd0393a2016f')) {function content_5fd0393a2016f($_smarty_tpl) {?>
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