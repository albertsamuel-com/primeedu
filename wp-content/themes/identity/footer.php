<?php

	global $prof_default;

?>
 
 
	<footer class="text-center">
		<!-- Footer Text -->
			<div class="container text-center item_top">
			
				<!-- Footer Logo
				================================================== -->
				<?php if(of_get_option('select_footer_logo',$prof_default) == 'On') { ?>
					<?php 
						if(of_get_option('select_footer_newtab',$prof_default) == 'On') {
							$target = 'target="_blank"';
						} else {
							$target = '';
						}
					?>
					<a <?php echo $target; ?> href="<?php echo esc_url(of_get_option('footer_logo_url',$prof_default)); ?>">
						<img class="footer-logo" src="<?php echo of_get_option('footer_logo',$prof_default); ?>" alt="footer logo">
					</a>
				<?php } ?>	
			
			
			
				<!-- Footer Copyrights Section
				================================================== -->				
				<?php if(of_get_option('select_copyrights_columns',$prof_default) == 'On') { ?>
					<?php
						$allowed_html = array(
							'a' => array(
								'href' => array(),
								'title' => array()
							),
							'br' => array(),
							'strong' => array(),
						);
						
						$footerText = wp_kses(of_get_option('footer_text',$prof_default), $allowed_html);
					?>
					<div class="identity-copyrights"><?php echo esc_attr($footerText); ?>
					<br><a href="http://primeedu.com.au/privacy-policy/" target="_blank" style="color:#FFF;"><u> Privacy Policy </u></a>
					<br><a href="https://www.mara.gov.au/becoming-an-agent/professional-standards-and-obligations/code-of-conduct/" target="_blank" style="color:#FFF;"><u> Migration Agent Code of Conduct </u></a>	
					</div>
				<?php } ?>			
				
			</div>
		<!-- End Footer Text -->
	</footer>
 
	<?php if(of_get_option('select_backtotop',$prof_default) == 'On') { ?> 
		<a id="back-top" href="#" style="display: none;"><i class="fa fa-angle-up fa-2x"></i></a>
	<?php } ?>
	
	
	<!-- Footer End
	================================================== -->		

<?php wp_footer(); ?>
</body>
</html>