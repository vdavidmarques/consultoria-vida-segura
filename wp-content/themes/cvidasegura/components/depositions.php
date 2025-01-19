    <section class="depositions" itemscope itemtype="http://schema.org/CreativeServce">
        <div class="container">
            <div class="default-heading-title depositions--title">
                <h2 itemprop="headline"><strong>Nossos</strong> clientes</h2>
            </div>    
            <div class="depositions--slides scroll-effect">
                <?php

                function exibir_depoimentos()
                {
                    $args = array(
                        'post_type' => 'depoimentos',
                        'posts_per_page' => -1,
                        'orderby' => 'date',
                        'order' => 'DESC'
                    );

                    $depoimentos_query = new WP_Query($args);

                    if ($depoimentos_query->have_posts()) : ?>
                        <div class="swiper-container">
                            <div class="list swiper-wrapper">
                                <?php while ($depoimentos_query->have_posts()) : $depoimentos_query->the_post(); ?>
                                    <div class="item swiper-slide" itemscope itemtype="http://schema.org/Review">
                                        <?php if (has_post_thumbnail()) : ?>
                                            <div class="thumbnail">
                                                <?php the_post_thumbnail('thumbnail'); ?>
                                            </div>
                                        <?php else: ?>
                                            <div class="thumbnail">
                                                <img src="<?php echo get_template_directory_uri() . '/dist/library/images/sem-imagem.jpg' ?>" alt="<?php the_title(); ?>" itemprop="image">
                                            </div>
                                        <?php endif; ?>
                                        <div class="content">
                                            <div class="default-heading-title">
                                                <h3 itemprop="name" class="title"><?php the_title(); ?></h3>
                                            </div>
                                            <h4 class="company">EMPRESA: <?php echo get_field('company'); ?></h4>
                                            <div itemprop="reviewBody" class="text"><?php the_content(); ?></div>
                                        </div>
                                    </div>
                                <?php endwhile; ?>
                            </div>

                        </div>
                    <?php else : ?>
                        <p>Nenhum depoimento encontrado.</p>
                <?php
                    endif;
                    wp_reset_postdata(); 
                }
                exibir_depoimentos(); 
                ?>
            </div>
        </div>
    </section>