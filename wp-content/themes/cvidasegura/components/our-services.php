<section class="scroll-effect our-services py-20 mt-20 lg:mt-[12.5rem]" itemscope itemtype="http://schema.org/Article">
    <?php
        //if localhost
        // $introTitle = get_field("intro-main-title","63");
        // $ourServiceMainTitle = get_field("our-services-main-title", "63");
        // $ourDervicesDescription = get_field('our-services-description', 63);      
        //if production
        $introTitle = get_field("intro-main-title","115");
        $ourServiceMainTitle = get_field("our-services-main-title", "115");
        $ourDervicesDescription = get_field('our-services-description', 115);   
    ?>
    <div class="container content-text grid grid-cols-12">
        <div class="wrap">
            <div class="title"><?php echo $ourServiceMainTitle ?></div>
            <p itemprop="headline" class="text"><?php echo $ourDervicesDescription ?> </p>
        </div>
    </div>
    <?php include get_template_directory() . '/blocks/service-image.php'; ?>
</section>