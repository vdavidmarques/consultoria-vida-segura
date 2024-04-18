</main>
</div>
<footer>
    <div class="bg-blue text-white">
        <div class="container">
            <?php custom_footer_menu(); ?>
            
            <?php
                $args = array(
                    'name' => 'informacoes',
                    'post_type' => 'page',
                );
    
                $query = new WP_Query($args);
                while ($query->have_posts()) {
                $query->the_post();
                $whatsapp = get_field('whatsapp');
                $whatsappNumber = get_field('whatsappNumber');
                $whatsappMessage = get_field('whatsappMessage');
                $email = get_field('e-mail');                        
                $instagram = get_field('instagram');
                $facebook = get_field('facebook');
                $address = get_field('address');
            ?>
                <h3>Christiane Barros</h3>
                <a target="_blank" href="https://api.whatsapp.com/send?phone=<?php echo $whatsappNumber ?>&text=<?php echo $whatsappMessage ?>">
                    <?php echo $whatsapp ?>
                </a>
                <p> <?php echo $email ?></p>
          
        </div>
    </div>
    <div class="container">
        <p> <?php echo $address ?></p>
        <?php } ?>
        <div id="copyright">
            &copy; <?php echo esc_html(date_i18n(__('Y', 'blankslate'))); ?> 
            <?php echo esc_html(get_bloginfo('name')); ?>
        </div>
    </div>
</footer>
</div>
<?php wp_footer(); ?>
</body>

</html>