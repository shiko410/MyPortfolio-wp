<?php
/**
 * My Portfolio WordPress Theme
 * @author: shiko
 * @link: https://shiko-tamai.com
 * @license: http://www.gnu.org/licenses/gpl-2.0.html GPL v2 or later
 */
if ( !defined( 'ABSPATH' ) ) exit;
?>
<header id="header">
	<!-- Start Home Section -->
	<div id="home">

		<!-- ナビゲーション -->
		<?php
	//ユーザーカスタマイズ用(headerに挿入したいものがあれば以下に記述)
		get_template_part('tmp/header-navi');
		?>
		<!-- // ナビゲーション -->

		<!-- Start Hero Image Section -->
		<div class="hero-img">
			<div class="home-wrap">
				<div class="home-inner">
					<!-- ここで背景を設定する -->
				</div>
			</div>
		</div>
		<div class="row full-cover"></div><!-- 半透明・グレーフィルター -->
		<div class="caption text-center" data-aos="zoom-in-up" data-aos-duration="2000">
			<h1>Hello, I'm Shiko</h1>
			<h3> - web engineer - </h3>
		</div>
		<!-- End Landing Page Section -->
		<!--- Bouncing Down Arrow -->
		<a class="down-arrow" href="#message">
			<div class="arrow bounce d-none d-md-block">
				<i class="fas fa-angle-down" aria-hidden="true"></i>
			</div>
		</a>
	</div><!-- / #home -->
	<!-- End Home Section -->
</header>