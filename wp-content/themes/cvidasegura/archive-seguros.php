<?php get_header(); ?>
<section itemscope itemtype="http://schema.org/Article" class="archive-seguros">
   
    <?php include 'blocks/breadcrumb.php' ?>
    <?php include 'components/internal-banner.php' ?>
    <?php include 'components/descriptive-table.php' ?>
    <?php include 'components/call-to-action.php' ?>

    <article>
        <div class="partners container py-20">
            <div class="title">
            <!-- If localhost -->
                <?php /*$title = get_field('partners-title', '63') */?>
            <!-- If production -->
                <?php $title = get_field('partners-title', '115') ?>
                <?php echo $title ?>
            </div>
            <div class="slides">
                <div class="swiper-container">
                    <?php
                    $args = array(
                        'post_type' => 'seguros',
                        'posts_per_page' => -1,
                        'post_status' => 'publish',
                    );

                    $query = new WP_Query($args);

                    if ($query->have_posts()) : ?>
                        <div class="partners-list swiper-wrapper">
                            <?php while ($query->have_posts()) : $query->the_post(); ?>
                                <?php if (has_post_thumbnail()) : ?>
                                    <div class="partners-item swiper-slide">
                                        <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" itemprop="name">
                                            <?php the_post_thumbnail('thumbnail'); ?>
                                        </a>
                                    </div>
                                <?php endif; ?>
                            <?php endwhile; ?>
                        </div>
                    <?php
                        wp_reset_postdata();
                    else :
                        echo '<p itemprop="articleBody">Nenhum parceiro encontrado.</p>';
                    endif;
                    ?>
                </div>
            </div>
        </div>
    </article>

</section>
<?php get_footer(); ?>