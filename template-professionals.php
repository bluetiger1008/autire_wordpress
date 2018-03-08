<?php
/**
 * Template Name: Professionals Template
 */
?>

<?php get_template_part('templates/hero'); ?>
<?php while (have_posts()) : the_post(); ?>
	<div class="container">
		<div class="content-wrapper">
		  <?php the_content(); ?>
		</div>
	</div>
<?php endwhile; ?>
<?php get_template_part('templates/professionals', 'slider'); ?>