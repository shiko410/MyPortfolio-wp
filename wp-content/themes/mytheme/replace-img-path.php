<?php
/*
$fileName = 'test.php';

$arrayReplace = array(
'testname.html' => 'testname_amp.html'
,'className' => 'className_amp'
);

$buff = file_get_contents($fileName);
$buff = strtr($buff, $arrayReplace);
file_put_contents($fileName, $buff);
*/

$fileName = plugin_dir_path( __FILE__ ) . 'page-toppage.php';
$arrayReplace = array(
 '"img/' => '"<?php echo(get_theme_file_uri()); ?>/img/'
 /*
 '"<?php echo(get_theme_file_uri()); ?>/img/' =>'"img/'
 */
);
$buff1 = file_get_contents($fileName); // ファイルの取得
$buff = strtr($buff1, $arrayReplace); // 書き換え
file_put_contents($fileName, $buff); // ファイルへ出力
//http://localhost/My-Portfolio-wp/img/id-photo-2.jpg

/*
<?php
// str_replace( $検索文字列 , $置換後文字列 , $検索対象文字列 [, int $count ] )
$fileName = 'page-toppage.php';
$search_str = 'img/';
$replace_str = '<?php echo(get_theme_file_uri()); ?>/img'
str_replace()
 ?>
 */