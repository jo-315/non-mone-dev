<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <link rel="preload" href=<?php echo get_stylesheet_uri() ?> as="style" onload="this.onload=null;this.rel='stylesheet'">
  <noscript><link rel="stylesheet" href=<?php echo get_stylesheet_uri() ?>></noscript>
  <link rel="preload" href=<?php echo get_template_directory_uri() . '/css/index.css' ?> as="style" onload="this.onload=null;this.rel='stylesheet'">
  <noscript><link rel="stylesheet" href=<?php echo get_template_directory_uri() . '/css/index.css' ?>></noscript>
  <script>
    !function(t){"use strict";t.loadCSS||(t.loadCSS=function(){});var e=loadCSS.relpreload={};if(e.support=function(){var e;try{e=t.document.createElement("link").relList.supports("preload")}catch(a){e=!1}return function(){return e}}(),e.bindMediaToggle=function(t){function e(){t.addEventListener?t.removeEventListener("load",e):t.attachEvent&&t.detachEvent("onload",e),t.setAttribute("onload",null),t.media=a}var a=t.media||"all";t.addEventListener?t.addEventListener("load",e):t.attachEvent&&t.attachEvent("onload",e),setTimeout(function(){t.rel="stylesheet",t.media="only x"}),setTimeout(e,3e3)},e.poly=function(){if(!e.support())for(var a=t.document.getElementsByTagName("link"),n=0;n<a.length;n++){var o=a[n];"preload"!==o.rel||"style"!==o.getAttribute("as")||o.getAttribute("data-loadcss")||(o.setAttribute("data-loadcss",!0),e.bindMediaToggle(o))}},!e.support()){e.poly();var a=t.setInterval(e.poly,500);t.addEventListener?t.addEventListener("load",function(){e.poly(),t.clearInterval(a)}):t.attachEvent&&t.attachEvent("onload",function(){e.poly(),t.clearInterval(a)})}"undefined"!=typeof exports?exports.loadCSS=loadCSS:t.loadCSS=loadCSS}("undefined"!=typeof global?global:this);
  </script>

	<?php wp_head(); ?>
</head>

<body>
	<header role="banner">
    <?php get_template_part( 'template-parts/header', 'navigation' ); ?>
	</header>
	<div id="content" class="site-content">
		<div class="container">
