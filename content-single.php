<?php
/**
 * @package Parsec
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="featured-image center">
		<?php
			if ( has_post_thumbnail() ) {
				the_post_thumbnail( 'full' );
			}
		?>
	</div>
	<header class="entry-header">
		<div class="entry-meta posted-on">
			<?php parsec_posted_on(); ?>
		</div><!-- .entry-meta -->
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php the_content(); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'parsec' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php parsec_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
