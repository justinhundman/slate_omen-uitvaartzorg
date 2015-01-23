<footer>	
	<div class="">
		<div class="footer-wrapper u-gridContainer">
			<div class="u-gridRow">
				<div class="u-gridCol4 footer-contact">
					<a href="#"><img class="footer-logo" src="<?php echo get_stylesheet_directory_uri(); ?>/img/footer-logo.png" ></a>
					<ul>
						<li>Oostdorperweg 151</li>
						<li>2242 NJ Wassenaar</li>
					</ul>
				</div>
				<div class="u-gridCol4 footer-contact">
					<p>Contact</p>
					<ul>
						<li><a href="tel:0705146100">Telefoon: 070-5146100</a></li>
						<li><a href="tel:0623269618">Mobiel: 06-23269618</a></li>
						<li><a href="tel:0653576642">Mobiel: 06-53576642</a></li>
						<li>fax: 070-5146101</li>
						<li><a href="mailto:info@omen-uitvaartzorg.nl">E-mail: info@omen-uitvaartzorg.nl</a></li>
					</ul>
					<div style="background: white; width:208px; height: 64px;"class="fb-like-box" data-href="https://www.facebook.com/pages/Omen-Uitvaartzorg/1523946011177367" data-colorscheme="light" data-show-faces="false" data-header="false" data-stream="false" data-show-border="false">
					</div>
				</div>
				<div class="u-gridCol4">
					<?php if ( is_active_sidebar( 'footer-widgets' ) ) : ?>
					<div class="Footer-inner u-gridRow">
						<?php dynamic_sidebar( 'footer-widgets' ); ?>
					</div>
					<div class="actueel-wrapper">
						<a class="actueel-link" href="/actueel/">Actueel</a>
					</div>
					
					<?php endif; ?>
				</div>
			</div>
					<!-- Copyright info -->

		</div>
		<div class=" u-gridContainer">
					<p class="footer-bloginfo">&copy; <?php bloginfo('name'); ?> <?php echo date("Y"); ?> - Website & SEO door 
							<a href="http://www.lokaalgevonden.nl" target="_blank">LokaalGevonden</a>
					</p>
		</div>
	</div>
</footer>

  <!-- Load jquery from google CDN if possible, with fallback to cdnjs -->
  <script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.0/jquery.min.js"></script>
  <script>window.jQuery || document.write('<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.0/jquery.min.js"><\/script>')</script>

  <!-- build:remove:expanded -->
  <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/production.min.js"></script>
  <!-- /build -->
  <!-- build:remove:compressed -->
  <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/landingpage-select.js"></script>
  <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/nav-collapse.js"></script>
  <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/nav-dropdown.js"></script>
  <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/prepend-svg.js"></script>
  <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/google-maps.js"></script>
   <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/jquery-scrolltofixed.js"></script>
  <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/jquery.bxslider.js"></script>
  <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/jquery.bxslider.start.js"></script>
  <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/toggle-button.js"></script> 
  <script src="http://localhost:35729/livereload.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/html-inspector/0.8.0/html-inspector.js"></script> 
  <script>HTMLInspector.inspect();</script>
  <!-- /build -->

  <!-- Check if javascript for threaded comments should be loaded -->
  <?php include 'includes/comment-check.php'; ?>

	<!-- Wordpress footer -->
	<?php wp_footer(); ?>
	</body>
</html>
