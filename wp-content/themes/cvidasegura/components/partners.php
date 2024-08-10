<?php
class CustomPostTypeSlider {
    private $post_type;
    private $post_id;

    public function __construct($post_type = null, $post_id = null) {
        $this->post_type = $post_type;
        $this->post_id = $post_id;
    }

    public function display_slider() {
        $args = array(
            'post_type' => $this->post_type,
            'posts_per_page' => -1,
            'post_status' => 'publish',
            'post__not_in' => array($this->post_id,),
        );

        $query = new WP_Query($args);
        if ($query->have_posts()) :
    ?>
            <article class="scroll-effect partners container">
                <div class="title">
                    Nossos produtos
                </div>
                <div class="slides">
                    <div class="swiper-container">
                        <div class="partners-list swiper-wrapper">
                            <?php while ($query->have_posts()) : $query->the_post(); ?>
                                <?php if (has_post_thumbnail()) : ?>
                                    <div class="partners-item swiper-slide">
                                        <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" itemprop="name">
                                            <?php the_post_thumbnail('thumbnail'); ?>
                                        </a>
                                    </div>
                            <?php
                                endif;
                            endwhile;
                            ?>
                        </div>
                        <?php
                        if ($query->found_posts > 1) : ?>
                            <div class="swiper-button-prev arrow-swiper arrow-swiper-prev"></div>
                            <div class="swiper-button-next arrow-swiper arrow-swiper-next"></div>
                        <?php
                        endif;
                        wp_reset_postdata(); ?>
                    </div>
                </div>
            </article>
        <?php else : ?>
            <p class="mt-20">Nenhum produto para <?php single_term_title(); ?> encontrado</p>  
            <p>Podemos lhe ajudar de outras maneiras. Entre em contato</p>
        <?php endif;
    }
}
?>
