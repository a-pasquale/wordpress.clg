<?php get_header(); ?>

<div id="main" class="container">
  <div id="content" class="row">
    <div class="span4">
        <?php get_sidebar('primary'); ?>
	</div>
	<!--end Sidebar One-->
		<div id="page" class="span8">
		<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

					<?php if ( is_front_page() ) { ?>
						<h2><?php the_title(); ?></h2>
					<?php } else { ?>	
						<h1><?php the_title(); ?></h1>
					<?php } ?>				

						<?php the_content(); ?>
						<div class="clear"></div>
						<?php wp_link_pages( array( 'before' => '' . __( 'Pages:', 'ari' ), 'after' => '' ) ); ?>
						<?php edit_post_link( __( 'Edit this page &rarr;', 'ari' ), '', '' ); ?>

				<?php comments_template( '', true ); ?>

		<?php endwhile; ?>
		</div>
		<!--end Page-->
	</div>
	<!--end Content-->

<!--end Main-->

<?php get_footer(); ?>
