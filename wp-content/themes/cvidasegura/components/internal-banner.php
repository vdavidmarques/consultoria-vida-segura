<article class="internal-banner banner">
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
        if (is_post_type_archive('planos-de-saude')) {
            $healthInsurance = get_field('health-insurance');
            $banners = $healthInsurance['banners-health-insurance'];
        } elseif (is_post_type_archive('seguros')) {
            $lifeInsurance = get_field('life-insurance');
            $banners = $lifeInsurance['banners-health-insurance'];
        } elseif (is_post_type_archive('planos-odontologicos')) {
            $dentalPlans = get_field('dental-plans');
            $banners = $dentalPlans['banners-health-insurance'];
        } elseif (is_post_type_archive('planos-funeral')) {
            $funeralPlans = get_field('funeral-plans');
            $banners = $funeralPlans['banners-health-insurance'];
        }
        $count = 0;
        if ($banners) :
    ?>
            <div class="swiper-container relative overflow-hidden">
                <div class="swiper-wrapper">
                    <?php foreach ($banners as $banner) : ?>
                        <div class="swiper-slide">
                            <div class="main-banner-pattern">&nbsp;</div>
                            <div class="image">
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

                            <div class="context">
                                <div class="content">
                                    <div class="default-heading-title">
                                        <?php
                                            if ($banner['text']) :
                                                echo $banner['text'];
                                            endif;
                                        ?>
                                    </div>
                                    <?php if ($banner['botao']) : ?>
                                        <a href="<?php echo $banner['botao']['url'] ?>" itemprop="name" class="mt-6 button button-first">
                                            <?php echo  $banner['botao']['title'] ?>
                                        </a>
                                        <?php
                                    else : ?>
                                            <a target="_blank" href="https://api.whatsapp.com/send?phone=<?php echo $whatsappNumber ?>&text=<?php echo $whatsappMessage ?>" itemprop="name" class="mt-6 button button-first">
                                                Veja mais
                                            </a>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <div class="main-banner-pattern-2">&nbsp;</div>
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