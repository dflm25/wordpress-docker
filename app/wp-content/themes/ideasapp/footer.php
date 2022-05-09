    <!-- footer area Start-->
    <footer id="footer-one">
      <div class="container">
        <div class="row padding-bottom-100">
          <div class="col-lg-6 col-md-12 col-sm-12 col-12">
            <div class="contact-form-area">
              <form action="#" class="contact-form">
                <div class="form-group">
                  <input
                    type="text"
                    class="form-control"
                    id="name"
                    name="name"
                    placeholder="Your Name"
                    required
                  />
                  <div class="label-box"></div>
                </div>
                <div class="form-group">
                  <input
                    type="text"
                    class="form-control"
                    id="email"
                    name="email"
                    placeholder="Your Mail"
                    required
                  />
                  <div class="label-box"></div>
                </div>
                <div class="form-group">
                  <input
                    type="text"
                    class="form-control"
                    id="budget"
                    name="budget"
                    placeholder="Your Budget"
                    required
                  />
                  <div class="label-box"></div>
                </div>
                <div class="form-group">
                  <textarea
                    class="form-control"
                    rows="5"
                    id="message"
                    name="message"
                    placeholder="Your Messages"
                    required
                  ></textarea>
                  <div class="label-box"></div>
                </div>
                <div class="form-btn text-right">
                  <button class="btn-1 contactsuccess">Hire Me</button>
                </div>
              </form>
            </div>
          </div>
          <div class="col-lg-6 col-md-12 col-sm-12 col-12">
            <div class="contact-details">
              <div class="contact-descreption">
                <h2>Just Say Hello !</h2>
                <p>
                  Let’s make something new, different and more meaning ful or
                  make thing more visualor Conceptual ? Just Say Hello !
                </p>
              </div>
              <div class="contact-location">
                <ul>
                  <li>
                    <a href="tel:<?php echo get_theme_mod('landing_phone', '+57 ') ?>">
                        <?php echo get_theme_mod('landing_phone', '+57 ') ?>
                    </a>
                  </li>
                  <li>
                    <a href="mailto:yourmail@gmail.com">yourmail@gmail.com</a>
                  </li>
                </ul>
              </div>
              <div class="soical-icon-contact">
                <ul>
                  <li>
                    <?php if (get_theme_mod('landing_facebook')) { ?>
                        <a href="<?php echo get_theme_mod('landing_facebook') ?>" target="_blank"><i class="fab fa-facebook instagram"></i></a>
                    <?php } ?>
                    <?php if (get_theme_mod('landing_twitter')) { ?>
                        <a href="<?php echo get_theme_mod('landing_twitter')?>" target="_blank"><i class="fab fa-twitter instagram"></i></a>
                    <?php } ?>
                    <?php if (get_theme_mod('landing_linkedin')) { ?>
                        <a href="<?php echo get_theme_mod('landing_linkedin')?>" target="_blank"><i class="fab fa-linkedin instagram"></i></a>
                    <?php } ?>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div id="copy-right">
        <div class="container">
          <div class="row">
            <div class="col-lg-12">
              <div class="copy-right-text text-center">
                <p>Copyright © 2020 Andit Themes, All rights Reserved.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </footer>
    <?php wp_footer(); ?>
    <script>
      /* var typed = new Typed("#typed", {
        stringsElement: "#typed-strings",
        typeSpeed: 200,
        backSpeed: 200,
        loop: true,
        smartBackspace: true
      }); */
    </script>
  </body>
</html>