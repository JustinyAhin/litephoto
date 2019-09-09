<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Lite_Photo
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php if( has_post_thumbnail() ) : ?>

		<div class="post-thumbnail-container" style="background-image:url('<?php the_post_thumbnail_url(); ?>')";>

	<?php else: ?>

		<div class="post-thumbnail-container" style="background:#fefefe;">
			
	<?php endif; ?>
			<div class="post-title-overlay">
				<?php esc_html_e( the_title( '<h2 class="post-title">
					<a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' ), 'litephoto' ); ?>
			</div>
		</div>

</article><!-- #post-<?php the_ID(); ?> -->