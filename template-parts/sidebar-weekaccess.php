<div class="sidebar_item_title sidebar_item_title_crown">
  <span>アクセスランキング</span>
</div>

<div class="popular_article">
  <?php if( is_single() && !is_user_logged_in() && !isBot() ): //個別記事 かつ ログインしていない かつ 非ボット
    set_post_views(); //アクセスをカウントする
  endif; ?>

  <?php
    $args = array(
      'post_type'     => 'post',
      'numberposts'   => 3,       //表示数
      'meta_key'      => 'pv_count',
      'orderby'       => 'meta_value_num',
      'order'         => 'DESC',
    );
    $posts = get_posts( $args );
    if( $posts ):
  ?>

  <?php
    $count = 0;
    foreach( $posts as $post ) : setup_postdata( $post );

    $count += 1;
  ?>

  <ul>

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
  </ul>

  <?php
    endforeach;
    wp_reset_postdata();
  ?>
  <?php else : ?>
    <p>カウントの集計中...</p>
  <?php endif; ?>

</div>
