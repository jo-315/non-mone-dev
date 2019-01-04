<?php
// ヘッダー
?><!DOCTYPE html>
<?php
  // 現在のカテゴリ
  $current_cat = get_queried_object();
  $current_cat_name = $current_cat->name;

  $categories = get_the_category();
  foreach($categories as $category){
    if($category->parent != 0){
      $sub_cat_name = $category->cat_name;
    } else {
      $parent_cat_name = $category->cat_name;
    }
  };

  if($current_cat_name == $sub_cat_name){
    $child_cat_name = $current_cat_name;
  };

  $space_class = '';
  if ($parent_cat_name == 'No Money Action' || $child_cat_name == 'No Money Action') {
    $space_class = 'child-category-space';
  };

?>
<html <?php language_attributes(); ?>>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <link rel="preload" href=<?php echo get_stylesheet_uri() ?> as="style" onload="this.onload=null;this.rel='stylesheet'">
  <noscript><link rel="stylesheet" href=<?php echo get_stylesheet_uri() ?>></noscript>
  <link rel="preload" href=<?php echo (get_template_directory_uri() . '/css/post.css') ?> as="style" onload="this.onload=null;this.rel='stylesheet'">
  <noscript><link rel="stylesheet" href=<?php echo (get_template_directory_uri() . '/css/post.css') ?>></noscript>
  <link rel="preload" href=<?php echo (get_template_directory_uri() . '/css/font-awesome.min.css') ?> as="style" onload="this.onload=null;this.rel='stylesheet'">
  <noscript><link rel="stylesheet" href=<?php echo (get_template_directory_uri() . '/css/font-awesome.min.css') ?>></noscript>
  <script>
    !function(t){"use strict";t.loadCSS||(t.loadCSS=function(){});var e=loadCSS.relpreload={};if(e.support=function(){var e;try{e=t.document.createElement("link").relList.supports("preload")}catch(a){e=!1}return function(){return e}}(),e.bindMediaToggle=function(t){function e(){t.addEventListener?t.removeEventListener("load",e):t.attachEvent&&t.detachEvent("onload",e),t.setAttribute("onload",null),t.media=a}var a=t.media||"all";t.addEventListener?t.addEventListener("load",e):t.attachEvent&&t.attachEvent("onload",e),setTimeout(function(){t.rel="stylesheet",t.media="only x"}),setTimeout(e,3e3)},e.poly=function(){if(!e.support())for(var a=t.document.getElementsByTagName("link"),n=0;n<a.length;n++){var o=a[n];"preload"!==o.rel||"style"!==o.getAttribute("as")||o.getAttribute("data-loadcss")||(o.setAttribute("data-loadcss",!0),e.bindMediaToggle(o))}},!e.support()){e.poly();var a=t.setInterval(e.poly,500);t.addEventListener?t.addEventListener("load",function(){e.poly(),t.clearInterval(a)}):t.attachEvent&&t.attachEvent("onload",function(){e.poly(),t.clearInterval(a)})}"undefined"!=typeof exports?exports.loadCSS=loadCSS:t.loadCSS=loadCSS}("undefined"!=typeof global?global:this);
  </script>

	<?php wp_head(); ?>
</head>

<body class="moire-body">
  <header role="banner">
    <?php get_template_part( 'template-parts/header', 'navigation' ); ?>
    <div class="header-img-wrapper <?php echo $space_class ?>">
      <div class="post-header-title">

        <span>
          <?php echo $parent_cat_name ?>
        </span>

        <?php
          if ($child_cat_name) {
        ?>
            <div class="post-header-sub-title">
              <?php echo $child_cat_name ?>
            </div>
        <?php
          };
        ?>

      </div>

      <?php if ($parent_cat_name === 'No Money Action' || $child_cat_name === 'No Money Action') {?>
        <div class="child-category-item-wrap">
          <ul>
            <li>
              <a href="/international-cooperation">
                国際協力
              </a>
            </li>
            <li>
              <a href="/nature-conservation">
                自然保護
              </a>
            </li>
            <li>
              <a href="/regional-vitalization">
                地域活性
              </a>
            </li>
            <li>
              <a href="/study-abroad">
                留学
              </a>
            </li>
            <li>
              <a href="/intern">
                インターン
              </a>
            </li>
            <li>
              <a href="/other">
                その他
              </a>
            </li>
          </ul>
        </div>
      <?php } ?>
    </div>
	</header>
