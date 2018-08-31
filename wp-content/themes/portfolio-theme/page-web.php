<?php get_header() ?>
	<?php the_post() ?>

	<?php if ( is_active_sidebar( 'contact_widget' ) ) : ?>
		<?php dynamic_sidebar( 'contact_widget' ); ?>            
	<?php endif; ?>
	
<!-- Desarollo Web -->
<div class="container py-3">
  <div class="row">
	<div class="col-md-8">
		<h1 class="titular__servicios my-5 p-1 mb-2">Desarrollo Web</h1>
 	 </div>
  </div>
</div>

<div class="card-deck">
  <div class="card">
	<img class="card-img-top" src="<?php bloginfo('template_url') ?>/assets/images/publicrom_web/Publicrom-Responsive-mockup.jpg" alt="">
    <div class="card-body">
      <h5 class="card-title">Mockup de website Publicrom</h5>
      <p class="card-text">Diseño preliminar de sitio web, empresa dedicada a la distibución y venta de albumes y laminas.</p>
    </div>
  </div>

  <div class="card">
    <img class="card-img-top" src="<?php bloginfo('template_url') ?>/assets/images/hiway_venture_web/Hiway-Ventures-v1.6.jpg" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">One page de Hiway Venture</h5>
      <p class="card-text">Web site de Hiway ventures dedicada al apoyo financiero de pequeñas empresas.</p>
    </div>
  </div>

  <div class="card">
    <img class="card-img-top" src="<?php bloginfo('template_url') ?>/assets/images/newrain_mockup/Newrain Mockup_Home.jpg" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title"></h5>
      <p class="card-text">.</p>
    </div>
  </div>
</div>
<!-- /Desarrollo Web -->

<?php get_footer() ?>