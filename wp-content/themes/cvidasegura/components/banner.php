<?php
$queried_object = get_queried_object();
$banner1 = get_field("banner", $queried_object);
$banner2 = get_field('first-banner', $queried_object);
if ($banner1 || $banner2):
?>
    <article itemscope itemtype="http://schema.org/CreativeServce" class="banner">
        <div class="container swiper-container relative overflow-hidden">
            <div class="swiper-wrapper">
                <?php
                if ($banner1):
                    $banners = $banner1;
                elseif ($banner2):
                    $banners = $banner2;
                endif;
                $count = 0;
                if ($banners) :
                    foreach ($banners as $banner) :
                ?>
                        <div class="swiper-slide">
                            <div class="banner--image">
                                <?php
                                if ($banner["main-banner-image"] || $banner["main-banner-image-mobile"]) :
                                ?>
                                    <div
                                        class="image show-desktop w-full h-full object-cover"
                                        style="background-image: url(<?php echo $banner["main-banner-image"]['url'] ?>)">
                                        &nbsp;
                                    </div>
                                    <?php if ($banner["main-banner-image-mobile"]) : ?>
                                        <div style="background-image:url(<?php echo $banner["main-banner-image-mobile"] ?>)" class="w-full h-full object-cover show-mobile">
                                            &nbsp;
                                        </div>

                                    <?php else : ?>

                                        <div style="background-image:url(<?php echo $banner['main-banner-image'] ?>)" class="w-full h-full object-cover show-mobile"></div>

                                <?php 
                                    endif; 
                                    endif;
                                ?>
                            </div>

                            <div class="banner--context">
                                <div class="banner--context--content">
                                    <div itemprop="headline" class="default-heading-title">
                                        <?php
                                        if ($banner["main-banner-main-text"]) :
                                            echo  $banner["main-banner-main-text"];
                                        endif; ?>

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
                <?php
                    endforeach;
                endif;
                ?>

            </div>
    </article>
<?php endif; ?>