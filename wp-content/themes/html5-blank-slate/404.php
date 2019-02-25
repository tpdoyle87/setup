<?php
/**
 * Default 404 Template
 *
 */

get_header(); ?>

<div class="content-wrap page-content container view-height" role="main">

    <article id="post-404-error" <?php post_class( 'group', 'view-height' ); ?>>
        <h2><?php _e( 'Page could not be found', 'h5bs' ); ?></h2>
    </article>

</div><!-- end content -->

<?php // get_sidebar(); ?>

<?php get_footer(); ?>
