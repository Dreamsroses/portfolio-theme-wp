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

	<?php
		$arg = array(
			'post_type'		 => 'fotografia',
			'posts_per_page' => 3,
			'paged'			 => $paged
		);

		$get_arg = new WP_Query( $arg );

		while ( $get_arg->have_posts() ) {
			$get_arg->the_post();
		?>

		<div class="card">
		<?php the_post_thumbnail('mediana', array('class' => 'img-responsive')) ?>
			<div class="card-body">
				<h5 class="card-title"><?php the_title() ?></h5>
				<p class="card-text"><?php the_excerpt() ?></p>
			</div>
		</div>

		<?php } wp_reset_postdata();
	?>
</div>
<!-- /Fotografia -->

<?php get_footer() ?>