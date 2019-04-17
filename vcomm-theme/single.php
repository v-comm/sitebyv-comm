<!-- ..................................... -->
<!-- header -->
<!-- ..................................... -->
<?php get_header(); ?>

<body id="top">
    <!-- ..................................... -->
    <!-- nav back -->
    <!-- ..................................... -->
    <section class="backnav">
        <a href="<?php echo site_url(); ?>/#blog" class="button is-rounded is-black is-outlined is-small">
            Voltar para o início
        </a>
    </section>

    <!-- ..................................... -->
    <!-- content -->
    <!-- ..................................... -->
    <section class="noscroll">
        <div class="clearnav"></div>
        <div class="columns">
            <div class="column is-8">

                <!-- query-content -->
                <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                <div class="postdata has-text-centered">Postado em <?php the_time('d/M/Y') ?></div>
                <h1 class="title is-2 color1 has-text-centered"><?php the_title(); ?></h1>
                <div id="wordpress">
                    <?php the_content(); ?>
                </div>

                <!-- edit -->
                <p>&nbsp;</p>
                <div class="edit">
                    <?php edit_post_link('Deseja editar este conteúdo? Toque aqui para editar.'); ?>
                </div>

                <!-- query-close -->
                <?php endwhile; else: ?>
                <div>
                    <h2>Nada Encontrado</h2>
                    <p>Lamentamos mas nada foi encontrado.</p>
                </div>            
                <?php endif; ?>
            </div>

            <!-- ..................................... -->
            <!-- sidebar -->
            <!-- ..................................... -->
            <div class="column">
                <div class="clear25"></div>
                <?php include get_template_directory().'/searchbox.php'; ?>

                <h1 class="title is-5 color1 has-text-centered">Veja também</h1>
                <!-- query -->
                <?php 
                $the_query = new WP_Query( array(
                    /*'category_name' => 'sem-categoria',*/
                    'posts_per_page' => 5,
                    'post_type' => 'post',
                )); 
                ?>

                <!-- query-content -->
                <?php if ( $the_query->have_posts() ) : ?>
                <ul class="thumbs">
                    <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
                    <li>
                        <a href="<?php the_permalink(); ?>">
                            <div class="columns">
                                <div class="column">
                                    <img src="<?php the_post_thumbnail_url(); ?>">
                                </div>
                                <div class="column">
                                    <strong class="color6"><?php the_title(); ?></strong>
                                </div>
                            </div>
                        </a>
                        <hr>
                    </li>

                    <?php endwhile; ?>
                </ul>

                <!-- query-close -->
                <?php wp_reset_postdata(); ?>
                <?php else : ?>
                <p><?php __('Em breve :)'); ?></p>
                <?php endif; ?>
            </div>

            <div class="column"></div>
        </div>
    </section>
</body>

<!-- ..................................... -->
<!-- footer -->
<!-- ..................................... -->
<?php get_footer(); ?>