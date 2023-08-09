<?php /* Smarty version Smarty-3.1.7, created on 2021-07-07 02:28:17
         compiled from "C:\xampp7.4\htdocs\sbma\includes\runtime/../../layouts/v7\modules\RecycleBin\partials\SidebarEssentials.tpl" */ ?>
<?php /*%%SmartyHeaderCode:55526254260e51141336aa0-43008465%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'db9eabea7d056e5d3935095705c76b92dacb55f0' => 
    array (
      0 => 'C:\\xampp7.4\\htdocs\\sbma\\includes\\runtime/../../layouts/v7\\modules\\RecycleBin\\partials\\SidebarEssentials.tpl',
      1 => 1607568230,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '55526254260e51141336aa0-43008465',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'MODULE_LIST' => 0,
    'MODULEMODEL' => 0,
    'SOURCE_MODULE' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_60e5114135aa7',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60e5114135aa7')) {function content_60e5114135aa7($_smarty_tpl) {?>
<div class="sidebar-menu sidebar-menu-full">
    <div class="module-filters" id="module-filters">
        <div class="sidebar-container lists-menu-container">
            <h5 class="sidebar-header"> <?php echo vtranslate('LBL_MODULES','Settings:$MODULE');?>
 </h5>
            <hr>
            <div>
                <input class="search-list" type="text" placeholder="Search for Modules">
            </div>
            <div class="list-menu-content">
                <div class="list-group">   
                    <ul class="lists-menu" style="list-style-type: none; padding-left: 0px;">
                        <?php if (count($_smarty_tpl->tpl_vars['MODULE_LIST']->value)>0){?>
                            <?php  $_smarty_tpl->tpl_vars['MODULEMODEL'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['MODULEMODEL']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['MODULE_LIST']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['MODULEMODEL']->key => $_smarty_tpl->tpl_vars['MODULEMODEL']->value){
$_smarty_tpl->tpl_vars['MODULEMODEL']->_loop = true;
?>
                                <li style="font-size:12px;" class='listViewFilter <?php if ($_smarty_tpl->tpl_vars['MODULEMODEL']->value->getName()==$_smarty_tpl->tpl_vars['SOURCE_MODULE']->value){?>active<?php }?> '>
                                    <a class="filterName" href="index.php?module=RecycleBin&view=List&sourceModule=<?php echo $_smarty_tpl->tpl_vars['MODULEMODEL']->value->getName();?>
" ><?php echo vtranslate($_smarty_tpl->tpl_vars['MODULEMODEL']->value->getName(),$_smarty_tpl->tpl_vars['MODULEMODEL']->value->getName());?>
</a>
                                </li>
                            <?php } ?>
                        <?php }?>
                    </ul>
                 </div>
                <div class="list-group hide noLists">
                    <h6 class="lists-header"><center> <?php echo vtranslate('LBL_NO');?>
 <?php echo vtranslate('LBL_MODULES','Settings:$MODULE');?>
 <?php echo vtranslate('LBL_FOUND');?>
 ... </center></h6>
                </div>
            </div>
        </div>
    </div>
</div><?php }} ?>