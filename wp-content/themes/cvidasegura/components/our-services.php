<section class="scroll-effect our-services" itemscope itemtype="http://schema.org/Service">
    <?php
    $args = array(
        'name' => 'informacoes',
        'post_type' => 'page',
    );

    $query = new WP_Query($args);
    while ($query->have_posts()) :
        $query->the_post();

        //checking archive types
        if (is_post_type_archive('planos-de-saude') || is_home()) {
            $healthInsurance = get_field('health-insurance');
            $ourServiceMainTitle = $healthInsurance['services-title'];
        $ourDervicesDescription = $healthInsurance['services-desc'];
        } elseif (is_post_type_archive('seguros')) {
            $lifeInsurance = get_field('life-insurance');
            $ourServiceMainTitle = $lifeInsurance['services-title'];
            $ourDervicesDescription = $lifeInsurance['services-desc'];
        } elseif (is_post_type_archive('planos-odontologicos')) {
            $dentalPlans = get_field('dental-plans');
            $ourServiceMainTitle = $dentalPlans['services-title'];
            $ourDervicesDescription = $dentalPlans['services-desc'];
        } elseif (is_post_type_archive('planos-funeral')) {
            $funeralPlans = get_field('funeral-plans');
            $ourServiceMainTitle = $funeralPlans['services-title'];
            $ourDervicesDescription = $funeralPlans['services-desc'];
        }

    ?>
        <article class="container our-services--content" itemscope itemtype="http://schema.org/CreativeServce">
            <div class="our-services--content--title default-heading-title" itemprop="headline"><?php echo $ourServiceMainTitle ?></div>
            <p itemprop="our-services--content--description" class="our-services--content--description"><?php echo $ourDervicesDescription ?> </p>
        </article>
    <?php endwhile;
    wp_reset_postdata();
    ?>
    <?php include get_template_directory() . '/blocks/service-image.php'; ?>
</section>