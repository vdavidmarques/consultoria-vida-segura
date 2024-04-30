<article class="descriptive-table">
    <?php
    $args = array(
        'name' => 'informacoes',
        'post_type' => 'page',
    );

    $query = new WP_Query($args);
    while ($query->have_posts()) :
        $query->the_post();
        $healthInsurance = get_field('health-insurance');
        $tables = $healthInsurance['image-list-item'];
    ?>
        <div class="tables container grid-cols-12">
            <div class="title">
                <?php echo $healthInsurance['image-list-main-title'] ?>
            </div>

            <div class="image">
                <img src="<?php echo $healthInsurance['image-list-left-image']['url'] ?>" alt="<?php echo $healthInsurance['image-list-left-image']['alt'] ?>" itemprop="image" class="w-full object-cover">
            </div> 
            <div class="itens">
                <?php 
                if ($banners):
                    foreach ($tables as $table ) : 
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