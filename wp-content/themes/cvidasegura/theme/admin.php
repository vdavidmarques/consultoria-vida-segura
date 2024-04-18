<?php
    
    /*******************************
        Menu
    ********************************/

    // Função para registrar os menus personalizados
    function custom_menus_customize_register( $wp_customize ) {
        // Seção para o menu do header
        $wp_customize->add_section( 'custom_header_menu_section', array(
            'title'    => __( 'Menu do Header', 'consultoria-vida-segura' ),
            'priority' => 30,
        ) );

        // Configuração para adicionar itens ao menu do header
        for ( $i = 1; $i <= 10; $i++ ) { // Defina o número máximo de itens do menu
            $wp_customize->add_setting( 'custom_header_menu_item_' . $i, array(
                'default'           => '',
                'sanitize_callback' => 'sanitize_text_field',
            ) );

            $wp_customize->add_control( 'custom_header_menu_item_' . $i, array(
                'label'    => __( 'Item ' . $i, 'consultoria-vida-segura' ),
                'section'  => 'custom_header_menu_section',
                'type'     => 'text',
                'priority' => $i,
            ) );

            $wp_customize->add_setting( 'custom_header_menu_item_url_' . $i, array(
                'default'           => '',
                'sanitize_callback' => 'esc_url_raw',
            ) );

            $wp_customize->add_control( 'custom_header_menu_item_url_' . $i, array(
                'label'    => __( 'URL do Item ' . $i, 'consultoria-vida-segura' ),
                'section'  => 'custom_header_menu_section',
                'type'     => 'url',
                'priority' => $i + 10,
            ) );
        }

        // Seção para o menu do footer
        $wp_customize->add_section( 'custom_footer_menu_section', array(
            'title'    => __( 'Menu do Footer', 'consultoria-vida-segura' ),
            'priority' => 31,
        ) );

        // Configuração para adicionar itens ao menu do footer
        for ( $j = 1; $j <= 10; $j++ ) { // Defina o número máximo de itens do menu
            $wp_customize->add_setting( 'custom_footer_menu_item_' . $j, array(
                'default'           => '',
                'sanitize_callback' => 'sanitize_text_field',
            ) );

            $wp_customize->add_control( 'custom_footer_menu_item_' . $j, array(
                'label'    => __( 'Item ' . $j, 'consultoria-vida-segura' ),
                'section'  => 'custom_footer_menu_section',
                'type'     => 'text',
                'priority' => $j,
            ) );

            $wp_customize->add_setting( 'custom_footer_menu_item_url_' . $j, array(
                'default'           => '',
                'sanitize_callback' => 'esc_url_raw',
            ) );

            $wp_customize->add_control( 'custom_footer_menu_item_url_' . $j, array(
                'label'    => __( 'URL do Item ' . $j, 'consultoria-vida-segura' ),
                'section'  => 'custom_footer_menu_section',
                'type'     => 'url',
                'priority' => $j + 10,
            ) );
        }
    }
    add_action( 'customize_register', 'custom_menus_customize_register' );

    // Função para imprimir o menu do header
    function custom_header_menu() {
        ?>
        <nav id="custom-header-menu">
            <?php
            wp_nav_menu( array(
                'theme_location' => 'custom_header_menu',
                'menu_id'        => 'custom-header-menu',
                'fallback_cb'    => '__return_false',
            ) );
            ?>
        </nav>
        <?php
    }

    // Função para imprimir o menu do footer
    function custom_footer_menu() {
        ?>
        <nav id="custom-footer-menu">
            <?php
            wp_nav_menu( array(
                'theme_location' => 'custom_footer_menu',
                'menu_id'        => 'custom-footer-menu',
                'fallback_cb'    => '__return_false',
            ) );
            ?>
        </nav>
        <?php
    }

    // Adicionar os menus personalizados ao tema
    function register_custom_menus() {
        register_nav_menus(
            array(
                'custom_header_menu' => __( 'Menu do Header', 'consultoria-vida-segura' ),
                'custom_footer_menu' => __( 'Menu do Footer', 'consultoria-vida-segura' ),
            )
        );
    }
    add_action( 'after_setup_theme', 'register_custom_menus' );



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
        
        /*******************************
        Support post-thumbnails
        ********************************/

        if ( function_exists( 'add_theme_support' ) ) { 
            add_theme_support( 'post-thumbnails' );
            set_post_thumbnail_size( 150, 150, true ); // default Post Thumbnail dimensions (cropped)
        
            // additional image sizes
            // delete the next line if you do not need additional image sizes
            add_image_size( 'category-thumb', 300, 9999 ); //300 pixels wide (and unlimited height)
        }

?>