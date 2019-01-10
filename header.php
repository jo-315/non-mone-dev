<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <link rel="preload" href=<?php echo get_stylesheet_uri() ?> as="style" onload="this.onload=null;this.rel='stylesheet'">
  <noscript><link rel="stylesheet" href=<?php echo get_stylesheet_uri() ?>></noscript>
  <link rel="preload" href=<?php echo get_template_directory_uri() . '/css/index.css' ?> as="style" onload="this.onload=null;this.rel='stylesheet'">
  <noscript><link rel="stylesheet" href=<?php echo get_template_directory_uri() . '/css/index.css' ?>></noscript>
  <script src=<?php echo get_template_directory_uri() . "/js/glide.min.js"?>></script>
  <script>
    !function(t){"use strict";t.loadCSS||(t.loadCSS=function(){});var e=loadCSS.relpreload={};if(e.support=function(){var e;try{e=t.document.createElement("link").relList.supports("preload")}catch(a){e=!1}return function(){return e}}(),e.bindMediaToggle=function(t){function e(){t.addEventListener?t.removeEventListener("load",e):t.attachEvent&&t.detachEvent("onload",e),t.setAttribute("onload",null),t.media=a}var a=t.media||"all";t.addEventListener?t.addEventListener("load",e):t.attachEvent&&t.attachEvent("onload",e),setTimeout(function(){t.rel="stylesheet",t.media="only x"}),setTimeout(e,3e3)},e.poly=function(){if(!e.support())for(var a=t.document.getElementsByTagName("link"),n=0;n<a.length;n++){var o=a[n];"preload"!==o.rel||"style"!==o.getAttribute("as")||o.getAttribute("data-loadcss")||(o.setAttribute("data-loadcss",!0),e.bindMediaToggle(o))}},!e.support()){e.poly();var a=t.setInterval(e.poly,500);t.addEventListener?t.addEventListener("load",function(){e.poly(),t.clearInterval(a)}):t.attachEvent&&t.attachEvent("onload",function(){e.poly(),t.clearInterval(a)})}"undefined"!=typeof exports?exports.loadCSS=loadCSS:t.loadCSS=loadCSS}("undefined"!=typeof global?global:this);
  </script>

	<?php wp_head(); ?>
</head>

<body>
	<header role="banner">
    <?php get_template_part( 'template-parts/header', 'navigation' ); ?>

    <div class="header_glide_wrapper">
      <div class="glide_wrapper">
        <div class="glide header_glide">
          <div class="glide__track" data-glide-el="track">
            <ul class="glide__slides">
              <li class="glide__slide">
                <a href="#">
                  <img src="http://nonmonedev.local/wp-content/uploads/2018/12/大切なのは言語じゃない。年末だし、ロシア留学で気付いたことを振り返ります-80.jpg" alt="">
                </a>
              </li>
              <li class="glide__slide">
                <a href="#">
                  <img src="http://nonmonedev.local/wp-content/uploads/2018/12/234083-1024x576.jpg" alt="">
                </a>
              </li>
              <li class="glide__slide">
                <a href="#">
                  <img src="http://nonmonedev.local/wp-content/uploads/2018/12/IMG_6092.jpg" alt="">
                </a>
              </li>
              <li class="glide__slide">
                <a href="#">
                  <img src="http://nonmonedev.local/wp-content/uploads/2018/12/image8.jpeg" alt="">
                </a>
              </li>
            </ul>
          </div>

          <div class="glide__arrows" data-glide-el="controls">
            <button class="glide__arrow glide__arrow--left" data-glide-dir="<"><<</button>
            <button class="glide__arrow glide__arrow--right" data-glide-dir=">">>></button>
          </div>
        </div>
      </div>
    </div>
	</header>

  <script>
    new Glide('.header_glide', {
      startAt: 1,
      perView: 3,
      focusAt: 'center',
      autoplay: 3000
    }).mount()
  </script>

	<div id="content" class="site-content">
		<div class="container">
