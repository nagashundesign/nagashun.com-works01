<?php get_header(); ?>
<section class="l-lower-mv-area">
    <div class="l-lower-mv">
        <div class="l-lower-mv__title">
            <h1 class="l-lower-mv__title--en">WORKS</h1>
            <p class="l-lower-mv__title--jp">制作実績</p>
        </div>
    </div>

    <div class="l-lower-mv__title-bg"></div>
</section><!-- /.l-lower-mv-area -->

<section class="works">
    <div class="l-inner">
        <div class="works-info">
            <ul class="works-cat-list article-works-cat-list">
                <?php
                if ($terms = get_the_terms($post->ID, 'works-cat')) {
                    foreach ($terms as $term) {
                        echo '<li><a href="' . get_term_link($term) . '" class="works-cat cat">' . $term->name . '</a></li>';
                    }
                }
                ?>
            </ul>

            <h2 class="works__title">
                <?php echo get_the_title($post->ID); ?>
            </h2>
        </div>

        <div class="works-content">
            <div class="works__img">
                <?php
                $attachment_id = get_field('works-main-img');
                $size = "full";
                $image = wp_get_attachment_image_src($attachment_id, $size);
                $attachment = get_post(get_field('works-main-img'));
                ?>
                <img src="<?php echo $image[0]; ?>" width="<?php echo $image[1]; ?>" height="<?php echo $image[2]; ?>" alt="<?php echo get_the_title($post->ID); ?>">
            </div>

            <div class="works-content-box">
                <?php $image = get_field('works-url');
                $fielddata = get_field_object('works-url');
                ?>
                <h2 class="works-content__title"><?php echo $fielddata['label']; ?></h2>
                <a href="<?php echo $fielddata['value']; ?>" target="_blank"><?php echo $fielddata['value']; ?></a>
            </div>

            <div class="works-content-box">
                <?php $image = get_field('works-comment');
                $fielddata = get_field_object('works-comment');
                ?>
                <h2 class="works-content__title"><?php echo $fielddata['label']; ?></h2>
                <p><?php echo $fielddata['value']; ?></p>
            </div>
        </div>

        <div class="article-btn-wrap">
            <?php if (get_previous_post()) : ?>
                <div class="c-btn-base">
                    <?php previous_post_link('%link', 'BACK'); ?>
                </div>
            <?php endif; ?>
            <div class="c-btn-base">
                <a href="<?php echo esc_url(home_url('/works/')); ?>">LIST</a>
            </div>
            <?php if (get_next_post()) : ?>
                <div class="c-btn-base">
                    <?php next_post_link('%link', 'NEXT'); ?>
                </div>
            <?php endif; ?>
        </div><!-- /.article-btn-wrap -->
    </div><!-- /.l-inner -->
</section><!-- /.works -->

<?php get_footer(); ?>