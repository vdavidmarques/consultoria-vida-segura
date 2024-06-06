<?php
    $id = $environment;

    $title = get_field("depositions-title", $id);
    $groups = get_field("depositions", $id);
    $count = 0;
    if($groups):
?>
    <section class="depositions container">
        <div class="scroll-effect py-20">
            <div class="slides">
                <h3 class="main-title"><?php echo $title; ?></h3>
                <div class="swiper-container">
                    <div class="list swiper-wrapper">
                        <?php foreach ($groups as $group): ?>
                            <div class="item swiper-slide">
                                <div class="thumb">
                                    <img src="<?php echo $group['thumbnail']['url'] ?>" alt="">
                                </div>
                                <div class="content">
                                    <h3 class="name"><?php echo $group['name'] ?></h3>
                                    <h4 class="company"><?php echo $group['company'] ?></h4>
                                    <p class="description"><?php echo $group['description'] ?></p>
                                </div>
                                <?php
                                    $count = count($groups);
                                    if ($count > 1) :
                                ?>
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
<?php endif; ?>