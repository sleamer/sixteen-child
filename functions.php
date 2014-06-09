<?php 

add_action( 'fu_after_upload', 'my_fu_after_upload', 10, 2 );
function my_fu_after_upload( $media_ids, $success ) {
	// Something went wrong with upload
	if ( ! $success )
		return;

	// There might be multiple attachments so no really good way to assign image
	foreach ( (array) $media_ids as $thumbnail_id ) {
		// Set the featured image and
		// Stop trying to set it after first successful attempt
		if ( set_post_thumbnail( $_POST['post_ID'], $thumbnail_id ) )
			break;
	}
}

?>