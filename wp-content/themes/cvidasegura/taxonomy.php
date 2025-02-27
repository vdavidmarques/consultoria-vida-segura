<?php get_header(); ?>
<section class="content-area page-taxonomy" itemscope itemtype="http://schema.org/CollectionPage">

    <?php include 'components/banner.php'; ?>

    <article class="descriptive-table single--descriptive-table" itemscope itemtype="http://schema.org/CreativeServce">
        <div class="container tables">
            <div class="title scroll-effect default-heading-title" itemprop="name">     
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
                <div class="scroll-effect itens <?php echo $class ?>" itemprop="description">
                    <?php
                    foreach (array_slice($lists, 0, 4) as $list) :
                    ?>
                        <div class="text">
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
        <article class="scroll-effect partners partners-taxonomy container" itemscope itemtype="http://schema.org/CreativeServce">
            <div class="title" itemprop="headline">
                Nossos produtos
            </div>
            <div class="slides">
                <div class="swiper-container">
                    <div class="partner-list swiper-wrapper">
                        <?php while (have_posts()) : the_post(); ?>
                            <?php if (has_post_thumbnail()) : ?>
                                <div class="partners-item swiper-slide" itemscope itemtype="http://schema.org/Product">
                                    <a itemprop="name" href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" itemprop="name">
                                        <?php the_post_thumbnail('thumbnail'); ?>
                                    </a>
                                </div>
                            <?php
                            endif;
                            ?>
                        <?php endwhile; ?>
                    </div>
                </div>
            </div>
        </article>
    <?php else : ?>
        <article class="scroll-effect partners partners-taxonomy container" itemscope itemtype="http://schema.org/CreativeServce">
            <div class="title">
                <p class="mt-20">Nenhum produto para <?php single_term_title(); ?> encontrado</p>
            </div>
            <p>Podemos lhe ajudar de outras maneiras. Entre em contato</p>
        </article>
    <?php endif; ?>
</section>
<?php get_footer(); ?>