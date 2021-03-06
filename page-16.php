<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package Sixteen
 */

get_header(); ?>

	<div id="primary" class="content-area page-16">
		<main id="main" class="site-main" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'content', 'page' ); ?>
				<?php
					// If comments are open or we have at least one comment, load up the comment template
					if ( comments_open() || '0' != get_comments_number() )
						comments_template();
				?>

			<?php endwhile; // end of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_sidebar('footer'); ?>

<!-- SAL: Script that pulls all boxes checked and assigns them to categories in the post data -->
<script type="text/javascript">
jQuery(document).ready(function(){
var categories = ""; 
 jQuery('input[type="checkbox"]').click(function(){
 	var val = jQuery(this).attr("value");
 	categories += val+",";
		 jQuery('input[name="post_category"]').val(categories);
 });
 // jQuery('input[type="submit"]').click(function() {
 // 	alert(categories);
 // })
});
</script>
<?php get_footer(); ?>
