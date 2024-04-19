<?php
    $blockOne = get_field('our-services-service-image', '63');//Primeiro bloco
        $firstServiceBlockOne = $blockOne['our-services-first-service'];//Primeiro Serviço
            $titleFirstServiceBlockOne = $firstServiceBlockOne['title'];
            $descriptionFirstServiceBlockOne = $firstServiceBlockOne['description'];
            $linkFirstServiceBlockOne = $firstServiceBlockOne['link']['url'];
        $secondServiceBlockOne = $blockOne['our-services-second-service'];//Segundo Serviço
            $titleSecondServiceBlockOne = $secondServiceBlockOne['title'];
            $descriptionSecondServiceBlockOne = $secondServiceBlockOne['description'];
            $linkSecondServiceBlockOne = $secondServiceBlockOne['link']['url'];
        $imageFirstServiceBlockOne =  $blockOne['image'];
 ?>
<div class="service-image">
    <p itemprop="articleBody">
    
    <?php echo $titleFirstServiceBlockOne ?>
    <?php echo $descriptionFirstServiceBlockOne ?>
    <?php echo $linkFirstServiceBlockOne ?>
    <?php echo $titleSecondServiceBlockOne ?>
    <?php echo $descriptionSecondServiceBlockOne ?>
    <?php echo $linkSecondServiceBlockOne ?>
    </p>
    <img src="<?php echo $imageFirstServiceBlockOne ?>" alt="<?php echo $titleFirstServiceBlockOne ?>" itemprop="image">
</div>