<?php

?>
    <section class="depositions container" itemscope itemtype="http://schema.org/CreativeServce">  
        <div class="scroll-effect">
            <div class="slides">
                <h3 class="main-title" itemprop="headline"></h3>
                <div class="swiper-container">
                    <div class="list swiper-wrapper">
                        <?php 
                            $count = count($groups);
                            foreach ($groups as $group): ?>

                            <div class="item swiper-slide">
                             
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php else : ?>
    <div class="empty-space">&nbsp;</div>
<?php endif; ?>