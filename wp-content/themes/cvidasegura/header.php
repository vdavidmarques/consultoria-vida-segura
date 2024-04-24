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
    <header class="pt-8 lg:pb-10 lg:pt-0" itemscope itemtype="http://schema.org/WPHeader">
        <div class="header-top bg-blue fixed bottom-0 w-full lg:relative">
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
                    <div class="relative flex lg:flex-row gap-x-8 lg:gap-x-16 justify-center items-center lg:min-h-12 py-5 lg:py-3">
                        <div class="social-icon">
                            <a target="_blank" href="https://api.whatsapp.com/send?phone=<?php echo $whatsappNumber ?>&text=<?php echo $whatsappMessage ?>">
                                <img src="<?php echo  get_template_directory_uri() . '/library/icons/whatsapp-consultoria-vida-segura-white.svg' ?>" alt="WhatsApp - Consultoria Vida Segura | Empresa especializa em Planos de Saúde, odontológicos e funeral e Seguros de vida"  itemprop="image">
                            </a>
                        </div>

                        <div class="social-icon">
                            <a target="_blank" href="tel:<?php echo $phone ?>"> 
                                <img src="<?php echo  get_template_directory_uri() . '/library/icons/phone-consultoria-vida-segura-white.svg' ?>" alt="WhatsApp - Consultoria Vida Segura | Empresa especializa em Planos de Saúde, odontológicos e funeral e Seguros de vida"  itemprop="image">
                            </a>
                        </div>
                    
                        <div class="social-icon">
                            <a target="_blank" href="mailto:<?php echo $email ?>">
                                <img src="<?php echo  get_template_directory_uri() . '/library/icons/email-consultoria-vida-segura-white.svg' ?>" alt="WhatsApp - Consultoria Vida Segura | Empresa especializa em Planos de Saúde, odontológicos e funeral e Seguros de vida"  itemprop="image">
                            </a>
                        </div>

                        <div class="social-icon">
                            <a target="_blank" href="<?php echo $instagram ?>">
                                <img src="<?php echo  get_template_directory_uri() . '/library/icons/instagram-consultoria-vida-segura-white.svg' ?>" alt="WhatsApp - Consultoria Vida Segura | Empresa especializa em Planos de Saúde, odontológicos e funeral e Seguros de vida"  itemprop="image">
                            </a>
                        </div>

                        <div class="social-icon">
                            <a target="_blank" href="<?php echo $facebook ?>">
                                <img src="<?php echo  get_template_directory_uri() . '/library/icons/facebook-consultoria-vida-segura-white.svg' ?>" alt="WhatsApp - Consultoria Vida Segura | Empresa especializa em Planos de Saúde, odontológicos e funeral e Seguros de vida"  itemprop="image">
                            </a>
                        </div>

                        <div class="social-icon menu lg:hidden">
                            <button onclick="openMenu()" class="text-9999 bg-menu-mobile bg-no-repeat bg-center overflow-hidden pl-8 -indent-[624.9375rem]">
                                Menu
                            </button>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
        <div class="lg:flex lg:container lg:items-center lg:gap-x-14">
            <img src="<?php echo  get_template_directory_uri() . '/library/images/consultoria-vida-segura-logo.webp' ?>" alt="Consultoria Vida Segura - Empresa especializa em Planos de Saúde, odontológicos e funeral e Seguros de vida" class="w-64 h-auto object-cover mb-5 lg:mb-0 mx-auto" itemprop="image">
            <div class="absolute bg-white top-0 h-full w-full pt-20 pb-10 px-6 lg:p-0 z-10 lg:relative navbar hidden font-bold font-roboto lg:block lg:mt-4 gap-y-5">
                <?php custom_header_menu(); ?>
                <button onclick="closeMenu()" class="text-9999 bg-close-menu-mobile bg-no-repeat bg-center overflow-hidden pl-8 -indent-[624.9375rem] absolute top-7 right-6 lg:hidden w-9 h-9">
                    Fechar menu
                </button>
            </div>
        </div>
     </header>
        <main itemprop="mainContentOfPage">