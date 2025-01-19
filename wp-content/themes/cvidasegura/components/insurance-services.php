<?php
$args = array(
    'name' => 'informacoes',
    'post_type' => 'page',
);

$query = new WP_Query($args);
while ($query->have_posts()) :
    $query->the_post();
?>
    <section class="scroll-effect our-services insurance-services" itemscope itemtype="http://schema.org/Service">
        <?php
        $lifeInsurance = get_field('life-insurance');
        $ourInsuranceMainTitle = $lifeInsurance['services-title'];
        $ourInsuranceDescription = $lifeInsurance['services-desc'];
        ?>
        <article class="container our-services--content grid grid-cols-12" itemscope itemtype="http://schema.org/CreativeServce">
            <div class="our-services--content--title default-heading-title" itemprop="headline"><?php echo $ourInsuranceMainTitle ?></div>
            <p itemprop="our-services--content--description" class="our-services--content--description"><?php echo $ourInsuranceDescription ?> </p>
        </article>
        <?php include get_template_directory() . '/blocks/service-insurance-list.php';
        ?>
    </section>
<?php endwhile;
wp_reset_postdata();
?>