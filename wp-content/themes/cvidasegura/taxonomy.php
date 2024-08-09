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
                //print_r($lists);
                if ($lists) :
                $count = count($lists);
                $class = 
                    ($count == 1) ? 'col-1' :
                    (($count == 2) ? 'col-2' :
                    (($count == 3) ? 'col-3' :
                    (($count >= 4) ? 'col-4' : 'col-default')));             
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

    <article class="partners">
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
  
            $title = get_field('partners-title', $id);
            echo $title 
        ?>
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
    </article>

</section>
<?php get_footer(); ?>