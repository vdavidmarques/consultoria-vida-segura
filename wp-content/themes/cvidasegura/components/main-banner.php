<div class="main-banner py-20">
    <?php 
        $mainBannerImage = get_field("main-banner-image","63");//Imagem principal
        
        $mainTitle = get_field("main-banner-main-title","63");// Texto principal
        $firtText = $mainTitle['first-text'];
        $mainText = $mainTitle['main-text'];
        $lastText = $mainTitle['last-text'];

        $mainBannerButton = get_field('main-banner-button','63');//Botão
        $buttonLabel = $mainBannerButton['text'];
        $buttonLink = $mainBannerButton['link']['url'];
    ?>

<img src="<?php echo $mainBannerImage ?>" alt="" itemprop="image">
        
    <p itemprop="articleBody">

        <?php echo $firtText ?>
        <?php echo $mainText ?>
        <?php echo $lastText ?>

        <a href="<?php echo $buttonLink ?>" itemprop="name">
            <?php echo $buttonLabel ?>
        </a>
    </p>
</div>