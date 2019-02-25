<?php
/**
 * Default Page Template
 *
 */

get_header(); ?>

<div class="content-wrap page-content blog-index view-height" role="main">

    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

    <article class="group blog-index introduction" role="article">
        <h1 class="title"><?php the_title(); ?></h1>
        <?php the_content(); ?>
    </article>

    <?php endwhile; endif; ?>

</div><!-- end content -->

<?php // get_sidebar(); ?>

<?php get_footer(); ?>
