<!DOCTYPE html>
<html>
	<head>
	<meta http-equiv="Content-Type" content="<?php bloginfo('html_type') ?>; charset=<?php bloginfo('charset') ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?php wp_title(); ?></title>
	<link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>" type="text/css" media="screen" />
<?php if (!easel_themeinfo('disable_default_design')) { ?>
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style-default.css" type="text/css" media="screen" />
<?php } ?>
	<link rel="pingback" href="<?php bloginfo('pingback_url') ?>" />
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<!-- Project Wonderful Ad Box Loader -->
<!-- Put this after the <body> tag at the top of your page -->
<script type="text/javascript">
   (function(){function pw_load(){
      if(arguments.callee.z)return;else arguments.callee.z=true;
      var d=document;var s=d.createElement('script');
      var x=d.getElementsByTagName('script')[0];
      s.type='text/javascript';s.async=true;
      s.src='//www.projectwonderful.com/pwa.js';
      x.parentNode.insertBefore(s,x);}
   if (window.attachEvent){
    window.attachEvent('DOMContentLoaded',pw_load);
    window.attachEvent('onload',pw_load);}
   else{
    window.addEventListener('DOMContentLoaded',pw_load,false);
    window.addEventListener('load',pw_load,false);}})();
</script>
<!-- End Project Wonderful Ad Box Loader -->
<div id="page-head"><?php do_action('easel-page-head'); ?></div>
<div id="wrap">

		<?php easel_get_sidebar('above-header'); ?>
	<?php
	$hgWidth = 'span12';
	$sWidth = '';
	 if(is_active_sidebar('sidebar-header')){
		$hgWidth = "span6";
		$sWidth = "span6";
	}
	?>


		<header id="header" class="">
			<div class="container-fluid">
				<div class="row-fluid">
					<hgroup class="header-info <?php echo $hgWidth; ?>">
						<h1><a href="<?php echo home_url(); ?>"><?php bloginfo('name') ?></a></h1>
						<h2 class="description"><?php bloginfo('description') ?></h2>
					</hgroup>
					<aside class="<?php $sWidth ?>">
						<?php easel_get_sidebar('header'); ?>
					</aside>
				</div>
			
			<?php 
			if (!easel_themeinfo('disable_default_menubar') && function_exists('easel_menubar')) easel_menubar();
			if (easel_themeinfo('enable_breadcrumbs')) easel_breadcrumbs();
			easel_get_sidebar('menubar');
			?>
			</div>
		</header>
<?php
get_template_part('layout', 'head');
?>