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

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

</head>

<body <?php body_class(); ?>>
    <header itemscope itemtype="http://schema.org/WPHeader">
        <div class="header-top">
            <div class="socials-and-menu">
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
                    <div class="socials-icons">
                        <a target="_blank" href="https://api.whatsapp.com/send?phone=<?php echo $whatsappNumber ?>&text=<?php echo $whatsappMessage ?>">
                            <img src="<?php echo  get_template_directory_uri() . '/library/icons/whatsapp-consultoria-vida-segura-white.svg' ?>" alt="WhatsApp - Consultoria Vida Segura | Empresa especializa em Planos de Saúde, odontológicos e funeral e Seguros de vida"  itemprop="image">
                        </a>
                    
                        <a target="_blank" href="tel:<?php echo $phone ?>"> 
                            <img src="<?php echo  get_template_directory_uri() . '/library/icons/phone-consultoria-vida-segura-white.svg' ?>" alt="WhatsApp - Consultoria Vida Segura | Empresa especializa em Planos de Saúde, odontológicos e funeral e Seguros de vida"  itemprop="image">
                        </a>
                    
                        <a target="_blank" href="mailto:<?php echo $email ?>">
                            <img src="<?php echo  get_template_directory_uri() . '/library/icons/email-consultoria-vida-segura-white.svg' ?>" alt="WhatsApp - Consultoria Vida Segura | Empresa especializa em Planos de Saúde, odontológicos e funeral e Seguros de vida"  itemprop="image">
                        </a>
                    
                        <a target="_blank" href="<?php echo $instagram ?>">
                            <img src="<?php echo  get_template_directory_uri() . '/library/icons/instagram-consultoria-vida-segura-white.svg' ?>" alt="WhatsApp - Consultoria Vida Segura | Empresa especializa em Planos de Saúde, odontológicos e funeral e Seguros de vida"  itemprop="image">
                        </a>
                    
                        <a target="_blank" href="<?php echo $facebook ?>">
                            <img src="<?php echo  get_template_directory_uri() . '/library/icons/facebook-consultoria-vida-segura-white.svg' ?>" alt="WhatsApp - Consultoria Vida Segura | Empresa especializa em Planos de Saúde, odontológicos e funeral e Seguros de vida"  itemprop="image">
                        </a>
                    </div>
                    <div class="open-menu-mobile">
                        <button onclick="openMenu()" class="bg-menu-mobile">
                            Menu
                        </button>
                    </div>
                <?php } ?>
            </div>
        </div>
        <div class="header-menu-itens container">
            <img src="<?php echo  get_template_directory_uri() . '/library/images/consultoria-vida-segura-logo.webp' ?>" alt="Consultoria Vida Segura - Empresa especializa em Planos de Saúde, odontológicos e funeral e Seguros de vida" class="logo" itemprop="image">

            <div class="menu-items">
                <?php custom_header_menu(); ?>

                <button onclick="closeMenu()" class="bg-close-menu-mobile">
                    Fechar menu
                </button>
            </div>

        </div>
     </header>
        <main itemprop="mainContentOfPage">