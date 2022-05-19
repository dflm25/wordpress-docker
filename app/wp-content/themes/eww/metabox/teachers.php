<?php
// Metabox for teachers
add_action( 'add_meta_boxes', function () {
    add_meta_box(
        'teacher-info',
        __( 'Teacher Info', 'sitepoint' ),
        'teacher_meta_box_callback',
        ['teachers']
    );
});

function teacher_meta_box_callback( $post ) {
    $values = get_post_custom($post->ID);

    $teacher_position = isset( $values['teacher_position'] ) ? esc_attr( $values['teacher_position'][0] ) : '';
    $teacher_facebook = isset( $values['teacher_facebook'] ) ? esc_attr( $values['teacher_facebook'][0] ) : '';
    $teacher_linkedin = isset( $values['teacher_linkedin'] ) ? esc_attr( $values['teacher_linkedin'][0] ) : '';
    $teacher_instagram = isset( $values['teacher_instagram'] ) ? esc_attr( $values['teacher_instagram'][0] ) : '';
?>
<div class="row">
  <div class="col-4">
    <label for="teacher_position">Position: </label>
    <input type="text" name="teacher_position" id="teacher_position" value="<?php echo esc_html( $teacher_position ); ?>" />
  </div>
  <div class="col-4">
    <label for="teacher_facebook">Facebook</label>
    <input type="text" name="teacher_facebook" id="teacher_facebook" value="<?php echo esc_html( $teacher_facebook ); ?>" />
  </div>
  <div class="col-4">
    <label for="teacher_linkedin">Linkedin</label>
    <input type="text" name="teacher_linkedin" id="teacher_linkedin" value="<?php echo esc_html( $teacher_linkedin ); ?>" />
  </div>
  <div class="col-4">
    <label for="teacher_instagram">Instagram</label>
    <input type="text" name="teacher_instagram" id="teacher_instagram" value="<?php echo esc_html( $teacher_instagram ); ?>" />
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

    $teacher_position = sanitize_text_field($_POST['teacher_position']);
    $teacher_facebook = sanitize_text_field($_POST['teacher_facebook']);
    $teacher_linkedin = sanitize_text_field($_POST['teacher_linkedin']);
    $teacher_instagram = sanitize_text_field($_POST['portafolio_ranking']);

    // Update the meta field in the database.
    $teacher_position && update_post_meta($post_id, 'teacher_position', $teacher_position );
    $teacher_facebook && update_post_meta($post_id, 'teacher_facebook', $teacher_facebook );
    $teacher_linkedin && update_post_meta($post_id, 'teacher_linkedin', $teacher_linkedin );
    $teacher_instagram && update_post_meta($post_id, 'teacher_instagram', $teacher_instagram );
});