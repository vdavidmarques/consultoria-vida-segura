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