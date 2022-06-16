<?php get_header(); ?>

<?php get_head(); ?>

<main class="main-home">


    <div class="page-realization">
        <div class="container">
            <div class="page-realization-content">
                <!-- <div class="page-realization__title">Nasze realizacje</div> -->
                <div class="page-realization__text"><?php $obj = get_post_type_object( 'blog' ); echo esc_html( $obj->description );?></div>
                <div class="page-realization-items">
                    <?php
                    $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                    $args = array( 
                        'posts_per_page' => 10, 
                        'paged' => $paged, 
                        'post_type' => 'realizacje'
                    );
                    $loop = new WP_Query($args);
                    ?>
                    <?php if ($loop->have_posts()) : while ($loop->have_posts()) : $loop->the_post(); ?>
                    <a href="<?php the_permalink(); ?>">
                        <div class="page-realization-item">
                            <div class="page-realization-item__img">
                                <img src="<?php the_post_thumbnail_url(); ?>" alt="">
                            </div>
                            <div class="page-realization-desc">
                                <div class="page-realization-item__title">
                                    <?php the_title(); ?>
                                </div>
                            </div>
                        </div>
                    </a>
                       
                    <?php endwhile; endif; ?>
                </div>
            </div>
        </div>
    </div>

</main>

<?php get_footer(); ?>


