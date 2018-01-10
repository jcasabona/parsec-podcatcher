<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package Parsec
 */

get_header(); ?>

<?php get_sidebar( 'left' ); ?>
	<div id="primary" class="content-area home three-col">
		<main id="main" class="site-main" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'content', 'home-podcast' ); ?>

			<?php endwhile; // end of the loop. ?>

		</main><!-- #main -->
		<div class="pagination clear">
			<?php echo paginate_links(); ?>
		</div>
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
