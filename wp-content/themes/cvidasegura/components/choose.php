<article class="choose">
    <div class="container">
        <div class="title">
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
                            if ($icon) :
                        ?>
                                <div class="choosen block">
                                    <div class="circle">
                                        <img src="<?php echo $icon['url'] ?>" alt="<?php echo $icon['alt'] ?>" class="icon" />
                                    </div>
                                <?php
                            endif;
                                ?>
                                <div class="content">
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