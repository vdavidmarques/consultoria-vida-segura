<div class="partners container py-20">
    <div class="text-center">
        <?php $title = get_field('partners-title', '63') ?>
        <?php echo $title ?>
    </div>
    <div class="flex flex-row">
        <?php
            $args = array(
                'post_type' => 'parceiros',
                'posts_per_page' => -1,
                'post_status' => 'publish',
            );

            $query = new WP_Query($args);

            if ($query->have_posts()) : ?>
                <div class="partners-list">
                    <?php while ($query->have_posts()) : $query->the_post(); ?>
                        <?php if (has_post_thumbnail()) : ?>
                            <div class="partners-item">
                                <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
                                    <?php the_post_thumbnail('thumbnail'); ?>
                                </a>
                            </div>
                        <?php endif; ?>
                    <?php endwhile; ?>
                </div>
                <?php
                wp_reset_postdata();
            else :
                echo '<p>Nenhum parceiro encontrado.</p>';
            endif;
        ?>
    </div>
</div>