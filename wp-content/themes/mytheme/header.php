<?php
/**
 * My Portfolio WordPress Theme
 * @author: shiko
 * @link: https://shiko-tamai.com
 * @license: http://www.gnu.org/licenses/gpl-2.0.html GPL v2 or later
 */
if ( !defined( 'ABSPATH' ) ) exit;
?>
<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<?php // force Internet Explorer to use the latest rendering engine available ?>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<?php // mobile meta (hooray!) ?>
<meta name="HandheldFriendly" content="True">
<meta name="MobileOptimized" content="320">
<meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover"/>


<?php //ヘッドタグ内挿入用のユーザー用テンプレート
get_template_part('tmp/head-insert'); // ファビコン ?>

<title>
<?php wp_title( '|', true, 'right'); // 記事のタイトルやカテゴリ |?>
<?php bloginfo( 'name' ); // サイト名?>
</title>

<link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">

<?php wp_head(); ?>
</head>
<?php // ====== HEADはここまで BODY開始 ==========	?>

<body <?php body_class(); ?>>

<?php
//ユーザーカスタマイズ用(headerの前に挿入したいものがあれば以下に記述)
// get_template_part('tmp/body-top-insert');

//ユーザーカスタマイズ用(headerに挿入したいものがあれば以下に記述)
get_template_part('tmp/header-insert');
?>