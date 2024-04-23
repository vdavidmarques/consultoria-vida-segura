<?php get_header(); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <article id="post-<?php the_ID(); ?>" class="page" itemscope itemprop="articleBody">
            <h1 class="entry-title" itemprop="name"><?php the_title(); ?> - page-sobre-nos.php </h1>
        </article>
    <?php
    endwhile;
    ?>
    <img src="<?php echo get_field('bg-image-about-us') ?>" alt="Sobre nós - Consultoria Vida Segura" />
<?php
    echo get_field('main-title-about-us');
endif;
get_footer();
?>