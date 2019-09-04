<?php
/**
 * My Portfolio WordPress Theme
 * @author: shiko
 * @link: https://shiko-tamai.com
 * @license: http://www.gnu.org/licenses/gpl-2.0.html GPL v2 or later
 */
if ( !defined( 'ABSPATH' ) ) exit;

/*
	スタイルシートとJSフアイルの読み込み
	-----------------------------
*/
function add_my_files() {
	//スタイルシートの読み込み
	// CDN
	wp_enqueue_style('bootstrap_css',
		'https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css',
		array(),
		'4.3.1'
	);
	wp_enqueue_style('swiper_css',
		'https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.5.0/css/swiper.min.css',
		array(),
		'4.5.0'
	);
	// CSS files
	// wp_enqueue_style( $handle, $src, $deps, $ver, $media);
	wp_enqueue_style('vegas_css', get_template_directory_uri() . '/css/vegas.min.css');
	wp_enqueue_style('aos_css', get_template_directory_uri() . '/css/aos.css');
	wp_enqueue_style('main_css', get_template_directory_uri() . '/css/main.css');
	wp_enqueue_style('arrow_css', get_template_directory_uri() . '/css/arrow.css');

	//JavaScript の読み込み
	// CDN
	//WordPress 本体の jQuery を登録解除
	wp_deregister_script( 'jquery');
  	//jQuery を CDN から読み込む
	wp_enqueue_script( 'jquery',
		'https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js',
		array(),
		'3.4.1',
    	true //</body> 終了タグの前で読み込み
	);
	wp_enqueue_script( 'bootstrap_popper_js',
		'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js',
		array(),
		'1.14.7',
    	true //</body> 終了タグの前で読み込み
	);
	wp_enqueue_script( 'bootstrap_js',
		'https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js',
		array(),
		'4.3.1',
    	true //</body> 終了タグの前で読み込み
	);
	wp_enqueue_script( 'FontAwesome_js',
		'https://use.fontawesome.com/releases/v5.5.0/js/all.js',
		array(),
		'v5.5.0',
    	true //</body> 終了タグの前で読み込み
	);
	wp_enqueue_script( 'swiper_js',
		'https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.5.0/js/swiper.min.js',
		array(),
		'4.5.0',
    	true //</body> 終了タグの前で読み込み
	);
	// JavaScript files
	// wp_enqueue_script( $handle, $src, $deps, $ver, $in_footer );
	wp_enqueue_script('vegas_js',
		get_template_directory_uri() . '/js/vegas.min.js',
		array( 'jquery' ),
		'20190901',
		false
	);
  	//main.js の読み込み
	wp_enqueue_script('main_js',
		get_template_directory_uri() . '/js/main.js',
		array( 'jquery' ), //依存ファイルは上記の jquery
		'20190901',
    	true
	);
	wp_enqueue_script('aos_js',
		get_template_directory_uri() . '/js/aos.js',
		array(), //依存ファイルなし
		'20190901',
    	true
	);

}
//アクションフック（wp_enqueue_scripts）への登録
add_action('wp_enqueue_scripts', 'add_my_files');


/*
			画像パスの修正
	--------------------------------
 */
// 画像パスの省略	get_template_directory_uri()　get_stylesheet_directory_uri()
// function replaceImagePath($arg) {
//     $content = str_replace('"img/', '"' . get_stylesheet_directory_uri() . '/images/', $arg );
//         return $content;
// }
// add_action('the_content', 'replaceImagePath');

// function img_replace_filter($content){
// $content = str_replace('"img/', '"' . get_bloginfo('template_directory') . '/img/', $content);
// return $content;
// }
// add_filter('the_content','img_replace_filter');


//絶対パス→相対パス
function make_href_root_relative($input) {
    return preg_replace('!http(s)?://' . $_SERVER['SERVER_NAME'] . '/!', '/', $input);
}

//パーマリンク絶対パス→相対パス
function root_relative_permalinks($input) {
    return make_href_root_relative($input);
}
add_filter( 'the_permalink', 'root_relative_permalinks' );











