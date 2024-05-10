<?php 

    // Custom Post Type Parceiros
    function registrar_parceiros_custom_post() {
        $labels = array(
            'name'               => 'Parceiros',
            'singular_name'      => 'Parceiro',
            'menu_name'          => 'Parceiros',
            'name_admin_bar'     => 'Parceiro',
            'add_new'            => 'Adicionar Novo',
            'add_new_item'       => 'Adicionar Novo Parceiro',
            'new_item'           => 'Novo Parceiro',
            'edit_item'          => 'Editar Parceiro',
            'view_item'          => 'Ver Parceiro',
            'all_items'          => 'Todos os Parceiros',
            'search_items'       => 'Pesquisar Parceiros',
            'parent_item_colon'  => 'Parceiros Pai:',
            'not_found'          => 'Nenhum parceiro encontrado.',
            'not_found_in_trash' => 'Nenhum parceiro encontrado na lixeira.'
        );
        
        $args = array(
            'labels'             => $labels,
            'public'             => true,
            'publicly_queryable' => true,
            'show_ui'            => true,
            'show_in_menu'       => true,
            'query_var'          => true,
            'rewrite'            => array( 'slug' => 'parceiros' ),
            'capability_type'    => 'post',
            'has_archive'        => true,
            'hierarchical'       => false,
            'menu_position'      => null,
            'menu_icon'          => 'dashicons-businessman',
            'supports'           => array( 'title', 'editor', 'thumbnail', 'custom-fields'),
        );
        
        register_post_type( 'parceiros', $args );
    }
    add_action( 'init', 'registrar_parceiros_custom_post' );

    // Registrar Custom Post Type Planos de Saúde
    function registrar_planos_saude_custom_post() {
        $labels = array(
            'name'               => 'Planos de Saúde',
            'singular_name'      => 'Plano de Saúde',
            'menu_name'          => 'Planos de Saúde',
            'name_admin_bar'     => 'Plano de Saúde',
            'add_new'            => 'Adicionar Novo',
            'add_new_item'       => 'Adicionar Novo Plano de Saúde',
            'new_item'           => 'Novo Plano de Saúde',
            'edit_item'          => 'Editar Plano de Saúde',
            'view_item'          => 'Ver Plano de Saúde',
            'all_items'          => 'Todos os Planos de Saúde',
            'search_items'       => 'Pesquisar Planos de Saúde',
            'parent_item_colon'  => 'Planos de Saúde Pai:',
            'not_found'          => 'Nenhum plano de saúde encontrado.',
            'not_found_in_trash' => 'Nenhum plano de saúde encontrado na lixeira.'
        );
        
        $args = array(
            'labels'             => $labels,
            'public'             => true,
            'publicly_queryable' => true,
            'show_ui'            => true,
            'show_in_menu'       => true,
            'query_var'          => true,
            'rewrite'            => array( 'slug' => 'planos-de-saude' ),
            'capability_type'    => 'post',
            'has_archive'        => true,
            'hierarchical'       => false,
            'menu_position'      => null,
            'supports'           => array( 'title', 'editor', 'thumbnail', 'custom-fields'),
            'menu_icon'          => 'dashicons-heart' //Planos de Saúde
        );
        
        register_post_type( 'planos-de-saude', $args );

         // Registrar Taxonomia para Planos de Saúde
         $labels_taxonomy = array(
            'name'              => 'Categorias de Planos de Saúde',
            'singular_name'     => 'Categoria de Planos de Saúde',
            'search_items'      => 'Pesquisar Categorias',
            'all_items'         => 'Todas as Categorias',
            'parent_item'       => 'Categoria Pai',
            'parent_item_colon' => 'Categoria Pai:',
            'edit_item'         => 'Editar Categoria',
            'update_item'       => 'Atualizar Categoria',
            'add_new_item'      => 'Adicionar Nova Categoria',
            'new_item_name'     => 'Novo Nome de Categoria',
            'menu_name'         => 'Categorias de Planos de Saúde',
        );
        
        $args_taxonomy = array(
            'hierarchical'      => true,
            'labels'            => $labels_taxonomy,
            'show_ui'           => true,
            'show_admin_column' => true,
            'query_var'         => true,
            'rewrite'           => array( 'slug' => 'plano-de-saude' ),
        );
        
        register_taxonomy( 'categoria_planos-de-saude', 'planos-de-saude', $args_taxonomy );
    }
    add_action( 'init', 'registrar_planos_saude_custom_post' );

    // Registrar Custom Post Type Seguros
    function registrar_seguros_custom_post() {
        $labels = array(
            'name'               => 'Seguros',
            'singular_name'      => 'Seguro',
            'menu_name'          => 'Seguros',
            'name_admin_bar'     => 'Seguro',
            'add_new'            => 'Adicionar Novo',
            'add_new_item'       => 'Adicionar Novo Seguro',
            'new_item'           => 'Novo Seguro',
            'edit_item'          => 'Editar Seguro',
            'view_item'          => 'Ver Seguro',
            'all_items'          => 'Todos os Seguros',
            'search_items'       => 'Pesquisar Seguros',
            'parent_item_colon'  => 'Seguros Pai:',
            'not_found'          => 'Nenhum seguro encontrado.',
            'not_found_in_trash' => 'Nenhum seguro encontrado na lixeira.'
        );
        
        $args = array(
            'labels'             => $labels,
            'public'             => true,
            'publicly_queryable' => true,
            'show_ui'            => true,
            'show_in_menu'       => true,
            'query_var'          => true,
            'rewrite'            => array( 'slug' => 'seguros' ),
            'capability_type'    => 'post',
            'has_archive'        => true,
            'hierarchical'       => false,
            'menu_position'      => null,
            'supports'           => array( 'title', 'editor','thumbnail', 'custom-fields' ),
            'menu_icon'          => 'dashicons-shield'
        );
        
        register_post_type( 'seguros', $args );

        // Registrar Taxonomia para Seguros
        $labels_taxonomy = array(
            'name'              => 'Categorias de Seguros',
            'singular_name'     => 'Categoria de Seguro',
            'search_items'      => 'Pesquisar Categorias',
            'all_items'         => 'Todas as Categorias',
            'parent_item'       => 'Categoria Pai',
            'parent_item_colon' => 'Categoria Pai:',
            'edit_item'         => 'Editar Categoria',
            'update_item'       => 'Atualizar Categoria',
            'add_new_item'      => 'Adicionar Nova Categoria',
            'new_item_name'     => 'Novo Nome de Categoria',
            'menu_name'         => 'Categorias de Seguros',
        );
        
        $args_taxonomy = array(
            'hierarchical'      => true,
            'labels'            => $labels_taxonomy,
            'show_ui'           => true,
            'show_admin_column' => true,
            'query_var'         => true,
            'rewrite'           => array( 'slug' => 'seguro' ),
        );
        
        register_taxonomy( 'categoria_seguro', 'seguros', $args_taxonomy );
    }
    add_action( 'init', 'registrar_seguros_custom_post' );


    // Registrar Custom Post Type Planos Odontológicos
    function registrar_planos_odontologicos_custom_post() {
        $labels = array(
            'name'               => 'Planos Odontológicos',
            'singular_name'      => 'Plano Odontológico',
            'menu_name'          => 'Planos Odontológicos',
            'name_admin_bar'     => 'Plano Odontológico',
            'add_new'            => 'Adicionar Novo',
            'add_new_item'       => 'Adicionar Novo Plano Odontológico',
            'new_item'           => 'Novo Plano Odontológico',
            'edit_item'          => 'Editar Plano Odontológico',
            'view_item'          => 'Ver Plano Odontológico',
            'all_items'          => 'Todos os Planos Odontológicos',
            'search_items'       => 'Pesquisar Planos Odontológicos',
            'parent_item_colon'  => 'Planos Odontológicos Pai:',
            'not_found'          => 'Nenhum plano odontológico encontrado.',
            'not_found_in_trash' => 'Nenhum plano odontológico encontrado na lixeira.'
        );
        
        $args = array(
            'labels'             => $labels,
            'public'             => true,
            'publicly_queryable' => true,
            'show_ui'            => true,
            'show_in_menu'       => true,
            'query_var'          => true,
            'rewrite'            => array( 'slug' => 'planos-odontologicos' ),
            'capability_type'    => 'post',
            'has_archive'        => true,
            'hierarchical'       => false,
            'menu_position'      => null,
            'supports'           => array( 'title', 'editor', 'thumbnail', 'custom-fields'),
            'menu_icon'          => 'dashicons-smiley' //Planos Odontológicos
        );
        
        register_post_type( 'planos-odontologicos', $args );
    }
    add_action( 'init', 'registrar_planos_odontologicos_custom_post' );

    // Registrar Custom Post Type Planos Funeral
    function registrar_planos_funeral_custom_post() {
        $labels = array(
            'name'               => 'Planos Funeral',
            'singular_name'      => 'Plano Funeral',
            'menu_name'          => 'Planos Funeral',
            'name_admin_bar'     => 'Plano Funeral',
            'add_new'            => 'Adicionar Novo',
            'add_new_item'       => 'Adicionar Novo Plano Funeral',
            'new_item'           => 'Novo Plano Funeral',
            'edit_item'          => 'Editar Plano Funeral',
            'view_item'          => 'Ver Plano Funeral',
            'all_items'          => 'Todos os Planos Funeral',
            'search_items'       => 'Pesquisar Planos Funeral',
            'parent_item_colon'  => 'Planos Funeral Pai:',
            'not_found'          => 'Nenhum plano funeral encontrado.',
            'not_found_in_trash' => 'Nenhum plano funeral encontrado na lixeira.'
        );
        
        $args = array(
            'labels'             => $labels,
            'public'             => true,
            'publicly_queryable' => true,
            'show_ui'            => true,
            'show_in_menu'       => true,
            'query_var'          => true,
            'rewrite'            => array( 'slug' => 'planos-funeral' ),
            'capability_type'    => 'post',
            'has_archive'        => true,
            'hierarchical'       => false,
            'menu_position'      => null,
            'supports'           => array( 'title', 'editor', 'thumbnail', 'custom-fields'),
            'menu_icon'          => 'dashicons-marker' //Planos Funeral
        );
        
        register_post_type( 'planos-funeral', $args );
    }
    add_action( 'init', 'registrar_planos_funeral_custom_post' );



?>