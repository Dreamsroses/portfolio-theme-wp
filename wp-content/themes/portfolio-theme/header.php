<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo('charset') ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php get_template_part('_includes/iOS', 'icons') ?>
	<?php wp_head() ?>
</head>
<body>

	<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
	<a class="navbar-brand" href="<?php bloginfo('url') ?>/">
    <img src="<?php bloginfo('template_url') ?>/assets/images/logo-Effect-Shot.png" class="logo__navbar d-inline-block align-top" alt="logo"></a>
  	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  	</button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="<?php bloginfo('url') ?>/">Home<span class="sr-only"></span></a>
      </li>

		  <li class="nav-item dropdown">
        <a class="nav-link" href="<?php bloginfo('url') ?>/portafolio" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Portafolio</a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="<?php bloginfo('url') ?>/fotografia">Fotografia</a>
          <a class="dropdown-item" href="<?php bloginfo('url') ?>/marca">Marca</a>
          <a class="dropdown-item" href="<?php bloginfo('url') ?>/web">Desarrollo Web</a>
        </div>
       </li>

      <li class="nav-item">
        <a class="nav-link" href="<?php bloginfo('url') ?>/nosotros">Sobre Nosotros</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php bloginfo('url') ?>/contacto">Contacto</a>
      </li>      
    </ul>
  </div>
</nav>
<!-- /Navbar -->

<!-- Header -->
<div class="img__header--jumbotron jumbotron jumbotron-fluid img-fluid display-4">
  <div class="container">
	<h2 class="titulo__header--jumbotron my-5 p-3 mb-2 text-white">Diseñamos tu negocio</h2>
  </div>
</div>
<!-- /Header -->

<?php if ( has_nav_menu( 'header-menu' ) ) { ?>
	<?php wp_nav_menu( array( 'theme_location' => 'header-menu', 'container_class' => 'header_menu' ) ); ?>
<?php } ?>