<?php /* Smarty version Smarty-3.1.7, created on 2021-05-31 04:00:08
         compiled from "C:\xampp7.4\htdocs\sbma\includes\runtime/../../layouts/v7\modules\Vtiger\IndexViewPreProcess.tpl" */ ?>
<?php /*%%SmartyHeaderCode:209490104760b45f4867c8a5-31981327%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0a1edac5d1bfc4614570492565f947f1b7ee87cd' => 
    array (
      0 => 'C:\\xampp7.4\\htdocs\\sbma\\includes\\runtime/../../layouts/v7\\modules\\Vtiger\\IndexViewPreProcess.tpl',
      1 => 1602674194,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '209490104760b45f4867c8a5-31981327',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'MODULE' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_60b45f486b4b0',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60b45f486b4b0')) {function content_60b45f486b4b0($_smarty_tpl) {?>



<?php echo $_smarty_tpl->getSubTemplate ("modules/Vtiger/partials/Topbar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<div class="container-fluid app-nav">
    <div class="row">
        <?php echo $_smarty_tpl->getSubTemplate (vtemplate_path("partials/SidebarHeader.tpl",$_smarty_tpl->tpl_vars['MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

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
<?php }} ?>