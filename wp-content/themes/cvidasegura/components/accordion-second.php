<?php
//Accordion 2
$accordionS = get_field('accordion-2');
if ($accordionS) {
    //Pacote 1
    $pack1 = $accordionS['package-1'];
    if ($pack1) {
        $titlePack1 = $pack1['title'];
        $iconAndTitlePack1 =  $pack1['icon-text-1'];
        $iconUrlAndTitlePack1 =  $iconAndTitlePack1['icone'];
        $textTitlePack1 = $iconAndTitlePack1['text'];
        $iconAndTitle2Pack1 =  $pack1['icon-text-2'];
        $iconUrlAndTitle2Pack1 =  $iconAndTitle2Pack1['icone'];
        $textTitle2Pack1 = $iconAndTitle2Pack1['text'];
        $iconAndTitle3Pack1 =  $pack1['icon-text-3'];
        $iconUrlAndTitle3Pack1 =  $iconAndTitle3Pack1['icone'];
        $textTitle3Pack1 = $iconAndTitle3Pack1['text'];
    }

    //Pacote 2
    $pack2 = $accordionS['package-2'];
    if ($pack2) {
        $titlePack2 = $pack2['title'];
        $iconAndTitlePack2 =  $pack2['icon-text-1'];
        $iconUrlAndTitlePack2 =  $iconAndTitlePack2['icone'];
        $textTitlePack2 = $iconAndTitlePack2['text'];
        $iconAndTitle2Pack2 =  $pack2['icon-text-2'];
        $iconUrlAndTitle2Pack2 =  $iconAndTitle2Pack2['icone'];
        $textTitle2Pack2 = $iconAndTitle2Pack2['text'];
        $iconAndTitle3Pack2 =  $pack2['icon-text-3'];
        $iconUrlAndTitle3Pack2 =  $iconAndTitle3Pack2['icone'];
        $textTitle3Pack2 = $iconAndTitle3Pack2['text'];
    }

    //Pacote 3
    $pack3 = $accordionS['package-3'];
    if ($pack3) {
        $titlePack3 = $pack3['title'];
        $iconAndTitlePack3 =  $pack3['icon-text-1'];
        $iconUrlAndTitlePack3 =  $iconAndTitlePack3['icone'];
        $textTitlePack3 = $iconAndTitlePack3['text'];
        $iconAndTitle2Pack3 =  $pack3['icon-text-2'];
        $iconUrlAndTitle2Pack3 =  $iconAndTitle2Pack3['icone'];
        $textTitle2Pack3 = $iconAndTitle2Pack3['text'];
        $iconAndTitle3Pack3 =  $pack3['icon-text-3'];
        $iconUrlAndTitle3Pack3 =  $iconAndTitle3Pack3['icone'];
        $textTitle3Pack3 = $iconAndTitle3Pack3['text'];
    }
?>
    ---------------- //Accordion 1
    <div class="accordion-first">
        <?php
        $titleAccordionS = $accordionS['title'];
        if ($titleAccordionS) {
        ?>
            <h3 class="cabecalho"><?php echo $titleAccordionS ?></h3>
        <?php } ?>

        // Opções de Descrições
        <div class="my-20 opcoes-de-descricoes">
            <?php
            $descriptionOptions = $accordionS['descriptions-options'];
            if ($descriptionOptions) :
                if ($accordionS['title-and-text']) :
                    $titleAndDesc = $accordionS['title-and-text'];
                endif;
            else :
                $mainTitleAndIconList =  $accordionS['main-title-and-icon-list'];
                if ($mainTitleAndIconList) :
            ?>
                    <h4><?php echo $mainTitleAndIconList ?></h4>
                <?php

                endif;

                $listIcon1 =  $accordionS['title-and-icon-list'];
                $imageListIcon1  = $listIcon1['icone'];
                $textListIcon1 =  $listIcon1['texto'];
                if ($imageListIcon1 && $textListIcon1) :
                ?>
                    <img src="<?php echo $imageListIcon1 ?>" alt="<?php echo $textListIcon1; ?>" />
                    <p><?php echo $textListIcon1; ?></p>
                <?php
                endif;

                $listIcon2 =  $accordionS['title-and-icon-list-2'];
                $imageListIcon2  = $listIcon2['icone'];
                $textListIcon2 =  $listIcon2['texto'];
                if ($imageListIcon2 && $textListIcon2) :
                ?>
                    <img src="<?php echo $imageListIcon2 ?>" alt="<?php echo $textListIcon2; ?>" />
                    <p><?php echo $textListIcon2; ?></p>
                <?php
                endif;
                $listIcon3 =  $accordionS['title-and-icon-list-3'];
                $imageListIcon3  = $listIcon3['icone'];
                $textListIcon3 =  $listIcon3['texto'];
                if ($imageListIcon3 && $textListIcon3) :
                ?>
                    <img src="<?php echo $imageListIcon3 ?>" alt="<?php echo $textListIcon3; ?>" />
                    <p><?php echo $textListIcon3; ?></p>
                <?php
                endif;
                $listIcon4 =  $accordionS['title-and-icon-list-4'];
                $imageListIcon4  = $listIcon4['icone'];
                $textListIcon4 =  $listIcon4['texto'];
                if ($imageListIcon4 && $textListIcon4) :
                ?>
                    <img src="<?php echo $imageListIcon4 ?>" alt="<?php echo $textListIcon4; ?>" />
                    <p><?php echo $textListIcon4; ?></p>
            <?php
                endif;
            endif;
            ?>





        </div>
Packs
        <div class="my-20 pack-1">
            <h4><?php echo $titlePack1 ?></h4>
            <div class="flex flex-col">
                <?php if ($iconUrlAndTitlePack1 && $textTitlePack1) { ?>
                    <img src="<?php echo $iconUrlAndTitlePack1 ?>" alt="<?php echo $textTitlePack1; ?>" class="w-4 h-4" />
                    <p><?php echo $textTitlePack1 ?></p>
                <?php } ?>

                <?php if ($iconUrlAndTitle2Pack1 && $textTitle2Pack1) { ?>
                    <img src="<?php echo $iconUrlAndTitle2Pack1 ?>" alt="<?php echo $textTitle2Pack1; ?>" class="w-4 h-4" />
                    <p><?php echo $textTitle2Pack1 ?></p>
                <?php } ?>

                <?php if ($iconUrlAndTitle3Pack1 && $textTitle3Pack1) { ?>
                    <img src="<?php echo $iconUrlAndTitle3Pack1 ?>" alt="<?php echo $textTitle3Pack1; ?>" class="w-4 h-4" />
                    <p><?php echo $textTitle3Pack1 ?></p>
                <?php } ?>
            </div>
        </div>

        <div class="my-20 pack-2">
            <h4><?php echo $titlePack2 ?></h4>
            <div class="flex flex-col">
                <?php if ($iconUrlAndTitlePack2 && $textTitlePack2) { ?>
                    <img src="<?php echo $iconUrlAndTitlePack2 ?>" alt="" class="w-4 h-4" />
                    <p><?php echo $textTitlePack2 ?></p>
                <?php } ?>

                <?php if ($iconUrlAndTitle2Pack2 && $textTitle2Pack2) { ?>
                    <img src="<?php echo $iconUrlAndTitle2Pack2 ?>" alt=">" class="w-4 h-4" />
                    <p><?php echo $textTitle2Pack2 ?></p>
                <?php } ?>

                <?php if ($iconUrlAndTitle3Pack2 && $textTitle3Pack2) { ?>
                    <img src="<?php echo $iconUrlAndTitle3Pack2 ?>" alt="" class="w-4 h-4" />
                    <p><?php echo $textTitle3Pack2 ?></p>
                <?php } ?>
            </div>
        </div>

        <div class="my-20 pack-3">
            <h4><?php echo $titlePack3 ?></h4>
            <div class="flex flex-col">
                <?php if ($iconUrlAndTitlePack3 && $textTitlePack3) { ?>
                    <img src="<?php echo $iconUrlAndTitlePack3 ?>" alt="<?php echo $textTitlePack3; ?>" class="w-4 h-4" />
                    <p><?php echo $textTitlePack3 ?></p>
                <?php } ?>

                <?php if ($iconUrlAndTitle2Pack3 && $textTitle2Pack3) { ?>
                    <img src="<?php echo $iconUrlAndTitle2Pack3 ?>" alt="<?php echo $textTitle2Pack3; ?>" class="w-4 h-4" />
                    <p><?php echo $textTitle2Pack3 ?></p>
                <?php } ?>

                <?php if ($iconUrlAndTitle3Pack3 && $textTitle3Pack3) { ?>
                    <img src="<?php echo $iconUrlAndTitle3Pack3 ?>" alt="<?php echo $textTitle3Pack3; ?>" class="w-4 h-4" />
                    <p><?php echo $textTitle3Pack3 ?></p>
                <?php } ?>
            </div>
        </div>
    </div>
<?php } ?>