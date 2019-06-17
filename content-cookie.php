<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package Social Care Lite
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
	</header><!-- .entry-header -->
   <?php the_content(); ?>

	<div class="entry-content">
<script id="CookieDeclaration" src="https://consent.cookiebot.com/3dd00984-c5a8-4f6c-b4c3-e24baca3775c/cd.js" type="text/javascript" async></script>
			<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'social-care-lite' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->
	<?php edit_post_link( __( 'Edit', 'social-care-lite' ), '<footer class="entry-meta"><span class="edit-link">', '</span></footer>' ); ?>
</article><!-- #post-## -->
