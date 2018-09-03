<?php get_header() ?>

<!-- Sobre Nosotros -->
<div class="container py-5">
  <div class="row">
	<div class="col-md-12">
		<h1 class="titular__nosotros my-5 p-1 mb-2">Sobre Nosotros</h1>
		<h4 class="subtitulo__nosotros">"Desarrollamos soluciones en base a su modelo de negocio, asesoramos, investigamos y diseñamos.
		Nos involucramos con su marca desde el perfil del negocio, asesoramos desde su perspectiva, a través de investigaciones de mercado para finalmente desarrollar las soluciones gráficas a la medida."</h4>
		<a href="<?php bloginfo('url') ?>/nosotros" class="btn btn-outline-warning btn-lg">Ver más</a>   
	</div>
 </div>
</div>
<!-- /Sobre Nosotros -->

<!-- Nuestros Servicios -->
<div class="container py-5">
  <div class="row">
	<div class="col-md-12">
		<h1 class="titular__servicios my-5 p-1 mb-2">Nuestros Servicios</h1>
	</div>
  </div>
</div>

<div class="card-group">
  <div class="card">
    <img class="card-img-top" src="<?php bloginfo('template_url') ?>/assets/images/camera.jpg" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Fotografia</h5>
      <p class="card-text">Servicio de fotografía enfocado a la imagen empresarial o simplemente para la creación de albúm de fotos familiares.</p>
    </div>
    <div class="card-footer">
      <a href="<?php bloginfo('url') ?>/fotografia" class="btn btn-outline-warning btn-lg"><small class="text-muted">Ver más</small></a>
    </div>
  </div>
  <div class="card">
    <img class="card-img-top" src="<?php bloginfo('template_url') ?>/assets/images/marca.jpg" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Marca</h5>
      <p class="card-text">Todo lo realacionado a su marca, ya sea para un producto o servicio que se comercialice. Entregamos diseño basado en los resultados de  asesoría e investigación.</p>
    </div>
    <div class="card-footer">
     <a href="<?php bloginfo('url') ?>/marca" class="btn btn-outline-warning btn-lg"><small class="text-muted">Ver más</small></a>
    </div>
  </div>
  <div class="card">
    <img class="card-img-top" src="<?php bloginfo('template_url') ?>/assets/images/code.jpg" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Desarrollo Web</h5>
      <p class="card-text">Damos asesoría integral en el desarrollo de su sitio web, pasando por las capas de confección, habilitación en web server y administración.</p>
    </div>
    <div class="card-footer">
    <a href="<?php bloginfo('url') ?>/web" class="btn btn-outline-warning btn-lg"><small class="text-muted">Ver más</small></a>
    </div>
  </div>
</div>
<!-- /Nuestros Servicios -->

<!-- Contacto -->
<div class="container py-5">
  <div class="row">
  <div class="col-md-12">
    <h1 class="titular__contactanos my-5 p-1 mb-2">Contáctenos</h1>
    <h3 class="subtitulo__contactanos">Te invitamos a consultar por nuestros servicios.</h3>
    <a href="<?php bloginfo('url') ?>/contacto" class="btn btn-outline-warning btn-lg btn-block">Ver más</a>   
  </div>
 </div>
</div>
<!-- /Contacto -->

<?php get_sidebar() ?>

<?php get_footer() ?>