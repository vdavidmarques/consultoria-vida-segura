<section class="our-services py-20 mt-20 lg:mt-[12.5rem]" itemscope itemtype="http://schema.org/Article">
    <?php
        $introTitle = get_field("intro-main-title","63");
        $ourServiceMainTitle = get_field("our-services-main-title", "63");
        $ourDervicesDescription = get_field('our-services-description', 63);      
    ?>
    <div class="container content-text grid grid-cols-12">
        <div class="wrap">
            <div class="title"><?php echo $ourServiceMainTitle ?></div>
            <p itemprop="headline" class="text"><?php echo $ourDervicesDescription ?> </p>
        </div>
    </div>
    <?php include get_template_directory() . '/blocks/service-image.php'; ?>
</section>