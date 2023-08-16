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
        <h2 class="c-sec__title">CATEGORY</h2>
        <ul class="cat-list">
            <?php
            $terms = get_terms('works-cat');
            foreach ($terms as $term) {
                echo '<li><a href="' . get_term_link($term) . '" class="works-cat cat">' . $term->name . '</a></li>';
            }
            ?>
        </ul>

        <h2 class="c-sec__title">WORKS LIST</h2>
        <ul class="works-list">
            <?php
            $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
            $the_query = new WP_Query(array(
                'post_status' => 'publish',
                'post_type' => 'works',
                'paged' => $paged,
                'posts_per_page' => 9,
                'order' => 'DESC'
            ));

            if ($the_query->have_posts()) :
                while ($the_query->have_posts()) : $the_query->the_post();
            ?>
                    <li class="works-list__item">
                        <a href="<?php echo get_permalink($post->ID); ?>">
                            <div class="works-list__img">
                                <?php
                                $attachment_id = get_field('works-main-img');
                                $size = "full";
                                $image = wp_get_attachment_image_src($attachment_id, $size);
                                $attachment = get_post(get_field('works-main-img'));
                                ?>
                                <img src="<?php echo $image[0]; ?>" width="330" height="330" alt="<?php echo get_the_title($post->ID); ?>">
                            </div>

                            <ul class="works-cat-list article-works-cat-list">
                                <?php
                                if ($terms = get_the_terms($post->ID, 'works-cat')) {
                                    foreach ($terms as $term) {
                                        echo '<li class="works-cat cat ' . $term->slug . '">' . $term->name . '</li>';
                                    }
                                }
                                ?>
                            </ul>

                            <h3 class="works-list__title">
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
        </ul><!-- /.works-list -->
        <?php wp_pagenavi(); ?>
    </div><!-- /.l-inner -->
</section><!-- /.works -->

<?php get_footer(); ?>