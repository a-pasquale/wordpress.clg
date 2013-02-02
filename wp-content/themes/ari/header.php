<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0" />
	<title><?php global $page, $paged;
	wp_title( '|', true, 'right' );
	bloginfo( 'name' );
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) )
		echo " | $site_description";
	if ( $paged >= 2 || $page >= 2 )
		echo ' | ' . sprintf( __( 'Page %s', 'ari' ), max( $paged, $page ) );
	?></title>
	<link rel="stylesheet" href="<?php bloginfo( 'stylesheet_url' ); ?>" type="text/css" media="all" />
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/bootstrap/css/bootstrap.min.css" type="text/css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/bootstrap/css/bootstrap-responsive.min.css" type="text/css">
	<link rel="stylesheet" href="<?php bloginfo( 'stylesheet_url' ); ?>" type="text/css" media="all" />
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
	<?php if ( is_singular() && get_option( 'thread_comments' ) ) wp_enqueue_script( 'comment-reply' ); ?>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<div id="wrap" class="container">
  <div class="row">
        <div class="logo span12">
            <?php if (get_option('ari_logo-image') ) : ?>
            <a href="<?php echo home_url(); ?>"><img src="<?php echo (get_option('ari_logo-image')) ? get_option('ari_logo-image') : get_template_directory_uri() . '/images/logo.png' ?>" alt="<?php bloginfo('name'); ?>" /></a>

            <?php else : ?>

            <h1><a href="<?php echo home_url( '/' ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>"><?php bloginfo( 'name' ); ?></a></h1><p><?php bloginfo( 'description' ); ?></p>
            <?php endif; ?>
        </div><!--end Logo-->
  </div>
  <div class="row">
	<div id="sidebar-primary" class="span3">
        <?php get_sidebar('primary'); ?>
        <div class="hidden-phone">
            <?php get_sidebar('secondary'); ?>
        </div>
    </div><!-- end sidebar-primary -->
