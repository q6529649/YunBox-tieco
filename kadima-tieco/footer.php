<?php $wl_theme_options = kadima_get_options(); ?>
	<div class="kadima_footer_area">
		<div class="container">
			<div class="col-md-12">
				<p class="kadima_footer_copyright_info wl_rtl" >
		            <?php
		                if($wl_theme_options['info_copyright']) { echo '&nbsp;&nbsp;&nbsp;&nbsp;'.esc_attr($wl_theme_options['info_copyright']); }
		                if($wl_theme_options['info_tel']) { echo '&nbsp;&nbsp;&nbsp;&nbsp;Tel:'.esc_attr($wl_theme_options['info_tel']); }
		                if($wl_theme_options['info_fax']) { echo '&nbsp;&nbsp;&nbsp;&nbsp;Fax:'.esc_attr($wl_theme_options['info_fax']); }
		                if($wl_theme_options['info_mail']) { echo '&nbsp;&nbsp;&nbsp;&nbsp;E-mail:'.esc_attr($wl_theme_options['info_mail']); }
		                if($wl_theme_options['info_support']) { echo '&nbsp;&nbsp;&nbsp;&nbsp;Power by:'.$wl_theme_options['info_support']; }
		            ?>
		        </p>
				<?php if($wl_theme_options['footer_section_social_media_enbled'] == '1') { ?>
				<div class="kadima_footer_social_div">
					<ul class="social">
						<?php if($wl_theme_options['fb_link']!='') { ?>
						   <li class="facebook" data-toggle="tooltip" data-placement="top" title="Facebook"><a  href="<?php echo esc_url($wl_theme_options['fb_link']); ?>"><i class="fa fa-facebook"></i></a></li>
						<?php } if($wl_theme_options['twitter_link']!='') { ?>
						<li class="twitter" data-toggle="tooltip" data-placement="top" title="Twitter"><a href="<?php echo esc_url($wl_theme_options['twitter_link']) ; ?>"><i class="fa fa-twitter"></i></a></li>
						<?php } if($wl_theme_options['linkedin_link']!='') { ?>
						<li class="linkedin" data-toggle="tooltip" data-placement="top" title="Linkedin"><a href="<?php echo esc_url($wl_theme_options['linkedin_link']) ; ?>"><i class="fa fa-linkedin"></i></a></li>
						<?php } if($wl_theme_options['youtube_link']!='') { ?>
						<li class="youtube" data-toggle="tooltip" data-placement="top" title="Youtube"><a href="<?php echo esc_url($wl_theme_options['youtube_link']) ; ?>"><i class="fa fa-youtube"></i></a></li>
		                <?php } if($wl_theme_options['gplus']!='') { ?>
						<li class="twitter" data-toggle="tooltip" data-placement="top" title="gplus"><a href="<?php echo esc_url($wl_theme_options['gplus']) ; ?>"><i class="fa fa-google-plus"></i></a></li>
		                <?php } if($wl_theme_options['instagram']!='') { ?>
						<li class="facebook" data-toggle="tooltip" data-placement="top" title="instagram"><a href="<?php echo esc_url($wl_theme_options['instagram']) ; ?>"><i class="fa fa-instagram"></i></a></li>
		                <?php } ?>
					</ul>
				</div>
				<?php } ?>
			</div>
		</div>
	</div>
</div>
<a href="#" title="Go Top" class="kadima_scrollup" style="display: inline;"><i class="fa fa-chevron-up"></i></a>
<?php if($wl_theme_options['custom_css']) ?>
<style type="text/css">
	@media (min-width: 768px) {
	    .col-sm-2 {
	        width: 20%;
	    }
	}
<?php { echo esc_attr($wl_theme_options['custom_css']); } ?>
</style>
<?php wp_footer(); ?>
<?php
	$language = get_client_language();
	if ($language != 'zh-cn') {
?>
	<script type='text/javascript' src='//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit'></script>
	<script type="text/javascript">
		function googleTranslateElementInit() {
			new google.translate.TranslateElement({pageLanguage: 'en', layout: google.translate.TranslateElement.InlineLayout.SIMPLE}, 'google_translate_element');
		}
	</script>
<?php
	}
?>
</body>
</html>
