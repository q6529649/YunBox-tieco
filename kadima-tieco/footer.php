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
<script>
var conn = new WebIM.connection({
    https: WebIM.config.https,
    url: WebIM.config.xmppURL,
    isAutoLogin: WebIM.config.isAutoLogin,
    isMultiLoginSessions: WebIM.config.isMultiLoginSessions
});
var options = { 
  apiUrl: WebIM.config.apiURL,
  user: 'anonymous',
  pwd: '123456',
  appKey: WebIM.config.appkey
};
conn.open(options);

layui.use('layim', function(layim){
  var layim = layui.layim;
  layim.config({
    mine: {
      "username": "anonymous"
      ,"id": "100000123"
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
    ,id: 1111111
  });
  layim.setChatMin();
  
	conn.listen({
		onOpened: function ( message ) {          //连接成功回调
			// 如果isAutoLogin设置为false，那么必须手动设置上线，否则无法收消息
			// 手动上线指的是调用conn.setPresence(); 如果conn初始化时已将isAutoLogin设置为true
			// 则无需调用conn.setPresence();             
		},  
		onClosed: function ( message ) {},         //连接关闭回调
		onTextMessage: function ( message ) {		//收到文本消息
			console.log(message);
			layim.getMessage({
				username: message.from
				,avatar: "http://tva1.sinaimg.cn/crop.7.0.736.736.50/bd986d61jw8f5x8bqtp00j20ku0kgabx.jpg"
				,id: message.id
				,type: "kefu"
				,content: message.data
			});		
		},
		onEmojiMessage: function ( message ) {},   //收到表情消息
		onPictureMessage: function ( message ) {}, //收到图片消息
		onCmdMessage: function ( message ) {},     //收到命令消息
		onAudioMessage: function ( message ) {},   //收到音频消息
		onLocationMessage: function ( message ) {},//收到位置消息
		onFileMessage: function ( message ) {},    //收到文件消息
		onVideoMessage: function ( message ) {},   //收到视频消息
		onPresence: function ( message ) {},       //收到联系人订阅请求、处理群组、聊天室被踢解散等消息
		onRoster: function ( message ) {},         //处理好友申请
		onInviteMessage: function ( message ) {},  //处理群组邀请
		onOnline: function () {},                  //本机网络连接成功
		onOffline: function () {},                 //本机网络掉线
		onError: function ( message ) { console.log(message)},          //失败回调
		onBlacklistUpdate: function (list) {       //黑名单变动
			// 查询黑名单，将好友拉黑，将好友从黑名单移除都会回调这个函数，list则是黑名单现有的所有好友信息
			console.log(list);
		}
	});
});

</script>
</body>
</html>
