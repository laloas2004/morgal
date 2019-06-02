<?php
/**
 * Business One Page Template Hooks.
 *
 * @package business_one_page 
 */

/** Import content data*/
if ( ! function_exists( 'business_one_page_import_files' ) ) :
function business_one_page_import_files() {
  $upload_dir = wp_upload_dir();
    return array(
        array(
            'import_file_name'             => 'Business One Page Demo',
            'local_import_file'            => $upload_dir['basedir'] . '/rara-demo-pack/business-one-page-demo-content/content/business.xml',
            'local_import_widget_file'     => $upload_dir['basedir'] . '/rara-demo-pack/business-one-page-demo-content/content/business.wie',
            'local_import_customizer_file' => $upload_dir['basedir'] . '/rara-demo-pack/business-one-page-demo-content/content/business.dat',
            'import_preview_image_url'     => get_template_directory() .'/screenshot.png',
            'import_notice'                => __( 'Please waiting for a few minutes, do not close the window or refresh the page until the data is imported.', 'business-one-page' ),
        ),
    );       
}
add_filter( 'rrdi/import_files', 'business_one_page_import_files' );
endif;

/** Programmatically set the front page and menu */
if ( ! function_exists( 'business_one_page_after_import' ) ) :

  function business_one_page_after_import( $selected_import ) {

   
      /** Set Front page */
      $page = get_page_by_path('homepage'); /** This need to be slug of the page that is assigned as Front page */
      if ( isset( $page->ID ) ) {
        update_option( 'page_on_front', $page->ID );
        update_option( 'show_on_front', 'page' );
      }
           
      /** Blog Page */
      $postpage = get_page_by_path('blog'); /** This need to be slug of the page that is assigned as Posts page */
      if( $postpage ){
        $post_pgid = $postpage->ID;
        update_option( 'page_for_posts', $post_pgid );
      }    
      
  }
  add_action( 'rrdi/after_import', 'business_one_page_after_import' );
endif;


function business_one_page_import_msg(){
    return __( 'Before you begin, make sure all recommended plugins are activated.', 'business-one-page' );
}
add_filter( 'rrdi_before_import_msg', 'business_one_page_import_msg' );