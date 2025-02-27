<div class="container our-services--services">
    <?php
    function exibir_todos_seguros()
    {
        $args = array(
            'post_type'      => 'seguros',
            'tax_query'      => array(
                array(
                    'taxonomy' => 'categoria_seguro',
                    'field'    => 'term_id',
                    'operator' => 'EXISTS',
                ),
            ),
            'posts_per_page' => -1,
        );

        $query = new WP_Query($args);
    
        $termos_exibidos = array();

        if ($query->have_posts()) {           
            while ($query->have_posts()) {
                $query->the_post();
    
                $terms = get_the_terms(get_the_ID(), 'categoria_seguro');

                if ($terms && !is_wp_error($terms)) {
                    foreach ($terms as $term) {
                        if (!in_array($term->term_id, $termos_exibidos)) {
                            $termos_exibidos[] = $term->term_id;
                            $term_link = get_term_link($term);
                            echo '<article class="our-services--services--list">';
                            echo '<h3 class="our-services--services--list--title">' . esc_html($term->name) . '</h3>';
                            echo '<p class="our-services--services--list--description">' . esc_html($term->description) . '</p>';
                            echo '<div class="our-services--services--list--term">';
                            echo '<h4 class="our-services--services--list--term-title">Seguros</h4>';
                            echo '<a href="' . esc_url($term_link) . '" class="our-services--services--list--link" itemprop="url">';
                            echo 'Leia mais</a>';
                            echo '</div>';
                            echo '</article>';
                        }
                    }
                }
            }
            wp_reset_postdata();
        } else {
            echo '<p>Nenhum Seguro encontrado.</p>';
        }
    }

    exibir_todos_seguros();
    ?>

</div>