<?php

/*
Template Name: CONTACT
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

<div class="contact">
	<div class="l-inner">
		<p class="contact__intro">
			ご依頼やご相談についてのご質問やご要望がございましたら、下記フォームよりお気軽にお問い合わせください。<br>
			送付いただいた内容を確認の上、担当者からご連絡させていただきます。
		</p>

		<div class="form-wrap">
			<?php echo do_shortcode('[contact-form-7 id="6" title="CONTACT"]'); ?>
		</div><!-- /.form-wrap -->
	</div><!-- /.l-inner -->
</div><!-- /.contact -->

<?php get_footer(); ?>