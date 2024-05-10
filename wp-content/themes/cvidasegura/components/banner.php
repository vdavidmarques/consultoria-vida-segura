<article class="main-banner banners py-20">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
          
            <div class="swiper-container relative overflow-hidden">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <?php
                            $queried_object = get_queried_object();
                            $firstBanners = get_field("first-banner", $queried_object);
                           
                            foreach($firstBanners as $firstBanner):
                            if ($firstBanner["main-banner-image"] || $firstBanner["main-banner-image-mobile"]) :
                        ?>
                            <div class="bg-blue-hard-light pointer-events-none">&nbsp;</div>

                            <img src="<?php echo $firstBanner["main-banner-image"] ?>" alt="" itemprop="image" class="w-full h-full object-cover show-desktop">

                            <?php if ($firstBanner["main-banner-image-mobile"]) : ?>
                                <img src="<?php echo $firstBanner["main-banner-image-mobile"] ?>" alt="<?php echo $firstBanner["main-banner-image-mobile"]['alt'] ?>" itemprop="image" class="w-full h-full object-cover show-mobile">

                            <?php else : ?>

                                <img src="<?php echo $firstBanner["main-banner-image"] ?>" alt="" itemprop="image" class="w-full h-full object-cover show-mobile">

                            <?php endif; ?>

                        <?php endif; ?>

                        <div class="container default-heading-title flex flex-col h-full">
                            <?php
                            if ( $firstBanner["main-banner-main-text"]) :
                                echo  $firstBanner["main-banner-main-text"];
                            endif;

                            if ($firstBanner['main-banner-button']) : ?>

                                <a href="<?php echo $firstBanner['main-banner-button']['url'] ?>" itemprop="name" class="mt-6 button button button-second">
                                    <?php echo $firstBanner['main-banner-button']['text'] ?>
                                </a>

                            <?php endif; ?>
                        </div>
                        <div class="swiper-button-prev arrow-swiper arrow-swiper-prev"></div>
                        <div class="swiper-button-next arrow-swiper arrow-swiper-next"></div>
                        <?php endforeach; ?>
                    </div>

             </div>
        <?php endwhile;
    endif; ?>
</article>