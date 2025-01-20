<?php get_header();  ?>
<section class="single single-planos-funeral" itemscope itemtype="http://schema.org/Product">
    <?php
    include get_template_directory() . '/components/banner.php';
    if (have_posts()) : while (have_posts()) : the_post();
    ?>
            <article class="descriptive-table single--descriptive-table" itemscope itemtype="http://schema.org/CreativeServce">
                <div class="container tables">
                    <div class="title scroll-effect default-heading-title" itemprop="name">
                        <h1 itemprop="name" class="main-title">Plano Funerário <br /> <?php single_post_title() ?></h1>
                    </div>
                    <div class="itens scroll-effect" itemprop="description">
                        <div class="text">
                            <?php echo get_field('facilities-desc'); ?>
                        </div>
                    </div>
                </div>
            </article>
    <?php endwhile;
    endif; 
    
    echo '<section>';
    include 'components/call-to-action-singles.php';
    echo '</section>';
    ?>
</section>

<section>
    <?php
    require_once 'components/partners.php';
    $slider = new CustomPostTypeSlider('planos-funeral');
    $slider->display_slider();
    ?>
</section>

<?php get_footer(); ?>