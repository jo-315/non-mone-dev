<?php

/**
 * Common ----------------------------------------------------------------------
 */

function moire_setup() {
	add_theme_support(
		'custom-header', apply_filters(
			'moire_custom_header_args', array(
				'default-image' => '',
				'width'         => 1020,
				'height'        => 250,
				'flex-height'   => true,
				'flex-width'    => true,
			)
		)
	);

	add_theme_support( 'post-thumbnails' );
}
/**
 * Register widget area.
 */
function moire_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'サイドバー' ),
			'id'            => 'moire-sidebar-1',
			'description'   => esc_html__( 'ここにウィジェットを追加します。' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);

	register_sidebars(
		3, array(
			/* translators: d: Sidebar number */
			'name'          => esc_html__( 'フッターウィジェットエリア%d' ),
			'id'            => 'moire-footer-moire-area',
			'class'         => 'col-sm-4',
			'description'   => esc_html__( 'ここにウィジェットを追加します。' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}

/*
SVGを許可
 */
function cc_mime_types($mimes) {
  $mimes['svg'] = 'image/svg+xml';
  return $mimes;
}

add_filter('upload_mimes', 'cc_mime_types');
add_action( 'after_setup_theme', 'moire_setup' );
add_action( 'widgets_init', 'moire_widgets_init' );


/*
### Header ### -----------------------------------------------------------------
*/
function moire_scripts() {
	// jqueryの読み込み
	wp_enqueue_script( 'jquery' );
	wp_enqueue_script( 'function-nonmoney' ,get_template_directory_uri() . '/js/functions.js', array('jquery'));
  wp_enqueue_script( 'lazysize-moire' ,get_template_directory_uri() . '/js/lazysizes.min.js');

	// styleの読み込み
	wp_enqueue_style( 'non-theme-style_grid-core', get_template_directory_uri() . '/css/glide.core.min.css' );
	wp_enqueue_style( 'non-theme-style_grid-theme', get_template_directory_uri() . '/css/glide.theme.min.css' );
	wp_enqueue_style( 'non-theme-style_fontawesome', get_template_directory_uri() . '/css/font-awesome.min.css' );
}

function add_header_image() {
	$header_image = get_header_image();
	$custom_header_css = '
	  .header-img {
	    background-image: url(' . esc_url( $header_image ) .');
	  }';
	wp_add_inline_style( 'moire-header-style', $custom_header_css );
}

// async / defer をつける
if (!(is_admin() )) {
	function add_defer_to_enqueue_script( $url ) {
    if ( FALSE === strpos( $url, '.js' ) ) return $url;
    if ( strpos( $url, 'jquery.min.js' ) ) return $url;
    return "$url' defer charset='UTF-8";
	}
	add_filter( 'clean_url', 'add_defer_to_enqueue_script', 11, 1 );
}

// headerの不要タグを削除
remove_action('wp_head', 'wp_generator');
remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'adjacent_posts_rel_link_wp_head');
remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'wp_shortlink_wp_head');
remove_action('wp_head', 'feed_links', 2);
remove_action('wp_head', 'feed_links_extra', 3);

// フック一覧
// スタイルの追加
add_action( 'wp_enqueue_scripts', 'moire_scripts' );
// header画像の追加
add_action( 'wp_enqueue_scripts', 'add_header_image' );


/*
### Archeive ### ---------------------------------------------------------------
*/

// 投稿一覧で投稿日時を表示
function moire_posted_date() {
	// $time_string = formatの決定
	$time_string  = '<time class="entry-date published updated" datetime="%1$s" itemprop="dateModified">%2$s</time><meta itemprop="datePublished" content="%2$s">';

	if ( ( get_the_time( 'U' ) !== get_the_modified_time( 'U' ) ) ) {
		$time_string = '%5$s <time datetime="%3$s" itemprop="dateModified">%4$s</time><meta itemprop="datePublished" content="%4$s">';
	}

// 日付の出力調整
$time_string = sprintf( $time_string,
	esc_attr( get_the_date( DATE_W3C ) ),
	esc_html( get_the_date('Y年 F d日') ),
	esc_attr( get_the_modified_date( DATE_W3C ) ),
	esc_html( get_the_modified_date('Y年 F d日') ),
	null,
	null
);

	echo '<span class="posted-on">'. $time_string . '</span>'; // WPCS: XSS OK.
}

// Get the first image from post
function moire_catch_that_image() {
	global $post;
	$first_img = false;
	ob_start();
	ob_end_clean();
	preg_match_all( '/<img.+src=[\'"]([^\'"]+)[\'"].*>/i', $post->post_content, $matches );
	if ( ! empty( $matches[1][0] ) ) {
		$first_img = $matches[1][0];
	}
	return $first_img;
}

// カテゴリーの表示
function moire_category() {
	$categories_list = get_the_category_list( ' ', '' );
	if ( $categories_list ) {
		printf(
			'<div class="cat-links-wrap">%1$s</div>',
			$categories_list
		);
	}
}

/**
 * author
 */
if ( ! function_exists( 'moire_theme_posted_by' ) ) :
	/**
	 * Prints HTML with meta information for the current author.
	 */
	function moire_theme_posted_by() {
		$name = get_the_author_meta('user_nicename');
		if ( $name == 'moire' ) { return; };
		$path = 'https://moire.xsrv.jp/wp-content/uploads/profile/profile_'. $name . '.png';
		$byline = (
			'<span class="author vcard">' . esc_html( get_the_author() ) . '</span>'
		);

		echo '<img src="'. $path .'"><span class="byline"> ' . $byline . '</span>'; // WPCS: XSS OK.

	}
endif;

if ( ! function_exists( 'moire_theme_posted_by_no_name' ) ) :
	/**
	 * Prints HTML with meta information for the current author.
	 */
	function moire_theme_posted_by_no_name() {
		$name = get_the_author_meta('user_nicename');
		if ( $name == 'moire' ) { return; };
		$path = 'https://moire.xsrv.jp/wp-content/uploads/profile/profile_'. $name . '.png';
		echo '<img src="'. $path .'">'; // WPCS: XSS OK.
	}
endif;

if ( ! function_exists( 'moire_theme_single_posted' ) ) :
	/**
	 * Prints HTML with meta information for the current author.
	 */
	function moire_theme_single_posted($list = false) {
		$name = get_the_author_meta('user_nicename');
		if ( $name == 'moire' ) { return; };

    $byline = '';
		$author = get_the_author();
		$path = 'https://moire.xsrv.jp/wp-content/uploads/profile/profile_'. $name . '.png';
		if ($list) {
			$byline = (
				'<span class="author vcard">' . esc_html( $author ) . 'の記事一覧</span>'
			);
		} else {
			$byline = (
				'<span class="author vcard">' . esc_html( $author ) . '</span>'
			);
		};

		echo '<a class="url fn n" href="' . esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ) . '"><img src="'. $path .'"><span class="byline"> ' . $byline . '</span></a>'; // WPCS: XSS OK.

	}
endif;



/**
 * Post thumbnail
 */
function moire_post_thumbnail($head = false) {
	$post_format = get_post_format();

	$class = '';

	if ( $head ) {
		$class = 'head_thumbnail';
	}

	if ( has_post_thumbnail() ) {
		echo '<div class="post-thumbnail-wrap ' . $class . '">';
		the_post_thumbnail();
		echo '</div>';
	} else {
		$post_image_link           = moire_catch_that_image();
		$zillah_image_as_thumbnail = get_theme_mod( 'zillah_image_as_thumbnail', false );
		if ( $post_image_link && $zillah_image_as_thumbnail ) {
			echo '<div class="post-thumbnail-wrap">';
			echo '<img width="1170" height="545" src="' . esc_attr( $post_image_link ) . '" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="' . esc_attr( get_the_title() ) . '">';
			echo '</div>';
		}
	}
}

/**
 * 抜粋文章の末尾変更 & 続きを読む
 */
function moire_excerpt_more() {
	/* translators: s: The post title */
	return '...<span class="clearfix"></span><a href="' . esc_url( get_permalink( get_the_ID() ) ) . '" class="more-link">' . sprintf( '続きを読む %s', the_title( '<span class="screen-reader-text">"', '"</span>', false ) . ' <span class="meta-nav">&rarr;</span>' ) . '</a>';
}

//read more link
function moire_read_more_link() {
	/* translators: s: The post title */
	return '<a href="' . esc_url( get_permalink( get_the_ID() ) ) . '" class="more-link">' . sprintf( '続きを読む %s', the_title( '<span class="screen-reader-text">"', '"</span>', false ) . ' <span class="meta-nav">&rarr;</span>' ) . '</a>';
}

add_filter( 'excerpt_more', 'moire_excerpt_more' );

add_filter( 'the_content_more_link', 'moire_read_more_link' );

/**
 * パンくず
 */
function breadcrumb(){
 if (is_front_page()) { return; };
 global $post;
 $str = '';
 $pNum = 2;
 $str.= '<div class="breadcrumb clear">';
 $str.= '<ul>';
 $str.= '<li ><a href="'.home_url('/').'" class="home">HOME</a></li>';

 /* 通常の投稿ページ  */
 if(is_singular('post')){
   $categories = get_the_category($post->ID);
   $cat = $categories[0];

   if($cat->parent != 0){
     $ancestors = array_reverse(get_ancestors($cat->cat_ID, 'category'));
     foreach($ancestors as $ancestor){
       $str.= '<li><i class="fa fa-angle-right"></i><a href="'. get_category_link($ancestor).'"><span>'.get_cat_name($ancestor).'</span></a></li>';
     }
   }
   $str.= '<li><i class="fa fa-angle-right"></i><a href="'. get_category_link($cat-> term_id). '"><span>'.$cat->cat_name.'</span></a></li>';
 }

 /* 固定ページ */
 elseif(is_page()){
   $pNum = 2;
   if($post->post_parent != 0 ){
     $ancestors = array_reverse(get_post_ancestors($post->ID));
     foreach($ancestors as $ancestor){
       $str.= '<li><i class="fa fa-angle-right"></i><a href="'. get_permalink($ancestor).'"><span>'.get_the_title($ancestor).'</span></a></li>';
     }
   }
   $str.= '<li><i class="fa fa-angle-right"></i><span>'. $post->post_title.'</span></li>';
 }

 /* カテゴリページ */
 elseif(is_category()) {
   $cat = get_queried_object();
   $pNum = 2;
   if($cat->parent != 0){
     $ancestors = array_reverse(get_ancestors($cat->cat_ID, 'category'));
     foreach($ancestors as $ancestor){
       $str.= '<li><i class="fa fa-angle-right"></i><a href="'. get_category_link($ancestor) .'"><span>'.get_cat_name($ancestor).'</span></a></li>';
     }
   }
   $str.= '<li><i class="fa fa-angle-right"></i><span>'.$cat->name.'</span></li>';
 }

 /* タグページ */
 elseif(is_tag()){
   $str.= '<li><i class="fa fa-angle-right"></i><span>'. single_tag_title('', false). '</span></li>';
 }

 /* 投稿者ページ */
 elseif(is_author()){
   $str.= '<li><i class="fa fa-angle-right"></i><span>投稿者 : '.get_the_author_meta('display_name', get_query_var('author')).'</span></li>';
 }

 /* 404 Not Found ページ */
 elseif(is_404()){
   $str.= '<li><i class="fa fa-angle-right"></i><span>お探しの記事は見つかりませんでした。</span></li>';
 }

 /* その他のページ */
 else{
   $str.= '<li><span>'.wp_title('', false).'</span></li>';
 }
 $str.= '</ul>';
 $str.= '</div>';

 echo $str;
}
