<?php get_header('front'); ?>

  <div class='front-page-wrapper'>
    <div class='front-page-head-wrapper'>
      <div class="content-effect-wrapper">
        <div class="content-effect">
          <div class='main-content'>
            <div class="moire-title-wrap">
              <span class='moire-title'>
                moire
              </span>

              <span class="moire-sub-title">
                社会貢献活動に繋ぐWebメディア
              </span>
            </div>
          </div>
        </div>
      </div>

      <div class="right-top-column">
        <div class="right-top-column-content">
          <span>
            <div class='right-top-column-content-title'>
            moire(モアレ)
            </div>
            <p>
              私たちmoireのMissionは、<span class='font-bold'>社会貢献活動の促進</span>です。
            </p>
            <p>
              このMission達成のために私たちは、お金を目的にしない活動 <span class='font-bold'>「No Money Action」</span> をHPで発信していきます。
            </p>

            <p>
              No Money Action の中で社会貢献活動についても発信することで、社会貢献活動に関心のない人を社会貢献活動に繋いでいきます。
            </p>
          </span>
        </div>

        <div class="mission-button-wrap">
          <div class="mission-button">
            <a href="/about-us">moireの基本理念</a>
          </div>
        </div>
      </div>
    </div>

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

    <div class="between_content">
      <div class="between_content_effect">
      </div>
    </div>

    <div class="block-wrapper">
      <div class="HP-content-wrapper">
        <div class="HP_content_title">
          <h2>コンテンツ</h2>
        </div>

        <div>
          <div class="HP-content-column">
            <div class="HP-content-column-header">
              <span>
                No Money Action
              </span>
            </div>

            <div class="HP-content-column-logo">
              <img
                data-src="<?php echo get_stylesheet_directory_uri(); ?>/images/blog_logo.svg"
                class="HP_logo lazyload"
              >
            </div>

            <div class="HP-content-column-content">
              No Money Action についての記事を掲載し、発信していきます。
            </div>

            <div class="HP-content-column-button">
              <a href='/category/article/'>
                No Money Action へ
              </a>
            </div>
          </div>

          <div class="HP-content-column">
            <div class="HP-content-column-header">
              <span>団体情報一覧</span>
            </div>

            <div class="HP-content-column-logo">
              <img
                data-src="<?php echo get_stylesheet_directory_uri(); ?>/images/team_logo.svg"
                class="HP_logo lazyload"
              >
            </div>

            <div class="HP-content-column-content">
              社会貢献活動を行う団体の情報を手軽に見れるようにし、団体の活動参加を容易にします。
            </div>

            <div class="HP-content-column-button">
              <a href='/category/organization/'>
                団体一覧へ
              </a>
            </div>
          </div>

          <div class="HP-content-column">
            <div class="HP-content-column-header">
              <span>イベント情報一覧</span>
            </div>

            <div class="HP-content-column-logo">
              <img
                data-src="<?php echo get_stylesheet_directory_uri(); ?>/images/event_logo.svg"
                class="HP_logo lazyload"
              >
            </div>

            <div class="HP-content-column-content">
              社会貢献活動のイベントも発信し、より社会貢献活動に参加しやすい環境を作ります。
            </div>

            <div class="HP-content-column-button">
              <a href='/category/event'>
                イベント情報一覧へ
              </a>
            </div>
          </div>

        </div>
      </div>
    </div>
  </div>

<?php
get_footer();
