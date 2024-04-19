<?php
    $blockTwo = get_field('our-services-image-service', '63');//Segundo bloco
        $imageFirstServiceBlockTwo =  $blockTwo['image'];
        $firstServiceBlockTwo = $blockTwo['our-services-first-service'];//Primeiro Serviço
            $titleFirstServiceBlockTwo = $firstServiceBlockTwo['title'];
            $descriptionFirstServiceBlockTwo = $firstServiceBlockTwo['description'];
            $linkFirstServiceBlockTwo = $firstServiceBlockTwo['link']['url'];
        $secondServiceBlockTwo = $blockTwo['our-services-second-service'];//Segundo Serviço
            $titleSecondServiceBlockTwo = $secondServiceBlockTwo['title'];
            $descriptionSecondServiceBlockTwo = $secondServiceBlockTwo['description'];
            $linkSecondServiceBlockTwo = $secondServiceBlockTwo['link']['url'];
?>
<div class="image-service">
    <img src="<?php echo $imageFirstServiceBlockTwo ?>" alt="<?php echo $titleFirstServiceBlockOne ?>">
    
    <p>
        <?php echo $titleFirstServiceBlockTwo ?>
        <?php echo $descriptionFirstServiceBlockTwo ?>
        <?php echo $linkFirstServiceBlockTwo ?>
        <?php echo $titleSecondServiceBlockTwo ?>
        <?php echo $descriptionSecondServiceBlockTwo ?>
        <?php echo $linkSecondServiceBlockTwo ?>
    </p>
</div>