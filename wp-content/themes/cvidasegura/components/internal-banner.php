<article class="banner internal-banner" itemscope itemtype="http://schema.org/CreativeServce">
    <?php
    $args = array(
        'name' => 'informacoes',
        'post_type' => 'page',
    );

    $query = new WP_Query($args);
    while ($query->have_posts()) :
        $query->the_post();
        $whatsappNumber = get_field('whatsappNumber');
        $whatsappMessage = get_field('whatsappMessage');

        //Checking archive types
        $post_types = [
            'planos-de-saude' => 'health-insurance',
            'seguros' => 'life-insurance',
            'planos-odontologicos' => 'dental-plans',
            'planos-funeral' => 'funeral-plans'
        ];
        foreach ($post_types as $post_type => $field) {
            if (is_post_type_archive($post_type)) {
                $custom_field = get_field($field);
                $banners = $custom_field['banners-health-insurance'];
                break;
            }
        }
        $count = 0;
        if ($banners) :
    ?>
            <div class="container swiper-container">
                <div class="swiper-wrapper">
                    <?php foreach ($banners as $banner) : ?>
                        <div class="swiper-slide">
                            <div class="banner--image">
                                <?php
                                if ($banner['image']) :
                                    if ($banner['image']['alt']) {
                                        $alt = $banner['image']['alt'];
                                    } else {
                                        $alt = 'Consultoria Vida segura';
                                    }
                                ?>
                                    <img src="<?php echo $banner['image']['url'] ?>" alt="<?php echo $alt ?>" itemprop="image" class="w-full h-full object-cover show-desktop ease-in-out">
                                <?php endif; ?>
                                <?php if ($banner["image-mobile"]) : ?>
                                    <img src="<?php echo $banner['image-mobile']['url'] ?>" alt="<?php echo $banner['image-mobile']['alt'] ?>" itemprop="image" class="w-full h-full object-cover show-mobile ease-in-out">
                                <?php else : ?>
                                    <img src="<?php echo $banner["image"]['url'] ?>" alt="<?php echo $alt ?>" itemprop="image" class="w-full h-full object-cover ease-in-out">
                                <?php endif; ?>
                            </div>

                            <div class="banner--context">
                                <div class="banner--context--content">
                                    <div itemprop="headline" class="default-heading-title">
                                        <?php
                                            if ($banner['text']) :
                                                echo $banner['text'];
                                            endif;
                                        ?>
                                        <?php if ($banner['botao']) : ?>
                                            <a href="<?php echo $banner['botao']['url'] ?>" itemprop="url" class="mt-6 button button-first">
                                                <?php echo  $banner['botao']['title'] ?>
                                            </a>
                                            <?php
                                        else : ?>
                                                <a target="_blank" href="https://api.whatsapp.com/send?phone=<?php echo $whatsappNumber ?>&text=<?php echo $whatsappMessage ?>" itemprop="url" class="mt-6 button button-first">
                                                    Veja mais
                                                </a>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                            <?php
                            $count = count($banners);
                            if ($count > 1) :
                            ?>
                                <div class="swiper-button-prev arrow-swiper arrow-swiper-prev"></div>
                                <div class="swiper-button-next arrow-swiper arrow-swiper-next"></div>
                            <?php endif; ?>
                        </div>
                    <?php endforeach; ?>
                </div>
        <?php
        endif;
    endwhile;
        ?>
</article>