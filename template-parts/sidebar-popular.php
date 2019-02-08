<div class="sidebar_item_title sidebar_item_title_crown">
  <span>人気記事</span>
</div>

<div class="popular_article">
  <?php
    $the_query = new WP_Query(array(
      'post_status' => 'published',
      'post_type' => 'post',
      'orderby' => 'meta_value_num',
      'meta_key' => '_liked',
      'paged' => (get_query_var('paged')) ? get_query_var('paged') : 1,
      'posts_per_page'=> '3'
    ));

    $count = 1;

    while($the_query->have_posts()):$the_query->the_post();
  ?>

  <li class="popular_article-column popular_article-column-<?php echo $count?>">
    <div class="popular_article_count popular_article_count-<?php echo $count?>">
      <?php echo $count?>
    </div>
    <div class="popular_article_img">
      <?php the_post_thumbnail('large'); ?>
    </div>

    <div class="popular_article_content">
      <div class="popular_article-desc">
        <div class="popular_article-tag">
          <?php
            $categories = get_the_category();
            if ($categories) {
              foreach ($categories as $cat ) {
                echo '<span>' . $cat->name . '</span>';
              }
            }
          ?>
        </div>

        <div class="popular_article-wrap">
          <?php
            moire_theme_posted_by_no_name()
          ?>
        </div>
      </div>

      <?php
        the_title( '<span class="popular_article_title">', '</span>' );
      ?>
    </div>


    <a href="<?php the_permalink(); ?>"></a>
  </li>

<?php
  $count += 1;
  endwhile;
?>
</div>
