
/*========== スクロールスパイの確認	 ==========*/
// $(window).on('activate.bs.scrollspy', function (e,obj) {
//   console.log(obj.relatedTarget);
// });

/*========== NAVBAR TRANSPARENT TO SOLID ==========*/
/* ---------------------------------------------------------
 トップ画面でナビメニューを透過。スクロールすると表示
---------------------------------------------------------- */
$(function() { //when document(DOM) loads completely.
        // Transition effect for navbar
        $(window).scroll(function() { //function is called while you scrolls
          // checks if window is scrolled more than 300px, adds/removes solid class
          if($(this).scrollTop() > 300) {
              $('.navbar').addClass('solid'); //add class 'solid' in any element which has class 'navbar'
          } else {
              $('.navbar').removeClass('solid'); //remove class 'solid' in any element which has class 'navbar'
          }
        });
});

/* ==== スムーズスクロール部分の記述 ===== */
/* --------------------------------------------
メニューをクリックした時、画面をスクロールしながら移動
-------------------------------------------- */
$(function(){
   // #で始まるアンカーをクリックした場合に処理
   $('a[href^="#"]').click(function() {
      // スクロールの速度
      var speed = 500; // ミリ秒
      // アンカーの値取得
      var href= $(this).attr("href");
      // 移動先を取得
      var target = $(href == "#" || href == "" ? 'html' : href);
      // 移動先を数値で取得
      var position = target.offset().top;
      // スムーススクロール
      $('body,html').animate({scrollTop:position}, speed, 'swing');
      return false;
   });
});

/*========== CLOSE MOBILE NAV ON CLICK ==========*/
/* ---------------------------------------------------------
 ハンバガーメニューでメニュー部分以外をクリックした時、メニューを閉じる
---------------------------------------------------------- */
$(function () { //when document loads completely.
    $(document).click(function (event) { //click anywhere
        var clickover = $(event.target); //get the target element where you clicked
        var _opened = $(".navbar-collapse").hasClass("show"); //check if element with 'navbar-collapse' class has a class called show. Returns true and false.
        if (_opened === true && !clickover.hasClass("navbar-toggler")) { // if _opened is true and clickover(element we clicked) doesn't have 'navbar-toggler' class
            $(".navbar-toggler").click(); //toggle the navbar; close the navbar menu in mobile.
        }
    });
});

/* ---------------------------------------------------------
 ハンバガーメニューでメニュー部分をクリックした時、メニューを閉じる
---------------------------------------------------------- */
$(document).ready(function () {
$(".navbar-nav li a").click(function(event) {
$(".navbar-collapse").collapse('hide');
});
});


/* ---------------------------------------------------------
 ハンバガーメニューをクリックした時、背景を黒くする
---------------------------------------------------------- */
$(function () {
  $('button.navbar-toggler').click(function(){
  var show = $('#navbarResponsive').hasClass('show');
  if (!show){
    // showクラスがある時
    $('nav').addClass('solid-t');
  } else {
    // showクラスがない時
    $('nav').removeClass('solid-t');
  }
  });
});


/*========== BOUNCING DOWN ARROW ==========*/
/* ---------------------------------------------------------
 					矢印のアニメーション
---------------------------------------------------------- */
//down arrow at top
$(function(){
$(window).scroll(function(){ //browser scroll
    $(".arrow").css("opacity", 1 - $(window).scrollTop() / 250); //set opacity css from 1 to -(negative) infinity of element with class 'arrow'
  //250 is fade pixels
  });
});

/* ==== スライドショー機能(vegas)部分の記述 ===== */
$(function(){
  var imgPass = 'http://localhost/My-Portfolio-wp/wp-content/themes/mytheme/';

  $('.home-inner').vegas({ //背景画像でスライドショーしたい場所の設定
    slides: [
     { src: imgPass + 'img/vegas/thai1.jpg' }, //スライドする画像を配列で設定
     { src: imgPass + 'img/vegas/thai2.jpg' },
     { src: imgPass + 'img/vegas/thai3.jpg' },
     { src: imgPass + 'img/vegas/thai4.jpg' }
    ],
     delay: 5000, //スライドまでの時間ををミリ秒単位で設定
     timer: true, //タイマーバーの表示/非表示を切り替え
     overlay: imgPass + 'img/overlays/07.png', //オーバーレイする画像の設定
     animation: 'random', //スライドのアニメーションを設定
     transition: 'blur', //スライド間のエフェクトを設定
     transitionDuration: 1000 //エフェクト時間をミリ秒単位で設定
  });
});

/*========== TOP SCROLL BUTTON ==========*/
/* ---------------------------------------------------------
 トップへ戻る
---------------------------------------------------------- */
$(function() { //when document is ready
  $(window).scroll(function() { //when webpage is scrolled
    if ($(this).scrollTop() > 500) { //if scroll from top is more than 500
      $('.top-scroll').fadeIn(); //display element with class 'top-scroll'; opacity increases
    } else { //if not
      $('.top-scroll').fadeOut(); //hide element with class 'top-scroll'; opacity decreases
    }
  });
});

/* ==== カルーセル機能(swiper)部分の記述 ===== */
var swiper = new Swiper ('.swiper-container', {
  // オプションパラメータ(一部のみ抜粋)
  loop: true, // 最後のスライドまで到達した場合、最初に戻らずに続けてスライド可能にするか。
  speed: 600, // スライドが切り替わるトランジション時間(ミリ秒)。
  slidesPerView: 2, // 何枚のスライドを表示するか
  spaceBetween: 0, // スライド間の余白サイズ(ピクセル)
  direction: 'horizontal', // スライド方向。 'horizontal'(水平) か 'vertical'(垂直)。effectオプションが 'slide' 以外は無効。
  effect: 'slide', // "slide", "fade"(フェード), "cube"(キューブ回転), "coverflow"(カバーフロー) または "flip"(平面回転)
  // スライダーの自動再生
  // autoplay: true 　のみなら既定値での自動再生
  autoplay: {
    delay: 3000, // スライドが切り替わるまでの表示時間(ミリ秒)
    stopOnLast: false, // 最後のスライドまで表示されたら自動再生を中止するか
    disableOnInteraction: false // ユーザーのスワイプ操作を検出したら自動再生を中止するか
  },
  // レスポンシブ化条件
  breakpoints: {
    // 980ピクセル幅以下になったら
    // 980: {
    //   slidesPerView: 3,
    //   spaceBetween: 30
    // },
    // 576ピクセル幅以下になったら
    768: {
      slidesPerView: 1,
      // spaceBetween: 20
    }
  },
  // ページネーションを表示する場合
  pagination: {
    el: '.swiper-pagination', // ページネーションを表示するセレクタ
    type: 'bullets', // 'bullets' 'fraction' 'progressbar' から選べる
    clickable: true,
  },
  // 前後スライドへのナビゲーションを表示する場合
  navigation: {
    nextEl: '.swiper-button-next', // 次のスライドボタンのセレクタ
    prevEl: '.swiper-button-prev', // 前のスライドボタンのセレクタ
    // background-imgで画像変更OK
  },
  // スクロールバーを表示する場合
  scrollbar: {
    el: '.swiper-scrollbar', // スクロールバーを表示するセレクタ
  }
});


/*========== MODAL WINDOW ==========*/
/* ---------------------------------------------------------
 モーダルウィンドウ
---------------------------------------------------------- */
$(function(){

  $('a.modal-w').click(function() {
    $('#glayLayer, .close-m').fadeIn();
    $('#overLayer')
      .fadeIn()
      .html(
        "<img src='" + $(this).attr("href") + "'>" )
      .addClass('zoom-in');
    $('body').css('overflow', 'hidden');
    $('.swiper-custom-parent').css('visibility', 'hidden');
    return false;
  });

  $('#glayLayer, .close-m').click(function(){
    $('#glayLayer, .close-m').fadeOut();
    $('#overLayer').fadeOut();
    $('body').css('overflow', 'auto');
    $('.swiper-custom-parent').css('visibility', 'visible');
    if ($('#overLayer').hasClass('zoom-out')){$('#overLayer').removeClass('zoom-out')}
    return false;
  });

  // 画像の拡大・縮小
$('#overLayer').on('click', function() {
  var zoom = $('#overLayer').hasClass('zoom-out');
    if (!zoom) {
      // モーダルを拡大
      $(this)
      .addClass('zoom-out').removeClass('zoom-in')
      ;
      $('.close-m').css('top', '95%');
    } else {
      // もとに戻す
      $(this)
      .removeClass('zoom-out').addClass('zoom-in')
      ;
      $('.close-m').css('top', '80%');
    }
});
});









/*========== Fade in letter by letter ==========*/
/* ---------------------------------------------------------
 一文字ずつ表示する
---------------------------------------------------------- */
// $(function() {
// 			var $allMsg = $('要素');
// 			var $wordList = $('要素').html().split("");
// 			$('要素').html("");
// 			$.each($wordList, function(idx, elem) {
// 				var newEL = $("<span/>").text(elem).css({ opacity: 0 });
// 				newEL.appendTo($allMsg);
// 				newEL.delay(idx * 70);
// 				newEL.animate({ opacity: 1 }, 1100);
// 			});
// });
// https://qiita.com/Simmon/items/7ff63e61646888c8dcf3