<?php /* Smarty version Smarty-3.1.7, created on 2021-11-08 13:51:46
         compiled from "C:\xampp7.4\htdocs\bayan911\includes\runtime/../../layouts/v7\modules\Vtiger\AddCommentForm.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16395586961399bf1eafc74-39938095%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fd86bd9360579ecee36cc2d15b69e799ab8d421f' => 
    array (
      0 => 'C:\\xampp7.4\\htdocs\\bayan911\\includes\\runtime/../../layouts/v7\\modules\\Vtiger\\AddCommentForm.tpl',
      1 => 1635123261,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16395586961399bf1eafc74-39938095',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_61399bf1ed9e4',
  'variables' => 
  array (
    'MODULE' => 0,
    'SOURCE_MODULE' => 0,
    'CVID' => 0,
    'SELECTED_IDS' => 0,
    'EXCLUDED_IDS' => 0,
    'SEARCH_KEY' => 0,
    'OPERATOR' => 0,
    'ALPHABET_VALUE' => 0,
    'SEARCH_PARAMS' => 0,
    'TAG_PARAMS' => 0,
    'HEADER_TITLE' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_61399bf1ed9e4')) {function content_61399bf1ed9e4($_smarty_tpl) {?>


<?php $_smarty_tpl->tpl_vars["COMMENT_TEXTAREA_DEFAULT_ROWS"] = new Smarty_variable("2", null, 0);?>
<div class="modal-dialog">
    <div class="modal-content">
        <form class="form-horizontal" id="massSave" method="post" action="index.php">
            <input type="hidden" name="module" value="<?php echo $_smarty_tpl->tpl_vars['MODULE']->value;?>
" />
            <input type="hidden" name="source_module" value="<?php echo $_smarty_tpl->tpl_vars['SOURCE_MODULE']->value;?>
" />
            <input type="hidden" name="action" value="MassSaveAjax" />
            <input type="hidden" name="viewname" value="<?php echo $_smarty_tpl->tpl_vars['CVID']->value;?>
" />
            <input type="hidden" name="selected_ids" value=<?php echo ZEND_JSON::encode($_smarty_tpl->tpl_vars['SELECTED_IDS']->value);?>
>
            <input type="hidden" name="excluded_ids" value=<?php echo ZEND_JSON::encode($_smarty_tpl->tpl_vars['EXCLUDED_IDS']->value);?>
>
            <input type="hidden" name="search_key" value= "<?php echo $_smarty_tpl->tpl_vars['SEARCH_KEY']->value;?>
" />
            <input type="hidden" name="operator" value="<?php echo $_smarty_tpl->tpl_vars['OPERATOR']->value;?>
" />
            <input type="hidden" name="search_value" value="<?php echo $_smarty_tpl->tpl_vars['ALPHABET_VALUE']->value;?>
" />
            <input type="hidden" name="search_params" value='<?php echo Vtiger_Util_Helper::toSafeHTML(ZEND_JSON::encode($_smarty_tpl->tpl_vars['SEARCH_PARAMS']->value));?>
' />
            <input type="hidden" name="tag_params" value=<?php echo ZEND_JSON::encode($_smarty_tpl->tpl_vars['TAG_PARAMS']->value);?>
>

            <?php ob_start();?><?php echo vtranslate('LBL_ADDING_COMMENT',$_smarty_tpl->tpl_vars['MODULE']->value);?>
<?php $_tmp1=ob_get_clean();?><?php $_smarty_tpl->tpl_vars['HEADER_TITLE'] = new Smarty_variable($_tmp1, null, 0);?>
            <?php echo $_smarty_tpl->getSubTemplate (vtemplate_path("ModalHeader.tpl",$_smarty_tpl->tpl_vars['MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('SOURCE_MODULE'=>$_smarty_tpl->tpl_vars['SOURCE_MODULE']->value,'TITLE'=>$_smarty_tpl->tpl_vars['HEADER_TITLE']->value), 0);?>


            <div class="modal-body">
                <div class="container-fluid">
                    <div class="row commentTextArea" id="mass_action_add_comment">                    
                    <textarea class="col-lg-12" name="commentcontent" id="commentcontent" rows="5" placeholder="<?php if ($_smarty_tpl->tpl_vars['SOURCE_MODULE']->value=='Responder'){?>Enter message here...<?php }else{ ?><?php echo vtranslate('LBL_WRITE_YOUR_COMMENT_HERE',$_smarty_tpl->tpl_vars['MODULE']->value);?>
...<?php }?>" data-rule-required="true"></textarea>
                    </div>
                </div>
            </div>
			<?php echo $_smarty_tpl->getSubTemplate (vtemplate_path('AddCommentFooter.tpl',$_smarty_tpl->tpl_vars['MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

       </form>
    </div>
</div>

<?php }} ?>