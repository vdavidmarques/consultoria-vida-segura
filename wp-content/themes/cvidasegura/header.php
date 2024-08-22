<!DOCTYPE html>
<html lang="pt-BR" itemscope itemtype="http://schema.org/WebPage">

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width">
    <meta itemprop="description" content="Consultoria Vida Segura - Empresa especializa em Planos de Saúde, odontológicos e funeral e Seguros de vida">
    <?php wp_head(); ?>
    <title itemprop="name">
        <?php
            if(is_home()){
                echo "";
            }elseif(is_tax()){
                echo single_cat_title() . ' |';
            }elseif(is_archive()){
                echo get_the_archive_title() . ' |';
            }elseif(is_singular()){
                echo single_post_title() . ' |';
            }else{
                echo get_the_title() . ' |';
            }
        ?>
       Consultoria Vida Segura
    </title>
    <link itemprop="url" href="https://www.consultoriavidasegura.com">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@400;700&display=swap" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100..900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

</head>

<body <?php body_class(); ?>>   
    <header itemscope itemtype="http://schema.org/WPHeader">
        <div class="header-top">
            <div class="socials-and-menu">
                <?php 
                    require_once 'services/social-icons-display.php';
                    $socialIcons = new SocialIconsDisplay(['whatsapp', 'phone', 'email', 'instagram', 'facebook']);
                    $socialIcons->display_social_icons();
                ?>
            </div>
        </div>
        <div class="header-menu-itens container">
            <a href="/"> 
                <img src="<?php echo  get_template_directory_uri() . '/dist/library/images/consultoria-vida-segura-logo.webp' ?>" alt="Consultoria Vida Segura - Empresa especializa em Planos de Saúde, odontológicos e funeral e Seguros de vida" class="logo" itemprop="image">
            </a>

            <div class="menu-items">
                <?php custom_header_menu(); ?>

                <button onclick="closeMenu()" class="bg-close-menu-mobile">
                    Fechar menu
                </button>
            </div>

        </div>
     </header>
        <main itemprop="mainContentOfPage">