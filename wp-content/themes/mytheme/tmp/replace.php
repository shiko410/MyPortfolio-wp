<?php
$fileName = 'page-toppage.php';
$arrayReplace = array(
'img/' => '<?php echo(get_theme_file_uri()); ?>/img'
);
$buff = file_get_contents($fileName); // ファイルの取得
$buff = strtr($buff, $arrayReplace); // 書き換え
echo $buff;