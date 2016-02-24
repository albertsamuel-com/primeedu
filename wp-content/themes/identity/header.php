<!DOCTYPE html>
<!--[if gt IE 8]><html class="ie" <?php language_attributes(); ?>><![endif]-->
<!--[if !IE]><!--><html <?php language_attributes(); ?>> <!--<![endif]-->



<!-- Head Section Started
================================================== -->
<head>


	<!-- Basic Page Needs
  ================================================== -->
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<title><?php wp_title('|', true, 'right'); ?></title>

	
	
	<!-- Get Variables and include files
  ================================================== -->	
	<?php			

		global $prof_default;
		
		$prof_siteboxedlayout = false;
		
		if(is_front_page() && !is_home()){ $sentient_front_page = 'home-page';} else { $sentient_front_page = 'single-page';}		
		if(is_user_logged_in()) {$identity_user_logged = 'identity-user-logged';} else {$identity_user_logged = '';}
		if(of_get_option('bran_layout',$prof_default) == 'Boxed'){$boxed = 'boxed';} else {$boxed = '';}			
		if(of_get_option('select_animation',$prof_default) == 'On'){$identityMobile = 'identity-mobile-put-animation';} else {$identityMobile = 'identity-mobile-hide-animation';}
		if(of_get_option('select_bran_header',$prof_default) == 'Opened'){$branMenu ='menu-open'; $MenuContainer ='opened';} else {$branMenu ='menu-close'; $MenuContainer ='';}
		if(wp_is_mobile()){
			$identityDevice = 'identity-mobile-device';
		}else{
			$identityDevice = 'identity-pc-device';
		}
	?>

	
	<!-- Responsive is enabled 
	================================================== -->	
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	
	<!-- Favicons
	================================================== -->
	<link rel="shortcut icon" href="<?php echo esc_url(of_get_option('theme_favicon',$prof_default)); ?>" type="image/vnd.microsoft.icon"/>	
	
	<?php wp_head(); ?>	
</head>
<!-- Head Section End
================================================== -->




<!-- Body Section Started
================================================== -->
<body <?php body_class($sentient_front_page . ' ' . $boxed . ' ' . $identityMobile . ' ' . $identityDevice . ' ' ); ?>>

	<!-- Facebook Plugin -->
	<div id="fb-root"></div>
	<script>(function(d, s, id) {
	  var js, fjs = d.getElementsByTagName(s)[0];
	  if (d.getElementById(id)) return;
	  js = d.createElement(s); js.id = id;
	  js.src = "//connect.facebook.net/en_GB/sdk.js#xfbml=1&appId=78173498955&version=v2.0";
	  fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'facebook-jssdk'));</script>
	
	<!-- Pre-loader -->
	<div class="mask">
		<div id="intro-loader">
		</div>
	</div>
	<!-- End Pre-loader -->



	<!-- Navbar -->
		<!-- Navigation -->
		<div class="navbar navbar-fixed-top <?php echo $identity_user_logged; ?>">
			<nav id="navigation-sticky" class="trans-nav">
				<!-- Navigation Inner -->
				<div class="container inner">
					<div class="logo">
						<!-- Navigation Logo Link -->
						<a href="<?php  echo home_url() ; ?>" title="<?php bloginfo( 'name' ) ?>" rel="home" class="scroll">
							<?php if (of_get_option('select_display_logo',$prof_default) == 'On'){?>
								<img src="<?php echo of_get_option('theme_logo',$prof_default); ?>" alt="logo" class="site_logo" />						
							<?php } else { ?>
								<div><?php echo of_get_option('theme_site_logo_text',$prof_default); ?></div>
							<?php } ?>
						</a>					
					</div>
					
					
					<!-- Mobile Menu Button -->
					<a class="mobile-nav-button"><i class="fa fa-bars"></i></a>
					<!-- Navigation Menu -->
					<div class="nav-menu">
						<div class="nav">
							<?php
								if(is_front_page() && !is_home()){
									wp_nav_menu( array( 'theme_location' => 'header-menu' , 'menu_class' => 'menu nav', 'fallback_cb' => 'identity_menu_fall_back', 'walker' => new identity_description_walker() ));
								} else {
									wp_nav_menu( array( 'theme_location' => 'header-menu' , 'menu_class' => 'menu nav', 'fallback_cb' => 'identity_menu_fall_back', 'walker' => new identity_inner_walker() ));
								}
							?>
						</div>
					</div>
					<!-- End Navigation Menu -->
				</div>
			<!-- End Navigation Inner -->
			</nav>
			<!-- End Navigation -->
		</div>
	<!-- End Navbar -->
	
   <!-- === START SLIDER SECTION === -->		
	<?php if(is_front_page() && !is_home()){ ?>
		<section id="home">
			<?php echo do_shortcode(of_get_option('page_slider',$prof_default)); ?>
		</section>						
	<?php } ?>
	<!-- === END SLIDER SECTION === -->			