</div>
	<footer id="footer">
		<div id="back-top-wrapper">
			<p id="back-top">
				<a href="#top"><?php _e('Top', 'theme1662'); ?></a>
			</p>
		</div>
		<div class="container_16 clearfix">
			<div id="footer-text" class="grid_6">
					<?php $myfooter_text = of_get_option('footer_text'); ?>
					<?php if($myfooter_text){?>
						<?php echo of_get_option('footer_text'); ?>
					<?php } else { ?>
						<a href="<?php bloginfo('url'); ?>/" title="<?php bloginfo('description'); ?>" class="site-name"><?php bloginfo('name'); ?></a>
						&copy; <?php echo date('Y') ?> | 
						<a href="<?php bloginfo('url'); ?>/privacy-policy/" title="Privacy Policy"><?php _e('Privacy Policy', 'theme1662'); ?></a>
					<?php } ?>
					<?php if( is_front_page() ) { ?>
						<!-- {%FOOTER_LINK} -->
					<?php } ?>
			</div>
			<div class="grid_10">
				<?php if ( of_get_option('footer_menu') == 'true') { ?>  
					<nav class="footer">
						<?php wp_nav_menu( array(
							'container'       => 'ul', 
							'menu_class'      => 'footer-nav', 
							'depth'           => 0,
							'theme_location' => 'footer_menu' 
							)); 
						?>
					</nav>
				<?php } ?>
			</div>
			<div id="widget-footer" class="clearfix">
				<?php if ( ! dynamic_sidebar( 'Footer' ) ) : ?>
				  <!--Widgetized Footer-->
				<?php endif ?>
			</div>
		</div><!--.container-->
	</footer>
</div><!--#main-->
<?php wp_footer(); ?> <!-- this is used by many Wordpress features and for plugins to work properly -->
<?php if(of_get_option('ga_code')) { ?>
	<script type="text/javascript">
		<?php echo stripslashes(of_get_option('ga_code')); ?>
	</script>
  <!-- Show Google Analytics -->	
<?php } ?>
</body>
</html>