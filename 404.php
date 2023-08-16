<?php get_header(); ?>

<div class="notfound">
	<section class="l-lower-mv-area">
		<div class="l-lower-mv">
			<div class="l-lower-mv__title">
				<h1 class="l-lower-mv__title--en">404 <br class="u-sp-only">Not Found</h1>
				<p class="l-lower-mv__title--jp">ページが見つかりませんでした。</p>
			</div>
		</div>

		<div class="l-lower-mv__title-bg"></div>
	</section><!-- /.l-lower-mv-area -->

	<div class="l-inner">
		<p>
			お探しのページは削除されたか、URLが変更になった可能性がございます。<br>
			URLをお確かめの上、再度アクセスをお願いいたします。
		</p>

		<div class="c-btn-base">
			<a href="<?php echo esc_url(home_url('/')); ?>">TOP</a>
		</div>
	</div><!-- /.l-inner -->
</div><!-- /.notfound -->

<?php get_footer(); ?>