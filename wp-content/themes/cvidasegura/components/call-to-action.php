<article class="call-to-action" itemscope itemprop="articleBody">
    <?php
    $args = array(
        'name' => 'informacoes',
        'post_type' => 'page',
    );

    $query = new WP_Query($args);
    while ($query->have_posts()) :
        $query->the_post();
        $whatsappNumber = get_field('whatsappNumber');
        $whatsappMessage = get_field('whatsappMessage');
        $email = get_field('e-mail');

        $healthInsurance = get_field('health-insurance');

        //Call to action
        $title = $healthInsurance['call-to-action-main-title'];
        $text = $healthInsurance['call-to-action-description'];
        $wppLabel = $healthInsurance['call-to-action-wpp-label'];
        $emailLabel = $healthInsurance['call-to-action-email-label'];
    ?>
    <div class="content container">
        <h3 itemprop="headline" class="title">
            <?php echo $title ?>
            <br />
            <strong> <?php the_archive_title(); ?></strong>
        </h3>
        <p itemprop="description"><?php echo $text ?></p>
        <a target="_blank" href="https://api.whatsapp.com/send?phone=<?php echo $whatsappNumber ?>&text=<?php echo $whatsappMessage ?>" itemprop="name" class="button button-green">
            <?php echo $wppLabel ?>
        </a>
        <a target="_blank" href="mailto:<?php echo $email ?>" itemprop="name" class="button button-white">
            <?php echo $emailLabel ?>
        </a>
    </div>
    <?php endwhile; ?>
</article>