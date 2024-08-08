
<?php get_header();  ?>
<section class="single single-planos-odontologicos">
    <?php 
        if (have_posts()) : while (have_posts()) : the_post(); 
        include get_template_directory() . '/components/main-banner.php';  
    ?>
        <article>
            <div class="container facilities">
                <div class="content">
                    <div itemprop="articleBody" class="title">
                        <h1 class="main-title">Plano odontológico - <?php the_title() ?></h1>
                        <?php echo get_field('facilities-title'); ?>
                    </div>
                    <?php include get_template_directory() . '/blocks/icons-and-texts.php'; ?>
                </div>
            </div>
            <?php include get_template_directory() . '/components/tabs.php'; ?>
        </article>
    <?php endwhile;
    endif; ?>
</section>

<section class="partners container py-20">
    <div class="title">
    <?php 
        function checkEnvironment()
            {
                $serverUrl = $_SERVER['HTTP_HOST'];

                $productionUrl = 'consultoriavidasegura.com';
                $localhostUrl = 'localhost';

                if ($serverUrl === $productionUrl) {
                    return '115';
                }

                if ($serverUrl === $localhostUrl) {
                    return '63';
                }

                return 'Ambiente desconhecido';
            }

            $environment = checkEnvironment();
            $id = $environment;
        ?>
       
        <?php $title = get_field('partners-title', $id) ?>
        <?php echo $title ?>
    </div>
    <div class="slides">
        <div class="swiper-container">

            <?php
            $postID = $post->ID;
            $args = array(
                'post_type' => 'planos-odontologicos',
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