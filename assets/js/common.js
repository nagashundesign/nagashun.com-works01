// ----------------------------------------------------
// スムーススクロール
// ----------------------------------------------------
//smooth-scroll.js
jQuery(document).ready(function () {
	var gnavHeight = jQuery('header').outerHeight(); //headerの高さを取得
	var scroll = new SmoothScroll('a[href*="#" ]', {
		selectorHeader: '[data-scroll-header]', //headerにつける
		speedAsDuration: true, //どのリンクでも同じスピードでスクロール
		offset: gnavHeight, //停止位置（＝headerの高さ）
		updateURL: true, //URLに[#]をつけない
		speed: 1000,
		easing: 'easeInOutQuint'
	});
});

// ----------------------------------------------------
// ドロワーメニュー
// ----------------------------------------------------
jQuery(document).ready(function () {
	//メニューの開閉
	jQuery('.c-drawer-btn').on('click', function() {
		jQuery('.c-drawer-btn').toggleClass('active');
		jQuery('.c-drawer-menu').toggleClass('open');
	});

	// 画面サイズが変わったらメニューを閉じる
	jQuery(window).on('resize', function() {
		jQuery('.c-drawer-btn').removeClass('active');
		jQuery('.c-drawer-menu').removeClass('open');
	});

	// ドロワーメニュー展開時は画面スクロール禁止
	var state = false;
	var pos;

	jQuery('.c-drawer-btn').on('click', function() {
		if (state === false) {
			pos = jQuery(window).scrollTop();
			jQuery('body').addClass('js-fixed').css({ top: -pos });
			state = true;
		} else {
			jQuery('body').removeClass('js-fixed').css({ top: 0 });
			window.scrollTo(0, pos);
			state = false;
		}
	});
});
