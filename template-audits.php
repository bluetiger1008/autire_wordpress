<?php
/**
 * Template Name: Audits Template
 */
?>

<?php get_template_part('templates/hero'); ?>

<div class="pg-audit">
	<div class="container">
		<section class="audit-accordian">
		  <?php $query = new WP_Query( array(
	        'post_type'=>'401kaudit',
	        'posts_per_page' => -1,
	    ) ); ?>
	    <?php if ( $query->have_posts() ) : ?>
	        <?php $index = 0; while ( $query->have_posts() ) : $query->the_post(); $index++;?>
	        	<?php if($index == 1) : ?>
	          	<section class="open">
	          <?php else: ?>
	          	<section>
	          <?php endif; ?>
				      <button>
				        Open
				      </button>
					    <accordian-header>
					      <h4><?php the_title(); ?></h4>
					    </accordian-header>
					    <?php if($index == 1) : ?>
		          	<div style="height: auto;">
		          <?php else: ?>
		          	<div>
		          <?php endif; ?>
					      <accordian-article>
					        <?php the_content(); ?>
					      </accordian-article>
					    </div>
					  </section>
	        <?php endwhile;
	            wp_reset_postdata(); ?>
	    <?php endif;?>
	  </section>
	</div>
</div>

