<?php get_header(); ?>
<?php 
  the_post(); 
  $image_size = 'full';
  $images = get_post_meta(get_the_ID(), 'portafolio_post_banner_img', true);
  $value = explode(',', $images);
?>
<section id="banner-common-area" style="background: url(<?php echo get_template_directory_uri(); ?>/assets/img/header.jpg)">
  <div class="overaly-banner"></div>
  <div class="container">
    <div class="row">
      <div class="col-lg-12 col-md-12 col-sm-12 col-12">
        <div class="cmmon-heading-area-banner text-center">
          <h2><?php the_title(); ?></h2>
          <div class="commn-line"></div>
          <ul>
            <li><a href="#">Home /</a> <?php the_title(); ?></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>
<section id="single-product-area">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 col-md-12 col-sm-12 col-12">
        <div class="product-img owl-carousel owl-theme">
          <?php 
            foreach ($value as $values) {
              if ($image_attributes = wp_get_attachment_image_src($values, $image_size)) {
          ?>
            <div class="item"><img src="<?php echo $image_attributes[0]; ?>" alt="" /></div>
          <?php 
              }
            } 
          ?>
        </div>
      </div>
    </div>
    <div class="product-detals-arae">
      <div class="row">
        <div class="col-md-12 col-lg-5">
          <div class="tm-portfoliodetails-info">
            <ul>
              <li><b>Project :</b> Corporate business</li>
              <li><b>Categories :</b> Business</li>
              <li><b>Start Date :</b> 01-08-2018</li>
              <li><b>Status :</b> Complete</li>
              <li><b>Client :</b> Canada</li>
              <li>
                <b>Project Ranking :</b>
                <div class="tm-rating">
                  <span class="active"><i class="fas fa-star"></i></span>
                  <span class="active"><i class="fas fa-star"></i></span>
                  <span class="active"><i class="fas fa-star"></i></span>
                  <span class="active"><i class="fas fa-star"></i></span>
                  <span class="active"><i class="fas fa-star"></i></span>
                </div>
              </li>
              <li>
                <b>Share :</b>
                <ul class="tm-portfoliodetails-share">
                  <li>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                  </li>
                  <li>
                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                  </li>
                  <li>
                    <a href="#"><i class="fab fa-skype"></i></a>
                  </li>
                  <li>
                    <a href="#"><i class="fab fa-pinterest-p"></i></a>
                  </li>
                </ul>
              </li>
            </ul>
          </div>
        </div>
        <div class="col-md-12 col-lg-7">
          <div class="tm-portfoliodetails-description">
            <h3>Project Description</h3>
            <p>
              There are many variations of passages of Lorem Ipsum
              available, but the majority have suffered alteration in some
              form, by injected humour, or randomised words which don't look
              even slightly believable. If you are going to use a passage of
              Lorem Ipsum you need to be sure there isn't anything
              embarrassing hidden in the middle of text.
            </p>
            <ul class="stylish-list">
              <li>
                <i class="far fa-check-square"></i>Totam reiciendis enim
                adipisci odio laborum et ullam nihil quia.
              </li>
              <li>
                <i class="far fa-check-square"></i>Illum corrupti ut
                distinctio.
              </li>
              <li>
                <i class="far fa-check-square"></i>Debitis dolor a ut
                deserunt unde. Odit delectus similique.
              </li>
              <li>
                <i class="far fa-check-square"></i>Et quo consequuntur
                voluptas sit cumque distinctio.
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-lg-12">
        <div class="related-heading">
          <h3>Related Projects</h3>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 col-sm-6 col-12">
        <div class="featured-imagebox">
          <div class="ttm-box-view-content-inner">
            <div class="featured-thumbnail">
              <a href="#">
                <img
                  class="img-fluid"
                  src="assets/img/home-3/desktop-software.jpg"
                  alt="image"
              /></a>
            </div>
            <div class="ttm-box-view-overlay">
              <div class="featured-iconbox ttm-media-link">
                <a
                  class="ttm_prettyphoto ttm_image"
                  href="assets/img/home-3/desktop-software.jpg"
                  ><i class="fas fa-search-plus"></i
                ></a>
              </div>
            </div>
          </div>
          <div
            class="featured-content featured-content-portfolio text-center box-shadow2"
          >
            <div class="featured-title">
              <h5><a href="portfolio-single.html">Web Design</a></h5>
            </div>
          </div>
        </div>
        <!-- featured-imagebox -->
      </div>
      <div class="col-lg-4 col-md-6 col-sm-6 col-12">
        <div class="featured-imagebox">
          <div class="ttm-box-view-content-inner">
            <div class="featured-thumbnail">
              <a href="#">
                <img
                  class="img-fluid"
                  src="assets/img/home-3/web-application.jpg"
                  alt="image"
              /></a>
            </div>
            <div class="ttm-box-view-overlay">
              <div class="featured-iconbox ttm-media-link">
                <a
                  class="ttm_prettyphoto ttm_image"
                  href="assets/img/home-3/web-application.jpg"
                  ><i class="fas fa-search-plus"></i
                ></a>
              </div>
            </div>
          </div>
          <div
            class="featured-content featured-content-portfolio text-center box-shadow2"
          >
            <div class="featured-title">
              <h5><a href="portfolio-single.html">Web Development</a></h5>
            </div>
          </div>
        </div>
        <!-- featured-imagebox -->
      </div>
      <div class="col-lg-4 col-md-6 col-sm-6 col-12">
        <div class="featured-imagebox">
          <div class="ttm-box-view-content-inner">
            <div class="featured-thumbnail">
              <a href="#"
                ><img
                  class="img-fluid"
                  src="assets/img/home-3/mobile-application.jpg"
                  alt="image"
              /></a>
            </div>
            <div class="ttm-box-view-overlay">
              <div class="featured-iconbox ttm-media-link">
                <a
                  class="ttm_prettyphoto ttm_image"
                  href="assets/img/home-3/mobile-application.jpg"
                  ><i class="fas fa-search-plus"></i
                ></a>
              </div>
            </div>
          </div>
          <div
            class="featured-content featured-content-portfolio text-center box-shadow2"
          >
            <div class="featured-title">
              <h5>
                <a href="portfolio-single.html">Software Developer</a>
              </h5>
            </div>
          </div>
        </div>
        <!-- featured-imagebox -->
      </div>
    </div>
  </div>
</section>
<?php get_footer() ?>