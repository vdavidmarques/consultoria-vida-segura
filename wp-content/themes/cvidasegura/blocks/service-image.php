<div class="service-image">
    <?php
        $blockOne = get_field('our-services-service-image', '63');       
        $services = $blockOne['our-services-service']; 
    ?>
  
    <div class="images image-1">
        <?php if($blockOne['image']): ?>
            <img src="<?php echo $blockOne['image']['url']; ?>" alt="<?php echo $blockOne['image']['alt']; ?>" itemprop="image" class="">
        <?php endif; ?>
    </div>

    <div class="services-cards swiper-container">
        <div class="swiper-wrapper">
            <?php 
                if($services):
                    foreach( $services as $service ) : 
                ?>   
                
                    <article class="service-1 card swiper-slide" itemscope itemprop="articleBody">
                        <?php 
                            if($service['link-option']) :  
                        
                                $args = array(
                                    'name' => 'informacoes',
                                    'post_type' => 'page',
                                );
                
                                $query = new WP_Query($args);
                                while ($query->have_posts()) :
                                $query->the_post();
                                $whatsapp = get_field('whatsapp');
                                $whatsappNumber = get_field('whatsappNumber');
                                $whatsappMessage = get_field('whatsappMessage');
                        ?>

                                <a target="_blank" href="https://api.whatsapp.com/send?phone=<?php echo $whatsappNumber ?>&text=<?php echo $whatsappMessage ?>">
                                    <span class="header">
                                        <img src="<?php echo $service['icone'] ?>" alt="<?php echo $service['texto'] ?>"  itemprop="image" class="icon">
                                        <h2 class="title"><?php echo $service['title'] ?></h2>
                                    </span>
                                    <p class="text"><?php echo $service['texto'] ?></p>
                                </a> 
                
                            <?php 
                                endwhile;
                                else :  
                            ?>
                                <a target="_blank" href="<?php echo $service['link']['url'] ; ?>">
                                    <span class="header">
                                        <img src="<?php echo $service['icone'] ?>" alt="<?php echo $service['texto'] ?>"  itemprop="image" class="icon">
                                        <h2 class="title"><?php echo $service['title'] ?></h2>
                                    </span>
                                    <p class="text"><?php echo $service['texto'] ?></p>
                                </a> 
                        <?php endif; ?>
                    </article>
                <?php 
                    endforeach;
                endif;
            ?>
        </div>
    </div>

    
    <div class="images show-desktop image-2">
        <?php   if($blockOne['image-2']): ?>
            <img src="<?php echo $blockOne['image-2']['url']; ?>" alt="<?php echo $blockOne['image-2']['alt']; ?>" itemprop="image">
        <?php endif; ?>
    </div>   
</div>