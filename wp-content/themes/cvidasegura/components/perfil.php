<?php
if (have_posts()) : while (have_posts()) : the_post();
?>
        <article class="we-experts perfil" itemscope itemtype="http://schema.org/AboutPage">
            <div class="blue-bg">&nbsp;</div>
            <div class="grid grid-cols-12">
                <div class="bg-image">
                    <?php $image =  get_field('bg-image-about-us');
                    if ($image) :
                    ?>
                        <img src="<?php echo $image['url'] ?>" alt="<?php echo esc_attr($image['alt'] ?? 'Sobre nós - Consultoria Vida Segura'); ?>" itemprop="image" class="bg-image">
                    <?php endif; ?>
                </div>
                <div class="content header-top">
                    <div itemprop="headline" class="default-heading-title scroll-effect">
                        <?php echo get_field('main-title-about-us'); ?>
                    </div>
                    <div class="socials-and-menu" itemprop="author" itemscope itemtype="http://schema.org/Organization">
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