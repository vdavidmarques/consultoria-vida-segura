<?php $id = $environment;?>

<article class="we-experts scroll-effect" itemscope itemprop="http://schema.org/CreativeServce">
    <?php
        $bgImage = get_field("we-experts-image", $id);
        $title = get_field("we-experts-title", $id);
        $wppLabelButton = get_field("we-experts-wpp-label", $id);
    ?>
    <div class="blue-bg">&nbsp;</div>
    <div class="grid grid-cols-12">
        <div class="bg-image">
            <img src="<?php echo $bgImage ?>" alt="Consultoria Vida Segura: Protegendo o que Realmente Importa" itemprop="image" class="bg-image">
        </div>
        <div class="content">
            <div itemprop="headline" class="default-heading-title"><?php echo $title ?> </div>
            <?php
            $args = array(
                'name' => 'informacoes',
                'post_type' => 'page',
            );

            $query = new WP_Query($args);
            while ($query->have_posts()) {
                $query->the_post();
                $whatsapp = get_field('whatsapp');
                $whatsappNumber = get_field('whatsappNumber');
                $whatsappMessage = get_field('whatsappMessage');
            ?>
                <a target="_blank" rel="noopener noreferrer" href="https://api.whatsapp.com/send?phone=<?php echo $whatsappNumber ?>&text=<?php echo $whatsappMessage ?>" class="button button-first" itemprop="url">
                    <?php echo $wppLabelButton ?>
                </a>
            <?php } ?>
        </div>
    </div>
</article>