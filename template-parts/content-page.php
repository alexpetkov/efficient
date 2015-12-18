<?php
/**
 * Template part for displaying page content in page.php.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Starter theme
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		
		<div class="innerpage">
       
          
            <div class="innerTitleBox">
                <?php the_title( '<h1 class="innerTitle">', '</h1>' ); ?>
               
            </div>
      
		</div>
	</header><!-- .entry-header -->
	<div class="container">
		<div class="row">
			
			<div class="col-md-8"><?php the_content(); ?></div>
			<div class="col-md-4">
			<div class="sideNote box effect2">
				<p>If you are in need of any of the trucking services we offer, do not hesitate to call us at once. </p>
				<p>We guarantee you with efficient and on time deliveries. </p>
				<p>Our services are highly accessible and reasonably priced. </p>
				<p>Contact us at 
				<span class="phone"><span class="icon-mobile"></span> 888 888 888 888</span>
				if the need for trucking services arises! </p>
				We look forward to serving you!</p>
			</div>

			</div>
		</div>
	</div>
	<div class="entry-content">
		
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'starter-theme' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

	
</article><!-- #post-## -->

