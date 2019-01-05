<?php get_header(); ?>

  <div class="left-content">
    <div class="main-content">
      <?php
      $count = 0;
      $paged = (int) get_query_var('paged');
      $args = array(
        'posts_per_page' => 9,
        'paged' => $paged,
        'orderby' => 'post_date',
        'order' => 'DESC',
        'post_type' => 'post',
        'post_status' => 'publish'
      );
      $the_query = new WP_Query($args);
      if ( $the_query->have_posts() ) :
        while ( $the_query->have_posts() ) : $the_query->the_post();

        $count += 1;

        switch ($count) {
          case 1:
            get_template_part( 'template-parts/header', 'article' );
            break;

          case 5;
            get_template_part( 'template-parts/content' );
      ?>

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

      <?php
            break;

          default:
            get_template_part( 'template-parts/content' );
            break;
        }

          endwhile;
        endif;
      ?>

      <?php
      if ($the_query->max_num_pages > 1) {
        echo paginate_links(array(
          'base' => get_pagenum_link(1) . '%_%',
          'format' => 'page/%#%/',
          'current' => max(1, $paged),
          'total' => $the_query->max_num_pages
        ));
      }
      ?>

      <?php wp_reset_postdata(); ?>
    </div>
  </div>

  <?php get_template_part( 'template-parts/content', 'sidebar' ); ?>

<?php
get_footer();
