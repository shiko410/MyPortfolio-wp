<?php
/**
 * My Portfolio WordPress Theme
 * @author: shiko
 * @link: https://shiko-tamai.com
 * @license: http://www.gnu.org/licenses/gpl-2.0.html GPL v2 or later
 */
if ( !defined( 'ABSPATH' ) ) exit;
?>


<?php //ユーザーカスタマイズ用(footerの前に挿入したいものがあれば以下に記述)
get_template_part('tmp/footer-top-insert');
//ユーザーカスタマイズ用(footerに挿入したいものがあれば以下に記述)
get_template_part('tmp/footer-insert');
?>

<?php wp_footer(); ?>

<?php //フッターで読み込むJavaScript用テンプレート
  get_template_part('tmp/footer-javascript');
?>

</body>
</html>
