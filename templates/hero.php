<?php $heroBackgroundImg = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' ); ?>
<?php if($heroBackgroundImg): ?>
  <div class="hero" style="background-image: url('<?php echo $heroBackgroundImg[0]; ?>');">
<?php else: ?>
  <div class="hero" style="background-image: url('<?= get_template_directory_uri(); ?>/dist/images/hero-placeHolder.jpg');">
<?php endif; ?>
	<div class="container">
		<div class="hero-content">
		
			<?php
					
			// vars
			$hero_content = get_field('hero_content');	

			if( $hero_content ): ?>
				<div class="content">
					<h1><?php echo $hero_content['hero_title']; ?></h1>
				</div>
			<?php endif; ?>
		</div>
	</div>
</div>