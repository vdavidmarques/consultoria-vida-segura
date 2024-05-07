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
                            $titleAndDesc = $tab['title-and-text'];
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
                                            <img src="<?php echo $iconAndTitlePack['icone'] ?>" alt="Consultoria Vida segura" class="icon" />
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

<!-- 
  <button class="tab-header active" onclick="openTab('tab1')">Tab 1</button>
  <button class="tab-header" onclick="openTab('tab2')">Tab 2</button>
  <button class="tab-header" onclick="openTab('tab3')">Tab 3</button>

  <div id="tab1" class="tab-body">
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
    <p>Phasellus commodo nisi non urna aliquet, a eleifend lorem condimentum.</p>
    <p>Maecenas nec sem non eros lacinia gravida.</p>
  </div>
  <div id="tab2" class="tab-body" style="display:none">
    <p>Integer bibendum, dui id faucibus ultricies, est neque fringilla nunc.</p>
    <p>Vestibulum euismod nulla vel augue tincidunt, a ultrices justo consectetur.</p>
    <p>Sed efficitur lectus sed justo egestas, nec feugiat orci laoreet.</p>
  </div>
  <div id="tab3" class="tab-body" style="display:none">
    <p>Ut vestibulum libero ac mauris congue tempus.</p>
    <p>In hac habitasse platea dictumst. Integer nec est nec dui gravida auctor.</p>
    <p>Nam eget libero vestibulum, consequat enim sed, aliquam turpis.</p>
  </div> -->