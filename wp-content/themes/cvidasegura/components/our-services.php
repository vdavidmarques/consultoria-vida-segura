<section class="scroll-effect our-services" itemscope itemtype="http://schema.org/Service">
    <?php
    $ourServiceMainTitle = get_field("our-services-main-title", $id);
    $ourDervicesDescription = get_field('our-services-description', $id);
    ?>
    <article class="container our-services--content grid grid-cols-12" itemscope itemtype="http://schema.org/CreativeServce">
        <div class="our-services--content--title default-heading-title" itemprop="headline"><?php echo $ourServiceMainTitle ?></div>
        <p itemprop="our-services--content--description" class="our-services--content--description"><?php echo $ourDervicesDescription ?> </p>
    </article>
    <?php include get_template_directory() . '/blocks/service-image.php'; ?>
</section>