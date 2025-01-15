<?php get_header(); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <article id="post-<?php the_ID(); ?>" class="page">
        <h1 class="entry-title" itemprop="name">
            <?php the_title(); ?> - Page.php
        </h1> 
    </article>
<?php endwhile;
endif; ?>
<?php get_footer(); ?>