<!-- ..................................... -->
<!-- header -->
<!-- ..................................... -->
<?php get_header(); ?>

<body id="top">
    <!-- ..................................... -->
    <!-- nav back -->
    <!-- ..................................... -->
    <section class="backnav">
        <a href="<?php echo site_url(); ?>" class="button is-rounded is-black is-outlined is-small">Voltar para o início</a>
    </section>

    <!-- ..................................... -->
    <!-- content -->
    <!-- ..................................... -->
    <section class="noscroll">
        <div class="clearnav"></div>
        <div class="columns">
            <br>
            <div class="column is-8">
                <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                <small><?php the_time('d/M/Y') ?></small>
                <h2><?php the_title(); ?></h2>
                <p><?php the_content(); ?></p>

                <p>&nbsp;</p>


                <?php endwhile; else: ?>

                <div>
                    <h2>Nada Encontrado</h2>
                    <p>Erro 404</p>
                    <p>Lamentamos mas nada foi encontrado.</p>
                </div>            
                <?php endif; ?>
            </div>
            <div class="column">

                <div>   
                    <h3 class="color1 has-text-centered">Pesquisar</h3>
                    <form role="search" action="<?php echo site_url('/'); ?>" method="get" id="searchform">
                        <input class="input" type="text" name="s" placeholder="O que procura?"/>
                        <div class="has-text-right">
                            <div class="clearsearch"></div>
                            <input class="button" type="submit" value="Buscar">
                        </div>
                    </form>
                </div>


                <h3 class="color1 has-text-centered">Veja também</h3>
                <?php 
                // the query
                $the_query = new WP_Query( array(
                    /*'category_name' => 'news',*/
                    'posts_per_page' => 3,
                )); 
                ?>

                <?php if ( $the_query->have_posts() ) : ?>
                <div class="clearsidebar"></div>
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
                                    <div class="excerpt color4"><?php the_excerpt(); ?></div>
                                </div>
                            </div>
                        </a>
                        <hr>
                    </li>

                    <?php endwhile; ?>
                </ul>
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