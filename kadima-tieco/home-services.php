<!-- service section -->
<?php $wl_theme_options = kadima_get_options(); ?>
<div class="kadima_service">
<?php if($wl_theme_options['home_service_heading'] !='') { ?>
<div class="container">
	<div class="row">
		<div class="col-sm-12">
			<div class="kadima_heading_title">
				<h1><?php echo esc_attr($wl_theme_options['home_service_heading']); ?></h1>
				<hr style="margin-top: -1em;margin-bottom: 0px; border: 0;border-top: 1px solid #0e88e3;"/>
			</div>
		</div>
	</div>
</div>
<?php } ?>
<div class="container">
		<div class="row isotope" id="isotope-service-container">
			<?php for($i=1; $i<6; $i++ ) { ?>
			<div class="col-xs-12 col-sm-2 service">
				<div class="kadima_service_area appear-animation bounceIn appear-animation-visible">
					<?php if($wl_theme_options['service_icons_'.$i] !='') { ?>
                        <div class="kadima_service_iocn">
							<a href="<?php echo esc_url($wl_theme_options['service_link_'.$i]); ?>">
                            	<i class="<?php echo esc_attr($wl_theme_options['service_icons_'.$i]); ?>"></i>
							</a>
                        </div>
                    <?php } ?>
					<div class="kadima_service_detail media-body">
						<?php if($wl_theme_options['service_title_'.$i] !='') { ?>
							<h3>
								<a href="<?php echo esc_url($wl_theme_options['service_link_'.$i]); ?>">
									<?php echo esc_attr($wl_theme_options['service_title_'.$i]); ?>
								</a>
							</h3>
                            <hr style="border:none;border-top:1px dashed #f9b62a;" />
						<?php } ?>
						<?php if($wl_theme_options['service_text_'.$i] !='') { ?><p><?php echo apply_filters('the_content', $wl_theme_options['service_text_'.$i], true); ?></p><?php } ?>
					</div>
				</div>
			</div>
			<?php } ?>
		</div>
	</div>
</div>
<!-- /Service section -->
