<?php /* Smarty version Smarty-3.1.7, created on 2021-02-10 03:09:55
         compiled from "C:\xampp\htdocs\bayan911demo\includes\runtime/../../layouts/v7\modules\Vtiger\Pagination.tpl" */ ?>
<?php /*%%SmartyHeaderCode:75333974260234e83668010-77358878%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '27ea9d31229dc5a17c5e82bb63eef3044d3df9c4' => 
    array (
      0 => 'C:\\xampp\\htdocs\\bayan911demo\\includes\\runtime/../../layouts/v7\\modules\\Vtiger\\Pagination.tpl',
      1 => 1602630994,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '75333974260234e83668010-77358878',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'CLASS_VIEW_ACTION' => 0,
    'PAGING_MODEL' => 0,
    'SHOWPAGEJUMP' => 0,
    'moduleName' => 0,
    'CLASS_VIEW_BASIC_ACTION' => 0,
    'PAGE_NUMBER' => 0,
    'CLASS_VIEW_PAGING_INPUT' => 0,
    'CLASS_VIEW_PAGING_INPUT_SUBMIT' => 0,
    'RECORD_COUNT' => 0,
    'MODULE' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_60234e8368b1b',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60234e8368b1b')) {function content_60234e8368b1b($_smarty_tpl) {?>
<?php if (!$_smarty_tpl->tpl_vars['CLASS_VIEW_ACTION']->value){?>
    <?php $_smarty_tpl->tpl_vars['CLASS_VIEW_ACTION'] = new Smarty_variable('listViewActions', null, 0);?>
    <?php $_smarty_tpl->tpl_vars['CLASS_VIEW_PAGING_INPUT'] = new Smarty_variable('listViewPagingInput', null, 0);?>
    <?php $_smarty_tpl->tpl_vars['CLASS_VIEW_PAGING_INPUT_SUBMIT'] = new Smarty_variable('listViewPagingInputSubmit', null, 0);?>
    <?php $_smarty_tpl->tpl_vars['CLASS_VIEW_BASIC_ACTION'] = new Smarty_variable('listViewBasicAction', null, 0);?>
<?php }?>
<div class = "<?php echo $_smarty_tpl->tpl_vars['CLASS_VIEW_ACTION']->value;?>
">
    <div class="btn-group pull-right">
        <button type="button" id="PreviousPageButton" class="btn btn-default" <?php if (!$_smarty_tpl->tpl_vars['PAGING_MODEL']->value->isPrevPageExists()){?> disabled <?php }?>><i class="fa fa-caret-left"></i></button>
        <?php if ($_smarty_tpl->tpl_vars['SHOWPAGEJUMP']->value){?>
            <button type="button" id="PageJump" data-toggle="dropdown" class="btn btn-default">
                <i class="fa fa-ellipsis-h icon" title="<?php echo vtranslate('LBL_LISTVIEW_PAGE_JUMP',$_smarty_tpl->tpl_vars['moduleName']->value);?>
"></i>
            </button>
            <ul class="<?php echo $_smarty_tpl->tpl_vars['CLASS_VIEW_BASIC_ACTION']->value;?>
 dropdown-menu" id="PageJumpDropDown">
                <li>
                    <div class="listview-pagenum">
                        <span ><?php echo vtranslate('LBL_PAGE',$_smarty_tpl->tpl_vars['moduleName']->value);?>
</span>&nbsp;
                        <strong><span><?php echo $_smarty_tpl->tpl_vars['PAGE_NUMBER']->value;?>
</span></strong>&nbsp;
                        <span ><?php echo vtranslate('LBL_OF',$_smarty_tpl->tpl_vars['moduleName']->value);?>
</span>&nbsp;
                        <strong><span id="totalPageCount"></span></strong>
                    </div>
                    <div class="listview-pagejump">
                        <input type="text" id="pageToJump" placeholder="<?php echo vtranslate('LBL_LISTVIEW_JUMP_TO',$_smarty_tpl->tpl_vars['moduleName']->value);?>
" class="<?php echo $_smarty_tpl->tpl_vars['CLASS_VIEW_PAGING_INPUT']->value;?>
 text-center"/>&nbsp;
                        <button type="button" id="pageToJumpSubmit" class="btn btn-success <?php echo $_smarty_tpl->tpl_vars['CLASS_VIEW_PAGING_INPUT_SUBMIT']->value;?>
 text-center"><?php echo 'GO';?>
</button>
                    </div>    
                </li>
            </ul>
        <?php }?>
        <button type="button" id="NextPageButton" class="btn btn-default" <?php if (!$_smarty_tpl->tpl_vars['PAGING_MODEL']->value->isNextPageExists()){?>disabled<?php }?>><i class="fa fa-caret-right"></i></button>
    </div>
    <span class="pageNumbers  pull-right" style="position:relative;top:7px;">
        <span class="pageNumbersText">
            <?php if ($_smarty_tpl->tpl_vars['RECORD_COUNT']->value){?><?php echo $_smarty_tpl->tpl_vars['PAGING_MODEL']->value->getRecordStartRange();?>
 <?php echo vtranslate('LBL_to',$_smarty_tpl->tpl_vars['MODULE']->value);?>
 <?php echo $_smarty_tpl->tpl_vars['PAGING_MODEL']->value->getRecordEndRange();?>
<?php }else{ ?>
            <?php }?>
        </span>
        &nbsp;<span class="totalNumberOfRecords cursorPointer<?php if (!$_smarty_tpl->tpl_vars['RECORD_COUNT']->value){?> hide<?php }?>" title="<?php echo vtranslate('LBL_SHOW_TOTAL_NUMBER_OF_RECORDS',$_smarty_tpl->tpl_vars['MODULE']->value);?>
"><?php echo vtranslate('LBL_OF',$_smarty_tpl->tpl_vars['MODULE']->value);?>
 <i class="fa fa-question showTotalCountIcon"></i></span>&nbsp;&nbsp;
    </span>
</div><?php }} ?>