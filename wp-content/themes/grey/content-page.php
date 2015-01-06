<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package Grey
 */
?>

<?php if(get_field('bg-image')): ?>
<header class="hero" style="background-image: url('<?php the_field('bg-image'); ?>')">
<?php else: ?>
<header class="hero" style="background: url('get_theme_root(images/header-background.jpg'))">
<?php endif; ?>
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
</header><!-- .entry-header -->

<div id="primary" class="content-area">
	<div class="main-content">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
		<div class="entry-content">
			<?php the_content(); ?>
			<?php
				wp_link_pages( array(
					'before' => '<div class="page-links">' . __( 'Pages:', 'grey' ),
					'after'  => '</div>',
				) );
			?>
		</div><!-- .entry-content -->
		<footer class="entry-footer site-footer">
			Copyright © <?php echo date('Y'); ?> Grey Advokatbyrå. <?php _e( 'All rights are reserved', 'grey' ); ?>.
			<?php edit_post_link( __( 'Edit this page', 'grey' ), '<p><span class="edit-link">', '</span></p>' ); ?>
		</footer><!-- .entry-footer -->
	</div>
</div>