<?php
/**
 * The template used for displaying page content in page-home.php, sans podcatcher plugin.
 *
 * @package Parsec
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<h3><?php the_title(); ?></h3>
	<div class="episode">
		<?php
			$episode_data = powerpress_get_enclosure_data( get_the_ID() );
			echo do_shortcode( '[audio src="'. esc_url( $episode_data['url'] ) .'"]' );
		?>
		<p><a class="show-notes" href="<?php echo get_the_permalink(); ?>">View Show Notes</a></p>
	</div>
	<div class="wpp-episode-sponsors">
		Sponsored by: <?php echo parsec_sponsor_text_links( get_the_ID(), true ); ?>	
	</div>
</article><!-- #post-## -->
