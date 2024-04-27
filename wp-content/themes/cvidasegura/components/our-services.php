<div class="our-services py-20 mt-20 lg:mt-[12.5rem]">
    <?php
        $introTitle = get_field("intro-main-title","63");
        $ourServiceMainTitle = get_field("our-services-main-title", "63");
        $ourDervicesDescription = get_field('our-services-description', 63);
    ?>

    <h1 itemprop="headline">Consultoria Vida Segura - <?php echo $introTitle ?></h1>
    <h2 itemprop="headline"><?php echo $ourServiceMainTitle ?></h2>
    <h3 itemprop="headline"><?php echo $ourDervicesDescription ?> </h3>

    <?php include get_template_directory() . '/blocks/service-image.php'; ?>
    <?php include get_template_directory() . '/blocks/image-service.php';  ?>
</div>