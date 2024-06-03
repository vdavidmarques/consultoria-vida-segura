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
                    $instagram = get_field('instagram');
                    $facebook = get_field('facebook');
                ?>
                    <div class="socials-and-menu">
                        <div class="socials-icons scroll-effect">
                            <a target="_blank" href="https://api.whatsapp.com/send?phone=<?php echo $whatsappNumber ?>&text=<?php echo $whatsappMessage ?>">
                                <img src="<?php echo  get_template_directory_uri() . '/library/icons/whatsapp-consultoria-vida-segura-white.svg' ?>" alt="WhatsApp - Consultoria Vida Segura | Empresa especializa em Planos de Saúde, odontológicos e funeral e Seguros de vida" itemprop="image">
                            </a>

                            <a target="_blank" href="tel:<?php echo $phone ?>">
                                <img src="<?php echo  get_template_directory_uri() . '/library/icons/phone-consultoria-vida-segura-white.svg' ?>" alt="WhatsApp - Consultoria Vida Segura | Empresa especializa em Planos de Saúde, odontológicos e funeral e Seguros de vida" itemprop="image">
                            </a>

                            <a target="_blank" href="mailto:<?php echo $email ?>">
                                <img src="<?php echo  get_template_directory_uri() . '/library/icons/email-consultoria-vida-segura-white.svg' ?>" alt="Email - Consultoria Vida Segura | Empresa especializa em Planos de Saúde, odontológicos e funeral e Seguros de vida" itemprop="image">
                            </a>

                            <a target="_blank" href="<?php echo $instagram ?>">
                                <img src="<?php echo  get_template_directory_uri() . '/library/icons/instagram-consultoria-vida-segura-white.svg' ?>" alt="WhatsApp - Consultoria Vida Segura | Empresa especializa em Planos de Saúde, odontológicos e funeral e Seguros de vida" itemprop="image">
                            </a>

                            <a target="_blank" href="<?php echo $facebook ?>">
                                <img src="<?php echo  get_template_directory_uri() . '/library/icons/facebook-consultoria-vida-segura-white.svg' ?>" alt="WhatsApp - Consultoria Vida Segura | Empresa especializa em Planos de Saúde, odontológicos e funeral e Seguros de vida" itemprop="image">
                            </a>
                        </div>
                    </div>
                <?php endwhile; ?>
            </div>
        </div>
    </article>
    <?php
        endwhile;
    endif;
?>
