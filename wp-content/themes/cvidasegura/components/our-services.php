<section class="scroll-effect our-services" itemscope itemtype="http://schema.org/Service">
    <?php
       
        $introTitle = get_field("intro-main-title", $id);
        $ourServiceMainTitle = get_field("our-services-main-title", $id);
        $ourDervicesDescription = get_field('our-services-description', $id);   
    ?>
    <div class="container content-text grid grid-cols-12">
        <div class="wrap" itemscope itemtype="http://schema.org/CreativeServce">
            <div class="title" itemprop="headline"><?php echo $ourServiceMainTitle ?></div>
            <p itemprop="description" class="text"><?php echo $ourDervicesDescription ?> </p>
        </div>
    </div>
    <?php include get_template_directory() . '/blocks/service-image.php'; ?>
</section>