<?php
/**
 * My Portfolio WordPress Theme
 * @author: shiko
 * @link: https://shiko-tamai.com
 * @license: http://www.gnu.org/licenses/gpl-2.0.html GPL v2 or later
 */
if ( !defined( 'ABSPATH' ) ) exit;
?>
<?php get_header(); // header.phpの読み込み ?>

<div class="contents">
	<main role="main">
		<!-- Start Message Section -->
		<div id="message" class="offset">
			<div class="full-screen dark"><!-- Full Screen -->
				<div class="narrow">
					<div class="container">
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
							<div class="v-cnt d-flex align-items-center mx-auto" data-aos="fade-up" data-aos-duration="2000">
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
						<div class="container">
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
												<img src="<?php echo(get_theme_file_uri()); ?>/img/icon/jquery-logo.png" alt="jQuery">
											</div>
											<div class="skl-icon rounded-circle bg-white d-flex align-items-center mx-auto">
												<img src="<?php echo(get_theme_file_uri()); ?>/img/icon/laravel-color.svg" alt="laravel">
											</div>
											<div class="skl-icon rounded-circle bg-white d-flex align-items-center mx-auto">
												<img src="<?php echo(get_theme_file_uri()); ?>/img/icon/sass-color.svg" alt="sass">
											</div>
										</div>
										<div class="skl-icons col-12 col-md-6 d-flex mx-auto p-0">
											<div class="skl-icon rounded-circle bg-white d-flex align-items-center mx-auto">
												<img src="<?php echo(get_theme_file_uri()); ?>/img/icon/github-logo.png" alt="github">
											</div>
											<div class="skl-icon rounded-circle bg-white d-flex align-items-center mx-auto">
												<img src="<?php echo(get_theme_file_uri()); ?>/img/icon/adobe-illustrator-cs6.png" alt="illustrator">
											</div>
											<div class="skl-icon rounded-circle bg-white d-flex align-items-center mx-auto">
												<img src="<?php echo(get_theme_file_uri()); ?>/img/icon/adobe-photoshop-cs6.png" alt="photoshop">
											</div>
										</div>
									</div>
								</div>
								<div class="box" data-aos="fade-down" data-aos-duration="2000">
									<div class="box skls col-12 text-center">
										<p class="p-3 mb-0">
											HTML, CSS, JavaScript, PHP, WordPress jQuery, Laravel, Saas, MAMP, MySQL, Word, Excel, VBA, Power Point, Illustrator, Photoshop
										</p>
									</div>
									<div class="box other-skl b-offset col-12 pt-0">
										<p class="text-center mb-0">
											その他のスキル
										</p>
										<span class="d-block text-center">TOEIC 860, 日本語教師資格</span>
									</div>
								</div>
							</div><!-- // Row -->
						</div><!-- // .container -->
					</div><!-- // Narrow -->
					<div class="fixed-wrap">
						<div class="fixed"></div><!-- ここで背景を設定する -->
					</div>
				</div><!-- // Full Screen --><!-- positon:relativeで背景枠を作成 -->
			</div><!-- / #skill -->
			<!-- End Skill Section -->
			<!-- Start Service Section -->
			<div id="service" class="offset">
				<div class="full-screen"><!-- Full Screen -->
					<div class="narrow">
						<div class="container">
							<div class="row text-center" data-aos="fade-zoom-in" data-aos-easing="ease-in-back" data-aos-duration="700"  data-aos-offset="0">
								<!-- Heading -->
								<div class="col-12 pb-0">
									<h2 class="heading d-inline-block">service</h2>
									<div class="heading-underline"></div>
									<span>- サービス -</span>
								</div>
								<!-- // Heading -->
								<div class="box d-flex pt-md-5">
									<div class="row">
										<div class="col-md-6 col-lg-4 mx-auto" data-aos="fade-right" data-aos-duration="1000">
											<h3>ホームページ制作</h3>
											<div class="service p-3 p-md-5">
												<i class="fab fa-wordpress fa-6x"></i>
											</div>
											<p class="mb-0 pt-md-3 pb-md-3">
												企画から制作、運営サポートまで、お気軽にご相談ください。レスポンシブ化にも対応いたします。
											</p>
										</div>
										<div class="col-md-6 col-lg-4 mx-auto" data-aos="fade-up" data-aos-duration="1000">
											<h3>LP制作</h3>
											<div class="service p-3 p-md-5">
												<i class="fas fa-desktop fa-5x"></i>
											</div>
											<p class="mb-0 pt-md-3 pb-md-3">
												商品紹介、イベント予約、キャンペーンなど集客アップにつながるLP制作を承ります。
											</p>
										</div>
										<div class="col-md-6 mx-auto col-lg-4 b-offset" data-aos="fade-left" data-aos-duration="1000">
											<h3>コーポレートサイト</h3>
											<div class="service p-3 p-md-5">
												<i class="fas fa-code fa-5x"></i>
											</div>
											<p class="mb-0 pt-md-3 pb-md-3">
												会社のイメージを重視しながら会社概要やお知らせの掲載、所在地地図の設置などに対応します。
											</p>
										</div>
									</div>
								</div>
							</div><!-- // Row -->
						</div><!-- // .container -->
					</div><!-- // Narrow -->
				</div><!-- // Full Screen --><!-- positon:relativeで背景枠を作成 -->
			</div><!-- / #service -->
			<!-- End Service Section -->
			<!-- Start Portfolio Section -->
			<div id="portfolio" class="offset">
				<div class="full-screen dark"><!-- Full Screen -->
					<div class="narrow">
						<div class="container">
							<div class="row">
								<!-- Heading -->
								<div class="col-12 text-center" data-aos="fade-zoom-in" data-aos-easing="ease-in-back" data-aos-duration="700"  data-aos-offset="0">
									<h2 class="heading d-inline-block">portfolio</h2>
									<div class="heading-underline"></div>
									<span>- 制作物 -</span>
								</div>
								<div class="box col-12 d-flex">
									<div class="mx-auto">
										<?php // ▼ モーダルウィンドウ ?>
										<div class="swiper-container">
											<div class="swiper-wrapper">
												<a href="<?php echo(get_theme_file_uri()); ?>/img/portfolio-1-1.png" class="modal-w">
													<img src="<?php echo(get_theme_file_uri()); ?>/img/portfolio-1.png" class="swiper-slide" alt="portfolio1">
												</a>
												<a href="<?php echo(get_theme_file_uri()); ?>/img/portfolio-2-1.png" class="modal-w">
													<img src="<?php echo(get_theme_file_uri()); ?>/img/portfolio-2.png" class="swiper-slide" alt="portfolio2">
												</a>
											</div>
											<div id="glayLayer"></div>
											<div id="overLayer"></div>
											<div class="close-m">閉じる</div>
											<div class="swiper-pagination"></div>
											<div class="swiper-button-prev"></div>
											<div class="swiper-button-next"></div>
										</div>
										<?php // ▲ モーダルウィンドウ ?>

									</div>
								</div>
							</div><!-- // Row -->
						</div><!-- // .container -->
					</div><!-- // Narrow -->
					<div class="fixed-wrap">
						<div class="fixed"></div><!-- ここで背景を設定する -->
					</div>
				</div><!-- // Full Screen --><!-- positon:relativeで背景枠を作成 -->
			</div><!-- / #portfolio -->
			<!-- End Portfolio Section -->
			<!-- Start Contact Section -->
			<div id="contact" class="offset">
				<div class="full-screen dark"><!-- Full Screen -->
					<div class="narrow">
						<div class="container">
							<div class="row">
								<!-- Heading -->
								<div class="col-12 text-center" data-aos="fade-zoom-in" data-aos-easing="ease-in-back" data-aos-duration="700"  data-aos-offset="0">
									<h2 class="heading d-inline-block">contact</h2>
									<div class="heading-underline"></div>
									<span>- お問い合わせ -</span>
								</div>
								<!-- Contact Form -->
								<div class="d-flex col-12 col-lg-6 order-lg-2 pb-0 pt-lg-5">
									<div class="info mx-auto">
										<?php echo do_shortcode( '[contact-form-7 id="8" title="footer contact form"]' ); ?>
									</div>
								</div>
								<!-- // Contact Form -->
								<!-- info -->
								<div class="info d-flex col-12 col-lg-6 order-lg-1 pt-lg-5">
									<div class="box mx-auto">
										<dl>
											<dt class="text-center pt-0 pb-3 p-md-4 pt-lg-1">連絡先</dt>
											<dd>Name: Shiko Tamai</dd>
											<dd>
												Address:<br>
												25/210 soi.29 Buakhao Village<br>
												Ranmkhamheang Rd, Minburi,<br>
												Bangkok, 10510, Thailand
											</dd>
											<dd>Tel: 050-6872-4557</dd>
											<dd><span class="sm">※国番号不要です。(日本国内から発信の場合)</span></dd>
											<dd>mail: shiko.tamai@outlook.com</dd>
										</dl>
										<div class="sns-share col-12 text-center">
											<a href="https://www.facebook.com/shiko.tamai.1" target="_blank"><i class="fab fa-facebook-square"></i></a>
											<a href="https://twitter.com/ShikouTamai" target="_blank"><i class="fab fa-twitter-square"></i></a>
											<a href="https://www.instagram.com/shiko.tamai/" target="_blank"><i class="fab fa-instagram"></i></a>
										</div>
									</div>
								</div>
								<!-- // info -->
							</div><!-- // Row -->
						</div><!-- // .container -->
					</div><!-- // Narrow -->
				</div><!-- // Full Screen --><!-- positon:relativeで背景枠を作成 -->
			</div><!-- / #contact -->
			<!-- End Contact Section -->
		</main><!-- // main -->
	</div>

	<?php get_footer(); // footer.phpの読み込み ?>