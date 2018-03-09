<?php
/**
 * Template Name: Introducing Autire Template
 */
?>

<?php get_template_part('templates/hero'); ?>
<?php while (have_posts()) : the_post(); ?>
	<section class="wp-content">
		<div class="container">
			<div class="columns">
				<div class="column is-8 is-offset-2">
				  <?php the_content(); ?>
				  <div class="has-text-centered">
					  <a class="button is-flamingo">Engage us today</a>
					</div>
				</div>
			</div>
		</div>
	</section>
<?php endwhile; ?>