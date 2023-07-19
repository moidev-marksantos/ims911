<style>
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

{strip}
		{if empty($DOCUMENT_LIST)}
		<h4 style="text-align:center;">No media found</h4>
		{else}
		{foreach from=$DOCUMENT_LIST item=MEDIA}
		<div class="gallery">                   
			{if $MEDIA['type'] eq 'image/jpeg'}
				<a href="#" data-note="{$MEDIA['notecontent']}" data-type="image" data-image-id="" data-toggle="modal" data-title="{$MEDIA['name'] }" data-image="{$MEDIA['path'] }{$MEDIA['attachmentsid'] }_{$MEDIA['name'] }" data-target="#image-gallery">
					<img style="width: 320px; height: 180px;" src="{$MEDIA['path'] }{$MEDIA['attachmentsid'] }_{$MEDIA['name'] }" alt="{$MEDIA['name'] }">
				</a>
            {elseif $MEDIA['type'] eq 'video/mp4' || $MEDIA['type'] eq 'application/octet-stream'}
				<a href="#" data-note="{$MEDIA['notecontent']}" data-type="video" data-image-id="" data-toggle="modal" data-title="{$MEDIA['name'] }" data-image="{$MEDIA['downloadurl']}" data-target="#image-gallery">
					<video style="width: 320px; height: 180px;" controls>
						<source src="{$MEDIA['downloadurl']}" type="video/mp4">	
					</video>
				</a>
            {else}                    
				<a href="#" data-type="image" data-image-id="" data-note="{$MEDIA['notecontent']}" data-toggle="modal" data-title="{$MEDIA['name']}" data-image="{$MEDIA['path'] }{$MEDIA['attachmentsid'] }_{$MEDIA['name'] }" data-target="#image-gallery">
					<img style="width: 320px; height: 180px;" src="{$MEDIA['path'] }{$MEDIA['attachmentsid'] }_{$MEDIA['name'] }" alt="{$MEDIA['name'] }">
				</a>
			{/if}
			</div>
            {/foreach}        
		{/if} 
		<div class="modal fade" id="image-gallery" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header" style="display: flex;">
                    <h4 class="modal-title" style="color:#fff;" id="image-gallery-title"></h4>
                    <button type="button" class="close pull-right" data-dismiss="modal"><i class="fa fa-times"></i></button>
                </div>
                <div class="modal-body" style="text-align: center; margin: auto; padding: 10px;  overflow: auto; display:table;">
                    <img id="image-gallery-image" style="width: auto; height:600px; display: none; text-align:center;" src="">
                    <video id="video-gallery-image" width="860" height="380" controls style="display: none;">
                        <source src="" type="video/mp4">
                    </video>
                    <div id="notecontent"></div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary float-left" id="show-previous-image"><i class="fa fa-arrow-left"></i></button>
                    <button type="button" id="show-next-image" class="btn btn-secondary float-right"><i class="fa fa-arrow-right"></i></button>
                </div>
            </div>
        </div>
        </div>
{/strip}
{literal}
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
{/literal}