<?php
/**
 * @package Sixteen
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class('single-post'); ?>>
	<header class="entry-header">
		<h1 class="entry-title"><?php the_title(); ?></h1>

		<div class="entry-meta">
			<?php sixteen_posted_on(); ?>
		</div><!-- .entry-meta -->
	</header><!-- .entry-header -->
<!-- SAL: this inserts the attachment URL from the post  -->
<!-- $id	 -->

<?php 
// SAL: Get attachment Id of the attachment associated with this current post
$media = get_attached_media( 'image' ); 
reset($media);
$first_key = key($media);
 // and assign to variable
$mediaID = $media[$first_key]->guid;
// output image url
?>

	<div class="entry-content">
		<div class="featured-image-single">
			<?php if (has_post_thumbnail() )
				the_post_thumbnail();
				else echo "<img src='$mediaID'>";
				?>
		</div>
		<?php the_content(); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'sixteen' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

	<footer class="entry-meta">
		<?php
			/* translators: used between list items, there is a space after the comma */
			$category_list = get_the_category_list( __( ', ', 'sixteen' ) );

			/* translators: used between list items, there is a space after the comma */
			$tag_list = get_the_tag_list( '', __( ', ', 'sixteen' ) );

			if ( ! sixteen_categorized_blog() ) {
				// This blog only has 1 category so we just need to worry about tags in the meta text
				if ( '' != $tag_list ) {
					$meta_text = __( 'This entry was tagged %2$s.', 'sixteen' );
				} else {
					$meta_text = __( '', 'sixteen' );
				}

			} else {
				// But this blog has loads of categories so we should probably display them here
				if ( '' != $tag_list ) {
					$meta_text = __( 'This entry was posted in %1$s and tagged %2$s.', 'sixteen' );
				} else {
					$meta_text = __( 'This entry was posted in %1$s.', 'sixteen' );
				}

			} // end check for categories on this blog

			printf(
				$meta_text,
				$category_list,
				$tag_list
			);
		?>

		<?php edit_post_link( __( 'Edit', 'sixteen' ), '<span class="edit-link">', '</span>' ); ?>
	</footer><!-- .entry-meta -->
</article><!-- #post-## -->
