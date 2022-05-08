<?php get_header() ?>
<?php
  /* Query sticky posts */

  /** Get categories */
  $categories = get_categories([
    'orderby' => 'name',
    'order'   => 'ASC'
  ]);
?>
<section id="banner-common-area" style="background: url(<?php echo get_template_directory_uri(); ?>/assets/img/news.jpg) no-repeat">
  <div class="overaly-banner"></div>
  <div class="container">
    <div class="row">
      <div class="col-lg-12 col-md-12 col-sm-12 col-12">
        <div class="cmmon-heading-area-banner text-center">
          <h2>Blog Page</h2>
          <div class="commn-line"></div>
          <ul>
            <li><a href="index.html">Home /</a> Blog Page</li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>
<section id="blog-main-content">
  <div class="container">
    <div class="row" id="blog-devided-one">
      <div class="col-lg-10 offset-lg-1 col-md-12 col-sm-12 col-12">
        <div class="slider-back-img">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/home-3/s.png" alt="img" />
        </div>
        <div class="blog-area-slider-content owl-carousel owl-theme">
          <?php echo do_shortcode("[latest_stickies]"); ?>
        </div>
      </div>
    </div>
    <div class="wedget-blog" id="blog-devided">
      <div class="row">
        <div class="col-lg-8 col-md-12 col-sm-12 col-12">
          <div class="blog-content-wedget">
            <div class="post-slider-wedget">
              <div class="wedget-heading-side">
                <h3>Featured posts</h3>
              </div>
              <div
                class="post-slider-common-content owl-carousel owl-theme"
                id="content-blog"
              >
                <div class="post-slider-items ">
                  <div class="img-items">
                    <a href="blog-single.html"
                      ><img src="assets/img/blog/b-1.png" alt="img"
                    /></a>
                    <a href="blog-single.html" class="tags-catagory"
                      >CAREER</a
                    >
                  </div>
                  <div class="details-area">
                    <h4>
                      <a href="blog-single.html"
                        >Hundreds of thousands a still more glorious nights
                        around art table</a
                      >
                    </h4>
                    <p>
                      There’s a critic in the signing a new client process
                      that not enough Who would have thought
                    </p>
                    <div class="author-area">
                      <div class="author-name">
                        <a href="blog-single.html"
                          ><i class="fas fa-user"></i> Albert jhon</a
                        >
                      </div>
                      <div class="author-comment">
                        <a href="blog-single.html"
                          ><i class="fas fa-comments"></i>3 Comment</a
                        >
                      </div>
                    </div>
                  </div>
                </div>
                <div class="post-slider-items ">
                  <div class="img-items">
                    <a href="blog-single.html"
                      ><img src="assets/img/blog/b-2.png" alt="img"
                    /></a>
                    <a href="blog-single.html" class="tags-catagory"
                      >Food</a
                    >
                  </div>
                  <div class="details-area">
                    <h4>
                      <a href="blog-single.html"
                        >Important Facts That You Should Know About
                        Health</a
                      >
                    </h4>
                    <p>
                      There’s a critic in the signing a new client process
                      that not enough Who would have thought
                    </p>
                    <div class="author-area">
                      <div class="author-name">
                        <a href="blog-single.html"
                          ><i class="fas fa-user"></i>Shomen jhon</a
                        >
                      </div>
                      <div class="author-comment">
                        <a href="blog-single.html"
                          ><i class="fas fa-comments"></i>3 Comment</a
                        >
                      </div>
                    </div>
                  </div>
                </div>
                <div class="post-slider-items ">
                  <div class="img-items">
                    <a href="blog-single.html"
                      ><img src="assets/img/blog/b-1.png" alt="img"
                    /></a>
                    <a href="blog-single.html" class="tags-catagory"
                      >Food</a
                    >
                  </div>
                  <div class="details-area">
                    <h4>
                      <a href="blog-single.html"
                        >Important Facts That You Should Know About
                        Health</a
                      >
                    </h4>
                    <p>
                      There’s a critic in the signing a new client process
                      that not enough Who would have thought
                    </p>
                    <div class="author-area">
                      <div class="author-name">
                        <a href="blog-single.html"
                          ><i class="fas fa-user"></i>Shomen jhon</a
                        >
                      </div>
                      <div class="author-comment">
                        <a href="blog-single.html"
                          ><i class="fas fa-comments"></i>3 Comment</a
                        >
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="post-slider-wedget slider-mar">
              <div class="wedget-heading-side">
                <h3>Most Viewed posts</h3>
              </div>
              <div
                class="post-slider-common-content owl-carousel owl-theme"
              >
                <div class="post-slider-items ">
                  <div class="img-items">
                    <a href="blog-single.html"
                      ><img src="assets/img/blog/b-3.png" alt="img"
                    /></a>
                    <a href="blog-single.html" class="tags-catagory"
                      >business</a
                    >
                  </div>
                  <div class="details-area">
                    <h4>
                      <a href="blog-single.html"
                        >Finance Related Most Popular Job News of this
                        Month</a
                      >
                    </h4>
                    <p>
                      There’s a critic in the signing a new client process
                      that not enough Who would have thought
                    </p>
                    <div class="author-area">
                      <div class="author-name">
                        <a href="blog-single.html"
                          ><i class="fas fa-user"></i> Albert jhon</a
                        >
                      </div>
                      <div class="author-comment">
                        <a href="blog-single.html"
                          ><i class="fas fa-comments"></i>3 Comment</a
                        >
                      </div>
                    </div>
                  </div>
                </div>
                <div class="post-slider-items ">
                  <div class="img-items">
                    <a href="blog-single.html"
                      ><img src="assets/img/blog/b-4.png" alt="img"
                    /></a>
                    <a href="blog-single.html" class="tags-catagory"
                      >FASHION</a
                    >
                  </div>
                  <div class="details-area">
                    <h4>
                      <a href="blog-single.html"
                        >Top Fashion Show Related News of this Month
                        November</a
                      >
                    </h4>
                    <p>
                      There’s a critic in the signing a new client process
                      that not enough Who would have thought
                    </p>
                    <div class="author-area">
                      <div class="author-name">
                        <a href="blog-single.html"
                          ><i class="fas fa-user"></i>Shomen jhon</a
                        >
                      </div>
                      <div class="author-comment">
                        <a href="blog-single.html"
                          ><i class="fas fa-comments"></i>3 Comment</a
                        >
                      </div>
                    </div>
                  </div>
                </div>
                <div class="post-slider-items ">
                  <div class="img-items">
                    <a href="blog-single.html"
                      ><img src="assets/img/blog/b-1.png" alt="img"
                    /></a>
                    <a href="blog-single.html" class="tags-catagory"
                      >Food</a
                    >
                  </div>
                  <div class="details-area">
                    <h4>
                      <a href="blog-single.html"
                        >Important Facts That You Should Know About
                        Health</a
                      >
                    </h4>
                    <p>
                      There’s a critic in the signing a new client process
                      that not enough Who would have thought
                    </p>
                    <div class="author-area">
                      <div class="author-name">
                        <a href="blog-single.html"
                          ><i class="fas fa-user"></i>Shomen jhon</a
                        >
                      </div>
                      <div class="author-comment">
                        <a href="blog-single.html"
                          ><i class="fas fa-comments"></i>3 Comment</a
                        >
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="main-resent-post">
              <div class="wedget-heading-side">
                <h3>recent posts</h3>
              </div>
              <div class="resent-items" id="content-para-slider">
                <div class="resent-item">
                  <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                      <div class="resent-img">
                        <a href="blog-single.html"
                          ><img src="assets/img/blog/b-5.png" alt="img"
                        /></a>
                        <a href="blog-single.html" class="resent-catagory"
                          >BUSINESS</a
                        >
                      </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                      <div class="resent-details">
                        <h3>
                          <a href="blog-single.html"
                            >Rise of the Skyscrappers</a
                          >
                        </h3>
                        <ul>
                          <li>
                            BY:<a href="blog-single.html"> Jhon Doe</a>
                          </li>
                          <li>September 11, 2019</li>
                        </ul>
                        <p>
                          There’s a critical moment in the signg a new a new
                          client process that not enough Who would have
                          thought the world largest ations company would own
                          no properties?
                        </p>
                        <a href="blog-single.html" class="btn-3 mar-area"
                          >Read more</a
                        >
                      </div>
                    </div>
                  </div>
                </div>
                <div class="resent-item">
                  <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                      <div class="resent-img">
                        <a href="blog-single.html"
                          ><img src="assets/img/blog/b-6.png" alt="img"
                        /></a>
                        <a href="blog-single.html" class="resent-catagory"
                          >BUSINESS</a
                        >
                      </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                      <div class="resent-details">
                        <h3>
                          <a href="blog-single.html"
                            >Rise of the Skyscrappers</a
                          >
                        </h3>
                        <ul>
                          <li>BY:<a href="#"> Jhon Doe</a></li>
                          <li>September 11, 2019</li>
                        </ul>
                        <p>
                          There’s a critical moment in the signg a new a new
                          client process that not enough Who would have
                          thought the world largest ations company would own
                          no properties?
                        </p>
                        <a href="blog-single.html" class="btn-3 mar-area"
                          >Read more</a
                        >
                      </div>
                    </div>
                  </div>
                </div>
                <div class="resent-item">
                  <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                      <div class="resent-img">
                        <a href="blog-single.html"
                          ><img src="assets/img/blog/b-7.png" alt="img"
                        /></a>
                        <a href="blog-single.html" class="resent-catagory"
                          >BUSINESS</a
                        >
                      </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                      <div class="resent-details">
                        <h3>
                          <a href="blog-single.html"
                            >Rise of the Skyscrappers</a
                          >
                        </h3>
                        <ul>
                          <li>
                            BY:<a href="blog-single.html"> Jhon Doe</a>
                          </li>
                          <li>September 11, 2019</li>
                        </ul>
                        <p>
                          There’s a critical moment in the signg a new a new
                          client process that not enough Who would have
                          thought the world largest ations company would own
                          no properties?
                        </p>
                        <a href="blog-single.html" class="btn-3 mar-area"
                          >Read more</a
                        >
                      </div>
                    </div>
                  </div>
                </div>
                <div class="resent-item">
                  <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                      <div class="resent-img">
                        <a href="blog-single.html"
                          ><img src="assets/img/blog/b-8.png" alt="img"
                        /></a>
                        <a href="blog-single.html" class="resent-catagory"
                          >FASHION</a
                        >
                      </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                      <div class="resent-details">
                        <h3>
                          <a href="blog-single.html"
                            >Rise of the Skyscrappers</a
                          >
                        </h3>
                        <ul>
                          <li>
                            BY:<a href="blog-single.html"> Jhon Doe</a>
                          </li>
                          <li>September 11, 2019</li>
                        </ul>
                        <p>
                          There’s a critical moment in the signg a new a new
                          client process that not enough Who would have
                          thought the world largest ations company would own
                          no properties?
                        </p>
                        <a href="blog-single.html" class="btn-3 mar-area"
                          >Read more</a
                        >
                      </div>
                    </div>
                  </div>
                </div>
                <div class="resent-button">
                  <a href="blog-single.html" class="btn-3">Load More</a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-12 col-sm-12 col-12">
          <div class="sider-bar-wedget">
            <div class="wedget wedget-about">
              <h3 class="widget-title">about me</h3>
              <div class="about-side-wedget">
                <div class="about-me-sidewedget-img">
                  <img src="assets/img/home-3/a.png" alt="img" />
                </div>
                <div class="about-me-sidewedget-details">
                  <div class="about-me-sidewedget-heading">
                    <h3><a href="blog-single.html">Jessica rose</a></h3>
                  </div>
                  <div class="about-me-sidewedget-sub-heading">
                    <p>
                      <a href="blog-single.html"
                        >Photographer &amp; Blogger</a
                      >
                    </p>
                  </div>
                  <div class="about-me-sidewedget-para">
                    <p>
                      There’s a critic in the signing a new client process
                      that not enough Who would have thought.
                    </p>
                  </div>
                  <div class="about-me-sidewedget-icon">
                    <div class="social-icon-item">
                      <a href="https://www.facebook.com" target="_blank"
                        ><i class="fab fa-facebook-f"></i
                      ></a>
                      <a href="https://twitter.com/" target="_blank"
                        ><i class="fab fa-twitter"></i
                      ></a>
                      <a href="https://www.google.com/" target="_blank"
                        ><i class="fab fa-google-plus-g"></i
                      ></a>
                      <a href="https://www.instagram.com/" target="_blank"
                        ><i class="fab fa-instagram"></i
                      ></a>
                      <a href="https://www.linkedin.com" target="_blank"
                        ><i class="fab fa-linkedin-in"></i
                      ></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="wedget wedget-about">
              <h3 class="widget-title">Popular Post</h3>
              <div class="popular-post-area">
                <ul>
                  <li>
                    <div class="popular-img">
                      <a href="blog-single.html"
                        ><img src="assets/img/home-3/res-1.png" alt="img"
                      /></a>
                    </div>
                    <div class="popular-date">
                      <p><a href="blog-single.html">Beauty Fashion</a></p>
                      <span>Sep, 26 2019</span>
                    </div>
                  </li>
                  <li>
                    <div class="popular-img">
                      <a href="blog-single.html"
                        ><img src="assets/img/home-3/res-2.png" alt="img"
                      /></a>
                    </div>
                    <div class="popular-date">
                      <p><a href="blog-single.html">HEME DECORATIONS</a></p>
                      <span>Sep, 26 2019</span>
                    </div>
                  </li>
                  <li>
                    <div class="popular-img">
                      <a href="blog-single.html"
                        ><img src="assets/img/home-3/res-3.png" alt="img"
                      /></a>
                    </div>
                    <div class="popular-date">
                      <p>
                        <a href="blog-single.html">TRAVELLINg TO nepal</a>
                      </p>
                      <span>Sep, 26 2019</span>
                    </div>
                  </li>
                  <li>
                    <div class="popular-img">
                      <a href="blog-single.html"
                        ><img src="assets/img/home-3/res-4.png" alt="img"
                      /></a>
                    </div>
                    <div class="popular-date">
                      <p><a href="blog-single.html">VISIT IN MALI</a></p>
                      <span>Sep, 26 2019</span>
                    </div>
                  </li>
                </ul>
              </div>
            </div>

            <div class="wedget wedget-about">
              <h3 class="widget-title">catagories</h3>
              <div class="catagory-area">
                <ul>
                  <?php 
                    foreach( $categories as $category ) { 
                      $category_link = get_category_link( $category->term_id );
                  ?>
                  <li><a href="<?php echo $category_link; ?>">
                    <?php echo $category->name; ?> <span>(<?php echo $category->count; ?>)</span></a>
                  </li>
                  <?php } ?>
                </ul>
              </div>
            </div>

            <div class="wedget wedget-about">
              <h3 class="widget-title">join our newsletter</h3>
              <div class="news-area">
                <p>Enter your email to receive our newsletter</p>
                <input
                  type="text"
                  class="form-control"
                  placeholder="Your email address"
                  required
                />
                <div class="sub-arae">
                  <button type="submit" class="btn-3">Subscribe</button>
                </div>
              </div>
            </div>
            <div class="wedget wedget-about">
              <h3 class="widget-title">Social Media</h3>
              <div class="soical-icon-area-blog">
                <div class="social-icon-item">
                  <a href="https://www.facebook.com" target="_blank"
                    ><i class="fab fa-facebook-f"></i
                  ></a>
                  <a href="https://twitter.com/" target="_blank"
                    ><i class="fab fa-twitter"></i
                  ></a>
                  <a href="https://www.tumblr.com/" target="_blank"
                    ><i class="fab fa-tumblr"></i
                  ></a>
                  <a href="https://www.pinterest.com/" target="_blank"
                    ><i class="fab fa-pinterest"></i
                  ></a>
                  <a href="https://www.google.com/" target="_blank"
                    ><i class="fab fa-google-plus-g"></i
                  ></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<?php get_footer() ?>