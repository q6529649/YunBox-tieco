<?php
/** Theme Name	: Kadima
* Theme Core Functions and Codes
*/
	/**Includes required resources here**/
	define('WL_TEMPLATE_DIR_URI', get_template_directory_uri());
	define('WL_TEMPLATE_DIR', get_template_directory());
	define('WL_TEMPLATE_DIR_CORE' , WL_TEMPLATE_DIR . '/core');
	require( WL_TEMPLATE_DIR_CORE . '/menu/default_menu_walker.php' );
	require( WL_TEMPLATE_DIR_CORE . '/menu/kadima_nav_walker.php' );
	require( WL_TEMPLATE_DIR_CORE . '/scripts/css_js.php' ); //Enquiring Resources here
	require( WL_TEMPLATE_DIR_CORE . '/comment-function.php' );
	require(dirname(__FILE__).'/customizer.php');

	//Sane Defaults
	function kadima_default_settings()
    {
    	$ImageUrl =  esc_url(get_template_directory_uri() ."/images/1.png");
    	$ImageUrl2 = esc_url(get_template_directory_uri() ."/images/2.png");
    	$ImageUrl3 = esc_url(get_template_directory_uri() ."/images/3.png");
    	$ImageUrl4 = esc_url(get_template_directory_uri() ."/images/portfolio1.png");
    	$ImageUrl5 = esc_url(get_template_directory_uri() ."/images/portfolio2.png");
    	$ImageUrl6 = esc_url(get_template_directory_uri() ."/images/portfolio3.png");
    	$ImageUrl7 = esc_url(get_template_directory_uri() ."/images/portfolio4.png");
    	$ImageUrl8 = esc_url(get_template_directory_uri() ."/images/portfolio1.png");
    	$ImageUrl9 = esc_url(get_template_directory_uri() ."/images/portfolio2.png");
    	$ImageUrl10 = esc_url(get_template_directory_uri() ."/images/portfolio3.png");
    	$ImageUrl11 = esc_url(get_template_directory_uri() ."/images/portfolio4.png");
    	$ImageUrl12 = esc_url(get_template_directory_uri() ."/images/portfolio1.png");
    	$ImageUrl13 = esc_url(get_template_directory_uri() ."/images/portfolio2.png");
    	$ImageUrl14 = esc_url(get_template_directory_uri() ."/images/portfolio3.png");
    	$ImageUrl15 = esc_url(get_template_directory_uri() ."/images/portfolio4.png");
        $wl_theme_options = array(
			'upload_image_logo'=>'',
			'height'=>'55',
			'width'=>'55',
			'_frontpage' => '1',
			'blog_count'=>'3',
			'upload_image_favicon'=>'',
			'custom_css'=>'',
			'slide_image_1' => $ImageUrl,
			'slide_title_1' => __('', 'kadima' ),
			'slide_desc_1' => __('', 'kadima' ),
			'slide_btn_text_1' => __('', 'kadima' ),
			'slide_btn_link_1' => '',
			'slide_image_2' => $ImageUrl2,
			'slide_title_2' => __('', 'kadima' ),
			'slide_desc_2' => __('', 'kadima' ),
			'slide_btn_text_2' => __('', 'kadima' ),
			'slide_btn_link_2' => '',
			'slide_image_3' => $ImageUrl3,
			'slide_title_3' => __('', 'kadima' ),
			'slide_desc_3' => __('', 'kadima' ),
			'slide_btn_text_3' => __('', 'kadima' ),
			'slide_btn_link_3' => '',
			// Footer Call-Out
			'fc_home'=>'1',
			'fc_title' => __('', 'kadima' ),
			'fc_btn_txt' => __('', 'kadima' ),
			'fc_btn_link' =>"",
			'fc_icon' => 'fa fa-thumbs-up',
			'header_social_media_in_enabled'=>'1',
			'footer_section_social_media_enbled'=>'1',
			'twitter_link' =>"",
			'fb_link' =>"",
			'linkedin_link' =>"",
			'youtube_link' =>"",
			'instagram' =>"",
			'gplus' =>"",
			'email_id' => '',
			'phone_no' => '',
			'footer_customizations' => __('', 'kadima' ),
			'info_copyright' => __('', 'kadima' ),
			'info_tel' => __('', 'kadima' ),
			'info_fax' => __('', 'kadima' ),
			'info_mail'=> __('', 'kadima' ),
			'info_support'=> __('', 'kadima' ),
            //
			'service_home'=>'1',
			'home_service_heading' => __('Title', 'kadima' ),
			'service_1_title'=>__("One",'kadima' ),
			'service_1_icons'=>"fa fa-database",
			'service_1_text'=>__("There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in.", 'kadima' ),
			'service_1_link'=>"",
			'service_2_title'=>__('Two', 'kadima' ),
			'service_2_icons'=>"fa fa-database",
			'service_2_text'=>__("There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in.", 'kadima' ),
			'service_2_link'=>"",
			'service_3_title'=>__("Three", 'kadima' ),
			'service_3_icons'=>"fa fa-database",
			'service_3_text'=>__("There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in.", 'kadima' ),
			'service_3_link'=>"",
			'service_4_title'=>__("Four", 'kadima' ),
			'service_4_icons'=>"fa fa-database",
			'service_4_text'=>__("There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in.", 'kadima' ),
			'service_4_link'=>"",
			'service_5_title'=>__("Five", 'kadima' ),
			'service_5_icons'=>"fa fa-database",
			'service_5_text'=>__("There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in.", 'kadima' ),
			'service_5_link'=>"",
			//Portfolio Settings:
			'portfolio_home'=>'0',
			'port_heading' => __('', 'kadima' ),
			'port_1_img'=> $ImageUrl4,
			'port_1_title'=>__('', 'kadima' ),
			'port_1_link'=>'',
			'port_2_img'=> $ImageUrl5,
			'port_2_title'=>__('', 'kadima' ),
			'port_2_link'=>'',
			'port_3_img'=> $ImageUrl6,
			'port_3_title'=>__('', 'kadima' ),
			'port_3_link'=>'',
			'port_4_img'=> $ImageUrl7,
			'port_4_title'=>__('', 'kadima' ),
			'port_4_link'=>'',
			'port_5_img'=> $ImageUrl8,
			'port_5_title'=>__('', 'kadima' ),
			'port_5_link'=>'',
			'port_6_img'=> $ImageUrl9,
			'port_6_title'=>__('', 'kadima' ),
			'port_6_link'=>'',
			'port_7_img'=> $ImageUrl10,
			'port_7_title'=>__('', 'kadima' ),
			'port_7_link'=>'',
			'port_8_img'=> $ImageUrl11,
			'port_8_title'=>__('', 'kadima' ),
			'port_8_link'=>'',
			'port_9_img'=> $ImageUrl12,
			'port_9_title'=>__('', 'kadima' ),
			'port_9_link'=>'',
			'port_10_img'=> $ImageUrl13,
			'port_10_title'=>__('', 'kadima' ),
			'port_10_link'=>'',
			'port_11_img'=> $ImageUrl14,
			'port_11_title'=>__('', 'kadima' ),
			'port_11_link'=>'',
			'port_12_img'=> $ImageUrl15,
			'port_12_title'=>__('', 'kadima' ),
			'port_12_link'=>'',
			//BLOG Settings
			'show_blog' => '0',
			'blog_title'=>__('News', 'kadima' ),
		);
		return apply_filters( 'kadima_options', $wl_theme_options );
    }
	function kadima_get_options() {
        // Options API
        return wp_parse_args(
            get_option( 'kadima_options', array() ),
            kadima_default_settings()
        );
	}
	/*After Theme Setup*/
	add_action( 'after_setup_theme', 'kadima_head_setup' );
	function kadima_head_setup()
	{
		global $content_width;
		//content width
		if ( ! isset( $content_width ) ) $content_width = 550; //px
	    //Blog Thumb Image Sizes
		add_image_size('home_post_thumb',340,210,true);
		//Blogs thumbs
		add_image_size('wl_page_thumb',730,350,true);
		add_image_size('blog_2c_thumb',570,350,true);
		add_theme_support( 'title-tag' );
		// Load text domain for translation-ready
		load_theme_textdomain( 'kadima', WL_TEMPLATE_DIR_CORE . '/lang' );
		add_theme_support( 'post-thumbnails' ); //supports featured image
		// This theme uses wp_nav_menu() in one location.
		register_nav_menu( 'primary', __( 'Primary Menu', 'kadima' ) );
		// theme support
		$args = array('default-color' => '000000',);
		add_theme_support( 'custom-background', $args);
		add_theme_support( 'automatic-feed-links');
    	add_theme_support( 'woocommerce' );
		/*
		 * This theme styles the visual editor to resemble the theme style,
		 * specifically font, colors, icons, and column width.
		 */
		add_editor_style('css/editor-style.css');
		require( WL_TEMPLATE_DIR . '/options-reset.php'); //Reset Theme Options Here
	}
	// Read more tag to formatting in blog page
	function kadima_content_more($more)
	{
	   return '<div class="blog-post-details-item"><a class="kadima_blog_read_btn" href="'.get_permalink().'"><i class="fa fa-plus-circle"></i>"'.__('Read More', 'kadima' ).'"</a></div>';
	}
	add_filter( 'the_content_more_link', 'kadima_content_more' );
	// Replaces the excerpt "more" text by a link
	function kadima_excerpt_more($more) {
       return '';
	}
	add_filter('excerpt_more', 'kadima_excerpt_more');
	/*
	* widget area
	*/
	add_action( 'widgets_init', 'kadima_widgets_init');
	function kadima_widgets_init() {
    	/*sidebar*/
    	register_sidebar( array(
    		'name' => __( 'Sidebar', 'kadima' ),
    		'id' => 'sidebar-primary',
    		'description' => __( 'The primary widget area', 'kadima' ),
    		'before_widget' => '<div class="kadima_sidebar_widget">',
    		'after_widget' => '</div>',
    		'before_title' => '<div class="kadima_sidebar_widget_title"><h2>',
    		'after_title' => '</h2></div>'
    	) );
    	register_sidebar( array(
    		'name' => __( 'Footer Widget Area', 'kadima' ),
    		'id' => 'footer-widget-area',
    		'description' => __( 'footer widget area', 'kadima' ),
    		'before_widget' => '<div class="col-md-3 col-sm-6 kadima_footer_widget_column">',
    		'after_widget' => '</div>',
    		'before_title' => '<div class="kadima_footer_widget_title">',
    		'after_title' => '<div class="kadima-footer-separator"></div></div>',
    	) );
	}
	/* Breadcrumbs  */
	function kadima_breadcrumbs() {
        $delimiter = '';
        $home = __('Home', 'kadima' ); // text for the 'Home' link
        $before = '<li>'; // tag before the current crumb
        $after = '</li>'; // tag after the current crumb
        echo '<ul class="breadcrumb">';
        global $post;
        $homeLink = home_url();
        echo '<li><a href="' . $homeLink . '">' . $home . '</a></li>' . $delimiter . ' ';
        if (is_category()) {
            global $wp_query;
            $cat_obj = $wp_query->get_queried_object();
            $thisCat = $cat_obj->term_id;
            $thisCat = get_category($thisCat);
            $parentCat = get_category($thisCat->parent);
            if ($thisCat->parent != 0)
                echo(get_category_parents($parentCat, TRUE, ' ' . $delimiter . ' '));
            echo $before . ' _e("Archive by category","kadima") "' . single_cat_title('', false) . '"' . $after;
        } elseif (is_day()) {
            echo '<li><a href="' . get_year_link(get_the_time('Y')) . '">' . get_the_time('Y') . '</a></li> ' . $delimiter . ' ';
            echo '<li><a href="' . get_month_link(get_the_time('Y'), get_the_time('m')) . '">' . get_the_time('F') . '</a></li> ' . $delimiter . ' ';
            echo $before . get_the_time('d') . $after;
        } elseif (is_month()) {
            echo '<li><a href="' . get_year_link(get_the_time('Y')) . '">' . get_the_time('Y') . '</a></li> ' . $delimiter . ' ';
            echo $before . get_the_time('F') . $after;
        } elseif (is_year()) {
            echo $before . get_the_time('Y') . $after;
        } elseif (is_single() && !is_attachment()) {
            if (get_post_type() != 'post') {
                $post_type = get_post_type_object(get_post_type());
                $slug = $post_type->rewrite;
                echo '<li><a href="' . $homeLink . '/' . $slug['slug'] . '/">' . $post_type->labels->singular_name . '</a></li> ' . $delimiter . ' ';
                echo $before . get_the_title() . $after;
            } else {
                $cat = get_the_category();
                $cat = $cat[0];
                //echo get_category_parents($cat, TRUE, ' ' . $delimiter . ' ');
                echo $before . get_the_title() . $after;
            }

        } elseif (!is_single() && !is_page() && get_post_type() != 'post') {
            $post_type = get_post_type_object(get_post_type());
            echo $before . $post_type->labels->singular_name . $after;
        } elseif (is_attachment()) {
            $parent = get_post($post->post_parent);
            $cat = get_the_category($parent->ID);
            $cat = $cat[0];
            echo get_category_parents($cat, TRUE, ' ' . $delimiter . ' ');
            echo '<li><a href="' . get_permalink($parent) . '">' . $parent->post_title . '</a></li> ' . $delimiter . ' ';
            echo $before . get_the_title() . $after;
        } elseif (is_page() && !$post->post_parent) {
            echo $before . get_the_title() . $after;
        } elseif (is_page() && $post->post_parent) {
            $parent_id = $post->post_parent;
            $breadcrumbs = array();
            while ($parent_id) {
                $page = get_page($parent_id);
                $breadcrumbs[] = '<li><a href="' . get_permalink($page->ID) . '">' . get_the_title($page->ID) . '</a></li>';
                $parent_id = $page->post_parent;
            }
            $breadcrumbs = array_reverse($breadcrumbs);
            foreach ($breadcrumbs as $crumb)
                echo $crumb . ' ' . $delimiter . ' ';
            echo $before . get_the_title() . $after;
        } elseif (is_search()) {
            echo $before . _e("Search results for","kadima")  . get_search_query() . '"' . $after;

        } elseif (is_tag()) {
    		echo $before . _e('Tag','kadima') . single_tag_title('', false) . $after;
        } elseif (is_author()) {
            global $author;
            $userdata = get_userdata($author);
            echo $before . _e("Articles posted by","kadima") . $userdata->display_name . $after;
        } elseif (is_404()) {
            echo $before . _e("Error 404","kadima") . $after;
        }
        echo '</ul>';
	}
	//PAGINATION
	function kadima_pagination($pages = '', $range = 2) {
        $showitems = ($range * 2)+1;
        global $paged;
        if(empty($paged)) $paged = 1;
        if($pages == '')
        {
            global $wp_query;
            $pages = $wp_query->max_num_pages;
            if(!$pages)
            {
                $pages = 1;
            }
        }
        if(1 != $pages)
        {
            echo "<div class='kadima_blog_pagination'><div class='kadima_blog_pagi'>";
            if($paged > 2 && $paged > $range+1 && $showitems < $pages) echo "<a href='".get_pagenum_link(1)."'>&laquo;</a>";
            if($paged > 1 && $showitems < $pages) echo "<a href='".get_pagenum_link($paged - 1)."'>&lsaquo;</a>";
            for ($i=1; $i <= $pages; $i++)
            {
                if (1 != $pages &&( !($i >= $paged+$range+1 || $i <= $paged-$range-1) || $pages <= $showitems ))
                {
                    echo ($paged == $i)? "<a class='active'>".$i."</a>":"<a href='".get_pagenum_link($i)."'>".$i."</a>";
                }
            }
            if ($paged < $pages && $showitems < $pages) echo "<a href='".get_pagenum_link($paged + 1)."'>&rsaquo;</a>";
            if ($paged < $pages-1 &&  $paged+$range-1 < $pages && $showitems < $pages) echo "<a href='".get_pagenum_link($pages)."'>&raquo;</a>";
            echo "</div></div>";
        }
    }
	/*===================================================================================
	* Add Author Links
	* =================================================================================*/
	function kadima_author_profile( $contactmethods ) {
    	$contactmethods['youtube_profile'] = __('Youtube Profile URL','kadima');
    	$contactmethods['twitter_profile'] = __('Twitter Profile URL','kadima');
    	$contactmethods['facebook_profile'] = __('Facebook Profile URL','kadima');
    	$contactmethods['linkedin_profile'] = __('Linkedin Profile URL','kadima');
    	return $contactmethods;
	}
	add_filter( 'user_contactmethods', 'kadima_author_profile', 10, 1);
	/*===================================================================================
	* Add Class Gravtar
	* =================================================================================*/
	add_filter('get_avatar','kadima_gravatar_class');
	function kadima_gravatar_class($class) {
        $class = str_replace("class='avatar", "class='author_detail_img", $class);
        return $class;
	}
	/****--- Navigation for Author, Category , Tag , Archive ---***/
	function kadima_navigation() { ?>
        <div class="kadima_blog_pagination">
            <div class="kadima_blog_pagi">
                <?php posts_nav_link(); ?>
            </div>
	    </div>
	<?php
    }
	/****--- Navigation for Single ---***/
	function kadima_navigation_posts() { ?>
    	<div class="navigation_en">
        	<nav id="wblizar_nav">
            	<span class="nav-previous">
            	       <?php previous_post_link('&laquo; %link'); ?>
            	</span>
            	<span class="nav-next">
            	       <?php next_post_link('%link &raquo;'); ?>
            	</span>
        	</nav>
    	</div>
    <?php
	}

    // Custom WP
	function customWp_replace_open_sans() {
		wp_deregister_style('open-sans');
		wp_register_style( 'open-sans', WL_TEMPLATE_DIR_URI.'/css/font-family.css');
		if(is_admin()) wp_enqueue_style( 'open-sans');
	}
    function customWp_admin_bar_remove() {
        global $wp_admin_bar;
        $wp_admin_bar->remove_menu('wp-logo');
    }
    function customWp_footer_admin_change () {return '';}
	function right_admin_footer_text($text) {
		$text = "Version : 1.0.5";
		return $text;
	}
    function customWp_screen_options_remove(){ return false;}
    function customWp_screen_help_remove($old_help, $screen_id, $screen){
        $screen->remove_help_tabs();
        return $old_help;
    }
	function customWp_remove_admin_stuff( $translated_text, $untranslated_text, $domain ) {
		$custom_field_text = 'You are using <span class="b">WordPress %s</span>.';
		if (!current_user_can( 'update_core') && is_admin() && $untranslated_text === $custom_field_text) {
			return '';
		}
		return $translated_text;
	}
	function customWp_admin_title($admin_title, $title){
	    return $title.' &lsaquo; '.get_bloginfo('name');
	}
	function customWp_remove_my_post_metaboxes() {
		remove_meta_box( 'revisionsdiv','post','normal' ); // 修订版本模块
		remove_meta_box( 'slugdiv','post','normal' ); // 别名模块
		remove_meta_box( 'trackbacksdiv','post','normal' ); // 引用模块
		remove_meta_box('dashboard_recent_comments', 'dashboard', 'normal');//近期评论
	    remove_meta_box('dashboard_recent_drafts', 'dashboard', 'normal');//近期草稿
	    remove_meta_box('dashboard_primary', 'dashboard', 'core');//wordpress博客
	    remove_meta_box('dashboard_secondary', 'dashboard', 'core');//wordpress其它新闻
	    remove_meta_box('dashboard_right_now', 'dashboard', 'core');//wordpress概况
	    remove_meta_box('dashboard_incoming_links', 'dashboard', 'core');//wordresss链入链接
	    remove_meta_box('dashboard_plugins', 'dashboard', 'core');//wordpress链入插件
	    remove_meta_box('dashboard_quick_press', 'dashboard', 'core');//wordpress快速发布
	}
	function customWp_all_settings_link() {// 显示所有设置菜单
		add_options_page(__('All Settings'), __('All Settings'), 'administrator', 'options.php');
	}
	function customWp_login() {
        echo '<link rel="stylesheet" tyssspe="text/css" href="' . get_bloginfo('template_directory') . '/custom_login/custom_login.css" />';
    }
	function customWp_login_title() {
        return 'YunClever Magic Box';
	}
	function customWp_email_from_name($email){
	    $wp_from_name = get_option('blogname');
	    return $wp_from_name;
	}
	function customWp_email_from_email($email) {
	    $wp_from_email = get_option('admin_email');
	    return $wp_from_email;
	}
	function customWp_remove_cssjs_ver( $src ) { //移除 WordPress 加载的JS和CSS链接中的版本号
		if( strpos( $src, 'ver='. get_bloginfo( 'version' ) ) )
			$src = remove_query_arg( 'ver', $src );
		return $src;
	}
	function customWp_woocommerce_remove_related_products( $args ) {
		return array();
	}
	function customWp_modify_post_mime_types( $post_mime_types ) { //媒体库过滤不同类型的文件
		$post_mime_types['image'] = array( __( '图片' ), __( '图片' ), _n_noop( '图片 <span class="count">(%s)</span>', '图片 <span class="count">(%s)</span>' ) );
		$post_mime_types['video'] = array( __( '视频' ), __( '视频' ), _n_noop( '视频 <span class="count">(%s)</span>', '视频 <span class="count">(%s)</span>' ) );
		$post_mime_types['text'] = array( __( '文本' ), __( '文本' ), _n_noop( '文本 <span class="count">(%s)</span>', '文本 <span class="count">(%s)</span>' ) );
		$post_mime_types['audio'] = array( __( '音频' ), __( '音频' ), _n_noop( '音频 <span class="count">(%s)</span>', '音频 <span class="count">(%s)</span>' ) );
		$post_mime_types['application'] = array( __( '应用文件' ), __( '管理应用文件' ), _n_noop( '应用文件 <span class="count">(%s)</span>', '应用文件 <span class="count">(%s)</span>' ) );
		$post_mime_types['application/pdf'] = array( __( 'PDF' ), __( '管理PDF文件' ), _n_noop( 'PDF <span class="count">(%s)</span>', 'PDF <span class="count">(%s)</span>' ) );
		return $post_mime_types;
	}
	function customWp_media_row_actions( $actions, $object ) { //后台媒体库显示文件的链接地址
		$actions['url'] = '<a href="'.wp_get_attachment_url( $object->ID ).'" target="_blank">URL</a>';
		return $actions;
	}
	function customWp_change_graphic_lib($array) { //修复阿里云WP_Image_Editor_GD漏洞提示
		return array( 'WP_Image_Editor_GD', 'WP_Image_Editor_Imagick' );
	}
	function customWp_disable_emojis() { //禁用emoji's
		remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
		remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
		remove_action( 'wp_print_styles', 'print_emoji_styles' );
		remove_action( 'admin_print_styles', 'print_emoji_styles' );
		remove_filter( 'the_content_feed', 'wp_staticize_emoji' );
		remove_filter( 'comment_text_rss', 'wp_staticize_emoji' );
		remove_filter( 'wp_mail', 'wp_staticize_emoji_for_email' );
		add_filter( 'tiny_mce_plugins', 'customWp_disable_emojis_tinymce' );
	}
	/**
	 * Filter function used to remove the tinymce emoji plugin.
	 *
	 * @param    array  $plugins
	 * @return   array             Difference betwen the two arrays
	 */
	function customWp_disable_emojis_tinymce( $plugins ) {
		return array_diff( $plugins, array( 'wpemoji' ) );
	}
	function show_product_order($columns){
	   $columns['share'] = __( '分享');
	   return $columns;
	}
	function customWp_product_column( $column, $postid ) {
		if ( $column == 'share' ) {
			echo do_shortcode("[addtoany]");
		}
	}
	function customWp_menu_order($menu_ord) { // 自定义排序WordPress后台管理菜单
		if (!$menu_ord) return true;
		return array(
			'index.php', // “仪表盘”菜单
			'edit.php?post_type=question', // 自定义文章类型的菜单
			'edit-comments.php', //“评论”菜单
			'upload.php', //“多媒体”菜单
			'edit.php?post_type=cmp_slider', //自定义文章类型的菜单
			'plugins.php', //“插件”菜单
			'themes.php', //“主题”菜单
			'edit.php?post_type=page', // “页面”菜单
			'edit.php', // “文章”菜单
		);
	}
	function customWp_dashboard_widget_function() {
		echo '关于云聪<br/>我们致立于为中小企业提供一站式外贸电商解决方案，专注于跨境电商平台效果提升。云聪在帮助中小企业在电商之路获得成功的同时不忘初心 —— "一帮人一起为社会做一件有意义的事情"。';
	}
	function customWp_add_dashboard_widgets() {
		wp_add_dashboard_widget('example_dashboard_widget', '云聪智能全网营销平台', 'customWp_dashboard_widget_function');
	}
	function customWp_admin_css() {
	    wp_enqueue_style( 'admin-css', get_template_directory_uri() .'/css/admin.css' );
	}
	remove_action('admin_init', '_maybe_update_core');
	remove_action('admin_init', '_maybe_update_plugins');
	remove_action('admin_init', '_maybe_update_themes');
	remove_action('load-update-core.php', 'wp_update_plugins');
	remove_action('load-update-core.php', 'wp_update_themes');
	remove_action('welcome_panel', 'wp_welcome_panel');
	remove_action('wp_head', 'feed_links_extra', 3);
	remove_action('wp_head', 'rsd_link');
	remove_action('wp_head', 'wlwmanifest_link');
	remove_action('wp_head', 'index_rel_link');
	remove_action('wp_head', 'start_post_rel_link', 10, 0);
	remove_action('wp_head', 'wp_generator');
	//add_action('wp_enqueue_scripts', 'customWp_replace_open_sans' );
	//add_action('admin_enqueue_scripts', 'customWp_replace_open_sans');
	add_action('admin_head', 'customWp_admin_css');
	add_action('admin_menu','customWp_remove_my_post_metaboxes');
	//add_action('admin_menu', 'customWp_all_settings_link');
	add_action('init', 'customWp_disable_emojis' );
	add_action('init', 'customWp_replace_open_sans' );
    add_action('login_head', 'customWp_login');
	add_action('manage_product_posts_custom_column', 'customWp_product_column', 10, 2 );
	add_action('wp_before_admin_bar_render', 'customWp_admin_bar_remove', 0);
	add_action('wp_dashboard_setup', 'customWp_add_dashboard_widgets' );
    add_filter('admin_footer_text', 'customWp_footer_admin_change', 9999);
	add_filter('admin_title', 'customWp_admin_title', 10, 2);
    add_filter('contextual_help', 'customWp_screen_help_remove', 999, 3 );
	//add_filter('custom_menu_order', 'customWp_menu_order');
	add_filter('gettext', 'customWp_remove_admin_stuff', 20, 3);
	add_filter('login_headertitle', 'customWp_login_title');
	add_filter('media_row_actions', 'customWp_media_row_actions', 10, 2 );
	//add_filter('menu_order', 'customWp_menu_order');
	add_filter('manage_edit-product_columns', 'show_product_order',15 );
	add_filter('post_mime_types', 'customWp_modify_post_mime_types' );
	add_filter('pre_site_transient_update_core', '__return_null');
	add_filter('pre_site_transient_update_plugins', '__return_null');
	add_filter('pre_site_transient_update_themes', '__return_null');
	add_filter('style_loader_src', 'customWp_remove_cssjs_ver', 999 );
    add_filter('screen_options_show_screen', 'customWp_screen_options_remove');
	add_filter('script_loader_src', 'customWp_remove_cssjs_ver', 999 );
	add_filter('update_footer', 'right_admin_footer_text', 11);
	add_filter('wp_mail_from', 'customWp_email_from_email');
	add_filter('wp_mail_from_name', 'customWp_email_from_name');
	add_filter('wp_image_editors', 'customWp_change_graphic_lib' );
	add_filter('woocommerce_related_products_args','customWp_woocommerce_remove_related_products', 10);
	function smilies_reset() {
		global $wpsmiliestrans, $wp_smiliessearch;
		// don't bother setting up smilies if they are disabled
		if ( !get_option( 'use_smilies' ) )
		    return;
		$wpsmiliestrans = array(
		    ':mrgreen:' => 'icon_mrgreen.gif',
		    ':neutral:' => 'icon_neutral.gif',
		    ':twisted:' => 'icon_twisted.gif',
		      ':arrow:' => 'icon_arrow.gif',
		      ':shock:' => 'icon_eek.gif',
		      ':smile:' => 'icon_smile.gif',
		        ':???:' => 'icon_confused.gif',
		       ':cool:' => 'icon_cool.gif',
		       ':evil:' => 'icon_evil.gif',
		       ':grin:' => 'icon_biggrin.gif',
		       ':idea:' => 'icon_idea.gif',
		       ':oops:' => 'icon_redface.gif',
		       ':razz:' => 'icon_razz.gif',
		       ':roll:' => 'icon_rolleyes.gif',
		       ':wink:' => 'icon_wink.gif',
		        ':cry:' => 'icon_cry.gif',
		        ':eek:' => 'icon_surprised.gif',
		        ':lol:' => 'icon_lol.gif',
		        ':mad:' => 'icon_mad.gif',
		        ':sad:' => 'icon_sad.gif',
		          '8-)' => 'icon_cool.gif',
		          '8-O' => 'icon_eek.gif',
		          ':-(' => 'icon_sad.gif',
		          ':-)' => 'icon_smile.gif',
		          ':-?' => 'icon_confused.gif',
		          ':-D' => 'icon_biggrin.gif',
		          ':-P' => 'icon_razz.gif',
		          ':-o' => 'icon_surprised.gif',
		          ':-x' => 'icon_mad.gif',
		          ':-|' => 'icon_neutral.gif',
		          ';-)' => 'icon_wink.gif',
		    // This one transformation breaks regular text with frequency.
		    //     '8)' => 'icon_cool.gif',
		           '8O' => 'icon_eek.gif',
		           ':(' => 'icon_sad.gif',
		           ':)' => 'icon_smile.gif',
		           ':?' => 'icon_confused.gif',
		           ':D' => 'icon_biggrin.gif',
		           ':P' => 'icon_razz.gif',
		           ':o' => 'icon_surprised.gif',
		           ':x' => 'icon_mad.gif',
		           ':|' => 'icon_neutral.gif',
		           ';)' => 'icon_wink.gif',
		          ':!:' => 'icon_exclaim.gif',
		          ':?:' => 'icon_question.gif',
	    );
	}
	smilies_reset();
?>
