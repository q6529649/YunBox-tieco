<?php //Template Name:Full-Width-Technology Page
get_header();
?>
<div class="hidden-lg hidden-md hidden-sm visible-xs-inline kadima_header_topline"></div>
<div class="container">
	<div class="row kadima_blog_wrapper">
		<div class="col-md-12" style="float: none;margin-left:auto;margin-right:auto;">
			<?php if ( have_posts()) : while ( have_posts() ) : the_post(); ?>
			<div class="kadima_blog_full">
			<?php  if(has_post_thumbnail()):
					$defalt_arg = array('class' => "kadima_img_responsive");
					?>
					<div class="kadima_blog_thumb_wrapper_showcase">
						<div class="kadima_blog-img">
						<?php the_post_thumbnail('wl_page_thumb',$defalt_arg); ?>
						</div>
					</div>
					<?php endif; ?>
					<div class="kadima_heading_title">
						<h1><?php the_title(); ?></h1>
						<hr style="margin-top: -1em;margin-bottom: 0px; border: 0;width: 60%;border-top: 1px solid #0e88e3;"/>
					</div>
					<div class="row" style="border: 2px dashed #0e88e3; padding: 1em;">
						<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="margin-bottom:1em;padding-right: 0.5em;padding-left: 0px;">
							<img class="kadima_img_responsive" src="../wp-content/uploads/2016/08/Technology-top.jpg">
						</div>
						<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12" style="margin-bottom:0.5em;padding-right: 0.5em;padding-left: 0.5em;">
							<img class="kadima_img_responsive" src="../wp-content/uploads/2016/08/Technology-1.jpg">
						</div>
						<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12" style="margin-bottom:0.5em;padding-right: 0.5em;padding-left: 0.5em;">
							<img class="kadima_img_responsive" src="../wp-content/uploads/2016/08/Technology-2.jpg">
						</div>
						<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12" style="margin-bottom:0.5em;padding-right: 0.5em;padding-left: 0.5em;">
							<img class="kadima_img_responsive" src="../wp-content/uploads/2016/08/Technology-3.jpg">
						</div>
						<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12" style="margin-bottom:0.5em;padding-right: 0.5em;padding-left: 0.5em;">
							<img class="kadima_img_responsive" src="../wp-content/uploads/2016/08/Technology-4.jpg">
						</div>
					</div>
					<br/>
					<div class="kadima_blog_post_content">
						<?php the_content( __( 'Read More' , 'enigma' ) ); ?>
					</div>
			</div>
			<?php comments_template( '', true ); ?>
			<?php
			endwhile;
			endif; ?>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12" style="float: none;margin-left:auto;margin-right:auto;">
			<div class="kadima_heading_title">
				<h1>Equipment</h1>
				<!--hr style="margin-top: -1em;margin-bottom: 0px; border: 0;width: 60%;border-top: 1px solid #0e88e3;"/-->
			</div>
		</div>
	</div>
	<div class="container">
		<div class="row kadima_photo_gallery">
			<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12" style="padding-right: 0.5em;padding-left: 0.5em;">
				<img class="kadima_img_responsive" src="../wp-content/uploads/2016/08/e1.jpg">
			</div>
			<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12" style="padding-right: 0.5em;padding-left: 0.5em;">
				<img class="kadima_img_responsive" src="../wp-content/uploads/2016/08/e2.jpg">
			</div>
			<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12" style="padding-right: 0.5em;padding-left: 0.5em;">
				<img class="kadima_img_responsive" src="../wp-content/uploads/2016/08/e3.jpg">
			</div>
		</div>
		<div class="row kadima_photo_gallery">
			<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12" style="padding-right: 0.5em;padding-left: 0.5em;">
				<img class="kadima_img_responsive" src="../wp-content/uploads/2016/08/e4.jpg">
			</div>
			<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12" style="padding-right: 0.5em;padding-left: 0.5em;">
				<img class="kadima_img_responsive" src="../wp-content/uploads/2016/08/e5.jpg">
			</div>
			<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12" style="padding-right: 0.5em;padding-left: 0.5em;">
				<img class="kadima_img_responsive" src="../wp-content/uploads/2016/08/e6.jpg">
			</div>
		</div>
	</div>
	<br/>
</div>
<?php get_footer(); ?>
