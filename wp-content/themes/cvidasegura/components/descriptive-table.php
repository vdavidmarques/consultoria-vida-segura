<article class="descriptive-table" itemscope itemtype="http://schema.org/CreativeServce">
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
            $tables = $healthInsurance['image-list-item'];
        } elseif (is_post_type_archive('seguros')) {

            $lifeInsurance = get_field('life-insurance');
            $title = $lifeInsurance['image-list-main-title'];
            $tables = $lifeInsurance['image-list-item'];
        } elseif (is_post_type_archive('planos-odontologicos')) {

            $dentalPlans = get_field('dental-plans');
            $title = $dentalPlans['image-list-main-title'];
    
            $tables = $dentalPlans['image-list-item'];
        } elseif (is_post_type_archive('planos-funeral')) {

            $funeralPlans = get_field('funeral-plans');
            $title = $funeralPlans['image-list-main-title'];
            $tables = $funeralPlans['image-list-item'];
        }
    ?>
        <div class="tables container grid-cols-12">
            <div class="title scroll-effect default-heading-title" itemprop="headline">
                <?php echo $title ?>
            </div>
            <div class="itens scroll-effect" itemprop="description">
                <?php
                if ($tables) :
                    foreach ($tables as $table) :
                ?>
                    <div class="text"><?php echo $table['text'] ?></div>
                <?php
                    endforeach;
                endif;
                ?>
            </div>
        </div>
    <?php endwhile; 
    wp_reset_postdata();
    ?>
</article>