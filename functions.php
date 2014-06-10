<?php 
/*
add_action( 'fu_after_upload', 'my_fu_after_upload', 10, 2 );
function my_fu_after_upload( $media_ids, $success ) {
	// Something went wrong with upload
	if ( ! $success )
		return;
$media = get_attached_media( 'image', $_POST['post_ID'] ); 
// print_r ($media);
// $id = 
reset($media);
$first_key = key($media);
// echo $first_key;
$imgID = $media[$first_key]->guid;
set_post_thumbnail( $_POST['post_ID'], $imgID );
// Update post 37
  $my_post = array(
      'ID'           => $_POST['post_ID'],
      'post_content' => '[fu-upload-form form-layout="post_image"]'
  );

// Update the post into the database
  wp_update_post( $my_post );

}
*/

?>

<?php
/*
add_filter("manage_upload_columns", 'upload_columns');
add_action("manage_media_custom_column", 'media_custom_columns', 0, 2);

function upload_columns($columns) {

	unset($columns['parent']);
	$columns['better_parent'] = "Parent";

	return $columns;

}
 function media_custom_columns($column_name, $id) {

	$post = get_post($id);

	if($column_name != 'better_parent')
		return;

		if ( $post->post_parent > 0 ) {
			if ( get_post($post->post_parent) ) {
				$title =_draft_or_post_title($post->post_parent);
			}
			?>
			<strong><a href="<?php echo get_edit_post_link( $post->post_parent ); ?>"><?php echo $title ?></a></strong>, <?php echo get_the_time(__('Y/m/d')); ?>
			<br />
			<a class="hide-if-no-js" onclick="findPosts.open('media[]','<?php echo $post->ID ?>');return false;" href="#the-list"><?php _e('Re-Attach'); ?></a></td>

			<?php
		} else {
			?>
			<?php _e('(Unattached)'); ?><br />
			<a class="hide-if-no-js" onclick="findPosts.open('media[]','<?php echo $post->ID ?>');return false;" href="#the-list"><?php _e('Attach'); ?></a>
			<?php
		}

}
*/?>