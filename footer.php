<section id="footer">
	<div class="container">
		<div class="row">
			
			<div class="col-xs-12 aligncenter fr_box">
				<?php
		            wp_nav_menu( array(
		                'menu'              => 'Primary Menu',
		                'theme_location'    => 'Primary Menu',
		                'depth'             => 2,
		                'container'         => 'div',
		                'container_class'   => '',
		            	'container_id'      => 'fr_menu',
		                'menu_class'        => '',
		                'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
		                'walker'            => new wp_bootstrap_navwalker())
		            );
				 ?>
				 <p>All Content Copyright © <?php echo date('Y');?> <a href="<?php bloginfo('url'); ?>">Efficient Motor Freight, Inc</a></p>
			</div>
		</div>
	</div>
</section>

<?php wp_footer(); ?>



	<script>
		jQuery( document ).ready(function() {

		   

		    jQuery(".primary-image").fallings({
		        velocity: .5,
		        bgParallax: true,
		        bgPercent: '50%'
		    });

		   

		});
	</script>
</body>
</html>
