<article class="container facilities scroll-effect"  itemscope itemtype="http://schema.org/CreativeWork">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <div itemprop="headline" class="title">
            <?php echo get_field('facilities-title'); ?>
        </div>
        <?php include get_template_directory() . '/blocks/icons-and-texts.php'; ?>
    <?php
        endwhile;
    endif;
    ?>
</article>