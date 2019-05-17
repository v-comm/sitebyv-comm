<!-- ..................................... -->
<!-- Listar Produtos -->
<!-- ..................................... -->
<section class="hero" id="produtos">
    <div class="hero-body">
        <div class="container has-text-centered">
            <div class="has-text-centered">
                <p>&nbsp;</p>
                <h1 class="title is-2 fine">Você pode gostar</h1>
                <h1 class="subtitle is-4 fine">Uma lista completa de seus produtos</h1>
                <p>&nbsp;</p>
            </div>
            <ul class="inline">
                <?php
                $args = array(
                    /*'category_name' => 'sem-categoria',*/
                    'post_type' => 'product',
                    'post_type' => 'product',
                    'posts_per_page' => 12,
                );

                $loop = new WP_Query( $args );
                if ( $loop->have_posts() ) {
                    while ( $loop->have_posts() ) : $loop->the_post(); ?>
                <li class="has-text-left">
                    <a href="<?php echo $product->get_permalink(); ?>">
                        <?php echo $product->get_image(); ?>
                        <p>&nbsp;</p>
                        <h1 class="subtitle is-5"><?php echo $product->get_title(); ?></h1>
                        <h1 class="title is-3"> 
                            R$ <?php echo $product->get_price(); ?>
                        </h1>
                    </a>

                    <div class="has-text-left">
                        <a href="<?php echo $product->get_permalink(); ?>">
                            <p>&nbsp;</p>
                            <button class="button is-rounded is-outlined is-color">Saiba +</button>
                        </a>
                    </div>
                    <p>&nbsp;</p>
                    <hr>
                </li>
                <?php
                    endwhile;
                } else {
                    echo __( 'No products found' );
                }
                wp_reset_postdata();
                ?>
            </ul>
        </div>
    </div>
</section>