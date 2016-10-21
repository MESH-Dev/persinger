<?php /*
 * Template Name: Homepage Template
 */
?>

<?php get_header(); 

    $image = get_field('background_image');
    $callout = get_field('callout_text');
?>

<main id="content" class="homepage-bg" style="background-image: url('<?php echo $image['sizes']['background-fullscreen'] ?>');">

	<div class="container">
		<div class="row">
			<div class="columns-5">
				<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

			 	<div class="home-callout">
			 		<?php echo $callout; ?>
			 	</div>		

					 

				<?php endwhile; ?>
			</div>

 

		</div>
	</div>

</main><!-- End of Content -->

<?php get_footer(); ?>
