<?php
$lists = get_field('list');
if ($lists) :
?>
    <ul class="scroll-effect">
        <?php foreach ($lists as $list) : ?>
            <li class="list">
                <?php echo $list['item']; ?>
            </li>
        <?php
        endforeach;
        ?>
    </ul>
<?php endif; ?>