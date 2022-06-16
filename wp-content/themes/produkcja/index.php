<?php get_header(); ?>

<header>
    <div class="swiper-container header-swiper">
      <div class="swiper-wrapper">
	  	  <?php global $post;
          $args = array('posts_per_page'=>5, 'post_type' => 'slider');
          $myposts = get_posts( $args );
          foreach ( $myposts as $post ) : setup_postdata( $post ); ?>

          <div class="swiper-slide">
          <div class="header-item">
            <div class="header-item__img">
            <img src="<?php the_post_thumbnail_url(); ?>" alt="">
            </div>
            <div class="header-item__text">
            <div class="header-item__primary"><?php the_title(); ?></div>
            <div class="header-item__secondary">
              <?php the_field('krotki_opis'); ?>
            </div>
              <a href="	<?php the_field('url'); ?>" class="header-item__btn">Czytaj więcej</a>
            </div>
          </div>
          </div>


        <?php endforeach; wp_reset_postdata();?>
      </div>
      <div class="header-swiper-left"><i class="fa fa-angle-left" aria-hidden="true"></i></div>
      <div class="header-swiper-right"><i class="fa fa-angle-right" aria-hidden="true"></i></div>
    </div>

    <div class="header-info">
      <div class="container">
        <div class="header-info-items">
          <div class="header-info-item">
            <div class="header-info-item__title">
              <?php echo do_shortcode( '[library term="home_box_1_title"]' ) ?>
            </div>
            <div class="header-info-item__text">
              <?php echo do_shortcode( '[library term="home_box_1_text"]' ) ?>
            </div>
          </div>
          <div class="header-info-item">
            <div class="header-info-item__title">
              <?php echo do_shortcode( '[library term="home_box_2_title"]' ) ?>
            </div>
            <div class="header-info-item__text">
             <?php echo do_shortcode( '[library term="home_box_2_text"]' ) ?>
            </div>
          </div>
          <div class="header-info-item">
            <div class="header-info-item__title">
             <?php echo do_shortcode( '[library term="home_box_3_title"]' ) ?>
            </div>
            <div class="header-info-item__text">
              <?php echo do_shortcode( '[library term="home_box_3_text"]' ) ?>
            </div>
          </div>
        </div>
      </div>
    </div>

  
  </header>
	
<div class="main-aboutus">
    <div class="container">
      <div class="main-aboutus-section">
        <div class="main-aboutus__img">
        <?php echo do_shortcode( '[library term="home-o-nas-zdjecie"]' ) ?>
        </div>
        <div class="main-aboutus__text">
          <?php echo do_shortcode( '[library term="home_o_nas"]' ) ?>
        </div>
      </div>
    </div>
  </div>

  <div class="main-offers">
    <div class="container">
      <div class="main-offers-section">
        <div class="main-offers__title">Nasza Oferta</div>
        <div class="main-offers__text">
          <?php $obj = get_post_type_object( 'oferta' ); echo esc_html( $obj->description );?>
        </div>
        <div class="main-offers-items">
			<?php global $post;
			$args = array('posts_per_page'=>8, 'post_type' => 'oferta');
			$myposts = get_posts( $args );
			foreach ( $myposts as $post ) : setup_postdata( $post ); ?>
				<a href="<?php the_permalink(); ?>" class="main-offers-item">
					<div class="main-offers-item__img">
						<img src="<?php the_post_thumbnail_url(); ?>" alt="">
					</div>
					<div class="main-offers-item-desc">
					<div class="main-offers-item__title"><?php the_title(); ?></div>
					<div class="main-offers-item__text"><?php echo project_excerpt(); ?></div>
					<div class="main-offers-item__read">Czytaj więcej</div>
					</div>
				</a>
			<?php endforeach; wp_reset_postdata();?>
        
         
        </div>     
      </div>
    </div>
    <div class="main-title">OFERTA</div>
  </div>


  <div class="container">
    <div class="main-realization__title">Realizacje</div>
    <div class="main-realization__text"><?php $obj = get_post_type_object( 'realizacje' ); echo esc_html( $obj->description );?></div>
  
  </div>

  <!-- Slider main container -->
  <div class="swiper-container main-realization">
    <!-- Additional required wrapper -->
    <div class="swiper-wrapper">
        <!-- Slides -->
		<?php global $post;
			$args = array('posts_per_page'=>8, 'post_type' => 'realizacje');
			$myposts = get_posts( $args );
			foreach ( $myposts as $post ) : setup_postdata( $post ); ?>
			<div class="swiper-slide">
				<div class="main-realization-item">
					<div class="main-realization-item__img">
						<img src="<?php the_post_thumbnail_url(); ?>" alt="">
					</div>
					<div class="main-realization-item__text">
						<div class="main-realization-item__title"><?php the_title(); ?></div>
						<a href="<?php the_permalink(); ?>" class="main-realization-item__read">Czytaj więcej</a>
					</div>
				</div>
			</div>
		<?php endforeach; wp_reset_postdata();?>
    </div>

    <div class="swiper-pagination"></div>
  
  </div>
  <div class="main-title black">realizacje</div>

  <div class="main-teams">
    <div class="container">
      <div class="main-teams-section">
        <div class="main-teams__title">Nasz zespół</div>
        <div class="main-teams__text"><?php $obj = get_post_type_object( 'zespol' ); echo esc_html( $obj->description );?></div>
        <div class="main-teams-items">
			<?php global $post;
				$args = array('posts_per_page'=>8, 'post_type' => 'zespol');
				$myposts = get_posts( $args );
				foreach ( $myposts as $post ) : setup_postdata( $post ); ?>
				<div class="main-teams-item">
					<div class="main-teams-item__img">
            <?php $obraz = get_field( 'zdjecie_profilowe' ); ?>
            <?php if ( $obraz ) { ?>
            <img src="<?php echo $obraz['url']; ?>" alt="<?php echo $obraz['alt']; ?>" />
            <?php } ?>
					</div>
					<div class="main-teams-item__social">
						<span class="main-teams-item__icons"><i class="fa fa-link"></i></span>
						<a class="main-teams-item__icons" href="<?php the_field('facebook'); ?>"><i class="fa fa-facebook"></i> </a>
						<a class="main-teams-item__icons" href="<?php the_field('twitter'); ?>"><i class="fa fa-twitter"></i> </a>
						<a class="main-teams-item__icons" href="<?php the_field('instagram'); ?>"><i class="fa fa-instagram"></i> </a>
					</div>
					<div class="main-teams-item__text">
						<div class="main-teams-item__name"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></div>
						<div class="main-teams-item__job"><?php the_field('zawod'); ?></div>
					</div>
				</div>
		  	<?php endforeach; wp_reset_postdata();?>
        </div>
      </div>
    </div>
    <div class="main-title black">zespół</div>
  </div>

  <div class="main-opinion">
      <div class="main-opinion-section">

        <div class="swiper opinion">
          <div class="swiper-wrapper">
          <?php global $post;
            $args = array('posts_per_page'=>8, 'post_type' => 'opinie');
            $myposts = get_posts( $args );
            foreach ( $myposts as $post ) : setup_postdata( $post ); ?>
            <div class="swiper-slide">
              <div class="main-opinion-item">
                <div class="main-opinion-item__quote">
                  <i class="fa fa-quote-left"></i>
                  <i class="fa fa-quote-right"></i>
                </div>
                <div class="main-opinion-item__text">
                 <?php the_content() ?>
                </div>
                <div class="main-opinion-item-display">
                  <div class="main-opinion-item__avatar">
                    <i class="fa fa-user"></i>
                  </div>
                  <div class="main-opinion-item__name">
                    <?php the_field('osoba_nazwa'); ?>
                  </div>
                </div>
              </div>
            </div>
          	<?php endforeach; wp_reset_postdata();?>
          </div>
             <!-- If we need pagination -->
             <div class="swiper-opinion-pagination"></div>
        </div>


      
      </div>
      <div class="main-title">Opinie</div>
  </div>



  <div class="main-blog">
    <div class="container">
      <div class="main-blog-section">
        <div class="main-blog__title">Blog</div>
        <div class="main-blog__text"><?php $obj = get_post_type_object( 'blog' ); echo esc_html( $obj->description );?></div>
        <div class="main-blog-items">
			<?php global $post;
				$args = array('posts_per_page'=>3, 'post_type' => 'blog', 'orderby' => 'rand');
				$myposts = get_posts( $args );
				foreach ( $myposts as $post ) : setup_postdata( $post ); ?>
        <div class="main-blog-item">
          <div class="main-blog-item__img">
            <img src="<?php the_post_thumbnail_url(); ?>" alt="">
            <div class="main-blog-item__category"><?php the_category(); ?></div>
          </div>
          <div class="main-blog-item__text">
            <div class="main-blog-item__date"><?php the_time( 'F j, Y' ); ?></div>
            <div class="main-blog-item__title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a> </div>
            <a href="<?php the_permalink(); ?>" class="main-blog-item__read"><i class="fa fa-long-arrow-right"></i></a>
          </div>
        </div>
			  <?php endforeach; wp_reset_postdata();?>
        </div>
      </div>
    </div>
    <div class="main-title black">Blog</div>
  </div>

<?php get_footer(); ?>