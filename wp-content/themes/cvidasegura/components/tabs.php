<?php
$tabs = get_field('accordion');
if ($tabs) : ?>
    <article class="tab container">
        <div class="headers">
            <?php
                $index = 0;
                foreach ($tabs as $key=>$tab) :
                if ($tab['title']) {
            ?>
                    <button class="tab-header" onclick="openTab('tab-<?php echo $index; ?>')">
                        <?php echo $tab['title'] ?>
                    </button>
                <?php } ?>
            <?php 
                $index++;
                endforeach; 
            ?>
        </div>
        <?php 
            $index = 0;
            foreach ($tabs as $key=>$tab) : 
        ?>
            <div id="tab-<?php echo $index; ?>" class="tab-body">
                <div class="descriptions-options">
                    <?php
                    if ($tab['descriptions-options']) :
                        if ($tab['title-and-text']) :
                            echo $tab['title-and-text'];
                        endif;
                    else :
                        if ($tab['main-title-and-icon-list']) :
                    ?>
                            <h3 class="title"><?php echo $tab['main-title-and-icon-list'] ?></h3>
                        <?php
                        endif;
                    ?>
                        <div class="title-and-icon-list">
                            <?php
                            $listIcons =  $tab['title-and-icon-list'];
                            if( $listIcons):
                                foreach ($listIcons as $listIcon) :
                                    if ($listIcon['icone'] && $listIcon['texto']) :
                                ?>
                                        <div class="icon-text">
                                            <img src="<?php echo $listIcon['icone'] ?>" alt="<?php echo $listIcon['texto']; ?>" class="icon" />
                                            <p><?php echo $listIcon['texto']; ?></p>
                                        </div>
                                <?php
                                    endif;
                                endforeach;
                            endif;
                            ?>
                        </div>
                    <?php endif; ?>
                </div>
                <div class="packages">
                    <?php
                    $packs = $tab['package'];
                    if ($packs) {
                        foreach ($packs as $pack) :
                    ?>
                            <div class="packs">
                                <div class="title"><?php echo $pack['title']; ?></div>
                                <?php
                                $iconAndTitlePacks =  $pack['icon-text'];
                                if ($iconAndTitlePacks) : 
                                    foreach ($iconAndTitlePacks as $iconAndTitlePack) :
                                ?>
                                    <div class="content">
                                        <img src="<?php echo  get_template_directory_uri() . '/library/icons/check.svg' ?>" alt="<?php echo $pack['title']; ?>" class="icon" />
                                        <?php echo $iconAndTitlePack['text'] ?></p>
                                    </div>
                                <?php
                                    endforeach;
                                endif;
                                ?>
                            </div>
                    <?php
                        endforeach;
                    }
                    ?>
                </div>
            </div>
        <?php 
            $index++;
            endforeach; 
        ?>
    </article>
<?php endif; ?>