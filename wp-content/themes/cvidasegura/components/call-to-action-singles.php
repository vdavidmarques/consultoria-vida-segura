<?php
$args = array(
    'name' => 'informacoes',
    'post_type' => 'page',
);

$query = new WP_Query($args);
while ($query->have_posts()) :
    $query->the_post();
    $whatsappNumber = get_field('whatsappNumber');
endwhile;
wp_reset_postdata();

if (have_posts()) : while (have_posts()) : the_post();
        $title = get_field('call-to-action-main-title');
        $text = get_field('call-to-action-description');
        $wppLabel = get_field('call-to-action-wpp-label');
        $whatsappMessage = get_field('call-to-action-wpp-message');
        if ($title && $text && $wppLabel && $whatsappMessage):
?>
            <article class="call-to-action singles scroll-effect" itemscope itemprop="articleBody">
                <div class="content container">
                    <div class="description">
                        <h3 itemprop="headline" class="title">
                            <?php echo esc_html($title); ?>
                            <br />
                            <strong> <?php single_post_title(); ?></strong>
                        </h3>
                        <div itemprop="description"><?php echo $text; ?></div>
                        <a target="_blank" rel="noopener noreferrer" href="https://api.whatsapp.com/send?phone=<?php echo esc_attr($whatsappNumber); ?>&text=<?php echo esc_attr($whatsappMessage); ?>" itemprop="url" class="button button-green">
                            <?php echo esc_html($wppLabel); ?>
                        </a>
                    </div>
                </div>
            </article>
<?php
        endif;
    endwhile;
endif;
?>