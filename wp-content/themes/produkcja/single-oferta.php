<?php get_header(); ?>

<?php get_head_post(); ?>

<main class="main-home">


    <div class="page-offers">
        <div class="container">
            <div class="page-offers-content">
                <div class="page-offers-left">
                    

                    <ul class="page-offers-items">
                        <?php
                        global $post;
                        $current_page = sanitize_post( $GLOBALS['wp_the_query']->get_queried_object() );
                        $myposts = get_posts( array(
                            'post_type'  => 'oferta',
                        ) );
                  
                        if ( $myposts ) {
                            foreach ( $myposts as $post ) : 
                                setup_postdata( $post ); ?>
                                <li class="page-offers-item"><a class="" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
                            <?php
                            endforeach;
                            wp_reset_postdata();
                        }

                        ?>
                    </ul>
                    <div class="page-blog-info">
                        <div class="page-blog-info__title">Kontakt</div>
                        <span><a href="tel:+asdasd"><i class="fa fa-phone"></i> 12312</a></span>
                        <span><a href="mailto:asd@asd.pl"><i class="fa fa-envelope"></i>asdasd@asdpl</a></span>
                    </div>
                </div>
                <div class="page-offers-right">
                    <div class="page-offers__text">
                        <?php the_content() ?>
                    </div>
                </div>
            </div>
        </div>
    </div>


</main>



<?php get_footer(); ?>