<aside class="sidebar-wrap">
  <!-- 人気記事 -->
  <div class="block-wrapper">
    <div class="HP-content-wrapper">
      <div class="popular_article_wrap_title">
        <h2>人気記事</h2>
        <p>
          各記事の最後に設置されたいいねボタンをクリックすることで結果が変動します。</br>
          気に入った記事があったらぜひいいねしてください！
        </p>
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

        <li class="HP-content-column popular_article-column popular_article-column-<?php echo $count?>">
          <div class="popular_article_title popular_article_title-<?php echo $count?>">
            <?php echo $count?>
          </div>
          <div class="popular_article_img">
            <?php the_post_thumbnail('large'); ?>
          </div>

          <div class="popular_article_content">
            <div class="popular_article-desc">
              <div class="popular_article-tag">
                <?php
                  $tags = get_the_tags();
                  if ($tags) {
                    foreach($tags as $tag) {
                      echo '<span>' . $tag->name . '</span>';
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
              the_title( '<h2 class="archive-item-title">', '</h2>' );
            ?>
          </div>


          <a href="<?php the_permalink(); ?>"></a>
        </li>

      <?php
        $count += 1;
        endwhile;
      ?>
      </div>

    </div>
  </div>

  <!-- moire -->
  <div>
    運営団体
  </div>

  <!-- キーワード -->
  <div>
    キーワード
  </div>

</aside>
