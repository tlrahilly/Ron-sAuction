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
	<div class="row">
		<div class="col">
			<h1><?php the_field('header_h1'); ?></h1>
			<p>
				<?php the_field('header_description'); ?>
			</p>
		</div>
		<div class="col">
			<img src="<?php the_field('header_image'); ?>" alt="" />
		</div>
	</div>
</header>
<main>
	<section>
		<div class="threep">
			<div id="marginb">
				<h1 class="decorated"><span>We handle all aspects of the auction process</span></h1>
			</div>
			<div class="row">
				<div class="col"><?php the_field('main_first_p'); ?></div>
				<div class="col"><?php the_field('main_second_p'); ?></div>
				<div class="col"><?php the_field('main_third_p'); ?></div>
			</div>
		</div>
		<div class="upcoming">
			<div>
				<h3>Upcoming Auctions</h3>
			</div>
			<div class="row upcoming-row upcoming-home">
				<?php
				$args = array(
		'post_type' => 'auction_item',
		'post_status' => 'publish',
		'posts_per_page' => 4,
		'order' => 'ASC',
		'meta_query' => array(
        array(
            'key'   => 'display_on_front_page',
            'value' => '1',
        )
			)
);

					$loop = new WP_Query( $args );
					if( $loop->have_posts() ) :
					?>
					<?php
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
				<?php
      endwhile;
      wp_reset_postdata();
    ?>
		<?php	else	:	?>
			<?php	echo	wpautop('Sorry,	no	posts	were	found');	?>
		<?php	endif;	?>
		</div>
	</section>

<?php
get_footer();
