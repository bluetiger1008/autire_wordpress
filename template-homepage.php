<?php
/**
 * Template Name: HomePage Template
 */
?>

<?php get_template_part('templates/hero'); ?>

<section class="audit">
	<?php 
	$query = new WP_Query( array(
        'post_type'=>'401kaudit',
        'posts_per_page' => 3,
        'orderby' => 'date',
        'order'   => 'ASC',
    ) );
    if ( $query->have_posts() ) { ?>
      <div data-aos="fade-up" data-aos-delay="300" data-aos-once="true" class="tile-victories">
        <?php 
        $index = 0;
        while ( $query->have_posts() ) : $query->the_post(); $index++;?>
          <?php if($index == 1) : ?>
            <?php $backgroundImg = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' ); ?>
            <div class="tile-left" style="background-image: url('<?php echo $backgroundImg[0]; ?>');">
              <div class="tile-left-container" style="background-image: url('<?php echo $backgroundImg[0]; ?>');">
                <div class="tile-title">401(k) Audits</div>
              </div>
              <div class="tile-summary">
                <p class="post-title"><?php the_title(); ?></p>
                <div class="post-summary"><?php echo wp_trim_words( get_the_content(), 35, $more = '… ' ); ?></div>
                <a class="read-post" data-id="<?php the_ID(); ?>">Read more</a>
              </div>
            </div>
            <div class="tile-right">
          <?php else: ?>
            <?php $bgImg = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full' ); ?>
            <div class="tile-<?php echo ($index==2 ? 'right-top' : 'right-bottom'); ?>">
              <div class="tile-img-<?php echo ($index==2 ? 'left' : 'right'); ?>" style="background-image: url('<?php echo $bgImg[0]; ?>');">
                <?php the_post_thumbnail(); ?>
                <?php if($index == 3): ?>
                  <div class="post-all">
                    <a href="<?= esc_url(home_url('/')); ?>audits/">View All</a>
                    <img src="<?= get_template_directory_uri(); ?>/dist/images/whiteRightArrow.svg">
                  </div>
                <?php endif; ?>
              </div>
              <div class="tile-summary">
                <p class="post-title"><?php the_title(); ?></p>
                <div class="post-summary"><?php echo wp_trim_words( get_the_content(), 35, $more = '… ' ); ?></div>
                <?php if($index == 3): ?>
                  <div class="anchor-view-all is-hidden-desktop is-hidden-tablet">
                      <a href="<?= esc_url(home_url('/')); ?>audits/">View All</a>
                      <img src="<?= get_template_directory_uri(); ?>/dist/images/arrowRight.svg">
                  </div>
                <?php endif; ?>
                <a class="read-post" data-id="<?php the_ID(); ?>">Read more</a>
              </div>
            </div>
          <?php endif; ?>
        <?php endwhile;
        wp_reset_postdata(); ?>
        </div>
      </div>
  <?php } ?>
</section>

<?php 
  $query = new WP_Query( array(
        'post_type'=>'401kaudit',
        'posts_per_page' => 3,
        'orderby' => 'date',
        'order'   => 'ASC',
    ) );
    if ( $query->have_posts() ) { ?>
<?php while ( $query->have_posts() ) : $query->the_post(); ?>
    <div id="audit-<? the_ID(); ?>" class="modal audit-modal">
      <div class="modal-background"></div>
      <div class="modal-card">
        <header class="modal-card-head">
          <button class="delete" aria-label="close"></button>
        </header>
        <section class="modal-card-body">
            <h3><?php the_title(); ?></h3>
            <?php the_content();?>
        </section>
      </div>
    </div>
<?php endwhile; ?>
<?php } ?>