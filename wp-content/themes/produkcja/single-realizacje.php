<?php get_header(); ?>

<?php get_head_post(); ?>

<main class="main-home">

    <div class="page-realization">
        <div class="container">
            <div class="page-realization-content">
                <div class="page-realization__img">
                    <?php $image_id = get_post_thumbnail_id(get_the_ID()); 
                    $alt = get_post_meta($image_id, '_wp_attachment_image_alt', true); ?>
                    <img src="<?php the_post_thumbnail_url(); ?>" alt="<?php echo $alt; ?>">
                </div>
                <div class="page-realization__title">Informacje o realizacji</div>
                <div class="page-realization__text">
                    <?php the_content() ?>
                </div>
            </div>

            <div class="realization-random__title">Pozostałe realizacje </div>

            <div class="swiper realization-random">
                <div class="swiper-wrapper">
                    <?php
                            $rand_posts = get_posts( array(
                                'posts_per_page' => 5,
                                'orderby'        => 'rand',
                                'post_type' => 'realizacje',
                                
                            ) );
                            
                            if ( $rand_posts ) {
                            foreach ( $rand_posts as $post ) : 
                                setup_postdata( $post );
                        ?>
                    <div class="swiper-slide">
                        <a href="<?php the_permalink(); ?>">
                            <div class="realization-random-item">
                                <div class="realization-random-item__img">
                                <?php $image_id = get_post_thumbnail_id(get_the_ID()); 
                                $alt = get_post_meta($image_id, '_wp_attachment_image_alt', true); ?>
                                    <img src="<?php the_post_thumbnail_url(); ?>" alt="<?php echo $alt; ?>">
                                </div>
                                <div class="realization-random-item__title">
                                    <?php the_title(); ?>
                                </div>
                            </div>
                        </a> 
                    </div>
                    <?php endforeach; wp_reset_postdata(); } ?>
                </div>
            </div>



        </div>
    </div>

	

</main>


<?php get_footer(); ?>