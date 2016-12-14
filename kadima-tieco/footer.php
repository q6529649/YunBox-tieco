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
<script>
var conn = new WebIM.connection({
    https: WebIM.config.https,
    url: WebIM.config.xmppURL,
    isAutoLogin: WebIM.config.isAutoLogin,
    isMultiLoginSessions: WebIM.config.isMultiLoginSessions
});
layui.use('layim', function(layim){
	var layim = layui.layim;
	layim.config({
		mine: {
			"username": "anonymous"
			,"id": visitor_id
			,"status": "online"
			,"remark": "Nothing"
			,"avatar": "http://cdn.yunclever.com/static/layui/images/Chat.png"
		}
		,minRight: "0px"
		,brief: true
	});  
	layim.chat({
		name: 'Online Chat'
		,type: 'kefu'
		,avatar: 'http://cdn.yunclever.com/static/layui/images/Chat.png'
		,id: 888888
	});
	layim.setChatMin();	
	var options = { 
		apiUrl: WebIM.config.apiURL,
		user: visitor_id,
		pwd: '123456',
		appKey: WebIM.config.appkey
	};
	conn.open(options);
	conn.listen({
		onOpened: function ( message ) {
		},  
		onClosed: function ( message ) {},
		onTextMessage: function ( message ) {
			layim.getMessage({
				username: 'Online Chat'
				,avatar: "http://cdn.yunclever.com/static/layui/images/Chat.png"
				,id: 888888
				,type: "kefu"
				,content: message.data
			});
			layim.chat({
				name: 'Online Chat'
				,type: 'kefu'
				,avatar: 'http://cdn.yunclever.com/static/layui/images/Chat.png'
				,id: 888888
			});
		},
		onEmojiMessage: function ( message ) {},
		onPictureMessage: function ( message ) {},
		onCmdMessage: function ( message ) {},
		onAudioMessage: function ( message ) {},
		onLocationMessage: function ( message ) {},
		onFileMessage: function ( message ) {},
		onVideoMessage: function ( message ) {},
		onPresence: function ( message ) {},
		onRoster: function ( message ) {},
		onInviteMessage: function ( message ) {},
		onOnline: function () {},
		onOffline: function () {},
		onError: function ( message ) {
			if(message.type === 1){				
				var options = { 
					username: visitor_id,
					password: '123456',
					nickname: 'anonymous',
					appKey: WebIM.config.appkey,
					success: function () {
						var options = { 
							apiUrl: WebIM.config.apiURL,
							user: visitor_id,
							pwd: '123456',
							appKey: WebIM.config.appkey
						};
						conn.open(options);
					},  
					error: function () { }, 
					apiUrl: WebIM.config.apiURL
				}; 
				conn.signup(options);
			}
		},
		onBlacklistUpdate: function (list) {
			console.log(list);
		}
	});
});
</script>
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
	<script>
		(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
		ga('create', 'UA-88663126-1', 'auto');
		ga('send', 'pageview');
	</script>
<?php
	}
?>
</body>
</html>
