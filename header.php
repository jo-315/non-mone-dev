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

    <div class="header_main">
      <div class="header_main_top_background">
        お金を目的としない活動 NON MONEY ACTION
      </div>
        <div class="glide_wrapper">
          <div class="glide header_glide">
            <div class="glide__track" data-glide-el="track">
              <ul class="glide__slides">
                <li class="glide__slide glide__slide--1">
                  <a href="#">
                    <img src="http://nonmonedev.local/wp-content/uploads/2018/12/大切なのは言語じゃない。年末だし、ロシア留学で気付いたことを振り返ります-80.jpg" alt="">
                  </a>
                  <div class="glide__slide_desc glide__slide_desc--left">
                      国際協力
                  </div>
                  <div class="glide__slide_desc glide__slide_desc--right">
                    ああああああああ
                  </div>
                </li>
                <li class="glide__slide glide__slide--2">
                  <a href="#">
                    <img src="http://nonmonedev.local/wp-content/uploads/2018/12/234083-1024x576.jpg" alt="">
                  </a>
                  <div class="glide__slide_desc glide__slide_desc--left">
                      自然保護
                  </div>
                  <div class="glide__slide_desc glide__slide_desc--right">
                    ああああああああ
                  </div>
                </li>
                <li class="glide__slide glide__slide--3">
                  <a href="#">
                    <img src="http://nonmonedev.local/wp-content/uploads/2018/12/IMG_6092.jpg" alt="">
                  </a>
                  <div class="glide__slide_desc glide__slide_desc--left">
                      地域活性
                  </div>
                  <div class="glide__slide_desc glide__slide_desc--right">
                    ああああああああ
                  </div>
                </li>
                <li class="glide__slide glide__slide--4">
                  <a href="#">
                    <img src="http://nonmonedev.local/wp-content/uploads/2018/12/image8.jpeg" alt="">
                  </a>
                  <div class="glide__slide_desc glide__slide_desc--left">
                      留学
                  </div>
                  <div class="glide__slide_desc glide__slide_desc--right">
                    ああああああああ
                  </div>
                </li>
                <li class="glide__slide glide__slide--5">
                  <a href="#">
                    <img src="http://nonmonedev.local/wp-content/uploads/2018/12/image8.jpeg" alt="">
                  </a>
                  <div class="glide__slide_desc glide__slide_desc--left">
                      インターン
                  </div>
                  <div class="glide__slide_desc glide__slide_desc--right">
                    ああああああああ
                  </div>
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

    <?php get_template_part( 'template-parts/content', 'keyword' ); ?>

    <div>
      portfolio
    </div>

    <div class="back-top-button">
        Top<i class="fa fa-angle-double-up" aria-hidden="true"></i>
    </div>

	</header>

  <script>
    new Glide('.header_glide', {
      type: 'carousel',
      startAt: Math.floor( Math.random() * 5 ),
      perView: 4,
      focusAt: 1,
      autoplay: 2000
    }).mount()
  </script>

	<div class="site-content">
