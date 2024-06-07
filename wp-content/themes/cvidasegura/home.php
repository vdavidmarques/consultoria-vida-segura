<?php 
    get_header(); 
    
    function checkEnvironment()
    {
        $serverUrl = $_SERVER['HTTP_HOST'];

        $productionUrl = 'consultoriavidasegura.com';
        $localhostUrl = 'localhost';

        if ($serverUrl === $productionUrl) {
            return '115';
        }

        if ($serverUrl === $localhostUrl) {
            return '63';
        }

        return 'Ambiente desconhecido';
    }

    $environment = checkEnvironment();
    $id = $environment;
?>
    <div class="home" itemscope itemtype="http://schema.org/Article">      
        <?php include 'components/main-banner.php'  ?>
        <?php include 'components/our-services.php' ?>
        <?php include 'components/we-experts.php' ?>
        <?php include 'components/depositions.php' ?>
    </div>
<?php get_footer(); ?>
