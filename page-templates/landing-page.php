<?php
/**
 * Template Name: Landing Page
 * 
 * @package UFCLAS_UFL_2015
 *
 */
get_header(); ?>

<?php while ( have_posts() ) : the_post(); ?>
	
	<?php get_template_part( 'template-parts/content', 'landing' ); ?>

<?php endwhile; // End of the loop. ?>

	<div class="content-box-module">
		<div class="container">
			<div class="row">
				<div class="col-sm-5 content-box-img" style="background-image:url(<?php echo get_stylesheet_directory_uri(); ?>/img/_temp-landing-a-1.jpg)">
					<img src="http://dummyimage.com/470x532" alt="" class="visuallyhidden">
				</div>
				<div class="col-sm-7 content-box-copy">
					<h2>A Longer Secondary Headline Here Introducing This Section</h2>
					<p>Lorem ised ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae.</p>
					<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
					<p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit</p>
					<a href="#" class="read-more">learn more</a>
					<span class="category-tag orange">Section</span>
				</div>
			</div>
		</div>
	</div>

	<div class="breaker" style="background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/img/bg-breaker2.jpg);">
  	<div class="container">
  		<div class="row">
  			<div class="col-sm-8 col-sm-offset-2">
  				<h2>A Main Section Secondary Headline Here</h2>
  				<p>Lorem ised ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beata</p>
  				<a href="#" class="btn btn--white">Learn More <span class="arw-right icon-svg"><svg><use xlink:href="<?php echo get_stylesheet_directory_uri(); ?>/img/spritemap.svg#arw-right"></use></svg></span></a>
  			</div>
  		</div>
  	</div>
  </div>


	<div class="content-box-module content-box-module--tweet">
		<div class="container">
			<div class="row">
				<div class="col-sm-6 col-sm-push-6 col-md-5 col-md-push-5 content-box-img" style="background-image:url(<?php echo get_stylesheet_directory_uri(); ?>/img/_temp-landing-a-1.jpg)">
					<div class="tweet-block">
						<div class="tweet-copy">
							<p>Dolor Sit Amet Consectetur Adipiscing Ligula Eget Dolor Ipsum Et Magis Dis Montes Com Dis Mvelit Sit Adipisci.</p>
							<div class="tweet-meta">
								<span class="btn-circle icon-svg icon-twitter"><svg><use xlink:href="<?php echo get_stylesheet_directory_uri(); ?>/img/spritemap.svg#twitter"></use></svg></span>
								<a href="#" class="twitter-name">@TWITTERNAME</a>
							</div>
						</div>
						<a href="#" class="category-tag">Twitter</a>
					</div>
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/_temp-landing-a-1.jpg" alt="" class="visible-mobile img-full">
				</div>

				<div class="col-sm-6 col-sm-pull-6 col-md-5 col-md-pull-5 content-box-copy">
					<h2>A Longer Secondary Headline Here Introducing This Section</h2>
					<p>Lorem ised ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae.</p>
					<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
				</div>
			</div>
		</div>
	</div>
    
   <?php get_footer(); ?>