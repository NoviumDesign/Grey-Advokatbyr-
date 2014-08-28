<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package Grey
 */
?>

<header class="entry-header">
	<?php the_title( '<span class="entry-title">', '</span>' ); ?>
	<h1><?php the_field('headline'); ?></h1>
</header><!-- .entry-header -->
<div id="primary" class="content-area">
	<div class="main-content">
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