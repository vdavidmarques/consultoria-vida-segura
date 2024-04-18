<?php
    add_action('wp_enqueue_scripts', 'blankslate_enqueue');
    function blankslate_enqueue()
    {
        wp_enqueue_style('blankslate-style', get_stylesheet_uri());
        wp_enqueue_script('jquery');
    }

    function enqueue_tailwind_css() {
        wp_enqueue_style( 'output', get_template_directory_uri() . '/src/css/output.css', array(), '1.0.0' );
    }
    add_action( 'wp_enqueue_scripts', 'enqueue_tailwind_css' );

    
    /*******************************
        Menu
    ********************************/

    // Função para registrar o menu principal
    function custom_menu_customize_register( $wp_customize ) {
        // Seção para o menu principal
        $wp_customize->add_section( 'custom_menu_section', array(
            'title'    => __( 'Menu principal', 'consultoria-vida-segura' ),
            'priority' => 30,
        ) );

        // Configuração para adicionar itens ao menu
        for ( $i = 1; $i <= 50; $i++ ) { // Defina o número máximo de itens do menu
            $wp_customize->add_setting( 'custom_menu_item_' . $i, array(
                'default'           => '',
                'sanitize_callback' => 'sanitize_text_field',
            ) );

            $wp_customize->add_control( 'custom_menu_item_' . $i, array(
                'label'    => __( 'Item ' . $i, 'consultoria-vida-segura' ),
                'section'  => 'custom_menu_section',
                'type'     => 'text',
                'priority' => $i,
            ) );

            $wp_customize->add_setting( 'custom_menu_item_url_' . $i, array(
                'default'           => '',
                'sanitize_callback' => 'esc_url_raw',
            ) );

            $wp_customize->add_control( 'custom_menu_item_url_' . $i, array(
                'label'    => __( 'URL do Item ' . $i, 'consultoria-vida-segura' ),
                'section'  => 'custom_menu_section',
                'type'     => 'url',
                'priority' => $i + 10,
            ) );
        }
    }
    add_action( 'customize_register', 'custom_menu_customize_register' );

    // Função para imprimir o menu principal
    function custom_menu() {
        ?>
        <nav id="custom-menu">
            <ul>
                <?php
                for ( $i = 1; $i <= 50; $i++ ) { // Deve corresponder ao número definido acima
                    $menu_item = get_theme_mod( 'custom_menu_item_' . $i );
                    $menu_item_url = get_theme_mod( 'custom_menu_item_url_' . $i );

                    if ( ! empty( $menu_item ) ) {
                        echo '<li><a href="' . esc_url( $menu_item_url ) . '">' . esc_html( $menu_item ) . '</a></li>';
                    }
                }
                ?>
            </ul>
        </nav>
        <?php
    }

    // Adicionar o menu ao tema
    function register_custom_menu() {
        register_nav_menu( 'custom_menu', __( 'Menu principal', 'consultoria-vida-segura' ) );
    }
    add_action( 'after_setup_theme', 'register_custom_menu' );

    // Adicionar o menu principal ao tema
    function custom_menu_hook() {
        wp_nav_menu( array(
            'theme_location' => 'custom_menu',
            'menu_id'        => 'custom-menu',
            'fallback_cb'    => 'custom_menu',
        ) );
    }
    add_action( 'custom_menu_hook', 'custom_menu_hook' );

    

    /*******************************
        Creating Informações Page
    ********************************/

        /*******************************
         Disabling Guttenber Editor
        ********************************/

        add_filter('use_block_editor_for_post_type','disable_guttemberg_editor');
        function disable_guttemberg_editor() {
            return false;
        }

        /*******************************
         Adding the Options Page in Admin Menu
        ********************************/

        add_action('admin_menu', 'linked_url');
        function linked_url() {
            add_menu_page('linked_url','Informações','read','post.php?post=8&action=edit','', 'dashicons-admin-generic',  90);
        }

        /*******************************
            Hiding the Options Page
        ********************************/

        add_filter('parse_query','exclude_pages_from_admin');
        function exclude_pages_from_admin($query){
            global $pagenow,$post_type;
            if(is_admin() && $pagenow == 'edit.php' && $post_type == 'page') {
                $settings_page = get_page_by_path('informacoes', NULL,'page')->ID;
                $query->query_vars['post__not_in'] = array($settings_page);
            }
        }
 