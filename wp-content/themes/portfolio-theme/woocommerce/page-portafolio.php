<?php get_header() ?>
	<?php the_post() ?>
	
	<?php if ( is_active_sidebar( 'contact_widget' ) ) : ?>
		<?php dynamic_sidebar( 'contact_widget' ); ?>            
	<?php endif; ?>

<!-- Sobre Nosotros -->
<div class="container py-5">
  <div class="row">
	<div class="col-md-12">
		<h1 class="titular__portafolio my-5 p-1 mb-2">Portafolio</h1>
		<h5 class="subtitulo__portafolio">"Nuestro portafolio esta orientado a prestar servicios de consultoria de Diseño Gráfico, dar valor en los entregables para su empresa y la captación correcta de sus clientes. Trabajamos con metodologias y empatía para el cliente interno y externo"</h5>
	</div>
  </div>
</div>
<!-- /Sobre Nosotros -->

<?php get_footer() ?>