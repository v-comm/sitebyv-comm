<head>
    <!-- ..................................... -->
    <!-- title  -->
    <!-- ..................................... -->
    <title> 
        <?php
        $site_description = get_bloginfo( 'description', 'display' );
        $site_name = get_bloginfo( 'name' );
        //for home page
        if ( $site_description && ( is_home() || is_front_page() ) ):
        echo $site_name;
        endif;
        // for other post pages
        if (!( is_home() ) && ! is_404() ):
        the_title();
        endif;
        ?>
    </title>
    <!-- ..................................... -->
    <!-- meta -->
    <!-- ..................................... -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="theme-color" content="#222222" />
    <meta name="viewport" content="width=device-width, initial-scale=1 maximum-scale=1.0, user-scalable=no">
    <link rel="icon" href="<?php echo get_bloginfo('template_url') ?>/favicon.png">

    <!-- ..................................... -->
    <!-- external css -->
    <!-- ..................................... -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.2/css/bulma.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.3/dist/jquery.fancybox.min.css"/>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo get_bloginfo('template_url') ?>/style.css">
    <link rel="stylesheet" href="<?php echo get_bloginfo('template_url') ?>/custom.css">

    <!-- ..................................... -->
    <!-- external js -->
    <!-- ..................................... -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.3/dist/jquery.fancybox.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>

    <!-- ..................................... -->
    <!-- scripts -->
    <!-- ..................................... -->
    <script>
        // WOW
        wow = new WOW(
            {
                boxClass:     'wow',      // default
                animateClass: 'animated', // default
                offset:       100,          // default
                mobile:       true,       // default
                live:         true        // default
            }
        )
        wow.init();

        // autoscroll
        jQuery(document).ready(function($) {
            $('a[href^="#"]').bind('click.smoothscroll',function (e) {
                e.preventDefault();
                var target = this.hash,
                    $target = $(target);

                $('html, body').stop().animate( {
                    'scrollTop': $target.offset().top-0
                }, 1000, 'easeOutExpo', function () {
                    window.location.hash = target;
                } );
            } );
        });

        // logo + nav
        $(document).scroll(function() {
            var y = $(this).scrollTop();
            if (y > 10) {
                $('.brand').fadeOut(500);
                $('.nav').css("background-color", "#222");
            } else {
                $('.brand').fadeIn(500);
                $('.nav').css("background-color", "transparent");
            }
        });

        // top
        $(document).scroll(function() {
            var y = $(this).scrollTop();
            if (y > 0) {
                $('.top').fadeIn(200);
            } else {
                $('.top').fadeOut(200);
            }
        });

        // history back
        function goBack() { window.history.back();}

        // fake load
        setInterval(function(){ $('.fakeload').fadeOut(500); clearInterval(); }, 2000);
    </script>

    <!-- ..................................... -->
    <!-- loader -->
    <!-- ..................................... -->
    <section class="fakeload">
        <img src="<?php echo get_bloginfo('template_url') ?>/load.gif"/ id="gif">
    </section>
</head>

