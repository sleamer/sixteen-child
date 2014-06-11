<?php
/**
 * The template for displaying all category pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package Sixteen
 */

get_header(); ?>
<!-- SAL: added this class "category-area" to fix formatting -->
	<div id="primary-home" class="content-area">
		<div class="category-area" >
		<h2 id="page-title"><?php single_cat_title(); ?></h2>
			<!-- style="border: 5px solid red;" -->
				<main id="main" class="site-main" role="main" >
					<ul> 
<?php wp_list_categories('orderby=id&show_count=1&use_desc_for_title=0&child_of=30'); ?>
					</ul>
				<ul class="genres">
					<li>HUMOR</li>
					<li>INSULTING</li>
					<li>MISC/OTHER</li>
					<li>OBSERVATIONS</li>
					<li>POLITICAL</li>
					<li>RELIGIOUS</li>
					<li>SEX and/or RELATIONSHIPS</li>
				</ul>
				<?php sixteen_pagination(); ?>
				
			</main><!-- #main -->
			</div><!-- .category-area -->
	</div><!-- #primary-home-->

<?php get_sidebar('footer'); ?>
<?php get_footer(); ?>