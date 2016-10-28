<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->

<head>

	<meta charset="utf-8">
	<title><?php bloginfo('name'); ?></title>

	<!-- Meta / og: tags -->
	<meta name="description" content="">
	<meta name="author" content="">

	<!-- Mobile Specific Metas
	================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!-- CSS
	================================================== -->
	<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
	<script src="https://use.typekit.net/nxl3udu.js"></script>
	<script>try{Typekit.load({ async: true });}catch(e){}</script>

	<!-- Favicons
	================================================== -->
	<link rel="shortcut icon" href="favicon.ico">
	<link rel="apple-touch-icon" href="apple-touch-icon.png">
	<link rel="apple-touch-icon" sizes="72x72" href="apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="114x114" href="apple-touch-icon-114x114.png">

	<?php wp_head(); ?>

</head>

<body <?php body_class(); ?> >
 
	<header>
		<div class="container">

			<div class="columns-8 offset-by-1">
				<div class="logo">
					 <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"> <img src="<?php bloginfo( 'template_url' ); ?>/img/logo.png" alt=""></a> 
				</div>
				
			</div>
		</div>	 
		<div id="nav-icon" class="sidr-trigger" >
		  <span></span>
		  <span></span>
		  <span></span>
		</div>

			 
			<nav class="main-navigation">
				<?php if(has_nav_menu('main_nav')){
							$defaults = array(
								'theme_location'  => 'main_nav',
								'menu'            => 'main_nav',
								'container'       => false,
								'container_class' => '',
								'container_id'    => '',
								'menu_class'      => 'menu',
								'menu_id'         => '',
								'echo'            => true,
								'fallback_cb'     => 'wp_page_menu',
								'before'          => '',
								'after'           => '',
								'link_before'     => '',
								'link_after'      => '',
								'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
								'depth'           => 0,
								'walker'          => ''
							); wp_nav_menu( $defaults );
						}else{
							echo "<p><em>main_nav</em> doesn't exist! Create it and it'll render here.</p>";
						} ?>
			</nav>

		
	</header>