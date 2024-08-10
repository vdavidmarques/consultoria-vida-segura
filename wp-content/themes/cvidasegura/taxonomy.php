<?php get_header(); ?>
<section class="content-area page-taxonomy">

    <?php include 'blocks/breadcrumb.php'; ?>
    <?php include 'components/banner.php'; ?>

    <article class="container facilities">
        <div class="content">
            <div itemprop="articleBody" class="title scroll-effect ">
                <?php
                $queried_object = get_queried_object();
                echo get_field('facilities-title', $queried_object);
                ?>
            </div>
            <?php
            $lists = get_field('list', $queried_object);
            if ($lists) :
                $count = count($lists);
                $class =
                    ($count == 1) ? 'col-1' : (($count == 2) ? 'col-2' : (($count == 3) ? 'col-3' : (($count >= 4) ? 'col-4' : 'col-default')));
            ?>
                <div class="scroll-effect facilities-list <?php echo $class ?>">
                    <?php
                    foreach (array_slice($lists, 0, 4) as $list) :
                    ?>
                        <div class="list">
                            <?php echo $list['item']; ?>
                        </div>
                <?php
                    endforeach;
                endif;
                ?>
                </div>
        </div>
    </article>

    <?php if (have_posts()) : ?>
        <article class="scroll-effect partners partners-taxonomy container">
            <div class="title">
                Nossos produtos
            </div>
            <div class="slides">
                <div class="swiper-container">
                    <div class="partner-list swiper-wrapper">
                        <?php while (have_posts()) : the_post(); ?>
                            <?php if (has_post_thumbnail()) : ?>
                                <div class="partners-item swiper-slide">
                                    <a itemprop="name" href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" itemprop="name">
                                        <?php the_post_thumbnail('thumbnail'); ?>
                                    </a>
                                </div>
                            <?php endif; ?>
                        <?php endwhile; ?>
                    </div>
                </div>
            </div>
        </article>
    <?php else : ?>
        <p class="mt-20">Nenhum produto para <?php single_term_title(); ?> encontrado</p>
        <p>Podemos lhe ajudar de outras maneiras. Entre em contato</p>
    <?php endif; ?>
</section>
<?php get_footer(); ?>