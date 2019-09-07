<?php
/**
 * Template part for displaying single post in single.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Lite_Photo
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	
	<div class="single-post-header">
        <h2 classs="single-post-title"><?php esc_html_e( the_title() , 'litephoto' ); ?></h2>
    </div><!-- .single-post-header -->

    <?php if( has_post_thumbnail() ) : ?>
        <div class="single-post-thumbnail">
            <img src="<?php the_post_thumbnail_url(); ?>">
        </div><!-- .single-post-thumbnail -->
    <?php endif; ?>
    <div class="single-post-content">
        <?php the_content(); ?>
    </div><!-- .single-post-content -->

</article><!-- #post-<?php the_ID(); ?> -->