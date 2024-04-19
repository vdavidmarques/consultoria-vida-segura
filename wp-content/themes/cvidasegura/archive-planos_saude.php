<?php get_header(); ?>
    <section itemscope itemtype="http://schema.org/Article" class="archive-health-insurance">
        <h1 itemprop="name">
            <?php the_archive_title(); ?>
        </h1>
        <?php
            $args = array(
                'post_type' => 'planos_saude',
                'posts_per_page' => -1,
                'post_status' => 'publish',
            );

            $query = new WP_Query($args);

            if ($query->have_posts()) : ?>
                <div class="partners-list flex flex-row">
                    <?php while ($query->have_posts()) : $query->the_post(); ?>
                        <?php if (has_post_thumbnail()) : ?>
                            <div class="partners-item">
                                <a itemprop="name" href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" itemprop="name">
                                    <?php the_post_thumbnail('thumbnail'); ?>
                                </a>
                            </div>
                        <?php endif; ?>
                    <?php endwhile; ?>
                </div>
                <?php
                wp_reset_postdata();
            else :
                echo '<p itemprop="description">Nenhum Plano de Saúde encontrado.</p>';
            endif;

            $args = array(
                'name' => 'informacoes',
                'post_type' => 'page',
                );

                $query = new WP_Query($args);
                while ($query->have_posts()) {
                    $query->the_post();
                    $whatsappNumber = get_field('whatsappNumber');
                    $whatsappMessage = get_field('whatsappMessage');
                    $email = get_field('e-mail');   
                    
                    $healthInsurance = get_field('health-insurance');

                    //Banner
                    $bgImage = $healthInsurance['image']; 
                    $bannerTitle = $healthInsurance['title'];
                    $bannerText = $healthInsurance['text'];
                    $bannerButtonLink = $healthInsurance['botao']['url'];
                    $bannerButtonLabel = $healthInsurance['botao']['title'];

                    //Quadro descritivo
                    $imageListTitle = $healthInsurance['image-list-main-title'];
                    $imageListImage = $healthInsurance['image-list-left-image'];
                    $imageListItem1 = $healthInsurance['image-list-item-1'];
                    $imageListItem2 = $healthInsurance['image-list-item-2'];
                    $imageListItem3 = $healthInsurance['image-list-item-3'];
                    $imageListItem4 = $healthInsurance['image-list-item-4'];

                    //Call to action
                    $title = $healthInsurance['call-to-action-main-title'];
                    $text = $healthInsurance['call-to-action-description'];
                    $wppLabel = $healthInsurance['call-to-action-wpp-label'];
                    $emailLabel = $healthInsurance['call-to-action-email-label'];
        ?>
            <article itemscope itemprop="articleBody" class="banner mt-20">
                <?php echo $bgImage ?>
                <?php echo $bannerTitle ?>
                <?php echo $bannerText ?>
                <a href="<?php echo $bannerButtonLink ?>" alt="" itemprop="name">
                    <?php echo $bannerButtonLabel ?>
                </a>
            </article>

            <article itemscope itemprop="articleBody" class="image-list mt-20">
                <?php echo $imageListTitle ?>
                <?php echo $imageListImage ?>
                <?php echo $imageListItem1 ?>
                <?php echo $imageListItem2 ?>
                <?php echo $imageListItem3 ?>
                <?php echo $imageListItem4 ?>
            </article>

            <article itemscope itemprop="articleBody" class="call-to-action mt-20">
                <h3 itemprop="headline"><?php echo $title ?>
                    <br /> 
                    <strong> <?php the_archive_title(); ?></strong>
                </h3>
                <p itemprop="description"><?php echo $text ?></p>
                <a target="_blank" href="https://api.whatsapp.com/send?phone=<?php echo     $whatsappNumber ?>&text=<?php echo $whatsappMessage ?>" itemprop="name">
                    <?php echo $wppLabel ?>
                </a>
                <a target="_blank" href="mailto:<?php echo $email ?>" itemprop="name">
                    <?php echo $emailLabel ?>
                </a>
            </article>
        <?php } ?>
    </section>
<?php get_footer(); ?>