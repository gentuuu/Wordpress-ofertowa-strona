<?php get_header(); ?>

<?php get_head(); ?>

<main class="main-home">


    <div class="main-teams-row">
        <div class="container">
            <div class="main-teams-section">
                <!-- <div class="main-teams__title">Nasz zespół</div> -->
                <div class="main-teams__text"><?php $obj = get_post_type_object( 'blog' ); echo esc_html( $obj->description );?></div>
                <div class="main-teams-items">
                    <?php
                    $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                    $args = array( 
                        'posts_per_page' => 10, 
                        'paged' => $paged, 
                        'post_type' => 'zespol'
                    );
                    $loop = new WP_Query($args);
                    ?>
                    <?php if ($loop->have_posts()) : while ($loop->have_posts()) : $loop->the_post(); ?>
                    
                    <div class="main-teams-item">
                        <div class="main-teams-item__img">
                            <?php $obraz = get_field( 'zdjecie_profilowe' ); ?>
                            <?php if ( $obraz ) { ?>
                            <img src="<?php echo $obraz['url']; ?>" alt="<?php echo $obraz['alt']; ?>" />
                            <?php } ?>
                        </div>
                        <div class="main-teams-item__social">
                            <span class="main-teams-item__icons"><i class="fa fa-link"></i></span>
                            <a class="main-teams-item__icons" href="<?php the_field('facebook'); ?>"><i
                                    class="fa fa-facebook"></i> </a>
                            <a class="main-teams-item__icons" href="<?php the_field('twitter'); ?>"><i
                                    class="fa fa-twitter"></i> </a>
                            <a class="main-teams-item__icons" href="<?php the_field('instagram'); ?>"><i
                                    class="fa fa-instagram"></i> </a>
                        </div>
                        <div class="main-teams-item__text">
                            <div class="main-teams-item__name"><?php the_title(); ?></div>
                            <div class="main-teams-item__job"><?php the_field('zawod'); ?></div>
                            <a href="<?php the_permalink(); ?>">Czytaj dalej</a>
                        </div>
                    </div>
                    <?php endwhile; endif; ?>
                </div>
            </div>
        </div>
    </div>

    <?php get_footer(); ?>