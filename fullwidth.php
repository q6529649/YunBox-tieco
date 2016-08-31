<?php //Template Name:Full-Width Page
get_header();
?>
<div class="hidden-lg hidden-md hidden-sm visible-xs-inline kadima_header_topline"></div>
<div class="container">
	<div class="row kadima_blog_wrapper">
		<div class="col-md-12" style="float: none;margin-left:auto;margin-right:auto;">
			<?php get_template_part('post','page'); ?>
		</div>
	</div>
</div>
<?php get_footer(); ?>
