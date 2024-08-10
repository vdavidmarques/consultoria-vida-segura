<?php get_header(); ?>
<section itemscope itemtype="http://schema.org/Article" class="archive-seguros">

    <?php
        include 'blocks/breadcrumb.php';
        include 'components/internal-banner.php';
        include 'components/descriptive-table.php';
        include 'components/call-to-action.php';

        require_once 'components/partners.php';
        $slider = new CustomPostTypeSlider('seguros');
        $slider->display_slider();
    ?>
</section>
<?php get_footer(); ?>