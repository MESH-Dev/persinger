<?php 
	get_header(); 
 	$image = get_field('background_image');

?>

<main id="content">
	<?php if ( have_posts() ) while ( have_posts() ) : the_post(); 
			
	?>
	<div class="half-bg" style="background-image: url('<?php echo $image['sizes']['background-halfscreen'] ?>');">
	</div>

	<div class="columns-4 offset-by-7">
		<div class="page-content">
			<h1><?php the_title(); ?></h1>
			<?php the_content();?>
		</div>
	</div>

		
		 
	 
	 
	</div> 
	<?php endwhile;  ?>
</main><!-- End of Content -->

<?php get_footer(); ?>