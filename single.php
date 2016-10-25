<?php get_header(); 

    $image = get_field('background_image');
 
?>


	<div class="parrallax-bg" data-parallax="scroll" data-image-src="<?php echo $image['sizes']['background-fullscreen'] ?>">
		<?php if ( have_posts() ) while ( have_posts() ) : the_post(); 
			$categories = get_the_category();
	 
		?>

		<div class="container">
			<div class="row">
				<div class="columns-4 offset-by-1">
					<div class="project-block">
						<div class="middle">
							<h1 class="large-text"><?php the_title(); ?> </h1>
							 <span class="sub-text">
								<?php if ( ! empty( $categories ) ) {
								    echo esc_html( $categories[0]->name );   
								}?>
							</span> 
						</div>
					</div>
				</div>
			</div>
			 
		</div>

		<div class="arrow-down">
					<a href="#project-content"><i class="fa fa-fw fa-angle-down fa-2x"></i></a>
				</div>

		
	</div>
<main id="content">
	<div class="white-bg">
		<div id="project-content" class="container project-content">
			<div class="row">
				<div class="columns-4 offset-by-1">
					<div class="project-info">
						<h3><?php the_title(); ?></h3>
						<h3><?php the_field('location')?></h3>
				 
					</div>
				</div>
				<div class="columns-6 offset-by-1">
					<div class="project-info">
						<?php the_content(); ?>
					</div>
				</div>

			</div>
		</div>

		<?php 
			if( have_rows('photos') ){
				$counter = 0;

				while ( have_rows('photos') ){
					the_row();
 
					$full_img = get_sub_field('full_width_photo');
					$half_img_one = get_sub_field('half_width_photo_one');
					$half_img_two = get_sub_field('half_width_photo_two');

					?>
					<div class="row padding-bottom">
						<div class="columns-12 ">
							<div class="photos-full" style="background-image: url('<?php echo $full_img['sizes']['background-fullscreen'] ?>');"></div>
						</div>
					</div>

					<div class="row padding-bottom">
						<div class="columns-6 ">
							<div class="photos-half" style="background-image: url('<?php echo $half_img_one['sizes']['background-halfscreen'] ?>');"></div>
						</div>
						<div class="columns-6 ">
							<div class="photos-half" style="background-image: url('<?php echo $half_img_two['sizes']['background-halfscreen'] ?>');"></div>
						</div>
					</div>


					<?php

				}
			}
		?>
		



	</div>

		
	<?php endwhile; ?>

</main><!-- End of Content -->	 
 
<?php get_footer(); ?>