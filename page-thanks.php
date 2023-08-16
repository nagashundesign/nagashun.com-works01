<?php
$referer = $_SERVER['HTTP_REFERER']; //アクセス元ページをチェック（ユーザー側）
$url = "https://nagashun.com/works/works01/contact/"; //ここからのアクセスしか許可しない
if (!strstr($referer, $url)) {
	header("Location: https://nagashun.com/works/works01/contact/"); //アクセス元が$urlと違う場合に遷移させるページ
	exit;
}
?>

<?php
/*
Template Name: THANKS
*/
?>

<?php get_header(); ?>

<section class="l-lower-mv-area">
	<div class="l-lower-mv">
		<div class="l-lower-mv__title">
			<h1 class="l-lower-mv__title--en">CONTACT</h1>
			<p class="l-lower-mv__title--jp">お問い合わせ</p>
		</div>
	</div>

	<div class="l-lower-mv__title-bg"></div>
</section><!-- /.l-lower-mv-area -->

<div class="contact contact-thanks">
	<div class="l-inner">
		<p class="contact__intro">
			<strong>送信されました。</strong><br>
			お問い合わせいただきありがとうございます。<br>
			担当者が確認の上、3営業日以内にご返信させていただきます。
		</p>

		<div class="c-btn-base">
			<a href="<?php echo esc_url(home_url('/')); ?>">TOP</a>
		</div>
	</div><!-- /.l-inner -->
</div><!-- /.contact -->

<?php get_footer(); ?>