<?php
    $id = $environment;

    $title = get_field("depositions-title", $id);
    $groups = get_field("depositions", $id);
    $count = 0;
    if($groups):
?>
    <section class="depositions container" itemscope itemtype="http://schema.org/CreativeServce">  
        <div class="scroll-effect">
            <div class="slides">
                <h3 class="main-title" itemprop="headline"><?php echo $title; ?></h3>
                <div class="swiper-container">
                    <div class="list swiper-wrapper">
                        <?php 
                            $count = count($groups);
                            foreach ($groups as $group): ?>
                            <div class="item swiper-slide">
                                <div class="thumb">
                                    <img src="<?php echo $group['thumbnail']['url'] ?>" alt="">
                                </div>
                                <div class="content">
                                    <h3 class="name" itemprop="author"><?php echo $group['name'] ?></h3>
                                    <h4 class="company" itemprop="itemReviewed" itemscope itemtype="http://schema.org/Organization"><?php echo $group['company'] ?></h4>
                                    <p class="description" itemprop="reviewBody"><?php echo $group['description']; ?></p>
                                </div>
                                <?php if ($count > 1) : ?>
                                    <div class="swiper-button-prev arrow-swiper arrow-swiper-prev"></div>
                                    <div class="swiper-button-next arrow-swiper arrow-swiper-next"></div>
                                <?php endif; ?>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php else : ?>
    <div class="empty-space">&nbsp;</div>
<?php endif; ?>