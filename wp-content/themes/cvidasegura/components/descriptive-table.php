<article class="descriptive-table">
    <?php
    $args = array(
        'name' => 'informacoes',
        'post_type' => 'page',
    );

    $query = new WP_Query($args);
    while ($query->have_posts()) :
        $query->the_post();

        //checking archive types
        if (is_post_type_archive('planos-de-saude')) {

            $healthInsurance = get_field('health-insurance');
            $title = $healthInsurance['image-list-main-title'];
            $image = $healthInsurance['image-list-left-image'];
            if($image):
                $imageUrl = $healthInsurance['image-list-left-image']['url'];
                $imageAlt = $healthInsurance['image-list-left-image']['alt'];
            endif;
            $tables = $healthInsurance['image-list-item'];

        } elseif (is_post_type_archive('seguros')) {

            $lifeInsurance = get_field('life-insurance');
            $title = $lifeInsurance['image-list-main-title'];
            $image = $lifeInsurance['image-list-left-image'];
            if($image):
                $imageUrl = $lifeInsurance['image-list-left-image']['url'];
                $imageAlt = $lifeInsurance['image-list-left-image']['alt'];
            endif;
            $tables = $lifeInsurance['image-list-item'];

        } elseif (is_post_type_archive('planos-odontologicos')) {

            $dentalPlans = get_field('dental-plans');
            $title = $dentalPlans['image-list-main-title'];
            $image =  $dentalPlans['image-list-left-image'];
    
            if($image):
                $imageUrl =  $dentalPlans['image-list-left-image']['url'];
                $imageAlt =  $dentalPlans['image-list-left-image']['alt'];
            endif;
            $tables = $dentalPlans['image-list-item'];

        } elseif (is_post_type_archive('planos-funeral')) {

            $funeralPlans = get_field('funeral-plans');
            $title = $funeralPlans['image-list-main-title'];
            $image = $funeralPlans['image-list-left-image'];
            if($image):
                $imageUrl = $funeralPlans['image-list-left-image']['url'];
                $imageAlt = $funeralPlans['image-list-left-image']['alt'];
            endif;
            $tables = $funeralPlans['image-list-item'];

        }
    ?>
        <div class="tables container grid-cols-12">
            <div class="title">
                <?php echo $title ?>
            </div>
            <?php if($image) :?>
                <div class="image">
                    <img src="<?php echo $imageUrl ?>" alt="<?php echo $imageAlt ?>" itemprop="image" class="w-full object-cover">
                </div>
            <?php endif; ?>
            <div class="itens">
                <?php
                if ($tables) :
                    foreach ($tables as $table) :
                ?>
                        <div class="icon text"><?php echo $table['text'] ?></div>
                <?php
                    endforeach;
                endif;
                ?>
            </div>
        </div>
    <?php endwhile; ?>
</article>