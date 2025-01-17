<?php


/*******************************
    Adding scripts and Css
 ********************************/
add_action('wp_enqueue_scripts', function () {
    if (!is_admin()) {
        wp_enqueue_style('style', get_template_directory_uri() . '/style.css', array(), '1.0.0');

        wp_enqueue_script('script-js', get_template_directory_uri() . "/dist/library/js/scripts.min.js", array('jquery'), null, true);
        wp_enqueue_script('partners', get_template_directory_uri() . "/dist/library/js/swiper/partners.min.js", array('jquery'), null, true);
    }
});

/*******************************
    Carregar font de forma assincrona - Google Fonts
    Deve trocar o nome da font, se necessário
 ********************************/
function carregar_fontes_assincronas()
{
    wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Rubik:wght@400;900&display=swap', array(), '1.0');
    wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Montserrat:wght@400;900&display=swap', array(), '1.0');
}
add_action('wp_enqueue_scripts', 'carregar_fontes_assincronas');


/*******************************
    Get ID by Slug
 ********************************/

 function get_page_id_by_slug($slug)
 {
     $page = get_page_by_path($slug, OBJECT, 'page');
     if ($page) {
         return $page->ID;
     }
     return 0;
 }