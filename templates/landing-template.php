<?php /*
 * Template Name: Landing Template
 */
?>
<?php get_header(); 
 
?>

<main id="content">
 	<div class="landing-wrapper">

	<?php 
	if( have_rows('item_block') ){
		$counter = 0;

		while ( have_rows('item_block') ){
			the_row();
			$title = get_sub_field('title');
			$sub_text = get_sub_field('sub_text');
			$page_link = get_sub_field('page_link');
			$image = get_sub_field('image');
 

			//open row div
			if($counter % 3 == 0)
				echo "<div class='row'>"; ?>

			<div class="columns-4 no-padding">
				<div class="landing-block " style="background-image: url('<?php echo $image['sizes']['background-fullscreen'] ?>')">
			   	 	<div class="hover-text large-text">
			   	 		<div class="middle">
				   	 		<a href="<?php echo $page_link; ?>"><?php echo $title; ?></a>
				   			<span class="sub-text"><?php echo $sub_text; ?></span>
			   			</div>
			   	 	</div>
			   		
				</div>
			</div>


			<?php 
			//wrap every three article in a row
			if($counter % 3 == 2)
				echo "</div>"; 
				
			

		} 

		$final_block_text = get_field('final_block_text');
		$final_block_link = get_field('final_block_link');


		?>

		
		<div class="columns-4 no-padding">
			<div class="landing-block " >
		   	 	<div class="large-text hover-text show-text">
		   	 		<div class="middle">
		   	 			<a href="<?php echo $final_block_link; ?>"><?php echo $final_block_text; ?></a> 
		   	 		</div>
		   	 	</div>
		   		
			</div>
		</div>
		<?php 
		
		if($counter % 3 == 2)
				echo "</div>"; 
		$counter++; 
		
		//close out final row div
		if($counter %3 != 0) 
			echo "</div>"; 
			
	}

	?>

 		
 	</div>
 
</main><!-- End of Content -->

<?php get_footer(); ?>
 
