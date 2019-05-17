<!-- ..................................... -->
<!-- header -->
<!-- ..................................... -->
<?php get_header(); ?>

<!-- ..................................... -->
<!-- query -->
<!-- ..................................... -->
<?php
$args = array(
    'post_type'   => 'product',
    'stock'       => 1,
    'showposts'   => 6,
    'orderby'     => 'date',
    'order'       => 'DESC' ,
    'meta_query'  => array(
        array(
            'key'     => '_featured',
            'value'   => 0,
            'compare' => '>',
            'type'    => 'numeric'
        )
    )
);

$loop = new WP_Query( $args );
wp_reset_postdata();
?>
<!-- ..................................... -->
<!-- nav back -->
<!-- ..................................... -->
<section class="backnav">
    <a href="<?php echo site_url(); ?>/#blog" class="button is-rounded is-black is-outlined is-small">
        Voltar para o início
    </a>
</section>

<!-- ..................................... -->
<!-- conteudo -->
<!-- ..................................... -->
<div class="clear50" id="top"></div>
<section class="noscroll" id="comprar">
    <div class="columns">
        <div class="column is-8">
            <?php the_content(); ?>
        </div>

        <div class="column">
            <div class="">
                <small>SKU: <?php echo $product->get_sku(); ?></small>
                <?php woocommerce_template_single_title(); ?>
                <br>
                <small>Apenas</small>
                <h1 class="title is-2"><?php woocommerce_template_single_price(); ?></h1>
                <a 
                   class="button is-rounded is-outlined is-color is-large" 
                   href="<?php echo $product->add_to_cart_url(); ?>" 
                   target="_blank">
                    <?php echo $product->add_to_cart_text(); ?>
                </a>
            </div>
            
            <div class="clear100"></div>
            
            <div>
                <h1 class="title is-1 fine color3">SAIBA +</h1>
                <?php woocommerce_template_single_excerpt(); ?>
            </div>
        </div>
    </div>
</section>

<!-- ..................................... -->
<!-- descrição -->
<!-- ..................................... -->
<section class="hero is-fullheight landing" id="infos">
    <div class="hero-body">
        <div class="container">
            <div class="box desc-alpha">
                <h1 class="title is-3 fine">Descrição</h1>
                <div class="desc-alpha-content">
                    <?php woocommerce_template_single_excerpt(); ?>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ..................................... -->
<!-- listar produtos -->
<!-- ..................................... -->
<?php include get_template_directory().'/framework/woocommerce-lista.php'; ?>

<!-- ..................................... -->
<!-- footer -->
<!-- ..................................... -->
<?php get_footer(); ?>