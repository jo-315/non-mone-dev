<aside class="sidebar-single-wrap">

  <!-- moire -->
  <div class="sidebar_item_wrapper">
    <?php get_template_part( 'template-parts/sidebar', 'moire' ); ?>
  </div>

  <!-- 人気記事 -->
  <div class="sidebar_item_wrapper">
    <?php get_template_part( 'template-parts/sidebar', 'popular' ); ?>
  </div>

  <div class="sidebar_follow">
    <!-- アクセスランキング -->
    <div class="sidebar_item_wrapper">
      <?php get_template_part( 'template-parts/sidebar', 'weekaccess' ); ?>
    </div>

    <!-- キーワード -->
    <div class="sidebar_item_wrapper">
      <?php get_template_part( 'template-parts/sidebar', 'keyword' ); ?>
    </div>
  </div>

</aside>
