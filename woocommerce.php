<?php get_header(); ?>
<div class="container">
	<div class="row kadima_blog_wrapper">
	<div class="col-md-2">
	</div>
	<div class="col-md-8">
		<?php
			//woocommerce_content();
			if ( is_singular( 'product' ) ) {

				while ( have_posts() ) : the_post();

					wc_get_template_part( 'content', 'single-product' );

				endwhile;

			} else { ?>
				<?php if ( apply_filters( 'woocommerce_show_page_title', true ) ) : ?>
					<!--h1 class="page-title"><?php //woocommerce_page_title(); ?></h1-->
					<div class="kadima_heading_title">
						<h1><?php woocommerce_page_title(); ?></h1>
						<hr style="margin-top: -1em;margin-bottom: 0px; border: 0;width: 60%;border-top: 1px solid #0e88e3;"/>
					</div>

				<?php endif; ?>

				<?php do_action( 'woocommerce_archive_description' ); ?>

				<?php if ( have_posts() ) : ?>

					<?php do_action('woocommerce_before_shop_loop'); ?>

					<?php woocommerce_product_loop_start(); ?>

						<?php woocommerce_product_subcategories(); ?>

						<?php while ( have_posts() ) : the_post(); ?>

							<?php wc_get_template_part( 'content', 'product' ); ?>

						<?php endwhile; // end of the loop. ?>

					<?php woocommerce_product_loop_end(); ?>

					<?php do_action('woocommerce_after_shop_loop'); ?>

				<?php elseif ( ! woocommerce_product_subcategories( array( 'before' => woocommerce_product_loop_start( false ), 'after' => woocommerce_product_loop_end( false ) ) ) ) : ?>

					<?php wc_get_template( 'loop/no-products-found.php' ); ?>

				<?php endif;
			}
		?>
	</div>
	<div class="col-md-2">
	</div>
	<?php //get_sidebar(); ?>
	</div>
</div>
<?php get_footer(); ?>
