<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <div class="w3-card-4 w3-margin w3-white">
            <?php the_post_thumbnail() ?>
            <div class="w3-container">
                <h3><a href="<?php the_permalink() ?>">
                        <b><?php the_title() ?></b>
                    </a></h3>
                <h5>On <span class="w3-opacity"><?php the_date() ?></span></h5>
            </div>

            <div class="w3-container">
                <p><?php the_content() ?></p>
            </div>
            <div class="comments-meta">
                <?php comments_template() ?>
            </div>
        </div>
        <hr>
    <?php endwhile;
    else : ?>
    <?php wpautop('Sorry No posts found') ?>
<?php endif; ?>
<?php wp_reset_postdata(); ?>