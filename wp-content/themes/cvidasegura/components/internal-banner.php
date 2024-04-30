<article class="internal-banner banner py-20">
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
                $email = get_field('e-mail');   
                
                $healthInsurance = get_field('health-insurance');
                $banners = $healthInsurance['banners-health-insurance'];
        if ($banners):
    ?>
            <div class="swiper-container relative overflow-hidden">
                <div class="swiper-wrapper">
                <?php foreach ($banners as $banner ) : ?>
                    <div class="swiper-slide">
                            <div class="bg-blue-hard-light pointer-events-none">&nbsp;</div>

                            <img src="<?php echo $banner['image']['url'] ?>" alt="<?php echo $banner['image']['alt'] ?>" itemprop="image" class="w-full h-full object-cover show-desktop">

                            <?php if ($banner["image-mobile"]) : ?>
                                <img src="<?php echo $banner['image-mobile']['url'] ?>" alt="<?php echo $banner['image-mobile']['alt'] ?>" itemprop="image" class="w-full h-full object-cover show-mobile">

                            <?php else : ?>

                                <img src="<?php echo $banner["image"]['url'] ?>" alt="<?php echo $banner["image"]['alt'] ?>" itemprop="image" class="w-full h-full object-cover">

                            <?php endif; ?>
                      

                        <div class="container default-heading-title flex flex-col h-full">
                            <?php
                            if ($banner['text']) :
                                echo $banner['text'];
                            endif;

                            if ($banner['botao']['url'] &&  $banner['botao']['title']) : ?>

                                <a href="<?php echo $banner['botao']['url'] ?>" itemprop="name" class="mt-6 button button-second">
                                    <?php echo  $banner['botao']['title'] ?>
                                </a>

                            <?php endif; ?>
                        </div>
                        <div class="swiper-button-prev arrow-swiper arrow-swiper-prev"></div>
                        <div class="swiper-button-next arrow-swiper arrow-swiper-next"></div>
                    </div>                             
                    <?php  endforeach; ?>
                </div>
        <?php 
            endif; 
    endwhile;
    ?>
</article>