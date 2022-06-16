<?php get_header(); ?>

<?php get_head(); ?>

<main class="main-home">


<div class="offers">
    <div class="container">
      <div class="offers-section">
        <!-- <div class="offers__title">Oferta</div> -->
        <div class="offers__text"><?php $obj = get_post_type_object( 'blog' ); echo esc_html( $obj->description );?></div>
        <div class="offers-items">
        <?php
                    $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                    $args = array( 
                        'posts_per_page' => 10, 
                        'paged' => $paged, 
                        'post_type' => 'oferta'
                    );
                    $loop = new WP_Query($args);
                    ?>
                    <?php if ($loop->have_posts()) : while ($loop->have_posts()) : $loop->the_post(); ?>
            <a href="<?php the_permalink(); ?>" class="offers-item">
                <div class="offers-item__img">
                    <img src="<?php the_post_thumbnail_url(); ?>" alt="">
                </div>
                <div class="offers-item__title"><?php the_title(); ?></div>
                <div class="offers-item__text"><?php the_field('krotki_opis'); ?></div>
                <div class="offers-item__read">czytaj więcej</div>
            </a>
            <?php endwhile; endif; ?>
           
        </div>
      </div>
    </div>
  </div>
<?php get_footer(); ?>