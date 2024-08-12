<?php 
    get_header(); 
    include_once 'services/check-enviroment.php';
?>
    <div class="home" itemscope itemtype="http://schema.org/Article">      
        <?php include 'components/main-banner.php'  ?>
        <?php include 'components/our-services.php' ?>
        <?php include 'components/we-experts.php' ?>
        <?php include 'components/depositions.php' ?>
    </div>
<?php get_footer(); ?>
