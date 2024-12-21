<?php get_header(); ?>
<section itemscope itemtype="http://schema.org/CollectionPage" class="archive-health-insurance">
    <?php 
        include 'blocks/breadcrumb.php'; 
        include 'components/internal-banner.php'; 
        include 'components/descriptive-table.php'; 
        include 'components/call-to-action.php'; 

        require_once 'components/partners.php';
        $slider = new CustomPostTypeSlider('planos-de-saude');
        $slider->display_slider();
    ?>
</section>
<?php get_footer(); ?>