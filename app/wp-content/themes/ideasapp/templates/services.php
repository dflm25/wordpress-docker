<?php query_posts([ 'post_type' => 'services' ]); ?>
<!-- Service Area Start-->
<section id="Service-two">
  <div class="container">
    <div class="content-area-two text-center">
      <span>Service</span>
      <h2>exclusive service</h2>
      <p>
        Ummy text of the printing and typesetting industry. Lorem Ipsum has
        been.ummy text of the prinew.
      </p>
    </div>
    <div class="row">
      <div class="col-lg-12 col-md-12">
        <div class="service-slider-area owl-carousel owl-theme">
          <?php while (have_posts()) : the_post(); ?>
          <div class="service-box-two">
            <div class="service-two-hed-img">
              <?php the_post_thumbnail('thumbnail'); ?>
              <h3><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h3>
            </div>
            <div class="line-border"></div>
            <div class="service-para-btn-two">
              <p>
                <?php the_excerpt(); ?>
              </p>
              <a href="<?php the_permalink() ?>"><i class="fas fa-plus-circle"></i>Read More</a>
            </div>
          </div>
          <?php endwhile; ?>
        </div>
      </div>
    </div>
  </div>
</section>