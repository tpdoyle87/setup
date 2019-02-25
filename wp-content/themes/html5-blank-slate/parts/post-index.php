<article class="group blog-index introduction" role="article">
    <header>
        <h2 class=""><a class="title"href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
        <time class="date" datetime="<?php the_time( 'Y-m-d' ); ?>" pubdate><?php the_time( 'F j, Y' ); ?></time>
    </header>
    <?php the_excerpt(); ?>
    <hr class="break">
</article>
