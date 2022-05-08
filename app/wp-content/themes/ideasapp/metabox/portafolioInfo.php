<?php
// Metabox for portafolio
add_action( 'add_meta_boxes', function () {
    add_meta_box(
        'portafolio-info',
        __( 'Portafolio Info', 'sitepoint' ),
        'portafolio_meta_box_callback',
        ['portafolio']
    );
});

function portafolio_meta_box_callback( $post ) {
    $values = get_post_custom($post->ID);

    $categories = isset( $values['portafolio_categories'] ) ? esc_attr( $values['portafolio_categories'][0] ) : '';
    $status = isset( $values['portafolio_status'] ) ? esc_attr( $values['portafolio_status'][0] ) : '';
    $client = isset( $values['portafolio_client'] ) ? esc_attr( $values['portafolio_client'][0] ) : '';
    $ranking = isset( $values['portafolio_ranking'] ) ? esc_attr( $values['portafolio_ranking'][0] ) : '';
?>
<div class="row">
  <div class="col-4">
    <label for="portafolio_categories">Categories</label>
    <input type="text" name="portafolio_categories" id="portafolio_categories" value="<?php echo esc_html( $categories ); ?>" />
  </div>
  <div class="col-4">
    <label for="portafolio_status">Status</label>
    <input type="text" name="portafolio_status" id="portafolio_status" value="<?php echo esc_html( $status ); ?>" />
  </div>
  <div class="col-4">
    <label for="portafolio_status">Client</label>
    <input type="text" name="portafolio_client" id="portafolio_client" value="<?php echo esc_html( $client ); ?>" />
  </div>
  <div class="col-4">
    <label for="portafolio_ranking">Project Ranking</label>
    <input type="text" name="portafolio_ranking" id="portafolio_ranking" value="<?php echo esc_html( $ranking ); ?>" />
  </div>
</div>
<?php
}
 
add_action('admin_enqueue_scripts', function (){
  wp_enqueue_style('diwp-metabox-stylesheet', get_template_directory_uri().'/assets/css/metaForms.css' );    
});

add_action( 'save_post', function ($post_id) {
    // Verify that the nonce is valid.
    /* if ( ! wp_verify_nonce( $_POST['portafolio_categories'], 'portafolio_categories' ) ) {
        return;
    } */

    // If this is an autosave, our form has not been submitted, so we don't want to do anything.
    if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
        return;
    }

    $category = sanitize_text_field($_POST['portafolio_categories']);
    $status = sanitize_text_field($_POST['portafolio_status']);
    $client = sanitize_text_field($_POST['portafolio_client']);
    $ranking = sanitize_text_field($_POST['portafolio_ranking']);

    // Update the meta field in the database.
    $category && update_post_meta($post_id, 'portafolio_categories', $category );
    $status && update_post_meta($post_id, 'portafolio_status', $status );
    $client && update_post_meta($post_id, 'portafolio_client', $client );
    $ranking && update_post_meta($post_id, 'portafolio_ranking', $ranking );
});