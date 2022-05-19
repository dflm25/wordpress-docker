<?php
// Metabox for banners
add_action( 'add_meta_boxes', function () {
    add_meta_box(
        'banner-info',
        __( 'Teacher Info', 'sitepoint' ),
        'banner_meta_box_callback',
        ['banners']
    );
});

function banner_meta_box_callback( $post ) {
    $values = get_post_custom($post->ID);

    $banners_link = isset( $values['banners_link'] ) ? esc_attr( $values['banners_link'][0] ) : '';
?>
<div class="row">
  <div class="col-6">
    <label for="banners_link">Banner link: </label>
    <input type="text" name="banners_link" id="banners_link" value="<?php echo esc_html( $banners_link ); ?>" />
  </div>
</div>
<?php
}
 
add_action('admin_enqueue_scripts', function (){
  wp_enqueue_style('diwp-metabox-stylesheet', get_template_directory_uri().'/assets/css/metaForms.css' );    
});

add_action( 'save_post', function ($post_id) {
    // If this is an autosave, our form has not been submitted, so we don't want to do anything.
    if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
        return;
    }

    $banners_link = sanitize_text_field($_POST['banners_link']);

    // Update the meta field in the database.
    $banners_link && update_post_meta($post_id, 'teacher_position', $banners_link );
});