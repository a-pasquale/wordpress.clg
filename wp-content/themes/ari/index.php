<?php get_header(); ?>

<div id="main" class="span8">
  <div class="row">
	<div id="content">
		<?php get_template_part( 'loop', 'index' );	?>
	</div>
	<!--end Content-->
    <?php get_sidebar('secondary'); ?>
  </div> <!-- end of row -->
<!--end Main-->

<?php get_footer(); ?>
