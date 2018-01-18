<?php $latest_episode_id = wpp_get_latest_episode(); ?>

<div class="latest-episode">
	<div class="featured-image">
		<?php
			if ( has_post_thumbnail( $latest_episode_id ) ) {
				$title = get_the_title( $latest_episode_id );
				the_post_thumbnail( 'full', $latest_episode_id, array( 'title' => $title ) );
			}
		?>
	</div>
	<div class="episode">
		<?php
			$episode_data = powerpress_get_enclosure_data( $latest_episode_id );
			echo do_shortcode( '[audio src="'. esc_url( $episode_data['url'] ) .'"]' );
		?>
		<p><a class="show-notes" href="<?php echo get_the_permalink( $latest_episode_id ); ?>">View Show Notes</a></p>
		<div class="wpp-episode-sponsors">
			<?php echo parsec_sponsor_text_links( $latest_episode_id ); ?>	
		</div>
	</div>
</div>