<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package auction_house_special
 */

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Ron's Auction</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;700&family=Roboto+Slab:wght@300;400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css" media="screen" title="no title" charset="utf-8">
    <?php wp_head(); ?>
  </head>
  <body>
  <div class="container-fluid">
    <nav class="navbar navbar-expand-lg">
      <a class="navbar-brand" href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <?php
  			wp_nav_menu( array(
  				'theme_location'    => 'primary',
  				'depth'             => 2,
  				'container'         => 'false',
  				'menu_class'        => 'nav navbar-nav',
  				'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
  				'walker'            => new WP_Bootstrap_Navwalker(),
  			));
  		?>
      </div>
    </nav>
