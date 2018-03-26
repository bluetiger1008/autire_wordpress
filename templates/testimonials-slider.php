<?php 
// the query
$wpb_all_query = new WP_Query(array('post_type'=>'testimonial', 'post_status'=>'publish', 'posts_per_page'=>-1)); ?>
<?php if ( $wpb_all_query->have_posts() ) : ?>
<div class="slider testimonials-slider">
    <div class="frame js_frame">
        <ul class="slides js_slides">
            <!-- the loop -->
            <?php while ( $wpb_all_query->have_posts() ) : $wpb_all_query->the_post(); ?>
                <li class="js_slide">
                    <div class="testimonial">
                        <div class="content">
                            <div class="testimonial-image"><?php the_post_thumbnail(); ?></div>
                            <div class="testimonial-comment"><?php the_content(); ?></div>
                        </div>
                        <a class="read-testimonial" data-id="<?php the_ID(); ?>">Read more</a>
                    </div>
                </li>
            <?php endwhile; ?>
            <!-- end of the loop -->
        </ul>
    </div>
    <span class="js_prev prev">
        <img src="<?= get_template_directory_uri(); ?>/dist/images/arrowLeft.svg">
    </span>
    <span class="js_next next">
        <img src="<?= get_template_directory_uri(); ?>/dist/images/arrowRight.svg">
    </span>
</div>
<?php wp_reset_postdata(); ?>       
<?php else : ?>
    <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>

<?php while ( $wpb_all_query->have_posts() ) : $wpb_all_query->the_post(); ?>
    <div id="testimonial-<? the_ID(); ?>" class="modal testimonial-modal">
      <div class="modal-background"></div>
      <div class="modal-card">
        <header class="modal-card-head">
          <button class="delete" aria-label="close"></button>
        </header>
        <section class="modal-card-body">
            <div class="testimonial-image"><?php the_post_thumbnail(); ?></div>
            <h3><?php the_title(); ?></h3>
            <?php the_content();?>
        </section>
      </div>
    </div>
<?php endwhile; ?>