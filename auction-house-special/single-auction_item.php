<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package auction_house_special
 */

get_header();
?>

<main>
	<section id="item-sec">
		<div id="item" class="about">
			<div id="btn-margin" class="row">
				<p id="prev"><?php  previous_post_link('%link', __( 'Prev', 'textdomain' ));?></p>
				<p id="next"><?php next_post_link('%link', __( 'Next', 'textdomain' )); ?></p>
			</div>
			<div class="main row">
				<div class="col-sm-12 col-lg-8">
					<img src="<?php the_field('item_picture'); ?>" alt="" />
				</div>
				<div class="col-sm-12 col-lg-4" id="item-details">
					<div>
						<div class="lotnumber">
							<p><?php the_field('lot_#'); ?> | <?php the_field('auction_name'); ?></p>
						</div>
						<div class="title">
							<h1><?php the_field('title'); ?></h1>
						</div>
						<div class="row subtitle">
							<p class="col">Estimate: $<?php the_field('estimated_price'); ?></p>
							<p class="col"><?php the_field('sell_date'); ?></p>
						</div>
						<div class="item-bullets">
							<?php the_field('product_bullet_points'); ?>
						</div>
						<div class="item-description">
							<h2>Catalog Note:</h2>
							<p>
								<?php the_field('detailed_description'); ?>
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

<?php
get_footer();
