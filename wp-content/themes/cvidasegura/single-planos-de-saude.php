<?php get_header();  ?>
<section class="single single-planos-de-saude" itemscope itemtype="http://schema.org/Product">
    <?php
    if (have_posts()) : while (have_posts()) : the_post();
            include get_template_directory() . '/components/banner.php';
            if(get_field('facilities-desc')):
    ?>
        <article class="descriptive-table single--descriptive-table" itemscope itemtype="http://schema.org/CreativeServce">
            <div class="tables container">
                <div class="title scroll-effect default-heading-title" itemprop="name">
                    <h1 itemprop="name" class="main-title"><strong>Planos de Saúde</strong> <br/> <?php single_post_title() ?></h1>
                </div>
                <div class="itens scroll-effect" itemprop="description">
                    <div class="text">
                        <?php echo get_field('facilities-desc'); ?>
                    </div>
                </div>
            </div>
        </article>
    <?php
        endif;
        endwhile;
    endif;

    include 'components/call-to-action-singles.php';
    ?>
</section>
<?php include 'components/related-service.php'; ?>
<section>
    <?php
    $postID = $post->ID;
    require_once 'components/partners.php';
    $slider = new CustomPostTypeSlider('planos-de-saude', $postID);
    $slider->display_slider();
    ?>
</section>

<?php get_footer(); ?>