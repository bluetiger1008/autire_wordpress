<section class="single-article">
  <div class="container">
    <?php while (have_posts()) : the_post(); ?>
      <div class="summary">
        <p class="categories">
        <?php
        $categories = get_the_category($post->ID);
        if ( ! empty( $categories ) ) {
            echo '<a href="' . esc_url( get_category_link( $categories[0]->term_id ) ) . '">' . esc_html( $categories[0]->name ) . '</a>';
        }
        ?>
        </p>
        <h1 class="post-title"><?php the_title(); ?></h1>
      </div>
      <div class="featured-image">
        <?php $backgroundImg = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' ); ?>
        <figure class="image is-2by1" style="background-image: url('<?php echo $backgroundImg[0]; ?>');">
        </figure>
      </div>
      <div class="article-wrapper">
        <div class="columns" id="main-blog-content">
          <div class="column is-8 is-offset-2">
            <div class="article-content">
              <?php the_content(); ?>
              <span class="border-bar"></span>
            </div>
          </div>
        </div>
      </div>
    <?php endwhile; ?>
  </div>
</section>