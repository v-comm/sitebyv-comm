<!-- ..................................... -->
<!-- header -->
<!-- ..................................... -->
<?php get_header(); ?>

<!-- ..................................... -->
<!-- nav back -->
<!-- ..................................... -->
<section class="backnav">
    <a onclick="goBack();"class="button is-rounded is-black is-outlined is-small">
        Voltar
    </a>
</section>

<!-- ..................................... -->
<!-- search -->
<!-- ..................................... -->
<section class="hero is-light">
    <div class="hero-body">
        <div class="container has-text-centered">
            <h1 class="title is-2">Resultado da Busca</h1>
        </div>
    </div>
</section>

<section class="hero">
    <div class="hero-body">
        <div class="content has-text-centered">
            <ul class="inline">
                <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                <li class="has-text-left">

                    <div class="columns">
                        <div class="column is-4">
                            <a href="<?php the_permalink() ?>">
                                <img src="<?php the_post_thumbnail_url(); ?>">
                            </a>
                        </div>
                        <div class="column">
                            <h2><?php the_title(); ?></h2>
                            <?php the_excerpt(); ?>
                            <a href="<?php the_permalink() ?>" class="button is-rounded is-outlined is-color">
                                saiba +
                            </a>
                        </div>
                    </div>


                </li>

                <?php endwhile; else: ?>

                <div class="columns has-text-left">
                    <div class="column is-5">
                        <h1 class="title is-2">Nada encontrado.</h1>
                        <h1 class="subtitle is-5">Continue procurando. Tente outra palavra-chave.</h1>
                        <?php include get_template_directory().'/searchbox.php'; ?>
                    </div>

                    <div class="column is-7"></div>
                </div>
                <?php endif; ?>
            </ul>
        </div>
    </div>
</section>

<!-- ..................................... -->
<!--footer -->
<!-- ..................................... -->
<?php get_footer(); ?>