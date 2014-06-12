<?php 

add_filter( 'fu_after_upload', 'my_fu_after_upload' );
function my_fu_after_upload( $post_id ) {
	$content = $_POST['title'];
  $my_post = array(
      'ID'           => $post_id,
      'post_content' => " test test test"
  );
  wp_update_post($my_post);
}
/*SAL: Pulled this fix from http://wordpress.org/support/topic/how-to-add-tags-1*/
// Custom action to do any additional logic after attachment is uploaded
// add_action( 'fu_after_upload', 'my_fu_after_upload' );

// function my_fu_after_upload( $attachment_ids ) {
//     foreach( $attachment_ids as $aid ) {
//         echo $attachment_ids;
//     }
// }


// add_action( 'fu_after_upload', 'my_fu_after_upload', 10, 2 );
// function my_fu_after_upload( $media_ids, $success ) {
	// Something went wrong with upload
/*	if ( ! $success )
		return;
		wp_safe_redirect( "http://google.com" );
*/// $media = get_attached_media( 'image', $_POST['post_ID'] ); 
// print_r ($media);
// $id = 
// reset($media);
// $first_key = key($media);
// // echo $first_key;
// $imgID = $media[$first_key]->guid;
// set_post_thumbnail( $_POST['post_ID'], $imgID );
// // Update post 37
//   $my_post = array(
//       'ID'           => $_POST['post_ID'],
//       'post_content' => '[fu-upload-form form-layout="post_image"]'
//   );

// // Update the post into the database
//   wp_update_post( $my_post );

// }


?>
