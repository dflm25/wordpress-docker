    </div>
</div>
<footer id="back-footer" class="back-footer back-footer-dark">
    <div class="footer-top">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 md-mb-30">
                    <div class="footer-widget footer-widget-1">
                        <div class="footer-logo white">
                            <a href="index.html" class="logo-text"> 
                                <?php
                                    $custom_logo_id = get_theme_mod( 'custom_logo' );
                                    $logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
                                ?>
                                <?php 
                                    if (has_custom_logo()) {
                                        echo '<img src="'.esc_url( $logo[0] ).'" alt="'.get_bloginfo( 'name' ).'" width="100">';
                                    } else {
                                        echo '<h1>' . get_bloginfo('name') . '</h1>';
                                    }
                                ?>
                            </a>
                        </div>
                        <h5 class="footer-subtitle">We have lots of courses and programs from the main market experts.</h5>
                        <h6 class="back-follow-us">Follow us</h6>
                        <ul class="social-links">
                        <?php if (get_theme_mod('landing_facebook')) { ?>
                            <li><a href="<?php echo get_theme_mod('landing_facebook') ?>"><span aria-hidden="true" class="social_facebook"></span></a></li>
                        <?php } ?>
                        <?php if (get_theme_mod('landing_linkedin')) { ?>
                            <li><a href="<?php echo get_theme_mod('landing_linkedin') ?>"><span aria-hidden="true" class="social_linkedin"></span></a></li>
                        <?php } ?> 
                        <?php if (get_theme_mod('landing_instagram')) { ?>
                            <li><a href="<?php echo get_theme_mod('landing_instagram') ?>"><span aria-hidden="true" class="social_instagram"></span></a></li>
                        <?php } ?>  
                        </ul>                                
                    </div>
                </div>
                <div class="col-lg-3 md-mb-30">
                    <div class="footer-widget footer-widget-2">
                        <h3 class="footer-title">Explore</h3>
                        <div class="footer-menu">
                            <ul>
                                <li><a href="#">About</a></li>
                                <li><a href="#">Courses</a></li>
                                <li><a href="#">Events</a></li>
                                <li><a href="#">Career</a></li>
                                <li><a href="#">Become a Teacher</a></li>
                                <li><a href="#">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 md-mb-30">
                    <div class="footer-widget footer-widget-2">
                        <h3 class="footer-title">Quick links</h3>
                        <div class="footer-menu">
                            <ul>
                                <li><a href="#">Browse Library</a></li>
                                <li><a href="#">Library</a></li>
                                <li><a href="#">Partners</a></li>
                                <li><a href="#">News & Blog</a></li>
                                <li><a href="#">FAQ</a></li>
                                <li><a href="#">Tutorials</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="footer-widget footer-widget-3">
                        <h3 class="footer-title">Get in touch</h3>
                        <ul class="footer-address">
                            <li class="back-address"><svg xmlns="http://www.w3.org/2000/svg" width="32" height="30" viewBox="0 0 24 24" fill="none" stroke="#f84e77" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" class="feather feather-map-pin"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path><circle cx="12" cy="10" r="3"></circle></svg> 1400 park  Los Angeles, <br>California, US.</li>
                            <li><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#f84e77" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-phone"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg><a href="tel:+(462)42576332">+(462) 425 76 332 </a></li>
                            <li><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#f84e77" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-mail"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg><a href="mailto:info@yourdmain.com">backtheme@gmail.com </a></li>
                        </ul>                              
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="copyright">  
        <div class="container">                  
            <div class="back-copy-left">@ <?php echo date('Y') ?> All Copyright Reserved. Developed by <a href="https://www.ideasapp.co">Ideasapp</a></div>                    
        </div>
    </div>
</footer>
        <div id="backscrollUp">
            <span aria-hidden="true" class="arrow_carrot-up"></span>
        </div> 
        <?php wp_footer(); ?>
    </body>
</html>