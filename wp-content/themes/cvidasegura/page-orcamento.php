<?php
    get_header();
    
    if ( function_exists( 'wpcf7_enqueue_scripts' ) ) {
        wpcf7_enqueue_scripts();
    }
    
    if ( function_exists( 'wpcf7_enqueue_styles' ) ) {
        wpcf7_enqueue_styles();
    }
    
    include 'blocks/breadcrumb.php'
?>
<section class="page-orcamento container" itemscope itemtype="http://schema.org/ContactPage">
    <?php
        $args = array(
            'name' => 'informacoes',
            'post_type' => 'page',
        );

        $query = new WP_Query($args);
        while ($query->have_posts()) :
            $query->the_post();
            $whatsapp = get_field('whatsapp');
            $whatsappNumber = get_field('whatsappNumber');
            $whatsappMessage = get_field('whatsappMessage');
            $phone = get_field('phone');
            $email = get_field('e-mail');
            $title = get_field('title-budget');
    ?>
        <div class="title" itemprop="headline">
            <?php echo $title; ?>
        </div>
        <div class="socials-icons"  itemscope itemtype="http://schema.org/Organization">
            <a target="_blank" rel="noopener noreferrer" href="https://api.whatsapp.com/send?phone=<?php echo $whatsappNumber ?>&text=<?php echo $whatsappMessage ?>" itemprop="url">
                <img src="<?php echo  get_template_directory_uri() . '/dist/library/icons/whatsapp-consultoria-vida-segura-blue.svg' ?>" alt="WhatsApp - Consultoria Vida Segura | Empresa especializa em Planos de Saúde, odontológicos e funeral e Seguros de vida" itemprop="image" class="icon" itemprop="image">
                <?php echo $whatsapp; ?>
            </a>

            <a target="_blank" href="tel:<?php echo $phone ?>">
                <img src="<?php echo  get_template_directory_uri() . '/dist/library/icons/phone-consultoria-vida-segura-blue.svg' ?>" alt="WhatsApp - Consultoria Vida Segura | Empresa especializa em Planos de Saúde, odontológicos e funeral e Seguros de vida" itemprop="image" class="icon" itemprop="image">
                <?php echo $phone ?>
            </a>

            <a target="_blank" rel="noopener noreferrer" href="mailto:<?php echo $email ?>" itemprop="url">
                <img src="<?php echo  get_template_directory_uri() . '/dist/library/icons/email-consultoria-vida-segura-blue.svg' ?>" alt="Email - Consultoria Vida Segura | Empresa especializa em Planos de Saúde, odontológicos e funeral e Seguros de vida" itemprop="image" class="icon" itemprop="image">
                <?php echo $email ?>
            </a>
            <div class="address">
                <img src="<?php echo  get_template_directory_uri() . '/dist/library/icons/endereco-consultoria-vida-segura-blue.svg' ?>" alt="Endereço - Consultoria Vida Segura | Empresa especializa em Planos de Saúde, odontológicos e funeral e Seguros de vida" itemprop="image" class="icon">
                <p class="text"><?php echo get_field('address'); ?></p>
            </div>
        </div>
        <div class="form">
            <?php
                include_once 'services/check-enviroment-form.php';
            ?>
        </div>
        <?php endwhile; ?>
</section>
<?php get_footer();  ?>