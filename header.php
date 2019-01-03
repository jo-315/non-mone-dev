<?php
// ヘッダー
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <!-- 共通設定 -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta charset="<?php bloginfo( 'charset' ); ?>">
	<?php wp_head(); ?>
</head>

<body>
	<header role="banner">
    <?php get_template_part( 'template-parts/header', 'navigation' ); ?>

    <!-- header画像 -->
		<div class="header-img-wrap">
  		<!-- <div class="header-img"> -->
    		<div id="content-effect">
        <!-- </div> -->
  		</div>
    </div>

    <!-- パンくず -->
		<!-- <div class="breadcrumbs" typeof="BreadcrumbList" vocab="https://schema.org/">
			<?php if(function_exists('bcn_display'))
			{
				// bcn_dissplay();
			}?>
		</div> -->


	</header>
	<div id="content" class="site-content">
		<div class="container">
