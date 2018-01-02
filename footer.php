	<section class="banner">
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<h2><?php echo get_theme_mod( 'banner_heading', 'Follow Us On Social Media:' ); ?></h2>
				</div> <!-- .col-lg-6 -->
				<div class="col-lg-6">
					<ul class="list-inline banner-social-buttons">
						<?php if( get_theme_mod( 'facebook_url', 'http://facebook.com' ) != '' ) : ?>
							<li><a class="btn btn-default btn-lg" href="<?php echo get_theme_mod( 'facebook_url', 'http://facebook.com' ); ?>" target="_blank"><i class="fa fa-facebook fa-fw"></i> Facebook</a></li>
						<?php endif; ?>
						<?php if( get_theme_mod( 'twitter_url', 'http://twitter.com' ) != '' ) : ?>
							<li><a class="btn btn-default btn-lg" href="<?php echo get_theme_mod( 'twitter_url', 'http://twitter.com' ); ?>" target="_blank"><i class="fa fa-twitter fa-fw"></i> Twitter</a></li>
						<?php endif; ?>
						<?php if( get_theme_mod( 'linkedin_url', 'http://linkedin.com' ) != '' ) : ?>
							<li><a class="btn btn-default btn-lg" href="<?php echo get_theme_mod( 'linkedin_url', 'http://linkedin.com' ); ?>" target="_blank"><i class="fa fa-linkedin fa-fw"></i> LinkedIn</a></li>
						<?php endif; ?>
					</ul>
				</div> <!-- .col-lg-6 -->
			</div> <!-- .row -->
		</div> <!-- .container -->
	</section> <!-- .banner -->

    <footer>
    	<div class="container">
    		<div class="row">
    			<div class="col-lg-12">
    				<ul class="list-inline">
    					<li>
    						<a href="#">Home</a>
    					</li>
    					<li>
    						<a href="#">About</a>
    					</li>
    					<li>
    						<a href="#">Services</a>
    					</li>
    					<li>
    						<a href="#">Contact</a>
    					</li>
    				</ul> <!-- .list-inline -->
    				<p class="copyright text-muted-small">Copyright &copy; Sharp Theme 2017. All Rights Reserved</p>
    			</div> <!-- .col-lg-12 -->
    		</div> <!-- .row -->
    	</div> <!-- .container -->
	</footer>
	
	<script src="<?php bloginfo( 'template_url' ); ?>/js/jquery-3.2.1.min.js"></script>
	<script src="<?php bloginfo( 'template_url' ); ?>/js/bootstrap.min.js"></script>

</body>
</html>