<?php get_header(); ?>
    <section itemscope itemtype="http://schema.org/Article">
        <h1 itemprop="name">
            <?php the_archive_title(); ?>
        </h1>
        <?php
            $args = array(
                'post_type' => 'planos_saude',
                'posts_per_page' => -1,
                'post_status' => 'publish',
            );

            $query = new WP_Query($args);

            if ($query->have_posts()) : ?>
                <div class="partners-list flex flex-row">
                    <?php while ($query->have_posts()) : $query->the_post(); ?>
                        <?php if (has_post_thumbnail()) : ?>
                            <div class="partners-item">
                                <a itemprop="name" href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" itemprop="name">
                                    <?php the_post_thumbnail('thumbnail'); ?>
                                </a>
                            </div>
                        <?php endif; ?>
                    <?php endwhile; ?>
                </div>
                <?php
                wp_reset_postdata();
            else :
                echo '<p itemprop="description">Nenhum Plano de Saúde encontrado.</p>';
            endif;
        ?>
    </section>
<?php get_footer(); ?>