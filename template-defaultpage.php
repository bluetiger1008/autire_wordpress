<?php
/**
 * Template Name: Default Page Template
 */
?>

<img src="<?= get_template_directory_uri(); ?>/dist/images/vectorpaint.png" class="bg-top">

<div class="template-content">
	<?php while (have_posts()) : the_post(); ?>
		<section class="wp-content">
			<div class="container">
				<div class="columns">
					<div class="column is-12">
						<h1><?php the_title(); ?></h1>
						<div class="white-box">
						  <?php the_content(); ?>
						</div>
					</div>
				</div>
			</div>
		</section>
	<?php endwhile; ?>
	<?php get_template_part('templates/section','engageus'); ?>
</div>