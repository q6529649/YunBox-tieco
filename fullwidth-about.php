<?php //Template Name:Full-Width-About Page
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
					<div class="row">
						<div class="col-md-12" style="float: none;margin-left:auto;margin-right:auto;">
							<div class="kadima_heading_title">
								<h1 style="border-bottom: 0px;"><span style="color:#f8b72d;">B</span>enefit <span style="color:#f8b72d;">C</span>ustomer</h1>
							</div>
						</div>
					</div>
					<div class="container">
						<div class="row kadima_photo_gallery img-wrapper">
							<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
								<img src="../wp-content/uploads/2016/08/aboutus-factory.jpg">
							</div>
							<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
								<img src="../wp-content/uploads/2016/08/aboutus-1.jpg">
							</div>
							<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
								<img src="../wp-content/uploads/2016/08/aboutus-2.jpg">
							</div>
							<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
								<img src="../wp-content/uploads/2016/08/aboutus-3.jpg">
							</div>
						</div>
					</div>
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
</div>
<?php get_footer(); ?>
