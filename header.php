<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<?php if (is_front_page()) : ?>

	<head prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# website: http://ogp.me/ns/website#">
	<?php else : ?>

		<head prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# article: http://ogp.me/ns/article#">
		<?php endif; ?>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width,initial-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="format-detection" content="telephone=no">

		<title><?php the_title(); ?></title>
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500;700;800&family=Noto+Sans+JP:wght@400;500;700&display=swap" rel="stylesheet">
		<?php wp_head(); ?>
		</head>

	<body>
		<div id="page-top" class="wrapper">
			<header>
				<div class="l-inner">
					<div class="l-header__body">
						<?php if (is_front_page()) : ?>
							<a href="<?php echo esc_url(home_url('/')); ?>" class="l-header__logo">
								<h1>
									<picture>
										<source media="(min-width: 1440px)" src="<?php echo get_template_directory_uri(); ?>/assets/img/common/logo.svg" width="260" height="28">
										<source media="(min-width: 768px)" src="<?php echo get_template_directory_uri(); ?>/assets/img/common/logo.svg" width="189" height="21">
										<img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/assets/img/common/logo.svg" alt="DIGSMILE INC." width="189" height="21">
									</picture>
								</h1>
							</a>
						<?php else : ?>
							<a href="<?php echo esc_url(home_url('/')); ?>" class="l-header__logo">
								<div>
									<picture>
										<source media="(min-width: 1440px)" src="<?php echo get_template_directory_uri(); ?>/assets/img/common/logo.svg" width="260" height="28">
										<source media="(min-width: 768px)" src="<?php echo get_template_directory_uri(); ?>/assets/img/common/logo.svg" width="189" height="21">
										<img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/assets/img/common/logo.svg" alt="DIGSMILE INC." width="189" height="21">
									</picture>
								</div>
							</a>
						<?php endif; ?>

						<div class="c-drawer-btn">
							<span></span>
							<span></span>
							<span></span>
							<p class="c-drawer-btn__txt">MENU</p>
						</div>
					</div><!-- /.l-header__body -->
				</div><!-- /.l-inner -->

				<nav class="c-drawer-menu">
					<div class="c-drawer-menu__body">
						<a href="<?php echo esc_url(home_url('/')); ?>" class="c-drawer-menu__logo">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/drawer_logo.svg" alt="<?php bloginfo('name'); ?>" width="42" height="45">
						</a>
						<ul class="c-drawer-menu__list">
							<li><a href="<?php echo esc_url(home_url('/about/')); ?>">ABOUT US</a></li>
							<li><a href="<?php echo esc_url(home_url('/works/')); ?>">WORKS</a></li>
							<li><a href="<?php echo esc_url(home_url('/culture/')); ?>">CULTURE(404page)</a></li>
							<li><a href="<?php echo esc_url(home_url('/topics/')); ?>">TOPICS</a></li>
							<li><a href="<?php echo esc_url(home_url('/contact/')); ?>">CONTACT</a></li>
						</ul>
					</div>
				</nav>
			</header>

			<main>