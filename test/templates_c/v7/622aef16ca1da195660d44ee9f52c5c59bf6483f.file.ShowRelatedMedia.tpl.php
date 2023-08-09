<?php /* Smarty version Smarty-3.1.7, created on 2022-03-16 11:46:37
         compiled from "/opt/lampp/htdocs/bayan911/includes/runtime/../../layouts/v7/modules/Vtiger/ShowRelatedMedia.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1003042050619dfdf7cdc9e6-97988037%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '622aef16ca1da195660d44ee9f52c5c59bf6483f' => 
    array (
      0 => '/opt/lampp/htdocs/bayan911/includes/runtime/../../layouts/v7/modules/Vtiger/ShowRelatedMedia.tpl',
      1 => 1647402381,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1003042050619dfdf7cdc9e6-97988037',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_619dfdf7cf5ad',
  'variables' => 
  array (
    'DOCUMENT_LIST' => 0,
    'MEDIA' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_619dfdf7cf5ad')) {function content_619dfdf7cf5ad($_smarty_tpl) {?><style>
div.gallery {
  margin: 5px;
  border: 1px solid #ccc;
  float: left;
  width: 320px;
}
div.gallery:hover {
  border: 1px solid #777;
}

div.gallery img {
  width: 100%;
  height: auto;
}

div.desc {
  padding: 15px;
  text-align: center;
}
</style>

<?php if (empty($_smarty_tpl->tpl_vars['DOCUMENT_LIST']->value)){?><h4 style="text-align:center;">No media found</h4><?php }else{ ?><?php  $_smarty_tpl->tpl_vars['MEDIA'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['MEDIA']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['DOCUMENT_LIST']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['MEDIA']->key => $_smarty_tpl->tpl_vars['MEDIA']->value){
$_smarty_tpl->tpl_vars['MEDIA']->_loop = true;
?><div class="gallery"><?php if ($_smarty_tpl->tpl_vars['MEDIA']->value['type']=='image/jpeg'){?><a href="#" data-note="<?php echo $_smarty_tpl->tpl_vars['MEDIA']->value['notecontent'];?>
" data-type="image" data-image-id="" data-toggle="modal" data-title="<?php echo $_smarty_tpl->tpl_vars['MEDIA']->value['name'];?>
" data-image="<?php echo $_smarty_tpl->tpl_vars['MEDIA']->value['path'];?>
<?php echo $_smarty_tpl->tpl_vars['MEDIA']->value['attachmentsid'];?>
_<?php echo $_smarty_tpl->tpl_vars['MEDIA']->value['name'];?>
" data-target="#image-gallery"><img style="width: 320px; height: 180px;" src="<?php echo $_smarty_tpl->tpl_vars['MEDIA']->value['path'];?>
<?php echo $_smarty_tpl->tpl_vars['MEDIA']->value['attachmentsid'];?>
_<?php echo $_smarty_tpl->tpl_vars['MEDIA']->value['name'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['MEDIA']->value['name'];?>
"></a><?php }elseif($_smarty_tpl->tpl_vars['MEDIA']->value['type']=='video/mp4'||$_smarty_tpl->tpl_vars['MEDIA']->value['type']=='application/octet-stream'){?><a href="#" data-note="<?php echo $_smarty_tpl->tpl_vars['MEDIA']->value['notecontent'];?>
" data-type="video" data-image-id="" data-toggle="modal" data-title="<?php echo $_smarty_tpl->tpl_vars['MEDIA']->value['name'];?>
" data-image="<?php echo $_smarty_tpl->tpl_vars['MEDIA']->value['downloadurl'];?>
" data-target="#image-gallery"><video style="width: 320px; height: 180px;" controls><source src="<?php echo $_smarty_tpl->tpl_vars['MEDIA']->value['downloadurl'];?>
" type="video/mp4"></video></a><?php }else{ ?><a href="#" data-type="image" data-image-id="" data-note="<?php echo $_smarty_tpl->tpl_vars['MEDIA']->value['notecontent'];?>
" data-toggle="modal" data-title="<?php echo $_smarty_tpl->tpl_vars['MEDIA']->value['name'];?>
" data-image="<?php echo $_smarty_tpl->tpl_vars['MEDIA']->value['path'];?>
<?php echo $_smarty_tpl->tpl_vars['MEDIA']->value['attachmentsid'];?>
_<?php echo $_smarty_tpl->tpl_vars['MEDIA']->value['name'];?>
" data-target="#image-gallery"><img style="width: 320px; height: 180px;" src="<?php echo $_smarty_tpl->tpl_vars['MEDIA']->value['path'];?>
<?php echo $_smarty_tpl->tpl_vars['MEDIA']->value['attachmentsid'];?>
_<?php echo $_smarty_tpl->tpl_vars['MEDIA']->value['name'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['MEDIA']->value['name'];?>
"></a><?php }?></div><?php } ?><?php }?><div class="modal fade" id="image-gallery" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true"><div class="modal-dialog modal-lg"><div class="modal-content"><div class="modal-header" style="display: flex;"><h4 class="modal-title" style="color:#fff;" id="image-gallery-title"></h4><button type="button" class="close pull-right" data-dismiss="modal"><i class="fa fa-times"></i></button></div><div class="modal-body" style="text-align: center; margin: auto; padding: 10px;  overflow: auto; display:table;"><img id="image-gallery-image" style="width: auto; height:600px; display: none; text-align:center;" src=""><video id="video-gallery-image" width="860" height="380" controls style="display: none;"><source src="" type="video/mp4"></video><div id="notecontent"></div></div><div class="modal-footer"><button type="button" class="btn btn-secondary float-left" id="show-previous-image"><i class="fa fa-arrow-left"></i></button><button type="button" id="show-next-image" class="btn btn-secondary float-right"><i class="fa fa-arrow-right"></i></button></div></div></div></div>

    <script>
        let modalId = $('#image-gallery');

        $(document).ready(function() {
               
                loadGallery(true, 'a');

                //This function disables buttons when needed
                function disableButtons(counter_max, counter_current) {
                    $('#show-previous-image, #show-next-image').show();
                    if (counter_max === counter_current) {
                        $('#show-next-image').hide();
                    } else if (counter_current === 1) {
                        $('#show-previous-image').hide();
                    }
                }

                function loadGallery(setIDs, setClickAttr) {
                    let current_image,
                        selector,
                        counter = 0;

                    $('#show-next-image, #show-previous-image').click(function() {
                            if ($(this).attr('id') === 'show-previous-image') {
                                current_image--;
                            } else {
                                current_image++;
                            }
                
                            selector = $('[data-image-id="' + current_image + '"]');
                            updateGallery(selector);
                        });

                    function updateGallery(selector) {
                       
                        let $sel = selector;
                        current_image = $sel.data('image-id');
                        type_image    = $sel.data('type');
                       
                        if(type_image == 'image'){
                            $('#video-gallery-image').css("display", "none");         
                            $('#image-gallery-image').css("display", "block");
                            $('#image-gallery-image').attr('src', $sel.data('image'));         
                        }
                        else{
                            $('#video-gallery-image').css("display", "block");          
                            $('#image-gallery-image').css("display", "none");                       
                            $('#video-gallery-image').attr('src', $sel.data('image'));       
                        }

                        $('#image-gallery-title').text($sel.data('title'));
                        $('#notecontent').text($sel.data('note'));
                    
                        disableButtons(counter, $sel.data('image-id'));
                    }

                    if (setIDs == true) {
                        $('[data-image-id]').each(function() {
                            counter++;
                            $(this).attr('data-image-id', counter);
                        });
                    }
                    $(setClickAttr).on('click', function() {
                        updateGallery($(this));
                    });
                }
            });

        // build key actions
        $(document).keydown(function(e) {
                switch (e.which) {
                    case 37: // left
                        if ((modalId.data('bs.modal') || {})._isShown && $('#show-previous-image').is(":visible")) {
                            $('#show-previous-image').click();
                        }
                        break;

                    case 39: // right
                        if ((modalId.data('bs.modal') || {})._isShown && $('#show-next-image').is(":visible")) {
                            $('#show-next-image')
                                .click();
                        }
                        break;

                    default:
                        return; // exit this handler for other keys
                }
                e.preventDefault(); // prevent the default action (scroll / move caret)
            });
    </script>
<?php }} ?>