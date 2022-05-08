<?php
global $the_sticky_query;

add_shortcode("latest_stickies", function () {
  /* Get all sticky posts */
  $sticky = get_option("sticky_posts");

  /* Sort the stickies with the newest at top */
  rsort($sticky);

  /* Get the 5 newest stickies (You can change this to any number by altering the number 5 below) */
  $sticky = array_slice($sticky, 0, 5);

  /* Query sticky posts */
  $the_sticky_query = new WP_Query(array("post__in" => $sticky, "ignore_sticky_posts" => 1));
  $return = "";
  // The Loop
  if ( $the_sticky_query->have_posts() ) {
    while ( $the_sticky_query->have_posts() ) {
    $the_sticky_query->the_post();
    $categories = get_the_terms( $the_sticky_query->ID, 'category' );
?>
  <div class="blog-area-slider-item">
    <div class="row">
      <div class="col-lg-6 col-md-6 col-sm-12 col-12">
        <div class="blog-slider-text-area">
          <h3><?php echo esc_html( $categories[0]->name ); ?></h3>
          <h2 class="title"><?php get_the_title(); ?></h2>
          <p class="para-wrapper">
            <?php get_the_excerpt() ?>
          </p>
        </div>
      </div>
      <div class="col-lg-6 col-md-6 col-sm-12 col-12">
        <div class="blog-slider-img">
          <img
            src="assets/img/home-3/test.png"
            alt=""
            class="img-slider"
          />
        </div>
      </div>
    </div>
  </div>
<?php  
    }
  } else {
    // no posts found
  }
  
  /* Restore original Post Data */
  wp_reset_postdata();
  return $return;
});