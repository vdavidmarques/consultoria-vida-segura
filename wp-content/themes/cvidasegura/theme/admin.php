<?php
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
            add_menu_page('linked_url','Informações Gerais','read','post.php?post=8&action=edit','', 'dashicons-admin-generic',  90);
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

        /*******************************
        Remove "Category:", "Tag:", "Author:" from the_archive_title function. This case, only form post-type archive
        ********************************/
        add_filter('get_the_archive_title', function ($title) {
            if (is_post_type_archive()) {
                $title = post_type_archive_title('', false);
            }
            return $title;
        });
?>