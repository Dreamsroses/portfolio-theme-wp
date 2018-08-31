<?php get_header() ?>
	<?php the_post() ?>

	<?php if ( is_active_sidebar( 'contact_widget' ) ) : ?>
		<?php dynamic_sidebar( 'contact_widget' ); ?>            
	<?php endif; ?>
	
<!-- Fotografia -->
<div class="container py-3">
  <div class="row">
	<div class="col-md-12">
		<h1 class="titular__servicios my-5 p-1 mb-2">Fotografía</h1>
 	 </div>
  </div>
</div>

<div class="card-deck">
  <div class="card">
	<img class="card-img-top" src="<?php bloginfo('template_url') ?>/assets/images/futura_mama/IMG_4902.jpg" alt="logo blas diseño">
    <div class="card-body">
      <h5 class="card-title">Futura Mamá</h5>
      <p class="card-text">Sesión fotografica de futura mamá.</p>
    </div>
  </div>

  <div class="card">
    <img class="card-img-top" src="" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Card title</h5>
      <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
    </div>
  </div>

  <div class="card">
    <img class="card-img-top" src="" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Card title</h5>
      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
    </div>
  </div>
</div>
<!-- /Fotografia -->


<?php get_footer() ?>