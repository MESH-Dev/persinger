<?php get_header(); 

    $image = get_field('background_image');
 
?>

<main id="content">
<div class="full-bg" style="background-image: url('<?php echo $image['sizes']['background-fullscreen'] ?>');">
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
</div>
<div class="white-bg">
	<div class="container project-content">
		<div class="row">
			<div class="columns-4 offset-by-1">
				<div class="project-info">
					Project Info here
				</div>
			</div>
			<div class="columns-6 offset-by-1">
				<div class="project-info">
					<?php the_content(); ?>
				</div>
			</div>

		</div>

	</div>
</div>
 
			
			 
			
			
 
		
 
		
	<?php endwhile; ?>

</main><!-- End of Content -->	 
 
<?php get_footer(); ?>