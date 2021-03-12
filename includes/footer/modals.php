<?php

//$rowCount = 1;
if( have_rows('ifx_flexible_rows') ) {
	while ( have_rows('ifx_flexible_rows') ) {
		the_row();
		$rowType = get_row_layout();
		
		if ( $rowType == 'hero_video_background' ) {
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
				
				// Hero Video Background Modal Settings
				echo '<!-- Modal -->
				<div class="modal modal__video-background fade" id="videoBGModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
					<div class="modal-dialog modal-dialog-centered">
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true"><i class="fas fa-times"></i></span>
								</button>
							</div>
							<div class="modal-body source_' . $videoSource . '">
								<div class="embed-container">
									' . $iFrame . '
								</div>
							</div>
						</div>
					</div>
				</div>';
				
			}
			
			
		} else {}
		//$rowCount++;
	}
}

