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

<main>
  <section class="archieve">
    <div class="about row">
    <aside class="col-2">
      <?php echo do_shortcode( '[searchandfilter fields="search,category,post_tag" types=",select,select" submit_label="Filter"  headings=",Categories,Tags"]' ); ?>
    </aside>
    <div class="col-10">
        <div class="row upcoming-row">
          <?php if ( have_posts() ) : ?>
          <?php
          $args = array(
      'post_type' => 'auction_item',
      'post_status' => 'publish',
      'posts_per_page' => 20,
      'order' => 'ASC'
  );

  $loop = new WP_Query( $args );

  while ( $loop->have_posts() ) : $loop->the_post();?>
  <article class="upcoming-block">
    <a href="<?php	the_permalink();	?>">
    <img src="<?php the_field('item_picture'); ?>" alt="">
    <div class="block-info">
      <div class="lotnumber-home">
        <p><?php the_field('lot_#'); ?> | <?php the_field('auction_name'); ?></p>
      </div>
      <div class="title-home">
        <h1><?php the_field('title'); ?></h1>
      </div>
      <div class="row subtitle">
        <p class="col">$<?php the_field('estimated_price'); ?></p>
        <p class="col"><?php the_field('sell_date'); ?></p>
      </div>
    </div>
    </a>
  </article>
  <?php endwhile; wp_reset_postdata();
  else : ?>

  <div id="none">
    <h3>Sorry there were no results for:<br> <span class="page-description"><?php echo get_search_query(); ?></span></h3>
  </div>

  <?php

endif;
?>
        </div>
      </div>
    </div>
  </section>

<?php
get_footer();
