<ul>
    <?php
    $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
    if (is_front_page()) {
        $the_query = new WP_Query(array(
            'post_status' => 'publish',
            'post_type' => 'topics',
            'paged' => $paged,
            'posts_per_page' => 3,
            'order' => 'DESC'
        ));
    } else {
        $the_query = new WP_Query(array(
            'post_status' => 'publish',
            'post_type' => 'topics',
            'paged' => $paged,
            'posts_per_page' => 10,
            'order' => 'DESC'
        ));
    }

    if ($the_query->have_posts()) :
        while ($the_query->have_posts()) : $the_query->the_post();
    ?>
            <li class="topics__item">
                <a href="<?php echo get_permalink($post->ID); ?>">
                    <time datetime="<?php the_time('Y-m-d'); ?>" class="topics__date">
                        <?php echo get_the_date('Y.m.d'); ?>
                    </time>
                    <?php
                    if ($terms = get_the_terms($post->ID, 'topics-cat')) {
                        foreach ($terms as $term) {
                            echo '<span class="topics-cat cat ' . $term->slug . '">' . $term->name . '</span>';
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

<?php
if (!is_front_page()) {
    wp_pagenavi();
}
?>