<?php get_header() ?>

<?php if ( have_posts() ) { ?>
	<?php while ( have_posts() ) { ?>
		<?php the_post(); ?>

		<div class="col-md-12">
			<?php the_post_thumbnail('full', array('class' => 'img-responsive')) ?>
			<div class="card-body">
				<h5 class="card-title"><?php the_title() ?></h5>
				<p class="card-text"><?php the_excerpt() ?></p>
			</div>
		</div>

	<?php } ?>
<?php } else { ?>

<?php } wp_reset_query(); ?>

<?php get_sidebar() ?>
<?php get_footer() ?>


