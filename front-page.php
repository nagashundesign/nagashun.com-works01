<?php get_header(); ?>

<section class="mv-area">
    <div class="mv">
        <div class="mv__catch">
            <p class="mv__catch--jp">
                デザインで人を笑顔にする会社<br>
                <span>DIGSMILE INC.</span>
            </p>
            <h2 class="mv__catch--en">
                DESIGN<br>
                FOR<br>
                SMILE.
            </h2>
        </div><!-- /.mv__catch -->
    </div>

    <div class="mv__catch-bg"></div>
</section><!-- /.mv-area -->

<section class="about">
    <div class="l-inner">
        <div class="about-content">
            <h2 class="c-sec__title">ABOUT US</h2>
            <p>
                DIGSMILEは、デザインで人を笑顔にする会社。<br>
                なんでもない日常に少しのワクワクと遊び心を提供します。笑顔には世界を変える力がある、デザインには人を幸せにする力がある。毎日に幸せを感じて生きていきたい。<br>
                DIGSMILEの社名にはそんな想いが込められています。
            </p>
            <div class="c-btn-base">
                <a href="<?php echo esc_url(home_url('/about/')); ?>">READ MORE</a>
            </div>
        </div><!-- /.about-content -->
    </div><!-- /.l-inner -->
</section><!-- /.about -->

<div class="sec-wrap">
    <div class="l-inner">
        <section class="sec-wrap-content">
            <h2 class="c-sec__title">WORKS</h2>
            <div class="sec-wrap__img">
                <picture>
                    <source media="(min-width: 768px)" src="<?php echo get_template_directory_uri(); ?>/assets/img/top/works.jpg" width="520" height="350">
                    <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/assets/img/top/works.jpg" alt="WORKS" width="345" height="232">
                </picture>
            </div>
            <p>
                DIGSMILEの制作実績を紹介します。
            </p>
            <div class="c-btn-base">
                <a href="<?php echo esc_url(home_url('/works/')); ?>">READ MORE</a>
            </div>
        </section><!-- /.sec-wrap-content -->

        <section class="sec-wrap-content">
            <h2 class="c-sec__title">CULTURE(404page)</h2>
            <div class="sec-wrap__img">
                <picture>
                    <source media="(min-width: 768px)" src="<?php echo get_template_directory_uri(); ?>/assets/img/top/culture.jpg" width="520" height="350">
                    <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/assets/img/top/culture.jpg" alt="CULTURE(404page)" width="345" height="232">
                </picture>
            </div>
            <p>
                ここはテストのため404ページが開きます。
            </p>
            <div class="c-btn-base">
                <a href="<?php echo esc_url(home_url('/culture/')); ?>">READ MORE</a>
            </div>
        </section><!-- /.sec-wrap-content -->
    </div><!-- /.l-inner -->
</div><!-- /.sec-wrap -->

<section class="topics">
    <div class="l-inner">
        <h2 class="c-sec__title">LATEST TOPICS</h2>

        <div class="topics-list">
            <?php get_template_part('parts/parts-topics'); ?>

            <div class="c-btn-base">
                <a href="<?php echo esc_url(home_url('/topics/')); ?>">READ MORE</a>
            </div>
        </div><!-- /.topics-list -->
    </div><!-- /.l-inner -->
</section><!-- /.topics -->

<?php get_footer(); ?>