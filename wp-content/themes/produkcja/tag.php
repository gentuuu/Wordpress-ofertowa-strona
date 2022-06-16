<?php get_header(); ?>

<?php get_head(); ?>

<div class="blog">
	<div class="container">
		<div class="blog-section">
			<div class="blog__title">Artykuły z tag: <?php single_tag_title(); ?></div>
			<div class="blog-items">
				<?php
							$tag_id = get_queried_object();
                            $args = get_posts( array(
                                'post_type' => 'blog',
								'orderby' => 'post_date',
								'order' => 'DESC',
								'tag' => $tag_id->name, 
								
                            ) );

							
                            if ( $args ) {
                            foreach ( $args as $post ) : 
                                setup_postdata( $post );
								
                        ?>
				<div class="blog-item">
					<div class="blog-item__img">
						<img src="<?php the_post_thumbnail_url(); ?>" alt="">
					</div>
					<div class="blog-item__text">
						<div class="blog-item__date"><i class="fa fa-calendar"></i><?php the_time( 'F j, Y' ); ?></div>
                        <a href="<?php the_permalink(); ?>" class="blog-item__title"><?php the_title(); ?></a>
                        <a href="<?php the_permalink(); ?>" class="blog-item__read">Czytaj więcej</a>
					</div>
				</div>

				<?php endforeach; wp_reset_postdata(); } ?>
			</div>
		</div>
	</div>
</div>


<?php get_footer(); ?>