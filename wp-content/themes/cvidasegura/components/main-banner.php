<?php
$firstBanners = get_field("first-banner", $id);
$count = 0;
if ($firstBanners) :
?>
    <section itemscope itemtype="http://schema.org/CreativeServce" class="main-banner banner">
        <div class="swiper-container relative overflow-hidden">
            <div class="swiper-wrapper">
                <?php
                foreach ($firstBanners as $firstBanner) :

                    if ($firstBanner["main-banner-image"] || $firstBanner["main-banner-image-mobile"]) :
                ?>
                        <div class="swiper-slide">
                            <div class="main-banner-pattern">&nbsp;</div>
                            <div class="image">
                                <img src="<?php echo $firstBanner["main-banner-image"]['url'] ?>" alt="<?php echo $firstBanner["main-banner-image"]['alt'] ?>" itemprop="image" class="w-full h-full object-cover show-desktop">
                                <?php if ($firstBanner["main-banner-image-mobile"]) : ?>
                                    <img src="<?php echo $firstBanner["main-banner-image-mobile"]['url'] ?>" alt="<?php echo $firstBanner["main-banner-image-mobile"]['alt'] ?>" itemprop="image" class="w-full h-full object-cover show-mobile">
                                <?php else : ?>
                                    <img src="<?php echo $firstBanner["main-banner-image"]['url'] ?>" alt="<?php echo $firstBanner["main-banner-image"]['alt'] ?>" itemprop="image" class="w-full h-full object-cover show-mobile">
                                <?php endif; ?>
                            <?php endif; ?>
                            </div>
                            <div class="context">
                                <div class="content">
                                    <div itemprop="headline" class="default-heading-title">
                                        <?php
                                        if ($firstBanner["main-banner-main-text"]) :
                                            echo $firstBanner["main-banner-main-text"];
                                        endif;
                                        ?>
                                    </div>
                                    <?php if ($firstBanner['link-option']) :
                                        $args = array(
                                            'name' => 'informacoes',
                                            'post_type' => 'page',
                                        );

                                        $query = new WP_Query($args);
                                        while ($query->have_posts()) :
                                            $query->the_post();
                                            $whatsapp = get_field('whatsapp');
                                            $whatsappNumber = get_field('whatsappNumber');
                                    ?>
                                            <a href="https://api.whatsapp.com/send?phone=<?php echo $whatsappNumber; ?>&text=Olá, gostaria de mais informações sobre <?php single_post_title(); ?>" target="_blank" itemprop="url" class="mt-6 button button button-first">
                                                <?php
                                                if ($firstBanner['wpp-link']):
                                                    echo $firstBanner['wpp-link'];
                                                else:
                                                ?>
                                                    Saiba mais
                                                <?php endif; ?>
                                            </a>
                                        <?php
                                        endwhile;
                                    else :
                                        if ($firstBanner['main-banner-button']) :
                                            $url = $firstBanner['main-banner-button']['url'];
                                            $target = $firstBanner['main-banner-button']['target'] ? $firstBanner['main-banner-button']['target'] : '_self';
                                            $title = $firstBanner['main-banner-button']['title'];
                                        ?>
                                            <a href="<?php echo $url ?>" itemprop="url" class="mt-6 button button button-first" target="<?php echo $target ?>">
                                                <?php echo $title ?>
                                            </a>
                                    <?php
                                        endif;
                                    endif;
                                    ?>
                                </div>
                            </div>
                            <div class="main-banner-pattern-2">&nbsp;</div>
                            <?php
                            $count = count($firstBanners);
                            if ($count > 1) :
                            ?>
                                <div class="swiper-button-prev arrow-swiper arrow-swiper-prev"></div>
                                <div class="swiper-button-next arrow-swiper arrow-swiper-next"></div>
                            <?php endif; ?>
                        </div>
                    <?php endforeach; ?>
            </div>
        </div>
    </section>
<?php endif; ?>