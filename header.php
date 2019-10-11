<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <link rel="preload" href=<?php echo get_stylesheet_uri() ?> as="style" onload="this.onload=null;this.rel='stylesheet'">
  <noscript><link rel="stylesheet" href=<?php echo get_stylesheet_uri() ?>></noscript>
  <?php if (is_single()) { ?>
    <link rel="preload" href=<?php echo get_template_directory_uri() . '/css/single.css' ?> as="style" onload="this.onload=null;this.rel='stylesheet'">
    <noscript><link rel="stylesheet" href=<?php echo get_template_directory_uri() . '/css/single.css' ?>></noscript>
  <?php } elseif(is_home()) { ?>
    <link rel="preload" href=<?php echo get_template_directory_uri() . '/css/front.css' ?> as="style" onload="this.onload=null;this.rel='stylesheet'">
    <noscript><link rel="stylesheet" href=<?php echo get_template_directory_uri() . '/css/front.css' ?>></noscript>
    <link rel="preload" href=<?php echo get_template_directory_uri() . '/css/index.css' ?> as="style" onload="this.onload=null;this.rel='stylesheet'">
    <noscript><link rel="stylesheet" href=<?php echo get_template_directory_uri() . '/css/index.css' ?>></noscript>
  <?php } else { ?>
    <link rel="preload" href=<?php echo get_template_directory_uri() . '/css/index.css' ?> as="style" onload="this.onload=null;this.rel='stylesheet'">
    <noscript><link rel="stylesheet" href=<?php echo get_template_directory_uri() . '/css/index.css' ?>></noscript>
  <?php }  ?>
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
      <div class="glide_wrapper">
        <div id="glide" class="glide">
          <div class="glide__track" data-glide-el="track">
            <ul class="glide__slides">

              <?php
                $categories = get_categories();

                foreach( $categories as $category ){
                  $ID = $category->term_id;
                  $slug = $category->slug;
                  $name = $category->name;
              ?>

                <li class="glide__slide glide__slide--1">
                  <a href='<?php echo get_category_link( $ID )?>' >
                    <img
                      data-src="<?php echo get_stylesheet_directory_uri(); ?>/images/<?php echo $slug ?>.png"
                      alt="<?php echo $name?>"
                      class="lazyload"
                    >
                  </a>

                  <div class="glide__slide_desc glide__slide_desc--left">
                    <?php echo $name?>
                  </div>

                  <div class="glide__slide_desc glide__slide_desc--right">
                    <?php
                      switch ($slug) {
                        case 'international-cooperation':
                          echo '国境を超え活動しているライターの体験記';
                          break;
                        case 'study-abroad':
                          echo '留学を通して感じたこと・楽しかったことなどを綴った体験談';
                          break;
                        case 'nature-conservation':
                          echo '自然の中で体を動かすのは、きっと皆さんが想像している以上に楽しい';
                          break;
                        case 'intern':
                          echo 'インターンは多くを学べる絶好の機会';
                          break;
                        case 'festival':
                          echo '祭りが人を熱くさせる';
                          break;
                        case 'interview':
                          echo 'いろんな話、聞いてきました！';
                          break;
                        case 'challenge':
                          echo 'こんなこと、やってみました！';
                          break;
                        case 'other':
                          echo 'カテゴライズできないニッチな活動';
                          break;
                      }
                    ?>
                  </div>
                </li>

              <?php
                }
              ?>
            </ul>

            <div class="glide__arrows" data-glide-el="controls">
              <button class="glide__arrow glide__arrow--left" data-glide-dir="<"><<</button>
              <button class="glide__arrow glide__arrow--right" data-glide-dir=">">>></button>
            </div>
          </div>
        </div>
      </div>

      <script>
        var glide = new Glide('#glide', {
          type: 'carousel',
          startAt: Math.floor( Math.random() * 4 ), //slideの数に合わせる
          perView: 4,
          focusAt: 1,
          peek: 0,
          autoplay: 4000,
          breakpoints: {
            770: {
              perView: 1,
              focusAt: 0,
            }
          }
        })
        glide.mount()
      </script>

    </div>

    <div class="back-top-button">
        Top<i class="fa fa-angle-double-up" aria-hidden="true"></i>
    </div>

  </header>

	<div class="site-content">
    <div class="main_content_wrapper">
      <?php
        if (is_front_page() || is_single()) {
          set_query_var( 'part', 'header' );
          get_template_part( 'template-parts/content', 'portfolio' );
        };
      ?>
