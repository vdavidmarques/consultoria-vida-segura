    </main>
    <footer class="my-20" itemscope itemtype="http://schema.org/WPFooter">
        <div class="pre-footer">
            <div class="container grid grid-cols-12">
                <div class="menu-footer-items scroll-effect">
                    <?php custom_footer_menu(); ?>
                </div>
                <div class="social-networks scroll-effect">
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
                        $email = get_field('e-mail');
                        $instagram = get_field('instagram');
                        $facebook = get_field('facebook');
                        $address = get_field('address');
                    ?>
                        <a target="_blank" href="<?php echo $instagram ?>">
                            <img src="<?php echo  get_template_directory_uri() . '/dist/library/icons/instagram-consultoria-vida-segura-white.svg' ?>" alt="WhatsApp - Consultoria Vida Segura | Empresa especializa em Planos de Saúde, odontológicos e funeral e Seguros de vida" itemprop="image">
                        </a>
                        <a target="_blank" href="<?php echo $facebook ?>">
                            <img src="<?php echo  get_template_directory_uri() . '/dist/library/icons/facebook-consultoria-vida-segura-white.svg' ?>" alt="WhatsApp - Consultoria Vida Segura | Empresa especializa em Planos de Saúde, odontológicos e funeral e Seguros de vida" itemprop="image">
                        </a>
                </div>

                <div class="contact">
                    <h4 class="title scroll-effect">Entre em contato</h4>
                    <a target="_blank" href="https://api.whatsapp.com/send?phone=<?php echo $whatsappNumber ?>&text=<?php echo $whatsappMessage ?>" class="scroll-effect button button-first">
                        <img src="<?php echo  get_template_directory_uri() . '/dist/library/icons/whatsapp-consultoria-vida-segura-blue.svg' ?>" alt="WhatsApp - Consultoria Vida Segura | Empresa especializa em Planos de Saúde, odontológicos e funeral e Seguros de vida" itemprop="image" class="wpp-blue">
                        <img src="<?php echo  get_template_directory_uri() . '/dist/library/icons/whatsapp-consultoria-vida-segura-white.svg' ?>" alt="WhatsApp - Consultoria Vida Segura | Empresa especializa em Planos de Saúde, odontológicos e funeral e Seguros de vida" itemprop="image" class="wpp-white">
                        Fale por WhatsApp
                    </a>
                    <a target="_blank" href="mailto:<?php echo $email ?>" class="scroll-effect button button-first email">
                        <img src="<?php echo  get_template_directory_uri() . '/dist/library/icons/email-consultoria-vida-segura-blue.svg' ?>" alt="Email - Consultoria Vida Segura | Empresa especializa em Planos de Saúde, odontológicos e funeral e Seguros de vida" itemprop="image" class="email-blue">
                        <img src="<?php echo  get_template_directory_uri() . '/dist/library/icons/email-consultoria-vida-segura-white.svg' ?>" alt="Email - Consultoria Vida Segura | Empresa especializa em Planos de Saúde, odontológicos e funeral e Seguros de vida" itemprop="image" class="email-white">
                        Fale por e-mail
                    </a>
                </div>

                <div class="chris-contact scroll-effect">
                    <h3 itemscope itemprop="name" class="title">Christiane Barros</h3>
                    <a target="_blank" href="https://api.whatsapp.com/send?phone=<?php echo $whatsappNumber ?>&text=<?php echo $whatsappMessage ?>">
                        <?php echo $whatsapp ?>
                    </a>
                    <a target="_blank" href="mailto:<?php echo $email ?>">
                        <?php echo $email ?>
                    </a>
                    <p itemprop="name"> <?php echo $address ?></p>
                </div>
            </div>
        </div>
        <div class="container after-footer">
            <div id="copyright" itemprop="copyrightHolder">
                &copy; <?php echo esc_html(date_i18n(__('Y', 'blankslate'))); ?>
                - <?php wp_title(); ?>
            </div>
            <a href="https://baixada-web-studio.great-site.net/" target="_blank" class="designer">
                By Baixada Web Studio
            </a>
        </div>
        <div class="wpp-float">
            <a target="_blank" href="https://api.whatsapp.com/send?phone=<?php echo $whatsappNumber ?>&text=<?php echo $whatsappMessage ?>">
                <img src="<?php echo  get_template_directory_uri() . '/dist/library/icons/whatsapp-consultoria-vida-segura.svg' ?>" alt="WhatsApp - Consultoria Vida Segura | Empresa especializa em Planos de Saúde, odontológicos e funeral e Seguros de vida" itemprop="image">
            </a>
        </div>

        <button class="scroll-to-top-btn" id="scrollToTopBtn">
            Subir para o topo
        </button>
    <?php endwhile; ?>
    </footer>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <?php
    $my_post_types_archives = array('planos-de-saude', 'seguros', 'planos-odontologicos', 'planos-funeral');
    //If localhost
    //if (is_home('63')) : //homepage

    //If production
    if (is_home('115')) : ?>
        <script src="<?php echo get_template_directory_uri() . "/dist/library/js/swiper/service-image.min.js" ?>"></script>
        <script src="<?php echo get_template_directory_uri() . "/dist/library/js/swiper/banner.min.js" ?>"></script>
        <script src="<?php echo get_template_directory_uri() . "/dist/library/js/swiper/depositions.min.js" ?>"></script>
    <?php elseif (is_post_type_archive($my_post_types_archives)) : ?>
        <script src="<?php echo get_template_directory_uri() . "/dist/library/js/swiper/internal-banner.min.js" ?>"></script>
    <?php elseif (is_tax() || is_single()) : ?>
        <script src="<?php echo get_template_directory_uri() . "/dist/library/js/swiper/banner.min.js" ?>"></script>
    <?php elseif (is_page('orcamento')) :
    ?>
        <script src="<?php echo get_template_directory_uri() . "/dist/library/js/form-orcamento.js" ?>"></script>
   <?php
        endif;
        
        $args = array(
            'name' => 'informacoes',
            'post_type' => 'page',
        );

        $query = new WP_Query($args);
        while ($query->have_posts()) :
            $query->the_post();
            $trackingCodes = get_field('tracking-codes');
            $facebook = $trackingCodes['facebook-code'];
            $google = $trackingCodes['google-code'];

            if ($facebook) :

                echo $facebook;
            endif;
            if ($google) :
                echo $google;
            endif;
        endwhile;
        wp_footer();        
    ?>         
    </body>

    </html>