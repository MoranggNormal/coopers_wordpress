<section class="blog-section">
    <div class="blog-container">
        <h2 class="blog-title">
            good things
        </h2>

        <div class="swiper">
            <div class="swiper-wrapper">
                <?php
                $args = array(
                    'post_type' => 'post',
                    'posts_per_page' => 10,
                    'orderby' => 'date',
                    'order' => 'ASC',
                );

                $query = new WP_Query($args);

                if ($query->have_posts()) :
                    while ($query->have_posts()) : $query->the_post();
                ?>
                        <div class="swiper-slide">
                            <div class="post">
                                <?php if (has_post_thumbnail()) : ?>
                                    <div class="post-image">
                                        <div class="image">
                                            <?php the_post_thumbnail('medium'); ?>
                                        </div>
                                        <img src="/wp-content/uploads/2024/10/icone-coopers.png" alt="Coopers Digital" class="coopers-icon" width="49" height="56">
                                    </div>
                                <?php endif; ?>

                                <div class="post-content">
                                    <span class="post-context"><?php the_category(', '); ?></span>
                                    <div class="post-excerpt"><?php the_excerpt(); ?></div>

                                    <a href="<?php the_permalink(); ?>" class="read-more">read more</a>
                                </div>
                            </div>
                        </div>
                <?php
                    endwhile;
                    wp_reset_postdata();
                endif;
                ?>
            </div>
            <div class="swiper-pagination"></div>
        </div>
    </div>
</section>