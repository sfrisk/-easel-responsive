<div id="menubar-wrapper" class="navbar clear">
	<div class="navbar-inner">
		<div class="container">

	 <!-- .btn-navbar is used as the toggle for collapsed navbar content -->
		      <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
				      </a>

		<!-- Everything you want hidden at 940px or less, place within here -->
		<div class="nav-collapse collapse">
		<?php do_action('easel-menubar-before'); ?>
		<?php
			// dont mess with the pre_get_posts for the wp_nav_menu()
			wp_nav_menu( array( 'sort_column' => 'menu_order', 'container' => 'nav', 'menu_class' => 'nav', 'theme_location' => 'Primary' ) );
			//do_action('easel-menubar-after');
			do_action('comic-mini-navigation');
		?>

			<?php if (easel_themeinfo('enable_rss_in_menubar') && !easel_themeinfo('menubar_social_icons')) { ?>
				<a href="<?php bloginfo('rss2_url') ?>" title="RSS Feed" class="menunav-rss">RSS</a>
			<?php } ?>

			
			<?php do_action('easel-menubar-menunav'); ?>
			<?php if (easel_themeinfo('enable_search_in_menubar')) { ?>
				<?php get_search_form(); ?>
			<?php } ?>
			
			<?php // do_action('easel-menubar-mini-navigation'); ?>
		</div>
		</div>
	</div>
</div>