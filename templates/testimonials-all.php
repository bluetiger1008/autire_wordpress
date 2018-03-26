<section class="all-testimonials">
    <div class="container">
        <div class="masonry">
            <?php $query = new WP_Query( array(
                'post_type'=>'testimonial',
                'posts_per_page' => -1,
            ) ); ?>
            <?php if ( $query->have_posts() ) : ?>
                <?php while ( $query->have_posts() ) : $query->the_post(); ?>
                    <div class="item box">
                        <div class="stars">
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                        </div>
                        <h2><?php the_title(); ?></h2>
                        <div class="testimonial-image"><?php the_post_thumbnail(); ?></div>
                        <div class="content"><?php the_content(); ?></div>
                    </div>
                <?php endwhile;
                    wp_reset_postdata(); ?>
            <?php endif;?>
        </div>
    </div>
</section>