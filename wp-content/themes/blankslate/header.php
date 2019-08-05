<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<link rel="stylesheet" href="css/style.css"/>
<link rel="icon" type="image/png" href="http://localhost/wordpress-appointment/wp-content/themes/blankslate/img/logo-icon.png"/>
<link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700,900" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<title>Paard Interiors | Set the mood of your space</title>
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<div id="wrapper" class="hfeed">
<header>
<div class="paged">
  <div class="header">
  <div class="header__logo-box">
    <a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php bloginfo('template_directory'); ?>/img/logo.png" alt="logo" class="header__logo"></a>
  </div>
<div class="navigation">
  <input type="checkbox" class="navigation__checkbox" id="navi-toggle">
  <label for="navi-toggle" class="navigation__button">
    <span class="menu-button">&nbsp;</span>
 </label>
 <nav id="menu">
 <?php wp_nav_menu( array( 'theme_location' => 'main-menu' ) ); ?>
 </nav>
</div>
</div>
<div class="header__text-box">
  <h1 class="heading-primary">
    <span class="heading-primary--main">transform</span>
    <span class="heading-primary--sub">your space Elegantly</span>
  </h1>
  <a href="#" class="btn btn--primary btn--animated">Book a viewing</a>
</div>
</header>
<div id="container">



