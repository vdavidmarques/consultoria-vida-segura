<?php
if (have_posts()) : while (have_posts()) : the_post();
        if (is_home()) :
            $firstBanners = get_field("first-banner", 63);
        else :
            $firstBanners = get_field("first-banner");
        endif;
        $count = 0;
        if ($firstBanners) :
?>
            <article class="main-banner banner py-20">

                <div class="swiper-container relative overflow-hidden">
                    <div class="swiper-wrapper">
                        <div class="first-banner swiper-slide">
                            <?php

                            foreach ($firstBanners as $firstBanner) :

                                if ($firstBanner["main-banner-image"] || $firstBanner["main-banner-image-mobile"]) :
                            ?>
                                    <div class="bg-blue-hard-light pointer-events-none">&nbsp;</div>

                                    <img src="<?php echo $firstBanner["main-banner-image"]['url'] ?>" alt="<?php echo $firstBanner["main-banner-image"]['alt'] ?>" itemprop="image" class="w-full h-full object-cover show-desktop">

                                    <?php if ($firstBanner["main-banner-image-mobile"]) : ?>
                                        <img src="<?php echo $firstBanner["main-banner-image-mobile"]['url'] ?>" alt="<?php echo $firstBanner["main-banner-image-mobile"]['alt'] ?>" itemprop="image" class="w-full h-full object-cover show-mobile">
                                    <?php else : ?>
                                        <img src="<?php echo $firstBanner["main-banner-image"]['url'] ?>" alt="<?php echo $firstBanner["main-banner-image"]['alt'] ?>" itemprop="image" class="w-full h-full object-cover">

                                    <?php endif; ?>

                                <?php endif; ?>

                                <div class="container default-heading-title flex flex-col h-full">
                                    <?php
                                    if ($firstBanner["main-banner-main-text"]) :
                                        echo $firstBanner["main-banner-main-text"];
                                    endif;

                                    if ($firstBanner['main-banner-button']) : ?>

                                        <a href="<?php echo $firstBanner['main-banner-button']['url'] ?>" itemprop="name" class="mt-6 button button button-second">
                                            <?php echo $firstBanner['main-banner-button']['title'] ?>
                                        </a>

                                    <?php endif; ?>
                                </div>
                                <?php
                                $count = count($firstBanners);
                                if ($count > 1) :
                                ?>
                                    <div class="swiper-button-prev arrow-swiper arrow-swiper-prev"></div>
                                    <div class="swiper-button-next arrow-swiper arrow-swiper-next"></div>
                                <?php endif; ?>
                            <?php
                            endforeach;

                            ?>
                        </div>

                    </div>
            </article>
<?php
        endif;
    endwhile;
endif;
?>