<?php
    get_header();
    $slug = 'pagina-inicial';
    $id = get_page_id_by_slug($slug);
?>
<div class="home">
    <?php
    include 'components/main-banner.php';
    include 'components/our-services.php';
    include 'components/insurance-services.php';
    //include 'components/depositions.php';
    ?>
</div>
<?php get_footer(); ?>