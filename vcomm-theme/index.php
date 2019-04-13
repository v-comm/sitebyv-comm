<!-- ..................................... -->
<!-- header -->
<!-- ..................................... -->
<?php get_header(); ?>

<!-- ..................................... -->
<!-- nav -->
<!-- ..................................... -->
<div class="toggle">
    <a class="button is-black" onclick="openNav();"><i class="fas fa-bars"></i></a>
</div>
<section class="nav">
    <ul class="nav-itens">
        <li><a href="#top">Home</a></li>
        <li><a href="#pagina01">Conteúdo 01</a></li>
        <li><a href="#pagina02">Conteúdo 02</a></li>
        <li><a href="#pagina03">Conteúdo 03</a></li>
        <li><a href="#pagina04">Conteúdo 04</a></li>
        <li><a href="#pagina05">Conteúdo 05</a></li>
        <li><a href="#contato" class="sliding-link">Contato</a></li>
    </ul>
</section>
<div class="toggle-data">
    <ul class="toggle-itens">
        <li><a onclick="exitNav();" href="#top">Home</a></li>
        <li><a onclick="exitNav();" href="#pagina01">Conteúdo 01</a></li>
        <li><a onclick="exitNav();" href="#pagina02" >Conteúdo 02</a></li>
        <li><a onclick="exitNav();" href="#pagina03">Conteúdo 03</a></li>
        <li><a onclick="exitNav();" href="#pagina04">Conteúdo 04</a></li>
        <li><a onclick="exitNav();" href="#pagina05">Conteúdo 05</a></li>
        <li><a onclick="exitNav();" href="#contato">Contato</a></li>
    </ul>
</div>

<script type="text/javascript">
    $(document).keydown(function(e) { if (e.keyCode == 27) { exitNav(); } });
    function openNav(){ $(".toggle-data").animate({right: '0px', opacity: '1'}, { duration: 500, easing: 'easeOutExpo'}); }
    function exitNav(){ $(".toggle-data").animate({right: '-1000px', opacity: '0'}, { duration: 500, easing: 'easeOutExpo'});} 
</script>

<body id="top">
    <!-- ..................................... -->
    <!-- brand -->
    <!-- ..................................... -->
    <div class="brand">
        <img src="<?php echo get_bloginfo('template_url') ?>/image/brand.png"/>
    </div>

    <!-- ..................................... -->
    <!-- banner -->
    <!-- ..................................... -->
    <?php echo do_shortcode('[metaslider id="6"]'); ?>

    <!-- ..................................... -->
    <!-- página 01 -->
    <!-- ..................................... -->
    <section class="section has-text-centered" id="pagina01">
        <div class="clearnav"></div>
        <h1>Conteúdo 01</h1>

        <?php 
        // the query
        $the_query = new WP_Query( array(
            /*'category_name' => 'news',*/
            'posts_per_page' => 20,
        )); 
        ?>

        <?php if ( $the_query->have_posts() ) : ?>
        <ul class="thumbs">
            <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

            <li>
                <a href="<?php the_permalink(); ?>">
                    <div class="thumb" style="background-image: url(<?php the_post_thumbnail_url(); ?>);"></div>
                </a>
                <h3><?php the_title(); ?></h3>
                <div>
                    <?php the_excerpt(); ?>
                    <br>
                    <a href="<?php the_permalink(); ?>" class="button is-rounded is-outlined is-black">saiba mais</a>
                </div>
                <p>&nbsp;</p>
            </li>

            <?php endwhile; ?>
        </ul>

        <?php wp_reset_postdata(); ?>
        <?php else : ?>
        <p><?php __('Em breve :)'); ?></p>
        <?php endif; ?>
    </section>

    <!-- ..................................... -->
    <!-- página 02 -->
    <!-- ..................................... -->
    <section class="section has-text-centered bg2" id="pagina02">
        <div class="clearnav"></div>
        <h1>Conteúdo 02</h1>

        <?php 
        // the query
        $the_query = new WP_Query( array(
            /*'category_name' => 'news',*/
            'posts_per_page' => 20,
        )); 
        ?>

        <?php if ( $the_query->have_posts() ) : ?>
        <ul class="thumbs">
            <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

            <li>
                <a href="<?php the_permalink(); ?>">
                    <div class="thumb" style="background-image: url(<?php the_post_thumbnail_url(); ?>);"></div>
                </a>
                <h3><?php the_title(); ?></h3>
                <div>
                    <?php the_excerpt(); ?>
                    <br>
                    <a href="<?php the_permalink(); ?>" class="button is-rounded is-outlined is-black">saiba mais</a>
                </div>
                <p>&nbsp;</p>
            </li>

            <?php endwhile; ?>
        </ul>

        <?php wp_reset_postdata(); ?>
        <?php else : ?>
        <p><?php __('Em breve :)'); ?></p>
        <?php endif; ?>
    </section>

    <!-- ..................................... -->
    <!-- página 03 -->
    <!-- ..................................... -->
    <section class="section has-text-centered" id="pagina03">
        <div class="clearnav"></div>
        <h1>Conteúdo 03</h1>

        <?php 
        // the query
        $the_query = new WP_Query( array(
            /*'category_name' => 'news',*/
            'posts_per_page' => 20,
        )); 
        ?>

        <?php if ( $the_query->have_posts() ) : ?>
        <ul class="thumbs">
            <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

            <li>
                <a href="<?php the_permalink(); ?>">
                    <div class="thumb" style="background-image: url(<?php the_post_thumbnail_url(); ?>);"></div>
                </a>
                <h3><?php the_title(); ?></h3>
                <div>
                    <?php the_excerpt(); ?>
                    <br>
                    <a href="<?php the_permalink(); ?>" class="button is-rounded is-outlined is-black">saiba mais</a>
                </div>
                <p>&nbsp;</p>
            </li>

            <?php endwhile; ?>
        </ul>

        <?php wp_reset_postdata(); ?>
        <?php else : ?>
        <p><?php __('Em breve :)'); ?></p>
        <?php endif; ?>
    </section>

    <!-- ..................................... -->
    <!-- página 04 -->
    <!-- ..................................... -->
    <section class="section has-text-centered bg2" id="pagina04">
        <div class="clearnav"></div>
        <h1>Conteúdo 04</h1>

        <?php 
        // the query
        $the_query = new WP_Query( array(
            /*'category_name' => 'news',*/
            'posts_per_page' => 20,
        )); 
        ?>

        <?php if ( $the_query->have_posts() ) : ?>
        <ul class="thumbs">
            <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

            <li>
                <a href="<?php the_permalink(); ?>">
                    <div class="thumb" style="background-image: url(<?php the_post_thumbnail_url(); ?>);"></div>
                </a>
                <h3><?php the_title(); ?></h3>
                <div>
                    <?php the_excerpt(); ?>
                    <br>
                    <a href="<?php the_permalink(); ?>" class="button is-rounded is-outlined is-black">saiba mais</a>
                </div>
                <p>&nbsp;</p>
            </li>

            <?php endwhile; ?>
        </ul>

        <?php wp_reset_postdata(); ?>
        <?php else : ?>
        <p><?php __('Em breve :)'); ?></p>
        <?php endif; ?>
    </section>

    <!-- ..................................... -->
    <!-- página 05 -->
    <!-- ..................................... -->
    <section class="section has-text-centered" id="pagina05">
        <div class="clearnav"></div>
        <h1>Conteúdo 05</h1>

        <?php 
        // the query
        $the_query = new WP_Query( array(
            /*'category_name' => 'news',*/
            'posts_per_page' => 20,
        )); 
        ?>

        <?php if ( $the_query->have_posts() ) : ?>
        <ul class="thumbs">
            <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

            <li>
                <a href="<?php the_permalink(); ?>">
                    <div class="thumb" style="background-image: url(<?php the_post_thumbnail_url(); ?>);"></div>
                </a>
                <h3><?php the_title(); ?></h3>
                <div>
                    <?php the_excerpt(); ?>
                    <br>
                    <a href="<?php the_permalink(); ?>" class="button is-rounded is-outlined is-black">saiba mais</a>
                </div>
                <p>&nbsp;</p>
            </li>

            <?php endwhile; ?>
        </ul>

        <?php wp_reset_postdata(); ?>
        <?php else : ?>
        <p><?php __('Em breve :)'); ?></p>
        <?php endif; ?>
    </section>

    <!-- ..................................... -->
    <!-- contato -->
    <!-- ..................................... -->
    <section class="hero bg6" id="contato">
        <div class="hero-body">
            <div class="container">
                <div>
                    <div class="clearNav"></div>
                    <h1 class="title is-1c color1">Contatos</h1>
                    <p>&nbsp;</p>
                </div>
                <div class="columns">
                    <div class="column white">
                        <h5><strong class="color1">Endereço</strong></h5>
                        <p>Rua Nome da Rua, 2000</p>
                        <p>Bairro, Cidade - Estado</p>
                        <p>CEP: 10000-100</p>
                        <p>Brasil</p>
                    </div>
                    <div class="column white">
                        <h5><strong class="color1">Contatos</strong></h5>
                        <p>Telefone: +55 11 4000-4000</p>
                        <p>WhatsApp: +55 11 9 9999-999</p>
                        <p>E-Mail: seuemail@seudominio.com.br</p>
                    </div>
                    <div class="column white">
                        <h5><strong class="color1">Redes Sociais</strong></h5>
                        <ul class="inline">
                            <li>
                                <a href="#" target="_blank" class="fadeBtn">
                                    <img src="<?php echo get_bloginfo('template_url')?>/engine/facebook.png">
                                </a>
                                <a href="#" target="_blank" class="fadeBtn">
                                    <img src="<?php echo get_bloginfo('template_url')?>/engine/instagram.png">
                                </a>
                            </li>

                        </ul>
                    </div>
                </div>


                <h3 class="title color1">Como Chegar?</h3>
                <h5 class="subtitle white"><a href="#mapa">Visualize no mapa</a> nosso endereço</h5>
            </div>
        </div>
    </section>

    <!-- ..................................... -->
    <!-- maps -->
    <!-- ..................................... -->
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31754249.36074266!2d-69.68079759861634!3d-13.703233577223767!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9c59c7ebcc28cf%3A0x295a1506f2293e63!2sBrasil!5e0!3m2!1spt-BR!2sbr!4v1539986049533" width="100%" height="600" frameborder="0" style="border:0" allowfullscreen id="mapa"></iframe>

</body>

<!-- ..................................... -->
<!-- footer -->
<!-- ..................................... -->
<?php get_footer(); ?>