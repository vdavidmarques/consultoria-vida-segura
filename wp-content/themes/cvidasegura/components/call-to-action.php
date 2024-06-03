<article class="call-to-action scroll-effect" itemscope itemprop="articleBody">
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

        if (is_post_type_archive('planos-de-saude')) {

            $healthInsurance = get_field('health-insurance');
            $title = $healthInsurance['call-to-action-main-title'];
            $text = $healthInsurance['call-to-action-description'];
            $wppLabel = $healthInsurance['call-to-action-wpp-label'];
            $emailLabel = $healthInsurance['call-to-action-email-label'];

        } elseif (is_post_type_archive('seguros')) {

            $lifeInsurance = get_field('life-insurance');
            $title = $lifeInsurance['call-to-action-main-title'];
            $text = $lifeInsurance['call-to-action-description'];
            $wppLabel = $lifeInsurance['call-to-action-wpp-label'];
            $emailLabel = $lifeInsurance['call-to-action-email-label'];
            
        } elseif (is_post_type_archive('planos-odontologicos')) {

            $dentalPlans = get_field('health-insurance');
            $title = $dentalPlans['call-to-action-main-title'];
            $text = $dentalPlans['call-to-action-description'];
            $wppLabel = $dentalPlans['call-to-action-wpp-label'];
            $emailLabel = $dentalPlans['call-to-action-email-label'];

        } elseif (is_post_type_archive('planos-funeral')) {

            $funeralPlans = get_field('health-insurance');
            $title = $funeralPlans['call-to-action-main-title'];
            $text = $funeralPlans['call-to-action-description'];
            $wppLabel = $funeralPlans['call-to-action-wpp-label'];
            $emailLabel = $funeralPlans['call-to-action-email-label'];

        }
    ?>
    <div class="content container">
        <div class="description">
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
    </div>
    <?php endwhile; ?>
</article>