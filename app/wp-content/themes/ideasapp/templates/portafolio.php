<?php
  // Use below code to show metabox values from anywhere
  query_posts([ 'post_type' => 'portafolio' ]);
?>
<!-- Portfolio Area Start-->
<section id="portfolio-two">
  <div class="container-fluid no-padding">
    <div class="wrapper-portfolio">
      <div class="row filter-list">
        <div class="col-lg-12 col-md-12 col-sm-12 col-12">
          <div class="row">
            <div class="col-lg-4 col-md-12 col-sm-12 col-12">
              <div class="content-common-area">
                <div class="content-top-2">
                  <p>Portfolio</p>
                </div>
                <div class="content-heading-2 portfolio-heading">
                  <h2>Why hire me for your Nice Gallery</h2>
                </div>
              </div>
            </div>
            <div class="col-lg-8 col-md-12 col-sm-12 col-12">
              <div class="filter-btn-isotop filters filters-button-group">
                <ul class="text-center filter-btn-isotop-two">
                  <li class="active" data-filter="*">All</li>
                  <li data-filter=".ux">UI/UX</li>
                  <li data-filter=".HTML">HTML</li>
                  <li data-filter=".Photoshop">Photoshop</li>
                  <li data-filter=".Development">Web Development</li>
                </ul>
              </div>
            </div>
          </div>

          <div class="portfolio-item-two content grid">
            <div class="row no-padding">

              <?php 
                while (have_posts()) : the_post();
              ?>
              <div
                class="col-lg-3 col-md-6 col-sm-12 col-12 ux HTML Development work-items-two no-padding element-item"
              >
                <div class="portfolio-area-two-slider project-single">
                  <?php the_post_thumbnail(); ?>
                  <div class="project-overlay">
                    <div class="icon">
                      <a href="<?php the_permalink(); ?>" class="roadtrip"
                        ><i class="fas fa-plus-square"></i
                      ></a>
                    </div>
                    <h5>
                      <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                    </h5>
                    <p></p>
                  </div>
                </div>
              </div>
              <?php endwhile; ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Portfolio Area End-->