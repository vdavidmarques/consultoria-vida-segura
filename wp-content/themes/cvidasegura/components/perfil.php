<?php
    if (have_posts()) : while (have_posts()) : the_post();
?>
    <article class="we-experts perfil" itemscope itemprop="articleBody">
        <div class="blue-bg">&nbsp;</div>
        <div class="grid grid-cols-12">
            <div class="bg-image">
                <?php $image =  get_field('bg-image-about-us'); ?>
                <img src="<?php echo $image['url'] ?>" alt="Sobre nós - Consultoria Vida Segura" itemprop="image" class="bg-image">
            </div>
            <div class="content header-top">
                <div itemprop="articleBody" class="default-heading-title scroll-effect">
                    <?php echo get_field('main-title-about-us'); ?>
                </div>
                <div class="socials-and-menu">
                    <?php
                        require_once get_template_directory() . '/services/social-icons-display.php';    
                        $socialIcons = new SocialIconsDisplay(['whatsapp', 'phone', 'email', 'instagram', 'facebook']);
                        $socialIcons->display_social_icons();
                    ?>
                </div>
            </div>
        </div>
    </article>
    <?php
        endwhile;
    endif;
?>
