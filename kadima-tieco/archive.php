<?php get_header(); ?>
<div class="container">
	<div class="row kadima_blog_wrapper">
	<div class="col-md-12">
	<?php
	if ( have_posts()):
	while ( have_posts() ): the_post();
	get_template_part('post','content'); ?>
	<?php endwhile;
	endif;
	kadima_navigation(); ?>
	</div>
	<?php //get_sidebar(); ?>
	</div>
</div>
<?php get_footer(); ?>
