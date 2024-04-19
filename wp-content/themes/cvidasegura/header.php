<!DOCTYPE html>
<html lang="pt-BR" itemscope itemtype="http://schema.org/WebPage">

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width">
    <meta itemprop="description" content="Consultoria Vida Segura - Empresa especializa em Planos de Saúde, odontológicos e funeral e Seguros de vida">
    <?php wp_head(); ?>
    <title itemprop="name">
        Consultoria Vida Segura <?php if (wp_title()) :  ' | ' . wp_title(); endif; ?>
    </title>
    <link itemprop="url" href="https://www.consultoriavidasegura.com">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100..900&display=swap" rel="stylesheet">
</head>

<body <?php body_class(); ?>>
    <header class="pb-20" itemscope itemtype="http://schema.org/WPHeader">
        <div class="header-top">
            <div class="container">
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
                    $phone = get_field('phone');
                    $email = get_field('e-mail');                        
                    $instagram = get_field('instagram');
                    $facebook = get_field('facebook');
                ?>
                    <!-- Social Links Section -->
                    <div class="social_icon">
                        <div>
                            <div class="fb-icon">
                                <a target="_blank" href="https://api.whatsapp.com/send?phone=<?php echo $whatsappNumber ?>&text=<?php echo $whatsappMessage ?>">
                                    <?php echo $whatsapp ?>
                                </a>
                            </div>

                            <div class="fb-icon">
                                <a target="_blank" href="tel:1333573092"> <?php echo $phone ?> </a>
                            </div>
                        </div>

                        <div class="fb-icon email-topo col-xs-2 col-lg-4">
                            <a target="_blank" href="mailto:<?php echo $email ?>">
                                <span class="2xl:hidden">
                                    <?php echo $email ?> 
                                </span> 
                                Email
                            </a>
                        </div>

                        <div class="fb-icon">
                            <a target="_blank" href="<?php echo $instagram ?>">
                                Instagram
                            </a>
                        </div>

                        <div class="fb-icon">
                            <a target="_blank" href="<?php echo $facebook ?>">
                                Facebook
                            </a>
                        </div>
                    </div>
                <?php } ?>
                    <!-- End Social Links Section -->
            </div>
        </div>
        <div>
            <img src="<?php echo  get_template_directory_uri() . '/library/images/consultoria-vida-segura-logo.webp' ?>" alt="Consultoria Vida Segura - Empresa especializa em Planos de Saúde, odontológicos e funeral e Seguros de vida" class="w-40 h-auto object-cover" itemprop="image">
            <?php custom_header_menu(); ?>
        </div>
    </header>
        <main itemprop="mainContentOfPage">