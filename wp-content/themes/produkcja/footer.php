
<footer>
  <div class="footer">
    <div class="container">
      <div class="footer-content">
        <div class="footer-left">
          <div class="footer__logo">
            <img src="" alt="">Logo
          </div>
          <div class="footer__text">
            <?php echo do_shortcode( '[library term="footer-opis"]' ) ?>
          </div>
          <div class="footer__social">
            <a href="<?php echo do_shortcode( '[library term="facebook"]' ) ?>"><i class="fa fa-facebook"></i> </a>
            <a href="<?php echo do_shortcode( '[library term="twitter"]' ) ?>"><i class="fa fa-twitter"></i> </a>
            <a href="<?php echo do_shortcode( '[library term="youtube"]' ) ?>"><i class="fa fa-youtube"></i> </a>
            <a href="<?php echo do_shortcode( '[library term="instagram"]' ) ?>"><i class="fa fa-instagram"></i> </a>
          </div>
        </div>
        <div class="footer-right">
          <div class="footer-top">
            <div class="footer-info">
              <div class="footer-info__img"><i class="fa fa-xl fa-phone"></i></div>
              <div class="footer-info__text">
                <span>Telefon</span>
                <span><a href="tel:+<?php echo do_shortcode( '[library term="telefon"]' ) ?>"><?php echo do_shortcode( '[library term="telefon"]' ) ?></a></span>
              </div>
            </div>
            <div class="footer-info">
              <div class="footer-info__img"><i class="fa fa-envelope"></i></div>
              <div class="footer-info__text">
                <span>Email</span>
                <span><a href="mailto:<?php echo do_shortcode( '[library term="email"]' ) ?>"><?php echo do_shortcode( '[library term="email"]' ) ?></a></span>
              </div>
            </div>
            <div class="footer-info">
              <div class="footer-info__img"><i class="fa fa-map-marker"></i></div>
              <div class="footer-info__text">
                <span>Lokalizacja</span>
                <span><?php echo do_shortcode( '[library term="lokalizacja"]' ) ?></span>
              </div>
            </div>
          </div>
          <div class="footer-bottom">
            <div class="footer-menu">
              <div class="footer-menu__title">Menu</div>
              <ul>
                <?php wp_nav_menu( array( 'menu' => 'Menu Główne') ); ?>
              </ul>
            </div>
            <div class="footer-menu">
              <div class="footer-menu__title">Informacje</div>
              <ul>
                <?php wp_nav_menu( array( 'menu' => 'Informacje') ); ?>
              </ul>
            </div>
            <div class="footer-menu">
              <div class="footer-menu__title">Oferta</div>
              <ul>
                <?php wp_nav_menu( array( 'menu' => 'Oferta') ); ?>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="footer-copyright">
        <?php echo do_shortcode( '[library term="copywrite"]' ) ?>
      </div>
    </div>
  </div>
</footer>




<script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>

<script src="<?php echo get_template_directory_uri(); ?>/js/main.js"></script>

<?php wp_footer(); ?>

</body>

</html>