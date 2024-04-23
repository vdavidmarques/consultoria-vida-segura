<?php get_header();  ?>
single planos-de-saude.php
<section class="single-planos-de-saude">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <?php the_title() ?>
        <?php echo get_field('single-banner-image') ?>
        <p><?php echo get_field('single-banner-texts') ?></p>
        <p><?php echo get_field('descriptive-texts') ?></p>
        <?php 
            //Item 1
            $itemF = get_field('icon-text-group-1');
            if ($itemF) {
                $iconF = $itemF['icone'];
                $textF = $itemF['texto'];
            }

            //Item 2
            $itemS = get_field('icon-text-group-2');
            if ($itemS) {
                $iconS = $itemS['icone'];
                $textS = $itemS['texto'];
            }

            //Item 3
            $itemT = get_field('icon-text-group-2');
            if ($itemT) {
                $iconT = $itemT['icone'];
                $textT = $itemT['texto'];
            }
        ?>
        <div class="itens">
            <?php echo  $iconF ?>
            <?php echo $textF ?>

            <?php echo  $iconS ?>
            <?php echo $textS ?>

            <?php echo  $iconT ?>
            <?php echo $textT ?>
                        
            <?php include get_template_directory() . '/components/accordion-first.php'; ?>
            <?php include get_template_directory() . '/components/accordion-second.php'; ?>
            <?php include get_template_directory() . '/components/accordion-third.php'; ?>

        </div>
        
    <?php endwhile;
    endif; ?>
</section>

<section class="other-plans-swiper">
    <div class="flex flex-row">
    <?php
        $postID = $post->ID; 
        $args = array(
            'post_type' => 'planos-de-saude',
            'posts_per_page' => -1,
            'post_status' => 'publish',
            'post__not_in' => array($postID),
        );

        $query = new WP_Query($args);

        if ($query->have_posts()) : ?>
            <div class="partners-list-swiper flex flex-row">
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
    </div>
</section>
   
<?php get_footer(); ?>