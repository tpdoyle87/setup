<?php
/**
 * Default Single Post Template
 *
 */

get_header(); ?>

<div class="content-wrap single-content container view-height" role="main">

    <?php while ( have_posts() ) : the_post(); ?>

    <article id="post-<?php the_ID(); ?>" class="group introduction" role="article">
        <header>
            <h1 class="title"><?php the_title(); ?></h1>
            <time class="date" datetime="<?php the_time( 'Y-m-d' ); ?>" pubdate><?php the_time( 'F j, Y' ); ?></time>
        </header>

        <?php the_content(); ?>
    </article>
    <section class="blog-index">
      <?php comments_template( '', true ); ?>
    </section>
    <?php endwhile; ?>

</div><!-- end content -->

<?php // get_sidebar(); ?>

<?php get_footer(); ?>
