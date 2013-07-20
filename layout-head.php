
<div id="content-wrapper" class="container-fluid">
	
	<div id="content-wrapper-head" class="row-fluid"><?php do_action('easel-content-wrapper-head'); ?></div>


	<?php 
	$comicSidebars="";
	$comicSidebarCount =0;
	if(is_active_sidebar('ceo-sidebar-left-of-comic')){
		$comicSidebars = $comicSidebars . 'leftSidebar ';
		$comicSidebarCount += 1;
	}
	if(is_active_sidebar('ceo-sidebar-right-of-comic')){
		$comicSidebars = $comicSidebars . 'rightSidebar ';
		$comicSidebarCount += 1;
	}

	?>

	<div class="row-fluid <?php echo $comicSidebars;?> comicSidebars<?php echo $comicSidebarCount ?>"> 

		<?php do_action('easel-content-area'); ?>
		<?php do_action('comic-area'); ?>
	</div>
	
	<div id="subcontent-wrapper-head" class="row-fluid"><?php do_action('easel-subcontent-wrapper-head'); ?></div>
	<div id="subcontent-wrapper" class="row-fluid">
		<?php do_action('easel-subcontent-area-top'); ?>
<?php
if (!easel_is_signup() && !easel_sidebars_disabled()) {
		if (easel_is_layout('2cl,3c,3cl')) easel_get_sidebar('left');
		if (easel_is_layout('3cl')) easel_get_sidebar('right');
}
?>

		<section id="content" class="
		<?php if (easel_is_layout('3c,3cl,3cr')) { 
			echo 'span6';
			}else{
			echo 'span8';
			} ?>">
		<?php if (is_home() && !easel_sidebars_disabled()) easel_get_sidebar('over-blog'); ?>
		<?php do_action('comic-blog-area'); ?>
		<?php do_action('easel-narrowcolumn-area'); ?>




