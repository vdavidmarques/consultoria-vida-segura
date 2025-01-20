<?php
if (have_posts()) : while (have_posts()) : the_post();
        $relatedServices = get_field('available-service');
        if ($relatedServices):
?>
            <section class="single--related-service our-services" itemscope itemtype="http://schema.org/Service">
                <article class="scroll-effect" itemscope itemtype="http://schema.org/CreativeServce">
                    <div class="container our-services--content">
                        <div class="our-services--content--title default-heading-title" itemprop="headline">
                            <h4><strong>Serviços</strong> Relacionados</h4>
                        </div>
                    </div>
                </article>
                <?php
                foreach ($relatedServices as $related_post) :
                    $term_link = get_permalink($related_post->ID);
                    $term_name = get_the_title($related_post->ID);
                    if ($related_post->post_status == 'publish'):
                        echo '<div class="our-services--services container">';
                        echo '<article class="our-services--services--list">';
                        echo '<h3 class="our-services--services--list--title">Plano de Saúde - ' . esc_html($term_name) . '</h3>';
                        echo '<div class="our-services--services--list--term">';
                        echo '';
                        echo '<a href="' . esc_url($term_link) . '" class="our-services--services--list--link" itemprop="url">';
                        echo 'Conheça mais</a>';
                        echo '</div>';
                        echo '</article>';
                        echo '</div>';
                    endif;
                endforeach;
                ?>
            </section>
<?php
        endif;
    endwhile;
endif;
?>