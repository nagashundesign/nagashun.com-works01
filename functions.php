<?php

//------------------------------------------
// CSS、JS読み込み
//------------------------------------------
function my_scripts()
{
	// CSS読み込み
	wp_enqueue_style('css-destyle', get_template_directory_uri() . '/assets/css/lib/destyle.min.css', array(), '1.0.0', 'all');
	wp_enqueue_style('css-common', get_template_directory_uri() . '/assets/css/common.css', array(), '1.0.0', 'all');

	// js読み込み
	wp_enqueue_script('js-jquery', get_template_directory_uri() . '/assets/js/lib/jquery-3.6.1.min.js', array(), true);
	wp_enqueue_script('js-common', get_template_directory_uri() . '/assets/js/common.js', array(), true);
	wp_enqueue_script('js-smooth-scroll', 'https://cdn.jsdelivr.net/gh/cferdinandi/smooth-scroll@15.0.0/dist/smooth-scroll.polyfills.min.js', array(), '15.0.0');

	if (is_front_page()) {
		wp_enqueue_style('css-top', get_template_directory_uri() . '/assets/css/page/top.css', array(), '1.0.0', 'all');
	}
	if (is_page("about")) {
		wp_enqueue_style('css-about', get_template_directory_uri() . '/assets/css/page/about.css', array(), '1.0.0', 'all');
	}
	if (is_page("contact") || is_page("thanks")) {
		wp_enqueue_style('css-contact', get_template_directory_uri() . '/assets/css/page/contact.css', array(), '1.0.0', 'all');
		wp_enqueue_script('js-contact', get_template_directory_uri() . '/assets/js/contact.js', array(), true);
	}
	if (is_front_page() || is_post_type_archive() || is_singular() || is_tax()) {
		wp_enqueue_style('css-article-parts', get_template_directory_uri() . '/assets/css/page/article_parts.css', array(), '1.0.0', 'all');
	}
	if (is_post_type_archive("topics") || is_singular("topics") || is_tax("topics-cat")) {
		wp_enqueue_style('css-topics', get_template_directory_uri() . '/assets/css/page/topics.css', array(), '1.0.0', 'all');
	}
	if (is_post_type_archive("works") || is_singular("works") || is_tax('works-cat')) {
		wp_enqueue_style('css-works', get_template_directory_uri() . '/assets/css/page/works.css', array(), '1.0.0', 'all');
	}
}
add_action('wp_enqueue_scripts', 'my_scripts');

//------------------------------------------
// 管理画面のメニュー『投稿』を非表示
//------------------------------------------
function remove_menus()
{
	global $menu;
	remove_menu_page('edit.php');
}
add_action('admin_menu', 'remove_menus');

//------------------------------------------
// スラッグを記事IDにする
//------------------------------------------
function slug_auto_setting($slug, $post_ID, $post_status, $post_type)
{
	$post = get_post($post_ID);

	// 初回の記事保存時にのみ、記事のスラッグを記事IDに設定
	if ($post_type == 'topics' || $post_type == 'works') {
		$slug = $post_ID;
		return $slug;
	}

	return $slug;
}
add_filter('wp_unique_post_slug', 'slug_auto_setting', 10, 4);

//------------------------------------------
// オプションページ（Smart Custom Fields）
//------------------------------------------
/**
 * @param string $page_title ページのtitle属性値
 * @param string $menu_title 管理画面のメニューに表示するタイトル
 * @param string $capability メニューを操作できる権限（manage_options とか）
 * @param string $menu_slug オプションページのスラッグ。ユニークな値にすること。
 * @param string|null $icon_url メニューに表示するアイコンの URL
 * @param int $position メニューの位置
 */
SCF::add_options_page('基本情報', '基本情報', 'manage_options', 'theme-options', 'dashicons-building', 1);

//------------------------------------------
// Contact Form 7 のラジオボタンを選択必須にする
//------------------------------------------
add_action('wpcf7_init', 'wpcf7_add_form_tag_radio_required');

function wpcf7_add_form_tag_radio_required()
{
	wpcf7_add_form_tag(
		array('radio*'),
		'wpcf7_checkbox_shortcode_handler',
		true
	);
}

add_filter('wpcf7_validate_radio*', 'wpcf7_checkbox_validation_filter', 10, 2);

//------------------------------------------
// Contact Form 7にショートコードを追加
//------------------------------------------
//社名
function customize_fc7_company_name()
{
	return SCF::get_option_meta('theme-options', 'company-name');
}
if (function_exists('wpcf7_add_form_tag')) {
	wpcf7_add_form_tag('company_name', 'customize_fc7_company_name', true);
}

//電話番号
function customize_fc7_company_tel()
{
	return SCF::get_option_meta('theme-options', 'company-tel');
}
if (function_exists('wpcf7_add_form_tag')) {
	wpcf7_add_form_tag('company_tel', 'customize_fc7_company_tel', true);
}

//------------------------------------------
// RESET API対策
//------------------------------------------
function my_filter_rest_endpoints($endpoints)
{
	if (isset($endpoints['/wp/v2/users'])) {
		unset($endpoints['/wp/v2/users']);
	}
	if (isset($endpoints['/wp/v2/users/(?P[\d]+)'])) {
		unset($endpoints['/wp/v2/users/(?P[\d]+)']);
	}
	return $endpoints;
}
add_filter('rest_endpoints', 'my_filter_rest_endpoints', 10, 1);
