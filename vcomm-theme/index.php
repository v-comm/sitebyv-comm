<!-- ..................................... -->
<!-- header -->
<!-- ..................................... -->
<?php get_header(); ?>

<!-- ..................................... -->
<!-- nav -->
<!-- ..................................... -->
<?php include get_template_directory().'/nav.php'; ?>

<body id="top">
    <!-- ..................................... -->
    <!-- brand -->
    <!-- ..................................... -->
    <div class="brand">
        <img src="<?php echo get_bloginfo('template_url') ?>/image/brand.png"/>
    </div>

    <!-- ..................................... -->
    <!-- section 01 -->
    <!-- ..................................... -->
    <section class="" id="<?php echo $hash01; ?>">
        <?php include get_template_directory().'/framework/metaslider.php'; ?>
    </section>

    <!-- ..................................... -->
    <!-- section 02 -->
    <!-- ..................................... -->
    <section class="bg1" id="<?php echo $hash02; ?>">
        <?php include get_template_directory().'/framework/design.php'; ?>
    </section>

    <!-- ..................................... -->
    <!-- section 03 -->
    <!-- ..................................... -->
    <section class="bg2" id="<?php echo $hash03; ?>">
        <?php include get_template_directory().'/framework/design.php'; ?>
    </section>

    <!-- ..................................... -->
    <!-- section 04 -->
    <!-- ..................................... -->
    <section class="bg3" id="<?php echo $hash04; ?>">
        <?php include get_template_directory().'/framework/design.php'; ?>
    </section>

    <!-- ..................................... -->
    <!-- section 05 -->
    <!-- ..................................... -->
    <section class="bg4" id="<?php echo $hash05; ?>">
        <?php include get_template_directory().'/framework/catalogo.php'; ?>
    </section>

    <!-- ..................................... -->
    <!-- section 06 -->
    <!-- ..................................... -->
    <section class="bg5" id="<?php echo $hash06; ?>">
        <?php include get_template_directory().'/framework/blog.php'; ?>
    </section>

    <!-- ..................................... -->
    <!-- section 07 -->
    <!-- ..................................... -->
    <section class="bg6" id="<?php echo $hash07; ?>">
        <?php include get_template_directory().'/framework/contato.php'; ?>
    </section>

</body>

<!-- ..................................... -->
<!-- footer -->
<!-- ..................................... -->
<?php get_footer(); ?>