<?php get_header();  ?>
<section class="single single-seguros">
    <?php include get_template_directory() . '/components/main-banner.php'; ?>

    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <article>
                <div class="container facilities">
                    <div itemprop="articleBody" class="title">
                        <h1 class="main-title"><?php the_title() ?></h1>
                        <?php echo get_field('facilities-title'); ?>
                    </div>
                    <?php include get_template_directory() . '/blocks/icons-and-texts.php'; ?>
                </div>

                <?php include get_template_directory() . '/components/tabs.php'; ?>

            </article>

    <?php endwhile;
    endif; ?>
</section>

<section class="partners container py-20">
    <div class="title">
        <?php $title = get_field('partners-title', '63') ?>
        <?php echo $title ?>
    </div>
    <div class="slides">
        <div class="swiper-container">

            <?php
            $postID = $post->ID;
            $args = array(
                'post_type' => 'seguros',
                'posts_per_page' => -1,
                'post_status' => 'publish',
                'post__not_in' => array($postID),
            );

            $query = new WP_Query($args);

            if ($query->have_posts()) : ?>
                <div class="partners-list swiper-wrapper">
                    <?php while ($query->have_posts()) : $query->the_post(); ?>
                        <?php if (has_post_thumbnail()) : ?>
                            <div class="partners-item swiper-slide">
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
                echo '<p itemprop="description">Nenhum Parceiro encontrado.</p>';
            endif;
            ?>
        </div>
    </div>

</section>

<?php get_footer(); ?>