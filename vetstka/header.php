<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=0">
<meta charset="<?php echo esc_html( get_bloginfo('charset') ); ?>">

<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="alternate" type="application/rss+xml" title="<?php echo esc_html( get_bloginfo('name') ); ?> RSS Feed" href="<?php echo esc_html( get_bloginfo('rss2_url') ); ?>">
<!-- wp_header -->
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<!-- wp_after_body -->
<?php wp_after_body(); ?>

<!-- BEGIN TOP ANCHOR -->
<div class="top-anchor"></div>
<!-- END TOP ANCHOR -->

<!-- BEGIN Desktop MENU -->
<div class="main-site-menu">
	<div class="header-wrap">
        <div class="main-site-menu-logo">
            <a href="/" class="logo">
                <img src="http://usafootballnews.com/wp-content/uploads/2020/06/logo-v1.png" alt="" style="height: 100px;">
            </a>
        </div>
        <nav class="main-site-menu-nav">
            <? wp_nav_menu( array('menu' => 'topp' , 'menu_class' => 'top-menu'));	?>
        </nav>	
    </div>
</div>
<!-- END Desktop MENU -->	

<div id="sitewrap">
	<div id="sitewrap-inner">
		<div id="body" class="pagewidth clearfix">