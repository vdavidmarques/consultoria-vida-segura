<?php
$lists = get_field('list');
if ($lists) :
$count = count($lists);
    $class = 
        ($count == 1) ? 'col-1' :
        (($count == 2) ? 'col-2' :
        (($count == 3) ? 'col-3' :
        (($count == 4) ? 'col-4' : 'col-default')));     
?>
    <div class="scroll-effect facilities-list <?php echo $class ?>">
        <?php foreach ($lists as $list) : ?>
            <div class="list">
                <?php echo $list['item']; ?>
            </div>
        <?php
        endforeach;
        ?>
    </div>
<?php endif; ?>