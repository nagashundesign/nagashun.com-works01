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
        <div class="topics-list">
            <h2 class="c-sec__title">CATEGORY</h2>
            <ul class="cat-list topics-cat-list">
                <?php
                $terms = get_terms('topics-cat');
                foreach ($terms as $term) {
                    echo '<li><a href="' . get_term_link($term) . '" class="topics-cat cat">' . $term->name . '</a></li>';
                }
                ?>
            </ul>

            <h2 class="c-sec__title">TOPICS LIST</h2>
            <ul>
                <?php
                $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                $term_object = get_queried_object();
                $term_slug   = $term_object->slug;
                $args = array(
                    'post_status' => 'publish',
                    'post_type' => 'topics',
                    'taxonomy' => 'topics-cat',
                    'term' => $term_slug,
                    'paged' => $paged,
                    'posts_per_page' => 9,
                );
                $custom_query = new WP_Query($args);

                if ($custom_query->have_posts()) :
                    while ($custom_query->have_posts()) : $custom_query->the_post();
                ?>
                        <li class="topics__item">
                            <a href="<?php echo get_permalink($post->ID); ?>">
                                <time datetime="<?php echo get_the_date('Y.m.d'); ?>" class="topics__date">
                                    <?php echo get_the_date('Y.m.d'); ?>
                                </time>
                                <?php
                                if ($terms = get_the_terms($post->ID, 'topics-cat')) {
                                    foreach ($terms as $term) {
                                        echo '<p class="topics-cat cat">' . $term->name . '</p>';
                                    }
                                }
                                ?>
                                <h3 class="topics__title">
                                    <?php echo get_the_title($post->ID); ?>
                                </h3>
                            </a>
                        </li>
                <?php
                    endwhile;
                else :
                    echo '<div><p>まだ投稿がありません。</p></div>';
                endif;
                ?>
            </ul>

            <?php wp_pagenavi(); ?>
            <?php wp_reset_query(); ?>
        </div><!-- /.topics-list -->
    </div><!-- /.l-inner -->
</section><!-- /.topics -->

<?php get_footer(); ?>