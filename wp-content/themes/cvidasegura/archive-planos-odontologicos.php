<?php get_header(); ?>
    <section itemscope itemtype="http://schema.org/Article" class="archive-planos-odontologicos">
        <h1 itemprop="name">
            <?php the_archive_title(); ?>
        </h1>
        <div class="flex flex-col">
            <?php
                $args = array(
                    'post_type' => 'planos-odontologicos',
                    'posts_per_page' => -1,
                    'post_status' => 'publish',
                );

                $query = new WP_Query($args);

                if ($query->have_posts()) : ?>
                    <div class="partners-list">
                        <?php while ($query->have_posts()) : $query->the_post(); ?>
                            <?php if (has_post_thumbnail()) : ?>
                                <div class="partners-item">
                                    <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" itemprop="name">
                                        <?php the_post_thumbnail('thumbnail'); ?>
                                    </a>
                                </div>
                            <?php endif; ?>
                        <?php endwhile; ?>
                    </div>
                    <?php
                    wp_reset_postdata();
                else :
                    echo '<p itemprop="articleBody">Nenhum Plano odontológico encontrado.</p>';
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

                        $dentalPlans = get_field('dental-plans');
                        
                        //Banner
                        $bgImage = $dentalPlans['image']; 
                        $bannerTitle = $dentalPlans['title'];
                        $bannerText = $dentalPlans['text'];
                        $bannerButtonLink = $dentalPlans['botao']['url'];
                        $bannerButtonLabel = $dentalPlans['botao']['title'];

                        //Quadro descritivo
                        $imageListTitle = $dentalPlans['image-list-main-title'];
                        $imageListImage = $dentalPlans['image-list-left-image'];
                        $imageListItem1 = $dentalPlans['image-list-item-1'];
                        $imageListItem2 = $dentalPlans['image-list-item-2'];
                        $imageListItem3 = $dentalPlans['image-list-item-3'];
                        $imageListItem4 = $dentalPlans['image-list-item-4'];

                        //Call to action
                        $title = $dentalPlans['call-to-action-main-title'];
                        $text = $dentalPlans['call-to-action-description'];
                        $wppLabel = $dentalPlans['call-to-action-wpp-label'];
                        $emailLabel = $dentalPlans['call-to-action-email-label'];
                        
                       
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
                    <a target="_blank" href="https://api.whatsapp.com/send?phone=<?php echo     $whatsappNumber ?>&text=<?php echo $whatsappMessage ?>">
                        <?php echo $wppLabel ?>
                    </a>
                    <a target="_blank" href="mailto:<?php echo $email ?>">
                        <?php echo $emailLabel ?>
                    </a>
                </article>
            <?php } ?>
        </div>
    </section>
<?php get_footer(); ?>