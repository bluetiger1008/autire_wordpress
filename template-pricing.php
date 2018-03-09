<?php
/**
 * Template Name: Pricing Template
 */
?>

<?php while (have_posts()) : the_post(); ?>
	<section class="wp-content">
		<div class="container">
			<div class="columns">
				<div class="column is-8 is-offset-2">
					<h1>Pricing</h1>
				  <?php the_content(); ?>
				</div>
			</div>
		</div>
	</section>
<?php endwhile; ?>

<section class="price">
	<div class="container">
		<div class="columns">
			<div class="column is-8 is-offset-2">
				<?php if( have_rows('pricing_table') ): ?>

					<div class="pricing-table">

					<?php while( have_rows('pricing_table') ): the_row(); 

						// vars
						$name = get_sub_field('pricing_name');
						$price = get_sub_field('price');
						?>

						<div class="price">
							<div class="price-name">
								<?php echo $name; ?>
							</div>
							<div class="price-cost">
								<?php echo $price; ?>
							</div>
						</div>

					<?php endwhile; ?>

					</div>

				<?php endif; ?>
			</div>
		</div>
	</div>
</section>

<section class="wp-content">
	<div class="container">
		<div class="columns">
			<div class="column is-8 is-offset-2">
				<p><?php the_field('pricing_content'); ?></p>
				<div class="has-text-centered">
				  <a class="button is-flamingo">Engage us today</a>
				</div>
			</div>
		</div>
	</div>
</section>