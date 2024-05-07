<article class="container facilities">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <div itemprop="articleBody" class="title">
            <?php echo get_field('facilities-title'); ?>
        </div>
        <?php include get_template_directory() . '/blocks/icons-and-texts.php'; ?>
    <?php
        endwhile;
    endif;
    ?>
</article>