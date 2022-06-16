<?php get_header(); ?>

<?php get_head(); ?>
	
<main class="main-home">

  <div class="blog">
    <div class="container">
      <div class="blog-section">
        <!-- <div class="blog__title">Blog</div> -->
        <div class="blog__text"><?php $obj = get_post_type_object( 'blog' ); echo esc_html( $obj->description );?></div>
        <div class="blog-items">
            <?php
            $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
            $args = array( 
                'posts_per_page' => 100, 
                'paged' => $paged, 
                'post_type' => 'blog'
            );
            $loop = new WP_Query($args);
            ?>
            <?php if ($loop->have_posts()) : while ($loop->have_posts()) : $loop->the_post(); ?>
                <div class="blog-item">
                    <div class="blog-item__img">
                        <img src="<?php the_post_thumbnail_url(); ?>" alt="">
                        <div class="blog-item__category"><?php the_category(); ?></div>
                    </div>
                    <div class="blog-item__text">
                        <div class="blog-item__date"><i class="fa fa-calendar"></i><?php the_time( 'F j, Y' ); ?></div>
                        <a href="<?php the_permalink(); ?>" class="blog-item__title"><?php the_title(); ?></a>
                        <a href="<?php the_permalink(); ?>" class="blog-item__read">Czytaj więcej</a>
                    </div>
                </div>
            
            <?php endwhile; endif; ?>
        </div>
      </div>
    </div>
  </div>

</main>

<?php get_footer(); ?>