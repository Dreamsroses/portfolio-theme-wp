<?php get_header() ?>
	<?php the_post() ?>

	<?php if ( is_active_sidebar( 'contact_widget' ) ) : ?>
		<?php dynamic_sidebar( 'contact_widget' ); ?>            
	<?php endif; ?>
	
<!-- Diseños de Marca -->
<div class="container py-3">
  <div class="row">
	<div class="col-md-12">
		<h1 class="titular__servicios my-5 p-1 mb-2">Marca</h1>
 	 </div>
  </div>
</div>

<div class="card-deck">
  <div class="card">
	<img class="card-img-top" src="<?php bloginfo('template_url') ?>/assets/images/blas_diseño.jpg" alt="logo blas diseño">
    <div class="card-body">
      <h5 class="card-title">Logo Blas Diseño</h5>
      <p class="card-text">Diseño de logo Blas diseño, empresa dedicada a arquitectura y topografía.</p>
    </div>
  </div>

  <div class="card">
    <img class="card-img-top" src="<?php bloginfo('template_url') ?>/assets/images/elefante_frontal_v3.jpg" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">The Elephant Coffee</h5>
      <p class="card-text">Empresa dedicada a la venta de café.</p>
    </div>
  </div>

  <div class="card">
    <img class="card-img-top" src="<?php bloginfo('template_url') ?>/assets/images/tarjeta_ca.png" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Tarjeta de presentación</h5>
      <p class="card-text">Tarjeta de presentación de Carlos Augusto, Investigador Paranormal.</p>
    </div>
  </div>
</div>
<!-- /Diseños de Marca -->

<?php get_footer() ?>