<?php get_header() ?>
 <section id="banner-common-area" style="background: url(<?php echo get_template_directory_uri(); ?>/assets/img/header.jpg)">
    <div class="overaly-banner"></div>
    <div class="container">
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-12">
        <div class="cmmon-heading-area-banner text-center">
            <h2>No found</h2>
            <div class="commn-line"></div>
            <ul>
            <li><a href="<?php echo home_url(); ?>">Home /</a> Error page</li>
            </ul>
        </div>
        </div>
    </div>
    </div>
</section>

<section id="error-area">
    <div class="container">
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-12">
        <div class="error-content">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/404-img.png" alt="" />
            <h2>Opps! This page Clould Not Be Found!</h2>
            <p>
            Sorry bit the page you are looking for dose not exist, have been
            removed or name changed
            </p>
            <a href="<?php echo home_url(); ?>" class="btn btn-1 about-btn-one"
            >go to Home</a
            >
        </div>
        </div>
    </div>
    </div>
</section>
<?php get_footer() ?>