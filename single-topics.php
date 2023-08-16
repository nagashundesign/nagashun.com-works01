<?php get_header(); ?>
<section class="l-lower-mv-area">
    <div class="l-lower-mv">
        <div class="l-lower-mv__title">
            <h1 class="l-lower-mv__title--en">TOPICS</h1>
            <p class="l-lower-mv__title--jp">トピックス</p>
        </div>
    </div>

    <div class="l-lower-mv__title-bg"></div>
</section><!-- /.l-lower-mv-area -->

<section class="topics">
    <div class="l-inner">
        <div class="topics-info">
            <h2 class="topics__title">
                <?php echo get_the_title($post->ID); ?>
            </h2>
            <time datetime="<?php the_time('Y-m-d'); ?>" class="topics__date">
                <?php echo get_the_date('Y.m.d'); ?>
            </time>
            <?php
            if ($terms = get_the_terms($post->ID, 'topics-cat')) {
                foreach ($terms as $term) {
                    echo '<span><a href="' . get_term_link($term) . '" class="topics-cat cat">' . $term->name . '</a></span>';
                }
            }
            ?>
        </div>

        <div class="topics-content">
            <?php the_content(); ?>
        </div>

        <div class="article-btn-wrap">
            <?php if (get_previous_post()) : ?>
                <div class="c-btn-base">
                    <?php previous_post_link('%link', 'BACK'); ?>
                </div>
            <?php endif; ?>
            <div class="c-btn-base">
                <a href="<?php echo esc_url(home_url('/topics/')); ?>">LIST</a>
            </div>
            <?php if (get_next_post()) : ?>
                <div class="c-btn-base">
                    <?php next_post_link('%link', 'NEXT'); ?>
                </div>
            <?php endif; ?>
        </div><!-- /.article-btn-wrap -->
    </div><!-- /.l-inner -->
</section><!-- /.topics -->

<?php get_footer(); ?>