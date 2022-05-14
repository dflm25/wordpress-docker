<?php
/*
    Plugin Name: Ideas theme plugins
    Plugin URI: https://www.ideasapp.co
    Description: All plugins for theme ideas
    Version: 0.01
    Author: Daniel Felipe Lucumi Marin
    Author URI: https://www.ideasapp.co
    License:<Licencia con la que se distribuye el plugin. La más frecuente es GPL>
    Text domain: my-contact-form
*/

// Shortcodes
require_once plugin_dir_path(__FILE__)."/shorcodes/formRegister.php";

// API
require_once plugin_dir_path(__FILE__)."/api/contactFormApi.php";