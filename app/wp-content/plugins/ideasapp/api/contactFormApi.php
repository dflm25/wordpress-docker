<?php

add_action("rest_api_init", function () {
  // Regiter api route
  register_rest_route("ideas", "contact-form", [
    'methods' => 'POST',
    "callback" => "ideas_contact_form_callback"
  ]);
});

function ideas_contact_form_callback (WP_REST_Request $request) {
  // $request->get_params();
  /* $headers[]= 'From: Andres Dev <hola@andres-dev.com>';
  $headers[]= 'Cc: Persona1 <persona1@wordpress.org>';
  $headers[]= 'Bcc: Persona2 <persona2@wordpress.org>'; */
  $response = wp_mail('dflm25@gmail.com', 'Nuevo contacto', '<h1>Este es un ejemplo del contenido de del mensaje de la funcion wp_mail() de WordPress</h1>');
  
  return "Form sent successfully";
}

function tipo_de_contenido_html() {
     return 'text/html';
}

add_filter('wp_mail_content_type', 'tipo_de_contenido_html');