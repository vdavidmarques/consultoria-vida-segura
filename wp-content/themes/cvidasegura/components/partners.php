<!-- 
    Todos os parceiros inclusos na seção Parceiros, estão sendo mostrados automaticamente através de código implementado.
    IMPORTANTE: Para que o Parceiro apareça é preciso que o logo(Imagem) esteja aplicado no post
-->
<?php
$args = array(
    'post_type' => 'parceiros',
    'posts_per_page' => -1,
    'post_status' => 'publish',
);

$query = new WP_Query($args);

if ($query->have_posts()) :
?>
    <div class="scroll-effect partners container py-20">
        <div class="title">
           Nossos produtos
        </div>
        <div class="slides">
            <div class="swiper-container">
                <div class="partners-list swiper-wrapper">
                    <?php while ($query->have_posts()) : $query->the_post(); ?>
                        <?php if (has_post_thumbnail()) : ?>
                            <div class="partners-item swiper-slide">
                                <?php if(is_home()): ?>
                                    <?php the_post_thumbnail('thumbnail'); ?>
                                <?php else : ?>
                                    <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" itemprop="name">
                                        <?php the_post_thumbnail('thumbnail'); ?>
                                    </a>
                                <?php endif ?>
                            </div>
                        <?php endif; ?>
                    <?php endwhile; ?>
                </div>
                <?php wp_reset_postdata(); ?>
            </div>
        </div>
    </div>
<?php endif; ?>