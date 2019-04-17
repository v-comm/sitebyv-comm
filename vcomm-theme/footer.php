<!-- ..................................... -->
<!-- top button -->
<!-- ..................................... -->
<div class="top">
    <a class="button is-rounded is-black" href="#top"><i class="fas fa-arrow-up"></i></a>
</div>

<!-- ..................................... -->
<!-- v-comm -->
<!-- ..................................... -->
<section class="section has-text-centered">
    <small>site by</small><br>
    <a href="https://www.vcomm.com.br" target="_blank"> <img src="<?php echo get_bloginfo('template_url') ?>/framework/vcomm.png"/></a>
</section>

<!-- ..................................... -->
<!-- wp-footer & Analytics -->
<!-- ..................................... -->
<?php wp_footer(); ?>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-131382205-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-131382205-1');
</script>
