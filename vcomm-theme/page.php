<!-- ..................................... -->
<!-- menu -->
<!-- ..................................... -->
<?php get_header(); ?>

<!-- ..................................... -->
<!-- content -->
<!-- ..................................... -->
<body>
    <div class="hero">
        <div class="hero-body">
            <div class="container">
                <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                <div class="conteudo">
                    <br><?php edit_post_link('(Editar?)'); ?>
                    <h1 class="title is-4 color1"><?php the_title(); ?></h1>
					<p>&nbsp;</p>
                   <?php the_content(); ?>
                </div>
                <?php endwhile; else: ?>

                <div class="artigo">
                    <h2>Nada Encontrado</h2>
                    <p>Erro 404</p>
                    <p>Lamentamos mas nada foi encontrado.</p>
                </div>            
                <?php endif; ?>
            </div>
        </div>
    </div>
</body>

<!-- ..................................... -->
<!-- footer -->
<!-- ..................................... -->
<?php get_footer(); ?>