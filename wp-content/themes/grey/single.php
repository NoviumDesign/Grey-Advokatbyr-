<?php
/**
 * The template for displaying all single posts.
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

		<?php while ( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'content', 'single' ); ?>

			<?php grey_post_nav(); ?>

			<?php
				// If comments are open or we have at least one comment, load up the comment template
				if ( comments_open() || '0' != get_comments_number() ) :
					comments_template();
				endif;
			?>

		<?php endwhile; // end of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>