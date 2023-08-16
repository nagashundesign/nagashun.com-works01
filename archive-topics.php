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
            <?php get_template_part('parts/parts-topics'); ?>
        </div><!-- /.topics-list -->
    </div><!-- /.l-inner -->
</section><!-- /.topics -->

<?php get_footer(); ?>