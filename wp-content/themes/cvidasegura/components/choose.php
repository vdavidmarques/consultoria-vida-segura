<article class="choose" itemscope itemtype="http://schema.org/CreativeServce">
    <div class="container">
        <div class="title" itemprop="headline">
            <?php echo get_field('choose-title'); ?>
        </div>
        <div class="cards">
            <?php
            if (have_posts()) : while (have_posts()) : the_post();
                    $choosen = get_field('choose');
                    if ($choosen) :
            ?>
                        <?php
                        foreach ($choosen as $choose) :
                            $icon = $choose['icon'];
                            ?>
                                <div class="choosen scroll-effect" itemscope itemtype="http://schema.org/Thing">
                                    <?php if ($icon) : ?>
                                    <div class="circle">
                                        <img src="<?php echo $icon['url'] ?>" alt="<?php echo $icon['alt'] ?>" class="icon" itemprop="image" />
                                    </div>
                                    <?php else: ?>
                                        <div class="circle">
                                            <img src="<?php get_template_directory_uri() . '/dist/library/images/sem-imagem.jpg' ?>" alt="" class="icon" itemprop="image" />
                                        </div>
                                    <?php endif; ?>
                                    <div class="content" itemprop="description">
                                        <?php echo $choose['texts']; ?>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                <?php
                    endif;
                endwhile;
            endif;
                ?>
        </div>
    </div>
</article>