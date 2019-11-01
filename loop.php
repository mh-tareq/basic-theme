<?php // WP_Query arguments
$args = array(
    'posts_per_page'         => '3',
    'post__not_in' => get_option('sticky_posts')
);

// The Query
$custom_query = new WP_Query($args); ?>


<?php if ($custom_query->have_posts()) : while ($custom_query->have_posts()) : $custom_query->the_post(); ?>
        <div class="w3-card-4 w3-margin w3-white">
            <a href="<?php the_permalink() ?>">
                <?php the_post_thumbnail() ?>
            </a>
            <div class="w3-container">
                <h3><a href="<?php the_permalink() ?>">
                        <b><?php the_title() ?></b>
                    </a></h3>
                <h5>On <span class="w3-opacity"><?php the_date() ?></span></h5>
            </div>

            <div class="w3-container">
                <p><?php the_excerpt() ?></p>
                <div class="w3-row">
                    <div class="w3-col m8 s12">
                        <p><a href="<?php the_permalink() ?>"><button class="w3-button w3-padding-large w3-white w3-border"><b>READ MORE »</b></button></a></p>
                    </div>
                    <div class="w3-col m4 w3-hide-small">
                        <p><span class="w3-padding-large w3-right"><b>Comments </b> <span class="w3-tag"><?php echo get_comments_number(); ?></span></span></p>
                    </div>
                </div>
            </div>
        </div>
        <hr>
    <?php endwhile;
    else : ?>
    <?php wpautop('Sorry No posts found') ?>
<?php endif; ?>
<?php wp_reset_postdata(); ?>