<?php /* Smarty version Smarty-3.1.7, created on 2020-12-10 08:17:37
         compiled from "C:\xampp\htdocs\nuevaviscaya\includes\runtime/../../layouts/v7\modules\EmailTemplates\IndexViewPreProcess.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5782336305fd1d9a1433632-96667455%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6292044cf802a5f9652e41cbe5017bd0c6dcd1db' => 
    array (
      0 => 'C:\\xampp\\htdocs\\nuevaviscaya\\includes\\runtime/../../layouts/v7\\modules\\EmailTemplates\\IndexViewPreProcess.tpl',
      1 => 1607474557,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5782336305fd1d9a1433632-96667455',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'smary' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5fd1d9a14587a',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5fd1d9a14587a')) {function content_5fd1d9a14587a($_smarty_tpl) {?>
<?php echo $_smarty_tpl->getSubTemplate ("modules/Vtiger/partials/Topbar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<div class="container-fluid app-nav">
    <div class="row">
        <?php echo $_smarty_tpl->getSubTemplate ("modules/Settings/Vtiger/SidebarHeader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

        <?php $_smarty_tpl->tpl_vars['ACTIVE_BLOCK'] = new Smarty_variable(array('block'=>'Templates','menu'=>$_smarty_tpl->tpl_vars['smary']->value['request']['module']), null, 0);?>
        <?php echo $_smarty_tpl->getSubTemplate ("modules/Settings/Vtiger/ModuleHeader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

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