<?php get_header();  ?>
<section class="single single-planos-de-saude" itemscope itemtype="http://schema.org/Product">
    <?php 
        if (have_posts()) : while (have_posts()) : the_post(); 
            include get_template_directory() . '/components/main-banner.php'; 
            $post      = $wp_query->get_queried_object();
            $post_id   = $post->ID;
    ?>
            <article>
                <div class="container facilities">
                    <div class="content">
                        <div itemprop="articleBody" class="title">
                            <h1 itemprop="name" class="main-title">Planos de Saúde - <?php single_post_title() ?></h1>
                            <?php echo get_field('facilities-title'); ?>
                        </div>
                        <?php include get_template_directory() . '/blocks/icons-and-texts.php'; ?>
                    </div>
                </div>
                <?php include get_template_directory() . '/components/tabs.php'; ?>
            </article>
    <?php endwhile;
    endif; ?>
</section>

<section>
    <?php
        $postID = $post->ID;
        require_once 'components/partners.php';
        $slider = new CustomPostTypeSlider('planos-de-saude', $postID);
        $slider->display_slider();
    ?>
</section>

<?php get_footer(); ?>