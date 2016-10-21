<?php /*
 * Template Name: Landing Template
 */
?>
<?php get_header(); 

    $image = get_field('background_image');
?>

<main id="content" class="homepage-bg" style="background-image: url('<?php echo $image['sizes']['background-fullscreen'] ?>');">

	<div class="container">
		<div class="row">
			<div class="nine columns">
				<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

					<h1><?php the_title(); ?></h1>

					<?php the_content(); ?>

				<?php endwhile; ?>
			</div>

 

		</div>
	</div>

</main><!-- End of Content -->

<?php get_footer(); ?>




<div class="row">	
		<div class="columns-4 no-padding">
			<div class="landing-block">
		   		<img src="http://lorempixel.com/900/900/" alt="" />
		   		<a href="http://google.com" class="hover-text">Link</a>
			</div>
		</div>
		<div class="columns-4 no-padding">
			<div class="landing-block">
		   		<img src="http://lorempixel.com/900/900/" alt="" />
		   		<a href="http://google.com" class="hover-text">Link</a>
			</div>
		</div>
		<div class="columns-4 no-padding">
			<div class="landing-block">
		   		<img src="http://lorempixel.com/900/900/" alt="" />
		   		<a href="http://google.com" class="hover-text">Link</a>
			</div>
		</div>
	</div>	
	<div class="row">	
		<div class="columns-4 no-padding">
			<div class="landing-block">
		   		<img src="http://lorempixel.com/900/900/" alt="" />
		   		<a href="http://google.com" class="hover-text">Link</a>
			</div>
		</div>
		<div class="columns-4 no-padding">
			<div class="landing-block">
		   		<img src="http://lorempixel.com/900/900/" alt="" />
		   		<a href="http://google.com" class="hover-text">Link</a>
			</div>
		</div>
		<div class="columns-4 no-padding">
			<div class="landing-block">
		   		<img src="http://lorempixel.com/900/900/" alt="" />
		   		<a href="http://google.com" class="hover-text">Link</a>
			</div>
		</div>
	</div>
