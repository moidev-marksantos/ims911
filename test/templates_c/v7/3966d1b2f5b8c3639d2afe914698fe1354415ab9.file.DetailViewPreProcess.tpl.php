<?php /* Smarty version Smarty-3.1.7, created on 2021-07-08 05:46:26
         compiled from "C:\xampp7.4\htdocs\bayan911\includes\runtime/../../layouts/v7\modules\Vtiger\DetailViewPreProcess.tpl" */ ?>
<?php /*%%SmartyHeaderCode:209394989360e691329228e0-89199499%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3966d1b2f5b8c3639d2afe914698fe1354415ab9' => 
    array (
      0 => 'C:\\xampp7.4\\htdocs\\bayan911\\includes\\runtime/../../layouts/v7\\modules\\Vtiger\\DetailViewPreProcess.tpl',
      1 => 1611303082,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '209394989360e691329228e0-89199499',
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
  'unifunc' => 'content_60e6913298353',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60e6913298353')) {function content_60e6913298353($_smarty_tpl) {?>



<?php echo $_smarty_tpl->getSubTemplate ("modules/Vtiger/partials/Topbar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<div class="container-fluid app-nav" style="background-color: #032e61;">
    <div class="row">
        <?php echo $_smarty_tpl->getSubTemplate (vtemplate_path("ModuleHeader.tpl",$_smarty_tpl->tpl_vars['MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

    </div>
</div>
</nav>    
     <div id='overlayPageContent' class='fade modal overlayPageContent content-area overlay-container-60' tabindex='-1' role='dialog' aria-hidden='true'>
        <div class="data">
        </div>
        <div class="modal-dialog">
        </div>
    </div>
<div class="container-fluid main-container">
    <div class="row">
        
        <div class="detailViewContainer viewContent clearfix">
            <div class="col-sm-12 col-xs-12 content-area">
                <?php echo $_smarty_tpl->getSubTemplate (vtemplate_path("DetailViewHeader.tpl",$_smarty_tpl->tpl_vars['MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <?php echo $_smarty_tpl->getSubTemplate (vtemplate_path("DetailViewTagList.tpl",$_smarty_tpl->tpl_vars['MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

                    </div>
                </div>   
            </div>
                <div class="detailview-content container-fluid">
                    <input id="recordId" type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['RECORD']->value->getId();?>
" />
                    <?php echo $_smarty_tpl->getSubTemplate (vtemplate_path("ModuleRelatedTabs.tpl",$_smarty_tpl->tpl_vars['MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

                    <div class="details row" style="margin-top:10px;">
<?php }} ?>