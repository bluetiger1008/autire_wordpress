<div class="container">
    <?php 
    // the query
    $wpb_all_query = new WP_Query(array('post_type'=>'members', 'post_status'=>'publish', 'posts_per_page'=>-1)); ?>
    <?php if ( $wpb_all_query->have_posts() ) : ?>
    <div class="slider members-slider">
        <div class="frame js_frame">
            <ul class="slides js_slides">
                <!-- the loop -->
                <?php while ( $wpb_all_query->have_posts() ) : $wpb_all_query->the_post(); ?>
                    <li class="js_slide">
                        <div class="member">
                            <div class="wrapper">
                                <div class="member-image"><?php the_post_thumbnail(); ?></div>
                                <div class="member-name">
                                    <?php the_title(); ?>
                                    <?php
                                       $terms = get_the_terms( $post->ID , 'category' );
                                       // Loop over each item since it's an array
                                       if ( $terms != null ){
                                        echo ', ';
                                       foreach( $terms as $term ) {
                                        // Print the name method from $term which is an OBJECT
                                        print $term->name ;
                                       }
                                       // Get rid of the other data stored in the object, since it's not needed
                                       unset($term);
                                       }
                                    ?>
                                </div>
                                <div class="member-comment"><?php echo wp_trim_words( get_the_content(), 15, $more = '… ' ); ?></div>
                            </div>
                            <a class="read-more">Read more</a>
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
</div>