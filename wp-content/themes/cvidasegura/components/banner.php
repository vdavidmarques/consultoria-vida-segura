<article class="main-banner banner">
    <div class="swiper-container relative overflow-hidden">
        <div class="swiper-wrapper">
            <?php
            $queried_object = get_queried_object();
            $banners = get_field("banner", $queried_object);
            $count = 0;
            if ($banners) :
                foreach ($banners as $banner) :
            ?>
                    <div class="swiper-slide">
                        <div class="main-banner-pattern">&nbsp;</div>
                        <div class="image">
                            <?php
                            if ($banner["main-banner-image"] || $banner["main-banner-image-mobile"]) :
                            ?>
                                <img src="<?php echo $banner["main-banner-image"] ?>" alt="" itemprop="image" class="w-full h-full object-cover show-desktop">

                                <?php if ($banner["main-banner-image-mobile"]) : ?>
                                    <img src="<?php echo $banner["main-banner-image-mobile"] ?>" alt="" itemprop="image" class="w-full h-full object-cover show-mobile">

                                <?php else : ?>

                                    <img src="<?php echo $banner["main-banner-image"] ?>" alt="" itemprop="image" class="w-full h-full object-cover show-mobile">

                                <?php endif; ?>

                            <?php endif; ?>
                        </div>
                        <div class="context">
                            <div class="content">
                                <div class="default-heading-title">
                                    <?php
                                    if ($banner["main-banner-main-text"]) :
                                        echo  $banner["main-banner-main-text"];
                                    endif; ?>

                                </div>
                                <?php if ($banner['main-banner-button']) : ?>
                                    <a href="<?php echo $banner['main-banner-button']['url'] ?>" itemprop="name" class="mt-6 button button button-first">
                                        <?php echo $banner['main-banner-button']['text'] ?>
                                    </a>
                                <?php endif; ?>
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