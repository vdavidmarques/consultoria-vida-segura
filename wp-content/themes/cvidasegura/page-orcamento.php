<?php get_header(); ?>
<?php include 'blocks/breadcrumb.php' ?>
<section class="page-orcamento container">
    <?php
    $args = array(
        'name' => 'informacoes',
        'post_type' => 'page',
    );

    $query = new WP_Query($args);
    while ($query->have_posts()) :
        $query->the_post();
        $whatsapp = get_field('whatsapp');
        $whatsappNumber = get_field('whatsappNumber');
        $whatsappMessage = get_field('whatsappMessage');
        $phone = get_field('phone');
        $email = get_field('e-mail');
        $title = get_field('title-budget');
    ?>
        <div class="title">
            <?php echo $title; ?>
        </div>
        <div class="socials-icons">
            <a target="_blank" href="https://api.whatsapp.com/send?phone=<?php echo $whatsappNumber ?>&text=<?php echo $whatsappMessage ?>">
                <img src="<?php echo  get_template_directory_uri() . '/library/icons/whatsapp-consultoria-vida-segura-blue.svg' ?>" alt="WhatsApp - Consultoria Vida Segura | Empresa especializa em Planos de Saúde, odontológicos e funeral e Seguros de vida" itemprop="image" class="icon">
                <?php echo $whatsapp; ?>
            </a>

            <a target="_blank" href="tel:<?php echo $phone ?>">
                <img src="<?php echo  get_template_directory_uri() . '/library/icons/phone-consultoria-vida-segura-blue.svg' ?>" alt="WhatsApp - Consultoria Vida Segura | Empresa especializa em Planos de Saúde, odontológicos e funeral e Seguros de vida" itemprop="image" class="icon">
                <?php echo $phone ?>
            </a>

            <a target="_blank" href="mailto:<?php echo $email ?>">
                <img src="<?php echo  get_template_directory_uri() . '/library/icons/email-consultoria-vida-segura-blue.svg' ?>" alt="Email - Consultoria Vida Segura | Empresa especializa em Planos de Saúde, odontológicos e funeral e Seguros de vida" itemprop="image" class="icon">
                <?php echo $email ?>
            </a>
            <div class="address">
                <img src="<?php echo  get_template_directory_uri() . '/library/icons/endereco-consultoria-vida-segura-blue.svg' ?>" alt="Endereço - Consultoria Vida Segura | Empresa especializa em Planos de Saúde, odontológicos e funeral e Seguros de vida" itemprop="image" class="icon">
                <p class="text"><?php echo get_field('address'); ?></p>
            </div>
        </div>
        <div class="form">

            <?php
                function checkEnvironment() {
                    $serverUrl = $_SERVER['HTTP_HOST'];

                    $productionUrl = 'consultoriavidasegura.com';
                    $localhostUrl = 'localhost';

                    if ($serverUrl === $productionUrl) {
                        return do_shortcode('[contact-form-7 id="a3c5186" title="Formulário de contato 1"]');
                    }
                    
                    if ($serverUrl === $localhostUrl) {
                        return do_shortcode('[contact-form-7 id="d901c23" title="Contact form 1"]');
                    }

                    return 'Ambiente desconhecido';
                }

                $environment = checkEnvironment();
                echo $environment;
            ?>
        </div>
        <?php endwhile; ?>
</section>
<?php get_footer(); ?>