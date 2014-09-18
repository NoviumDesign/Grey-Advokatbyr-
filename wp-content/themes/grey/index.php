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
 * @package Grey
 */

get_header(); ?>

<header class="hero">
	<div class="hero-headline-container">
		<h1 class="hero-headline"><?php the_field('headline'); ?></h1>
	</div>
	<div class="hero-navigation-container">
		<div class="search-container">
			<form method="get" id="searchform" action="<?php bloginfo('home'); ?>/">
				<input type="text" value="<?php echo wp_specialchars($s, 1); ?>" name="search" id="search" placeholder="Sök">
			</form>
		</div>
		<div class="language-nav-container">
	    <?php wp_nav_menu( array( 'theme_location' => 'language' ) ); ?>
		</div>
	</div>
</header>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php if ( have_posts() ) : ?>

			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

				<?php
					/* Include the Post-Format-specific template for the content.
					 * If you want to override this in a child theme, then include a file
					 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
					 */
					get_template_part( 'content', get_post_format() );
				?>

			<?php endwhile; ?>

			<?php grey_paging_nav(); ?>

		<?php else : ?>

			<?php get_template_part( 'content', 'none' ); ?>

		<?php endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
