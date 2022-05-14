<?php

function ideas_add_register_form () {
    wp_enqueue_script("contact-form", plugins_url("/../build/src/registerForm.js",  __FILE__ ));

    return "<div class=\"contact-form-area\" id=\"registerForm\"></div>";
}

add_shortcode('ideas_register', 'ideas_add_register_form');