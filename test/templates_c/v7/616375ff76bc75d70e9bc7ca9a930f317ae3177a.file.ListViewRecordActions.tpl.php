<?php /* Smarty version Smarty-3.1.7, created on 2021-03-18 01:08:40
         compiled from "/home/radifjev/bayan911.com/sbmademo/includes/runtime/../../layouts/v7/modules/Settings/Groups/ListViewRecordActions.tpl" */ ?>
<?php /*%%SmartyHeaderCode:10450902636052a818ec44e1-92391249%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '616375ff76bc75d70e9bc7ca9a930f317ae3177a' => 
    array (
      0 => '/home/radifjev/bayan911.com/sbmademo/includes/runtime/../../layouts/v7/modules/Settings/Groups/ListViewRecordActions.tpl',
      1 => 1602674194,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10450902636052a818ec44e1-92391249',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'LISTVIEW_ENTRY' => 0,
    'RECORD_LINK' => 0,
    'RECORD_LINK_URL' => 0,
    'QUALIFIED_MODULE' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_6052a818eddb6',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6052a818eddb6')) {function content_6052a818eddb6($_smarty_tpl) {?> 

<div class="table-actions">
<?php  $_smarty_tpl->tpl_vars['RECORD_LINK'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['RECORD_LINK']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['LISTVIEW_ENTRY']->value->getRecordLinks(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['RECORD_LINK']->key => $_smarty_tpl->tpl_vars['RECORD_LINK']->value){
$_smarty_tpl->tpl_vars['RECORD_LINK']->_loop = true;
?>
    <?php $_smarty_tpl->tpl_vars["RECORD_LINK_URL"] = new Smarty_variable($_smarty_tpl->tpl_vars['RECORD_LINK']->value->getUrl(), null, 0);?>
    <?php if ($_smarty_tpl->tpl_vars['RECORD_LINK']->value->getIcon()=='icon-pencil'){?>
        <span>
            <a <?php if (stripos($_smarty_tpl->tpl_vars['RECORD_LINK_URL']->value,'javascript:')===0){?> onclick="<?php echo substr($_smarty_tpl->tpl_vars['RECORD_LINK_URL']->value,strlen("javascript:"));?>
;if(event.stopPropagation){event.stopPropagation();}else{event.cancelBubble=true;}" <?php }else{ ?> href='<?php echo $_smarty_tpl->tpl_vars['RECORD_LINK_URL']->value;?>
' <?php }?>>
                <i class="fa fa-pencil" title="<?php echo vtranslate($_smarty_tpl->tpl_vars['RECORD_LINK']->value->getLabel(),$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
"></i>
            </a>
        </span>
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['RECORD_LINK']->value->getIcon()=='icon-trash'){?>
        <span>
            <a <?php if (stripos($_smarty_tpl->tpl_vars['RECORD_LINK_URL']->value,'javascript:')===0){?> onclick="<?php echo substr($_smarty_tpl->tpl_vars['RECORD_LINK_URL']->value,strlen("javascript:"));?>
;if(event.stopPropagation){event.stopPropagation();}else{event.cancelBubble=true;}" <?php }else{ ?> href='<?php echo $_smarty_tpl->tpl_vars['RECORD_LINK_URL']->value;?>
' <?php }?>>
                <i class="fa fa-trash" title="<?php echo vtranslate($_smarty_tpl->tpl_vars['RECORD_LINK']->value->getLabel(),$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
" ></i>
            </a>
        </span>
    <?php }?>
<?php } ?>
</div>
<?php }} ?>