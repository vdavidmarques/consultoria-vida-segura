<article itemscope itemtype="http://schema.org/CreativeServce" class="main-banner banner">
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
                        <?php
                            if ($banner["main-banner-image"] || $banner["main-banner-image-mobile"]) :
                            ?>
                                <div 
                                    class="image show-desktop w-full h-full object-cover" 
                                    style="background-image: url(<?php echo $banner["main-banner-image"] ?>)"
                                >
                                    &nbsp;
                                </div>
                                    <?php if ($banner["main-banner-image-mobile"]) : ?>
                                    <div style="background-image:url(<?php echo $banner["main-banner-image-mobile"] ?>)" class="w-full h-full object-cover show-mobile">
                                    &nbsp;
                                    </div>

                                <?php else : ?>
                        
                                    <div style="background-image:url(<?php echo $banner['main-banner-image'] ?>)" class="w-full h-full object-cover show-mobile">

                                <?php endif; ?>
                        <?php endif; ?>
                        <div class="context">
                            <div class="content">
                                <div itemprop="headline" class="default-heading-title">
                                    <?php
                                    if ($banner["main-banner-main-text"]) :
                                        echo  $banner["main-banner-main-text"];
                                    endif; ?>

                                </div>
                                <?php if ($banner['main-banner-button']) : ?>
                                    <a href="<?php echo $banner['main-banner-button']['url'] ?>" itemprop="url" class="mt-6 button button button-first">
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