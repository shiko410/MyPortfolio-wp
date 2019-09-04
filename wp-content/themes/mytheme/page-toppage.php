<?php
/**
 * My Portfolio WordPress Theme
 * @author: shiko
 * @link: https://shiko-tamai.com
 * @license: http://www.gnu.org/licenses/gpl-2.0.html GPL v2 or later
 */
if ( !defined( 'ABSPATH' ) ) exit;
define("PUBLIC_DIR", dirname(__FILE__). "../");
?>

<?php get_header(); // header.phpの読み込み ?>

<div class="contents">
	<main role="main">
		<!-- Start Message Section -->
		<div id="message" class="offset">
			<div class="full-screen dark"><!-- Full Screen -->
				<div class="narrow">
					<div class="container pb-md-5">
						<div class="row">
							<!-- Heading -->
							<div class="col-12 text-center" data-aos="fade-zoom-in" data-aos-easing="ease-in-back" data-aos-duration="700"  data-aos-offset="0">
								<h2 class="heading d-inline-block">message</h2>
								<div class="heading-underline"></div>
								<span>- メッセージ -</span>
							</div>
							<!-- // Heading -->
							<!--  Article -->
							<!---Start Animation -->
							<div class="align-items-center mx-auto" data-aos="fade-up" data-aos-duration="2000">
								<!-- <h3 class="col-12 text-center"> -->
									<!-- Webフリーランスへの挑戦 -->
									<!-- </h3> -->
									<div class="message col-12 mx-auto b-offset">
										<article>
											<p>はじめまして、玉井志昂と申します。</p>
											<p>地方公務員を4年で辞め、タイへ移住し、フリーランスとして活動しています。</p>
											<p>コーディング、ホームページ制作、ECサイトなど、Web制作に関わるサポートが可能です。</p>
											<p>公務員時代は事務業務を一通り経験し、市の主催するイベントの企画運営に携わりました。</p>
											<p>丁寧に、根気強く対応できることが長所と考えており、クライアント様、そしてホームページに訪れるユーザー様にご満足いただけるサービスを一緒に作り上げようと心がけております。</p>
											<p>Web制作に関して、質問、ご要望などございましたら、お気軽にお問い合わせください。</p>
											<p>どうぞよろしくお願いいたします。</p>
										</article>
									</div>
								</div>
								<!---End Animation -->
								<!--  // Article -->
							</div><!-- // Row -->
						</div><!-- // .container -->
					</div><!-- // Narrow -->
					<div class="fixed-wrap">
						<div class="fixed"></div><!-- ここで背景を設定する -->
					</div>
				</div><!-- // Full Screen --><!-- positon:relativeで背景枠を作成 -->
			</div><!-- / #message -->
			<!-- End Message Section -->
			<!-- Start About Section -->
			<div id="about" class="offset">
				<div class="full-screen"><!-- Full Screen -->
					<div class="narrow"><!-- Narrow -->
						<div class="container">
							<div class="row text-center">
								<!-- Heading -->
								<div class="col-12 text-center" data-aos="fade-zoom-in" data-aos-easing="ease-in-back" data-aos-duration="700"  data-aos-offset="0">
									<h2 class="heading d-inline-block">about</h2>
									<div class="heading-underline"></div>
									<span>- 自己紹介 -</span>
								</div>
								<!-- // Heading -->

								<!--  Article -->
								<div class="my-photo col-md-12 col-lg-6" data-aos="fade-up-right" data-aos-duration="1500">
									<!-- Photo -->
									<img src="<?php echo(get_theme_file_uri()); ?>/img/id-photo-2.jpg" alt="プロフィール写真" class="rounded-circle">
									<!-- // Photo -->
									<h3 class="my-name">shiko tamai</h3>
									<article class="text-left">
										<p>1992年生まれ。兵庫県出身。タイ在住。</p>
										<p>
											インドへ行ったときのカルチャーショックから世界の広さを知り、学生時代に海外を放浪。公務員に就職するも、海外への憧れが止まらず、海外移住。
										</p>
										<p>
											HP制作（Web制作、プログラミングをはじめ、英会話や留学、タイ生活などなんでもお気軽にお問い合わせください。
										</p>
									</article>
								</div>
								<!-- // Article -->
								<!-- Table -->
								<div class="col-md-12 col-lg-6 d-flex align-items-center" data-aos="fade-up-left" data-aos-duration="1500" style="overflow: hidden;">
									<!-- // エラー -->
									<!-- data-aos="fade-up-left" data-aos-duration="1500"　style="overflow: hidden;" -->
									<table class="table table-bordered mx-auto bg-white">
										<tbody>
											<tr>
												<th scope="row">
													趣味
												</th>
												<td class="text-left">
													プログラミング、異文化交流、英会話
												</td>
											</tr>
											<tr>
												<th scope="row">
													経歴
												</th>
												<td>
													17歳でインド、ネパール旅行<br>
													↓<br>
													神戸国際大学<br>
													<span class="sm">
														アメリカ留学<br>
														他、フィリピン、カナダ、タイを放浪<br>
													</span>
													↓<br>
													兵庫県地方公務員<br>
													↓<br>
													タイ移住・Webエンジニア<br>
												</td>
											</tr>
											<tr>
												<th scope="row">
													好きなこと
												</th>
												<td class="text-left">
													新しいことに挑戦すること、パソコンに触れていること
												</td>
											</tr>
										</tbody>
									</table>
								</div>
								<!-- // Table -->
								<div class="col-12 b-offset" data-aos="fade-zoom-in" data-aos-duration="1000">
									<a href="#contact" class="btn btn-outline-dark btn-lg">お問い合わせ</a>
								</div>
							</div><!-- // Row -->
						</div><!-- // .container -->
					</div><!-- // Narrow -->
				</div><!-- // Full Screen -->
			</div><!-- / #about -->
			<!-- End About Section -->
			<!-- Start Skill Section -->
			<div id="skill" class="offset">
				<div class="full-screen dark"><!-- Full Screen -->
					<div class="narrow">
						<div class="container pb-md-5">
							<div class="row">
								<!-- Heading -->
								<div class="col-12 text-center" data-aos="fade-zoom-in" data-aos-easing="ease-in-back" data-aos-duration="700"  data-aos-offset="0">
									<h2 class="heading d-inline-block">skill</h2>
									<div class="heading-underline"></div>
									<span>- スキル -</span>
								</div>
								<!-- icons -->
								<div class="box col-12 pt-0 pb-0 pt-md-3 pb-md-3" data-aos="fade-down" data-aos-duration="2000">
									<!-- 1段目 -->
									<div class="icons row p-0 p-md-3">
										<div class="skl-icons col-12 col-md-6 d-flex mx-auto p-0">
											<div class="skl-icon rounded-circle bg-white d-flex align-items-center mx-auto">
												<img src="<?php echo(get_theme_file_uri()); ?>/img/icon/html5-logo.png" alt="html5">
											</div>
											<div class="skl-icon rounded-circle bg-white d-flex align-items-center mx-auto">
												<img src="<?php echo(get_theme_file_uri()); ?>/img/icon/css3-logo.png" alt="css3">
											</div>
											<div class="skl-icon rounded-circle bg-white d-flex align-items-center mx-auto">
												<img src="<?php echo(get_theme_file_uri()); ?>/img/icon/js-logo.png" alt="JavaScript">
											</div>
										</div>
										<div class="skl-icons col-12 col-md-6 d-flex mx-auto p-0">
											<div class="skl-icon rounded-circle bg-white d-flex align-items-center mx-auto">
												<img src="<?php echo(get_theme_file_uri()); ?>/img/icon/php-color.svg" alt="php">
											</div>
											<div class="skl-icon rounded-circle bg-white d-flex align-items-center mx-auto">
												<img src="<?php echo(get_theme_file_uri()); ?>/img/icon/MySQL-logo.png" alt="MySQL">
											</div>
											<div class="skl-icon rounded-circle bg-white d-flex align-items-center mx-auto">
												<img src="<?php echo(get_theme_file_uri()); ?>/img/icon/wordpress-logo.png" alt="WordPress">
											</div>
										</div>
									</div>
									<!-- 2段目 -->
									<div class="icons row p-0 p-md-3">
										<div class="skl-icons col-12 col-md-6 d-flex mx-auto p-0">
											<div class="skl-icon rounded-circle bg-white d-flex align-items-center mx-auto">
												<im