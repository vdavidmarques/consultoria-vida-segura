<div class="breadcrumb container">
    <a href="<?php echo esc_url(home_url('/')); ?>" alt="Página inicial">Página inicial</a> /
    <?php if (!is_front_page()) { ?>
        <a href="<?php echo esc_url(home_url('/')); ?>" alt="Título da página principal"><?php echo get_the_title(get_option('page_on_front')); ?></a> /
    <?php } ?>

    <?php if (is_category()) {
        $category = get_the_category();
        $cat_ID = $category[0]->cat_ID;
        echo get_category_parents($cat_ID, true, ' / ');
    } elseif (is_single()) {
        $category = get_the_category();
        $cat_ID = $category[0]->cat_ID;
        echo get_category_parents($cat_ID, true, ' / ');
        echo get_the_title();
    } elseif (is_page()) {
        $post = $wp_query->get_queried_object();
        if ($post->post_parent == 0) {
            echo get_the_title();
        } else {
            $title = get_the_title();
            $ancestors = array_reverse(get_post_ancestors($post->ID));
            foreach ($ancestors as $ancestor) {
                echo '<a href="' . get_permalink($ancestor) . '" alt="' . get_the_title($ancestor) . '">' . get_the_title($ancestor) . '</a> / ';
            }
            echo $title;
        }
    } elseif (is_404()) {
        echo '404 Error - Not Found';
    }
    ?>
</div>