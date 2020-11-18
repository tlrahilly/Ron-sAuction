<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package auction_house_special
 */

get_header();
?>

<header>
  <img src="<?php the_field('header_image'); ?>" alt="" class="headerimg">
</header>
<main>
  <section>
    <div class="about">
      <div>
        <h1 class="decorated2"><span><?php	the_title();	?></span></h1>
      </div>
      <div class="main row">
        <div class="col">
          <?php the_field('left_info'); ?>
        </div>
        <div class="col">
          <?php echo do_shortcode(get_field('right_form')); ?>
        </div>
      </div>
    </div>
  </section>

<?php
get_footer();
