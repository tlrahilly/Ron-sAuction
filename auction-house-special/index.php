<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package auction_house_special
 */

get_header();
?>
<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package auction_house_special
 */

get_header();
?>

<main>
	<section>

		<div class="about row">
    <aside class="col-2">
      <?php echo do_shortcode( '[searchandfilter fields="search,category,post_tag" types=",select,select" submit_label="Filter"  headings=",Categories,Tags"]' ); ?>
    </aside>
		<div class="col-10">
        <div class="row upcoming-row">

		<?php if ( have_posts() ) : ?>



			<?php
			/* Start the Loop */
			while ( have_posts() ) :
				the_post();?>

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
