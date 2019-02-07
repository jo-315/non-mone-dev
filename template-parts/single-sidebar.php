<aside class="sidebar-single-wrap">

  <!-- moire -->
  <div class="sidebar_item_wrapper">
    <div class="sidebar_item_title">
      <span>運営団体</span>
    </div>

    <div class="sidebar-moire-wrap">
      <div class="sidebar_moire_logo">
        <img
          src="<?php echo get_stylesheet_directory_uri(); ?>/images/moire_logo.svg"
        >
      </div>

      <div class="sidebar_moire_desc">
        <h5>moire（モアレ）</h5>
        社会貢献活動に繋ぐWebメディア

        <div class="sidebar_moire_sns">
          <a
            href="https://twitter.com/moire45522311?lang=ja"
            target="_blank"
            class="sns-social-wrap"
          >
            <img
              src="<?php echo get_stylesheet_directory_uri(); ?>/images/Twitter_Social_Icon_Rounded_Square_Color.png"
              alt="Twitter"
              class="sns-social-icon"
            />
          </a>

          <a
            href="https://www.facebook.com/moire12"
            target="_blank"
            class="sns-social-wrap"
          >
            <img
              src="<?php echo get_stylesheet_directory_uri(); ?>/images/f-ogo_RGB_HEX-100.svg"
              alt="Facebook"
              class="sns-social-icon"
            />
          </a>

          <div class="sidebar_moire_org_button">
            <a href="https://moire-org.com/" target="_blank">
              団体ページ
            </a>
          </div>
        </div>

      </div>
    </div>
  </div>

  <!-- 人気記事 -->
  <div class="sidebar_item_wrapper">
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
  </div>

  <!-- キーワード -->
  <div class="sidebar_item_wrapper sidebar_follow">
    <div class="sidebar_item_title">
      <span>おすすめワード</span>
    </div>

    <div class="sidebar_keyword_wrapper">
      <ul>
        <li>
          <a href="#">
            国際
            <i class="fa fa-arrow-circle-right"></i>
          </a>
        </li>
        <li>
          <a href="#">
            国際
            <i class="fa fa-arrow-circle-right"></i>
          </a>
        </li>
        <li>
          <a href="#">
            国際
            <i class="fa fa-arrow-circle-right"></i>
          </a>
        </li>
      </ul>
    </div>
  </div>

</aside>
