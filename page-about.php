<?php

/*
Template Name: ABOUT US
*/

?>

<?php get_header(); ?>

<section class="l-lower-mv-area">
    <div class="l-lower-mv">
        <div class="l-lower-mv__title">
            <h1 class="l-lower-mv__title--en">ABOUT US</h1>
            <p class="l-lower-mv__title--jp">DIGSMILEについて</p>
        </div>
    </div>

    <div class="l-lower-mv__title-bg"></div>
</section><!-- /.l-lower-mv-area -->

<section class="vision">
    <div class="l-inner">
        <h2 class="c-sec__title">VISION</h2>
        <strong class="vision__head">デザインで人を笑顔にする会社</strong>

        <div class="vision-wrap">
            <p>私達のデザインで人が笑顔になる。</p>
            <p> そんなデザインを目指しています。</p>
            <p> 私達が考える人を笑顔にできるデザインとは、<br>
                デザインが課題を適切に解決ができているかどうか。</p>
            <p>ビジュアルだけではなく、<br>
                本当に求められているものは何かを考え抜いて、<br>
                デザインしていきたい。</p>
            <p> 誰かの幸せを創ることも、<br>
                世界の常識を変えていくことだってできる。</p>
            <p>私達はデザインの力を信じています。</p>
        </div><!-- /.vision-wrap -->
    </div><!-- /.l-inner -->
</section><!-- /.vision -->

<section class="message">
    <div class="l-inner">
        <div class="message-wrap">
            <div class="message__img">
                <picture>
                    <source media="(min-width: 1025px)" src="<?php echo get_template_directory_uri(); ?>/assets/img/about/message_ceo.jpg" width="420" height="283">
                    <source media="(min-width: 768px)" src="<?php echo get_template_directory_uri(); ?>/assets/img/about/message_ceo.jpg" width="320" height="216">
                    <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/assets/img/about/message_ceo_sp.jpg" alt="CEO" width="340" height="230">
                </picture>
            </div>

            <h2 class="c-sec__title">CEO MESSAGE</h2>
            <p>良いデザインは人を幸せにする。</p>
            <p>私達はそう信じています。</p>
            <p>デザインを通して、ビジネスの課題とユーザーの課題を解決することで、世の中を幸せにしていきたい。</p>
            <p>現在はあらゆるプロダクトがデジタル化されており、デザイナーに対する需要はますます高まっています。それとともに、期待される役割も幅広くなりつつあります。</p>
            <p>クリエイティブで社会の可能性を切り開いていく。</p>
            <p>変化の激しい現代、私達はデザインの力で社会を良い方向に変革していく企業を目指していきます。</p>
        </div><!-- /.message-wrap -->
    </div><!-- /.l-inner -->
</section><!-- /.message -->

<section class="company">
    <div class="l-inner">
        <h2 class="c-sec__title">COMPANY</h2>
        <p>会社情報はオプションページ＋カスタムフィールド（SCF）を使って管理画面から更新できるようになっています。</p>

        <div class="company-wrap">
            <div class="company-wrap-inner">
                <dl>
                    <dt>社名</dt>
                    <dd><?php echo SCF::get_option_meta('theme-options', 'company-name'); ?></dd>
                </dl>
                <dl>
                    <dt>代表取締役</dt>
                    <dd><?php echo SCF::get_option_meta('theme-options', 'company-ceo'); ?></dd>
                </dl>
                <dl>
                    <dt>設立</dt>
                    <dd><?php echo SCF::get_option_meta('theme-options', 'company-formation'); ?></dd>
                </dl>
                <dl>
                    <dt>資本金</dt>
                    <dd><?php echo SCF::get_option_meta('theme-options', 'company-capital'); ?></dd>
                </dl>
                <dl>
                    <dt>所在地</dt>
                    <dd><?php echo SCF::get_option_meta('theme-options', 'company-address'); ?></dd>
                </dl>
                <dl>
                    <dt>電話番号</dt>
                    <dd><?php echo SCF::get_option_meta('theme-options', 'company-tel'); ?></dd>
                </dl>
            </div><!-- /.company-wrap-inner -->
        </div><!-- /.company-wrap -->

        <div class="company-map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12966.991898658345!2d139.7454329!3d35.6585805!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x481a93f0d2a409dd!2z5p2x5Lqs44K_44Ov44O8!5e0!3m2!1sja!2sjp!4v1671152501969!5m2!1sja!2sjp" width="345" height="470" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div><!-- /.l-inner -->
</section><!-- /.company -->

<?php get_footer(); ?>