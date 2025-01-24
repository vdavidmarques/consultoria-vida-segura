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
                                <img src="<?php echo $firstBanner["main-banner-image"]['url'] ?>" alt="<?php echo $firstBanner["main-banner-image"]['alt'] ?>" itemprop="image" class="show-desktop">
                                <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                    width="636px" height="500px" viewBox="0 0 636 500" enable-background="new 0 0 636 500" xml:space="preserve">
                                <g>
                                    <path fill-rule="evenodd" clip-rule="evenodd" fill="#14606A" d="M636,500c-210.167,0-420.333-0.012-630.5,0.094
                                        c-3.749,0.002-4.596-0.844-4.594-4.594c0.109-163,0.109-326,0-489C0.904,2.752,1.724,1.458,5.508,1.932C8.298,2.28,11.167,2,14,2
                                        c6.667,0.809,13.333,0.809,20,0c136.667,0,273.333,0,410,0c5.299,5.497,8.021,12.604,11.692,19.084
                                        c11.644,20.556,23.484,41.003,34.746,61.772c3.993,7.365,2.747,9.266-5.854,9.29c-21.99,0.062-43.979,0.017-65.969,0.022
                                        c-1.333,0-2.67,0.069-3.997-0.008c-3.419-0.198-4.216,1.046-2.514,4.077c5.212,9.286,10.426,18.571,15.66,27.845
                                        c11.532,20.429,22.921,40.937,34.47,61.356c14.415,25.489,28.714,51.045,43.104,76.548c11.285,19.997,22.458,40.058,33.7,60.08
                                        c14.256,25.39,28.54,50.764,42.807,76.147c11.657,20.741,23.311,41.485,34.931,62.248c6.175,11.034,12.541,21.962,18.513,33.108
                                        C636.344,495.539,637.97,497.62,636,500z"/>
                                    <path fill-rule="evenodd" clip-rule="evenodd" fill="#246C75" d="M34,2c-6.667,1.624-13.333,1.624-20,0C20.667,2,27.333,2,34,2z"/>
                                </g>
                                </svg>
                                <?php if ($firstBanner["main-banner-image-mobile"]) : ?>
                                    <img src="<?php echo $firstBanner["main-banner-image-mobile"]['url'] ?>" alt="<?php echo $firstBanner["main-banner-image-mobile"]['alt'] ?>" itemprop="image" class="show-mobile">
                                <?php else : ?>
                                    <img src="<?php echo $firstBanner["main-banner-image"]['url'] ?>" alt="<?php echo $firstBanner["main-banner-image"]['alt'] ?>" itemprop="image" class="show-mobile">
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