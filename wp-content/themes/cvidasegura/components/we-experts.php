<article class="we-experts py-20">
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
    <p><?php echo $title ?> </p>
    <p><?php echo $text ?> </p>
    <p><?php echo $wppLabelButton ?> </p>
    <p><?php echo $emailLabelButton ?> </p>
</article>