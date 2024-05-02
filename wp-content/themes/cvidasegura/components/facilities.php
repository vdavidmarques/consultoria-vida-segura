<article class="container facilities">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <div itemprop="articleBody" class="title">
            <?php echo get_field('facilities-title'); ?>
        </div>
        <ul>
            <?php
                $lists = get_field('list');
                if ($lists) :
                    foreach ($lists as $list) :
            ?>
                    <li class="list">
                        <?php echo $list['item']; ?>
                    </li>
            <?php
                endforeach;
            endif;
            ?>
        </ul>
    <?php
        endwhile;
    endif;
    ?>
</article>