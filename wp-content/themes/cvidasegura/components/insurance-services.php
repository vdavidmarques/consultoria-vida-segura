<?php
$slug = 'pagina-inicial';
$id = get_page_id_by_slug($slug);
?>
<section class="scroll-effect our-services insurance-services" itemscope itemtype="http://schema.org/Service">
    <?php
    $ourInsuranceMainTitle = get_field("our-insurance-main-title", $id);
    $ourInsuranceDescription = get_field('our-insurance-description', $id);
    ?>
    <article class="container our-services--content grid grid-cols-12" itemscope itemtype="http://schema.org/CreativeServce">
        <div class="our-services--content--title default-heading-title" itemprop="headline"><?php echo $ourInsuranceMainTitle ?></div>
        <p itemprop="our-services--content--description" class="our-services--content--description"><?php echo $ourInsuranceDescription ?> </p>
    </article>
    <?php include get_template_directory() . '/blocks/service-insurance-list.php'; 
    ?>
</section>