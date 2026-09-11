<!doctype html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="<?php echo esc_attr( get_bloginfo( 'description' ) ); ?>">
<meta name="robots" content="noindex, nofollow">
<link rel="icon" href="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/icon-160.png" type="image/png">
<link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/fonts/fonts.css">
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<a class="sr-only" href="#main">Skip to content</a>
<header class="topbar" x-data="{open:false}">
  <div class="wrap">
    <a class="logo" href="<?php echo esc_url( home_url( '/' ) ); ?>" aria-label="Steinbach Dental Clinic home">
      <img class="lockup" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/lockup-light.png" alt="Steinbach Dental Clinic" width="220" height="44">
    </a>
    <nav class="nav" aria-label="Main" :class="{open:open}">
<?php wp_nav_menu( array(
  'theme_location' => 'primary',
  'container'      => false,
  'items_wrap'     => '%3$s',
  'fallback_cb'    => 'sdc_nav_fallback',
) ); ?>
</nav>
    <div class="actions">
      <a class="phone" href="tel:+12043266494">(204) 326-6494</a>
      <a class="btn btn-primary" href="<?php echo esc_url( home_url( '/book/' ) ); ?>">Book online</a>
      <button class="menu-btn" x-on:click="open=!open" :aria-expanded="open" x-text="open ? 'Close' : 'Menu'" aria-controls="nav">Menu</button>
    </div>
  </div>
</header>

<main id="main">
