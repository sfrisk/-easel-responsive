<?php get_template_part('layout', 'foot'); ?>
	<div id="push"></div>
</div> <!-- / #wrap -->
	<footer id="footer">
		<div id="footer-menubar-wrapper" class="container-fluid">
			<?php wp_nav_menu( array( 'sort_column' => 'menu_order', 'depth' => 1, 'fallback_cb' => false, 'container_class' => 'footmenu', 'theme_location' => 'Footer' ) ); ?>
		
		<?php do_action('easel-footer'); ?>
		<?php easel_get_sidebar('footer'); ?>
		<?php if (!easel_themeinfo('disable_footer_text')) easel_footer_text(); ?>
		</div>
	</footer>

<div id="page-foot"><?php do_action('easel-page-foot'); ?></div>

<?php wp_footer(); ?>



	<script src="http://code.jquery.com/jquery.js"></script>
	<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/bootstrap.min.js"></script>
</body>
</html>