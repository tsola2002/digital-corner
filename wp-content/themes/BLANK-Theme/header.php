<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>" />

	<?php if (is_search()) { ?>
	   <meta name="robots" content="noindex, nofollow" /> 
	<?php } ?>

	<title>
		   <?php
		      if (function_exists('is_tag') && is_tag()) {
		         single_tag_title("Tag Archive for &quot;"); echo '&quot; - '; }
		      elseif (is_archive()) {
		         wp_title(''); echo ' Archive - '; }
		      elseif (is_search()) {
		         echo 'Search for &quot;'.wp_specialchars($s).'&quot; - '; }
		      elseif (!(is_404()) && (is_single()) || (is_page())) {
		         wp_title(''); echo ' - '; }
		      elseif (is_404()) {
		         echo 'Not Found - '; }
		      if (is_home()) {
		         bloginfo('name'); echo ' - '; bloginfo('description'); }
		      else {
		          bloginfo('name'); }
		      if ($paged>1) {
		         echo ' - page '. $paged; }
		   ?>
	</title>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<link rel="shortcut icon" href="/favicon.ico">

    <!-- Bootstrap -->
    <link href="<?php bloginfo('template_url'); ?>/css/bootstrap.css" rel="stylesheet" media="screen">
    <link href="<?php bloginfo('template_url'); ?>/css/theme.css" rel="stylesheet" media="screen">

    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
	
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
	
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
    <link rel="shortcut icon" href="<?php bloginfo('template_url'); ?>/images/favicon.ico"/>


    <?php if ( is_singular() ) wp_enqueue_script('comment-reply'); ?>

	<?php wp_head(); ?>

    <script src="<?php bloginfo('template_url'); ?>/js/jquery.hoverflow.min.js"></script>
    <script src="<?php bloginfo('template_url'); ?>/js/digital.js"></script>
</head>

<body <?php body_class(); ?>>
	
	<div id="page-wrap" class="container">

		<header class="row header">
            <div id="logo" class="col col-lg-4"><a href="<?php bloginfo('url') ?>"><img src="<?php bloginfo('template_url'); ?>/images/logo.png" alt=""/></a></div>
            <div id="stamp" class="col col-lg-6"><img src="<?php bloginfo('template_url'); ?>/images/poster_marks.png" alt=""/></div>
			<!--<h1><a href="<?php /*echo get_option('home'); */?>/"><?php /*bloginfo('name'); */?></a></h1>
			<div class="description"><?php /*bloginfo('description'); */?></div>-->
		</header>