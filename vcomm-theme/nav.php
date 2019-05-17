<!-- ..................................... -->
<!-- nav-config -->
<!-- ..................................... -->

<?php

$section01 = "Home";
$section02 = "Design";
$section03 = "Conteúdo 02";
$section04 = "Conteúdo 03";
$section05 = "Catálogo";
$section06 = "Blog";
$section07 = "Contato";

$hash01 = "top";
$hash02 = "design";
$hash03 = "pagina02";
$hash04 = "pagina03";
$hash05 = "catalogo";
$hash06 = "blog";
$hash07 = "contato";

?>

<!-- ..................................... -->
<!-- nav -->
<!-- ..................................... -->
<div class="toggle">
    <a class="button is-black" onclick="openNav();"><i class="fas fa-bars"></i></a>
</div>
<section class="nav">
    <ul class="nav-itens">
        <li><a href="#<?php echo $hash01; ?>"> <?php echo $section01; ?></a></li>
        <li><a href="#<?php echo $hash02; ?>"> <?php echo $section02; ?></a></li>
        <li><a href="#<?php echo $hash03; ?>"> <?php echo $section03; ?></a></li>
        <li><a href="#<?php echo $hash04; ?>"> <?php echo $section04; ?></a></li>
        <li><a href="#<?php echo $hash05; ?>"> <?php echo $section05; ?></a></li>
        <li><a href="#<?php echo $hash06; ?>"> <?php echo $section06; ?></a></li>
        <li><a href="#<?php echo $hash07; ?>"> <?php echo $section07; ?></a></li>
    </ul>
</section>
<div class="toggle-data">
    <ul class="toggle-itens">
        <li><a onclick="exitNav();" href="#<?php echo $hash01; ?>"> <?php echo $section01; ?></a></li>
        <li><a onclick="exitNav();" href="#<?php echo $hash02; ?>"> <?php echo $section02; ?></a></li>
        <li><a onclick="exitNav();" href="#<?php echo $hash03; ?>"> <?php echo $section03; ?></a></li>
        <li><a onclick="exitNav();" href="#<?php echo $hash04; ?>"> <?php echo $section04; ?></a></li>
        <li><a onclick="exitNav();" href="#<?php echo $hash05; ?>"> <?php echo $section05; ?></a></li>
        <li><a onclick="exitNav();" href="#<?php echo $hash06; ?>"> <?php echo $section06; ?></a></li>
        <li><a onclick="exitNav();" href="#<?php echo $hash07; ?>"> <?php echo $section07; ?></a></li>
    </ul>
</div>

<script type="text/javascript">
    $(document).keydown(function(e) { if (e.keyCode == 27) { exitNav(); } });
    function openNav(){ $(".toggle-data").animate({right: '0px', opacity: '1'}, { duration: 500, easing: 'easeOutExpo'}); }
    function exitNav(){ $(".toggle-data").animate({right: '-1000px', opacity: '0'}, { duration: 500, easing: 'easeOutExpo'});} 
</script>