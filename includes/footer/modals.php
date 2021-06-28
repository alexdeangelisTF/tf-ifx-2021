<?php

$rowCount = 1;
if( have_rows('ifx_flexible_rows') ) {
	while ( have_rows('ifx_flexible_rows') ) {
		the_row();
		$rowType = get_row_layout();
		
		if ( $rowType == 'hero_video_background' || $rowType == 'hero') {
			$videoModal = false;
			$videoModal = get_sub_field('video_modal');
			
			if ($videoModal) {
				
				$videoSource = get_sub_field('video_source');
				$videoUrl = false;
				$iFrame = false;
				if ($videoSource == 'vimeo') {
					$videoUrl = get_sub_field('vimeo_url');
					$videoUrl = 'https://player.vimeo.com/video/' . $videoUrl . '?title=0&portrait=0&byline=0';
					$iFrame = '<iframe src="' . $videoUrl . '" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>';
				} elseif ($videoSource == 'youtube') {
					$videoUrl = get_sub_field('youtube_url');
					$videoUrl = 'https://www.youtube.com/embed/' . $videoUrl . '?rel=0&modestbranding=1';
					$iFrame = '<iframe src="' . $videoUrl . '" frameborder="0" allowfullscreen></iframe>';
				} else {}
				
				if ( $rowType == 'hero_video_background') {
					$modalID = 'videoBGModal_' . $rowCount;
				} elseif ($rowType == 'hero') {
					$modalID = 'heroModal_' . $rowCount;
				} else {
					$modalID = false;
				}

				if ($modalID) {

					// Hero Video Background Modal Settings
					echo '<!-- Modal -->
					<div class="modal modal__video-background fade" id="' . $modalID . '" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
						<div class="modal-dialog modal-dialog-centered">
							<div class="modal-content">
								<div class="modal-header">
									<button type="button" class="close" data-dismiss="modal" aria-label="Close">
										<span aria-hidden="true"><i class="fas fa-times"></i></span>
									</button>
								</div>
								<div class="modal-body source_' . $videoSource . '">
									<div class="embed-container">
										
									</div>
								</div>
							</div>
						</div>
					</div>';
					echo '<script>';
					echo '(function($) {';
					if ( $rowType == 'hero_video_background') { ?>
						// Insert iframe into modal
						$('.ifx-row-<?php echo $rowCount; ?> .hero-video-background__introduction button').on('click',function(e) {
							//e.preventDefault();
							$('#videoBGModal_<?php echo $rowCount; ?> .embed-container').append('<?php echo $iFrame; ?>');
						});
						// Delete HTML iframe element on close of modal
						$('#videoBGModal_<?php echo $rowCount; ?>').on("hidden.bs.modal", function () {
							$(this).find('iframe').remove();
						});
					<?php
					} elseif ($rowType == 'hero') { ?>
						// Insert iframe into modal
						$('.ifx-row-<?php echo $rowCount; ?> .hero__image a').on('click',function(e) {
							//e.preventDefault();
							$('#heroModal_<?php echo $rowCount; ?> .embed-container').append('<?php echo $iFrame; ?>');
						});
						// Delete HTML iframe element on close of modal
						$('#heroModal_<?php echo $rowCount; ?>').on("hidden.bs.modal", function () {
							$(this).find('iframe').remove();
						});
					<?php
					} else {}
					
					echo '})( jQuery );';
					echo '</script>';

				}
				
			}
			
		} else {}
		$rowCount++;
	}
}

