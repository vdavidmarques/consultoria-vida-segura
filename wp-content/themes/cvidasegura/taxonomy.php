<?php get_header(); ?>
<section class="content-area taxonomy">

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
            <ul class="scroll-effect">
                <?php
                $lists = get_field('list', $queried_object);
                if ($lists) :
                    foreach ($lists as $list) :
                ?>
                        <li class="list">
                            <?php echo $list['item']; ?>
                        </li>
                <?php
                    endforeach;
                endif;
                ?>
            </ul>
        </div>
    </article>

    <div class="partners">
        <div class="title">
            <!-- If localhost -->
                <?php /*$title = get_field('partners-title', '63') */?>
            <!-- If production -->
                <?php $title = get_field('partners-title', '115') ?>
                <?php echo $title ?>
        </div>
        <?php if (have_posts()) : ?>
            <div class="slides container">
                <div class="swiper-container">
                    <div class="partner-list swiper-wrapper">
                        <?php while (have_posts()) : the_post(); ?>
                            <?php if (has_post_thumbnail()) : ?>
                                <div id="post-<?php the_ID(); ?>" class="partners-item swiper-slide">
                                    <a itemprop="name" href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" itemprop="name">
                                        <?php the_post_thumbnail('thumbnail'); ?>
                                    </a>
                                </div>
                            <?php endif; ?>
                        <?php endwhile; ?>
                    </div>
                </div>
            </div>
        <?php else : ?>
            <p class="mt-20">Nenhum produto para <?php single_term_title(); ?> encontrado</p>
            <p>Podemos lhe ajudar de outras maneiras. Entre em contato</p>
        <?php endif; ?>
    </div>

</section>
<?php get_footer(); ?>