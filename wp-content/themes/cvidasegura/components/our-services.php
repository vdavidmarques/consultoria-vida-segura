<div class="our-services py-20">
    <?php
        $ourServiceMainTitle = get_field("our-services-main-title", "63");
        $ourDervicesDescription = get_field('our-services-description', 63);
    ?>

    <h2><?php echo $ourServiceMainTitle ?></h2>
    <h3><?php echo $ourDervicesDescription ?> </h3>

    <?php include get_template_directory() . '/blocks/service-image.php'; ?>
    <?php include get_template_directory() . '/blocks/image-service.php';  ?>
</div>