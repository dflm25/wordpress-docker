<?php get_header() ?>

<section id="banner-2" style="background: url(<?php echo get_theme_mod('landing_banner', ''); ?>)">
  <div class="overaly-banner"></div>
  <div class="home-content-2">
    <div class="home-content-inner text-center">
      <div class="home-heading-top-2">
        <h2>Hi there!</h2>
      </div>
      <div class="home-heading-2">
        <?php $name = explode(" ", get_theme_mod('my_name', 'JHON DOE')); ?>
        <h1>I’m <span><?php echo $name[0]; ?></span> <?php echo $name[1]; ?></h1>
      </div>
      <div class="home-para-2">
        <p><?php echo get_theme_mod('my_position', 'Developer'); ?>.</p>
      </div>
    </div>
  </div>
</section>

<section id="about-2">
  <div class="container">
    <div class="row">
      <div class="col-lg-6 col-md-12 col-sm-12 col-12">
        <div class="about-2-content">
          <div class="content-common-area">
            <div class="content-top-2">
              <p>About</p>
            </div>
            <div class="content-heading-2">
              <h2>Why hire me for your next project</h2>
            </div>
            <div class="content-para-2">
              <p>
                <?php echo get_theme_mod('my_description', 'orem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua'); ?>.
              </p>
            </div>
          </div>
          <div class="wrapper">
            <div class="skill-two">
              <h2>Special <span>Skills</span></h2>
            </div>
            <div class="skill">
              <p>Development</p>
              <div class="skill-bar skill1 wow slideInLeft animated">
                <span class="skill-count1">95%</span>
              </div>
            </div>
            <div class="skill">
              <p>Front-end</p>
              <div class="skill-bar skill2 wow slideInLeft animated">
                <span class="skill-count2">85%</span>
              </div>
            </div>
            <div class="skill">
              <p>Back-end</p>
              <div class="skill-bar skill3 wow slideInLeft animated">
                <span class="skill-count3">75%</span>
              </div>
            </div>
          </div>
          <div class="skill-area-btn">
            <a href="#!" class="btn btn-1 about-btn-one">Download cv</a>
            <a href="#my-work" class="btn btn-2">view work</a>
          </div>
        </div>
      </div>
      <div class="col-lg-6 col-md-12 col-sm-12 col-12">
        <div class="about-2-img text-right">
          <div id="wrappera">
            <img
              src="<?php echo get_template_directory_uri(); ?>/assets/img/me.jpg"
              alt="imgges"
              data-speed="0.01"
              data-revert="true"
            /> 
          </div>
          <div id="wrapperas">
            <img
              src="<?php echo get_template_directory_uri(); ?>/assets/img/bc.png"
              alt="imgges"
              data-speed="0.02"
              data-revert="true"
            />
          </div>
        </div>
        <div class="about-all-shape">
          <div class="about-shape-one">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/Home-2/shap/1.png" alt="img" />
          </div>
          <div class="about-shape-two">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/Home-2/shap/2.png" alt="img" />
          </div>
          <div class="about-shape-tree">
            <img
              class="animated pulse infinite"
              src="<?php echo get_template_directory_uri(); ?>/assets/img/Home-2/shap/3.png"
              alt="img"
            />
          </div>
          <div class="about-shape-four">
            <img
              class="animated pulse infinite"
              src="<?php echo get_template_directory_uri(); ?>/assets/img/Home-2/shap/4.png"
              alt="img"
            />
          </div>
          <div class="about-shape-five">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/html-5.png" alt="img" width="120" />
          </div>
          <div class="about-shape-six">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/js.png" alt="img" width="80" />
          </div>
          <div class="about-shape-seven">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/react.png" alt="img" width="120" />
          </div>
          <div class="about-shape-eight">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/mysql.png" alt="img" width="120" />
          </div>
          <div class="about-shape-nine">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/Home-2/shap/9.png" alt="img" />
            <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/nodejs.png" alt="img" width="120" />
          </div>
          <div class="about-shape-ten">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/php.png" alt="img" width="80" />
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<?php get_template_part( 'templates/services' ); ?>
<?php get_template_part( 'templates/portafolio' ); ?>

<?php get_footer() ?>