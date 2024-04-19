<article class="we-experts py-20" itemscope itemprop="articleBody">
    <?php
        $bgImage = get_field("we-experts-image", "63");
        $logo = get_field("we-experts-logo", "63");
        $title = get_field("we-experts-title", "63");
        $text = get_field("we-experts-text", "63");
        $wppLabelButton = get_field("we-experts-wpp-label", "63");
        $emailLabelButton = get_field("we-experts-email-label", "63");
    ?>

    <?php echo $bgImage ?>
    <?php echo $logo ?>
    <p itemprop="articleBody"><?php echo $title ?> </p>
    <p itemprop="articleBody"><?php echo $text ?> </p>
    <p itemprop="articleBody"><?php echo $wppLabelButton ?> </p>
    <p itemprop="articleBody"><?php echo $emailLabelButton ?> </p>
</article>