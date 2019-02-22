<?php
/**
 * Default Blog Template
 *
 */

get_header(); ?>

<div class="container">
  <p>
    My name is Anthony Klob, but everyone calls me ant.
    This is a collection of story’s about my battle with the
    abyss and how it almost consumed me. Everyday is still a struggle,
    yet my days are much happier now. I have found a new purpose
    with my life, the wounds have healed and I hope my stories are able
    to help someone see that you wont feel this way forever.
  </p>

  <p>- Ant</p>
</div>
<div class="container">
  <div class="content-wrap index-content" role="main">

      <?php
      if ( have_posts() ) :
          while ( have_posts() ) : the_post();
              get_template_part( 'parts/post', 'index' );
          endwhile;

          get_template_part( 'parts/post', 'nav' );
      endif;
      ?>

  </div><!-- end content -->
</div>
<div>d</div>
<div>d</div>
<div>d</div>
<div>d</div>
<div>d</div>
<div>d</div>
<div>d</div>
<div>d</div>
<div>d</div>
<div>d</div>
<div>d</div>
<div>d</div>
<div>d</div>
<div>d</div>
<div>d</div>
<?php // get_sidebar(); ?>

<?php get_footer(); ?>
