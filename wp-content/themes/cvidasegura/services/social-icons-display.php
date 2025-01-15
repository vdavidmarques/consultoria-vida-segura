<?php
class SocialIconsDisplay {
    private $post_name;
    private $post_type;
    private $options;

    public function __construct( $options = []) {
        $this->post_name = 'informacoes';
        $this->post_type = 'page';
        $this->options = $options;
    }

    public function display_social_icons() {
        $args = array(
            'name' => $this->post_name,
            'post_type' => $this->post_type,
        );

        $query = new WP_Query($args);
        if ($query->have_posts()) {
            while ($query->have_posts()) {
                $query->the_post();
                $whatsapp = get_field('whatsapp');
                $whatsappNumber = get_field('whatsappNumber');
                $whatsappMessage = get_field('whatsappMessage');
                $phone = get_field('phone');
                $email = get_field('e-mail');                        
                $instagram = get_field('instagram');
                $facebook = get_field('facebook');

                echo '<div class="socials-icons">';

                if (in_array('whatsapp', $this->options) && $whatsappNumber && $whatsappMessage) {
                    echo '<a target="_blank" href="https://api.whatsapp.com/send?phone=' . esc_attr($whatsappNumber) . '&text=' . esc_attr($whatsappMessage) . '">';
                    echo '<img src="' . esc_url(get_template_directory_uri() . '/dist/library/icons/whatsapp-consultoria-vida-segura-white.svg') . '" alt="WhatsApp - Consultoria Vida Segura | Empresa especializa em Planos de Saúde, odontológicos e funeral e Seguros de vida" itemprop="image">';
                    echo '</a>';
                }

                if (in_array('phone', $this->options) && $phone) {
                    echo '<a target="_blank" href="tel:' . esc_attr($phone) . '">';
                    echo '<img src="' . esc_url(get_template_directory_uri() . '/dist/library/icons/phone-consultoria-vida-segura-white.svg') . '" alt="Telefone - Consultoria Vida Segura | Empresa especializa em Planos de Saúde, odontológicos e funeral e Seguros de vida" itemprop="image">';
                    echo '</a>';
                }

                if (in_array('email', $this->options) && $email) {
                    echo '<a target="_blank" href="mailto:' . esc_attr($email) . '">';
                    echo '<img src="' . esc_url(get_template_directory_uri() . '/dist/library/icons/email-consultoria-vida-segura-white.svg') . '" alt="Email - Consultoria Vida Segura | Empresa especializa em Planos de Saúde, odontológicos e funeral e Seguros de vida" itemprop="image">';
                    echo '</a>';
                }

                if (in_array('instagram', $this->options) && $instagram) {
                    echo '<a target="_blank" href="' . esc_url($instagram) . '">';
                    echo '<img src="' . esc_url(get_template_directory_uri() . '/dist/library/icons/instagram-consultoria-vida-segura-white.svg') . '" alt="Instagram - Consultoria Vida Segura | Empresa especializa em Planos de Saúde, odontológicos e funeral e Seguros de vida" itemprop="image">';
                    echo '</a>';
                }

                if (in_array('facebook', $this->options) && $facebook) {
                    echo '<a target="_blank" href="' . esc_url($facebook) . '">';
                    echo '<img src="' . esc_url(get_template_directory_uri() . '/dist/library/icons/facebook-consultoria-vida-segura-white.svg') . '" alt="Facebook - Consultoria Vida Segura | Empresa especializa em Planos de Saúde, odontológicos e funeral e Seguros de vida" itemprop="image">';
                    echo '</a>';
                }

                echo '</div>';

                // Botão do menu móvel
                echo '<div class="open-menu-mobile">' ;
                echo '<button onclick="openMenu()" class="bg-menu-mobile">Menu</button>';
                echo '</div>';
            }
            wp_reset_postdata();
        }
    }
}
?>
