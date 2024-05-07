<article class="main-banner banner py-20">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <div class="swiper-container relative overflow-hidden">
                <div class="swiper-wrapper">
                    <div class="first-banner swiper-slide">
                        <?php
                        if (is_home()) :
                            $firstBanner = get_field("first-banner", 63);
                        else :
                            $firstBanner = get_field("first-banner");
                        endif;
                        $mainTitleF = $firstBanner["main-banner-main-text"];
                        $mainBannerButtonF = $firstBanner['main-banner-button'];
                        $buttonLabelF =  $mainBannerButtonF['text'];
                        $buttonLinkF =  $mainBannerButtonF['link'];

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
                            if ($mainTitleF) :
                                echo $mainTitleF;
                            endif;

                            if ($buttonLinkF && $buttonLabelF) : ?>

                                <a href="<?php echo $buttonLinkF ?>" itemprop="name" class="mt-6 button button button-second">
                                    <?php echo $buttonLabelF ?>
                                </a>

                            <?php endif; ?>
                        </div>
                        <div class="swiper-button-prev arrow-swiper arrow-swiper-prev"></div>
                        <div class="swiper-button-next arrow-swiper arrow-swiper-next"></div>
                    </div>

                    <div class="second-banner swiper-slide">
                        <?php
                        if (is_home()) :
                            $secondBanner = get_field("second-banner", 63);
                        else :
                            $secondBanner = get_field("second-banner");
                        endif;

                        $mainTitleS = $secondBanner["main-banner-main-text"];
                        $mainBannerButtonS = $secondBanner['main-banner-button'];
                        $buttonLabelS =  $mainBannerButtonS['text'];
                        $buttonLinkS =  $mainBannerButtonS['link'];

                        if ($secondBanner["main-banner-image"]) :
                        ?>

                            <div class="bg-blue-hard-light pointer-events-none">&nbsp;</div>
                            <img src="<?php echo $secondBanner["main-banner-image"]['url'] ?>" alt="<?php echo $secondBanner["main-banner-image"]['alt'] ?>" itemprop="image" class="w-full h-full object-cover">

                            <?php if ($secondBanner["main-banner-image-mobile"]) : ?>

                                <img src="<?php echo $secondBanner["main-banner-image-mobile"]['url'] ?>" alt="<?php echo $secondBanner["main-banner-image-mobile"]['alt'] ?>" itemprop="image" class="w-full h-full object-cover show-mobile">

                            <?php else : ?>

                                <img src="<?php echo $secondBanner["main-banner-image"]['url'] ?>" alt="<?php echo $secondBanner["main-banner-image"]['alt'] ?>" itemprop="image" class="w-full h-full object-cover">
                            <?php endif; ?>
                        <?php endif; ?>

                        <div class="container default-heading-title text-white absolute flex flex-col justify-center h-full top-0 left-0 right-0 z-10">
                            <?php
                            if ($mainTitleS) :
                                echo $mainTitleS;
                            endif;

                            if ($buttonLinkS && $buttonLabelS) : ?>
                                <a href="<?php echo $buttonLinkS ?>" itemprop="name" class="mt-6 button button-first">
                                    <?php echo $buttonLabelS ?>
                                </a>
                            <?php endif; ?>
                        </div>
                        <div class="swiper-button-prev arrow-swiper arrow-swiper-prev"></div>
                        <div class="swiper-button-next arrow-swiper arrow-swiper-next"></div>
                    </div>

                    <div class="third-banner swiper-slide">
                        <?php
                        if (is_home()) :
                            $thirdBanner = get_field("third-banner", 63);
                        else :
                            $thirdBanner = get_field("third-banner");
                        endif;


                        $mainTitleT = $thirdBanner["main-banner-main-text"];
                        $mainBannerButtonT = $thirdBanner['main-banner-button'];
                        $buttonLabelT =  $mainBannerButtonT['text'];
                        $buttonLinkT =  $mainBannerButtonT['link'];

                        if ($thirdBanner["main-banner-image"]['url']) :
                        ?>
                            <div class="bg-blue-hard-light pointer-events-none">&nbsp;</div>
                            <img src="<?php echo $thirdBanner["main-banner-image"]['url'] ?>" alt="<?php echo $thirdBanner["main-banner-image"]['alt'] ?>" itemprop="image" class="w-full h-full object-cover">

                            <?php if ($thirdBanner["main-banner-image-mobile"]) : ?>

                                <img src="<?php echo $thirdBanner["main-banner-image-mobile"]['url'] ?>" alt="<?php echo $thirdBanner["main-banner-image-mobile"]['alt'] ?>" itemprop="image" class="w-full h-full object-cover show-mobile">

                            <?php else : ?>
                                <img src="<?php echo $thirdBanner["main-banner-image"]['url'] ?>" alt="<?php echo $thirdBanner["main-banner-image"]['alt'] ?>" itemprop="image" class="w-full h-full object-cover">
                            <?php endif; ?>
                        <?php endif; ?>

                        <div class="container default-heading-title text-white absolute flex flex-col justify-center h-full top-0 left-0 right-0 z-10">
                            <?php
                            if ($mainTitleT) :
                                echo $mainTitleT;
                            endif;

                            if ($buttonLinkT && $buttonLabelT) : ?>

                                <a href="<?php echo $buttonLinkT ?>" itemprop="name" class="mt-6 button button-first">
                                    <?php echo $buttonLabelT ?>
                                </a>

                            <?php endif; ?>
                        </div>
                        <div class="swiper-button-prev arrow-swiper arrow-swiper-prev"></div>
                        <div class="swiper-button-next arrow-swiper arrow-swiper-next"></div>
                    </div>

                    <div class="fourfh-banner swiper-slide">
                        <?php
                        if (is_home()) :
                            $fourfhBanner = get_field("fourfh-banner", 63);
                        else :
                            $fourfhBanner = get_field("fourfh-banner");
                        endif;

                        $mainTitleFo = $fourfhBanner["main-banner-main-text"];
                        $mainBannerButtonFo = $fourfhBanner['main-banner-button'];
                        $buttonLabelFo =  $mainBannerButtonFo['text'];
                        $buttonLinkFo =  $mainBannerButtonFo['link'];

                        if ($fourfhBanner["main-banner-image"]['url']) :
                        ?>
                            <div class="bg-blue-hard-light pointer-events-none">&nbsp;</div>
                            <img src="<?php echo  $fourfhBanner["main-banner-image"]['url'] ?>" alt="<?php echo $fourfBanner["main-banner-image"]['alt'] ?>" itemprop="image" class="w-full h-full object-cover">
                            
                            <?php if ($fourfBanner["main-banner-image-mobile"]) : ?>
                                <img src="<?php echo $fourfBanner["main-banner-image-mobile"]['url'] ?>" alt="<?php echo $fourfBanner["main-banner-image-mobile"]['alt'] ?>" itemprop="image" class="w-full h-full object-cover show-mobile">

                            <?php else : ?>
                                <img src="<?php echo $fourfBanner["main-banner-image"]['url'] ?>" alt="<?php echo $fourfBanner["main-banner-image"]['alt'] ?>" itemprop="image" class="w-full h-full object-cover">

                            <?php endif; ?>
                        <?php endif; ?>

                        <div class="container default-heading-title text-white absolute flex flex-col justify-center h-full top-0 left-0 right-0 z-10">
                            <?php
                            if ($mainTitleFo) :
                                echo $mainTitleFo;
                            endif;

                            if ($buttonLinkFo && $buttonLabelFo) : ?>

                                <a href="<?php echo $buttonLinkF ?>" itemprop="name" class="mt-6 button button-first">
                                    <?php echo $buttonLabelFo ?>
                                </a>
                            <?php endif; ?>
                        </div>
                        <div class="swiper-button-prev arrow-swiper arrow-swiper-prev"></div>
                        <div class="swiper-button-next arrow-swiper arrow-swiper-next"></div>
                    </div>
                    <div class="fifth-banner swiper-slide">
                        <?php
                        if (is_home()) :
                            $fifthBanner = get_field("fifth-banner", 63);
                        else :
                            $fifthBanner = get_field("fifth-banner");
                        endif;
                        
                        $mainTitleFi = $fifthBanner["main-banner-main-text"];
                        $mainBannerButtonFi = $fifthBanner['main-banner-button'];
                        $buttonLabelFi =  $mainBannerButtonFi['text'];
                        $buttonLinkFi =  $mainBannerButtonFi['link'];

                        if ($fifthBanner["main-banner-image"]) :
                        ?>
                            <div class="bg-blue-hard-light pointer-events-none">&nbsp;</div>
                            <img src="<?php echo $fifthBanner["main-banner-image"]["url"] ?>" alt="<?php echo $fifthBanner["main-banner-image"]["url"] ?>" itemprop="image" class="w-full h-full object-cover">

                            <?php if ($fifthBanner["main-banner-image-mobile"]) : ?>
                                <img src="<?php echo $fifthBanner["main-banner-image-mobile"]['url'] ?>" alt="<?php echo $fifthBanner["main-banner-image-mobile"]['alt'] ?>" itemprop="image" class="w-full h-full object-cover show-mobile">
                            
                            <?php else : ?>

                                <img src="<?php echo $fifthBanner["main-banner-image"]['url'] ?>" alt="<?php echo $fifthBanner["main-banner-image"]['alt'] ?>" itemprop="image" class="w-full h-full object-cover">

                            <?php endif; ?>

                        <?php endif; ?>

                        <div class="container default-heading-title text-white absolute flex flex-col justify-center h-full top-0 left-0 right-0 z-10">
                            <?php
                            if ($mainTitleFi) :
                                echo $mainTitleFi;
                            endif;

                            if ($buttonLinkFi && $buttonLabelFi) : ?>
                                <a href="<?php echo $buttonLinkFi ?>" itemprop="name" class="mt-6 button button-first">
                                    <?php echo $buttonLabelFi ?>
                                </a>
                            <?php endif; ?>
                        </div>
                        <div class="swiper-button-prev arrow-swiper arrow-swiper-prev"></div>
                        <div class="swiper-button-next arrow-swiper arrow-swiper-next"></div>
                    </div>

                </div>
        <?php endwhile;
    endif; ?>
</article>