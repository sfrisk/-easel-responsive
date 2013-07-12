			<?php if (!easel_sidebars_disabled()) easel_get_sidebar('under-blog'); ?>
</section>
		
<?php 
if (!easel_is_signup() && !easel_sidebars_disabled()) {
	if (easel_is_layout('3cl,3cr')) easel_get_sidebar('left');
	if (easel_is_layout('2cr,3c,3cr')) easel_get_sidebar('right');
}
?>

	</div> <!-- subcontent-wrapper -->
	<div id="subcontent-wrapper-foot"><?php do_action('easel-subcontent-wrapper-foot'); ?></div>
</div><!-- content-wrapper -->
