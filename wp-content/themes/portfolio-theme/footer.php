<?php if ( has_nav_menu( 'footer-menu' ) ) { ?>
	<?php wp_nav_menu( array( 'theme_location' => 'footer-menu', 'container_class' => 'header_menu' ) ); ?>
<?php } ?>

<!-- Footer -->
<div class="row my-5">
  <div class="col-sm-6">
      <div class="card-body">
        <h1 class="titular__contactanos card-title">Como Encontrarnos</h1>
        <span></span>
      	<p><i class="fa fa-building fa-2x m-2 text-warning"></i>Oficina Virtual</p>
      	<p><i class="fa fa-phone-square fa-2x m-2 text-warning"></i>Fono: + 56 9 0110545</p>
       	<p><i class="fa fa-envelope fa-2x m-2 text-warning"></i>E-mail: rosa.morales.rojas@gmail.com</p>
    </div>
  </div>
  <div class="col-sm-6">
     <div class="titular__siguenos card-body">
        <h1 class="card-title">Síguenos en Redes Sociales</h1>
		<a href="https://www.facebook.com/effect.shot/" target="_blank"><span><i class="fa fa-facebook-f fa-4x m-5"></i></span></a>
		<a href="https://twitter.com/effect_shot" target="_blank"><span><i class="fa fa-twitter fa-4x m-5"></i></span></a>
		<a href="https://www.instagram.com/effect.shot/" target="_blank"><span><i class="fa fa-instagram fa-4x m-5"></i></span></a>
      </div>
  </div>
</div>
<!-- /Footer -->

<div class="col-md-12 bg-secondary text-light">
  <p class="p-3">By Effect Shot Design © Copyright 2018</p>
</div>

<?php wp_footer() ?>
</body>
</html>