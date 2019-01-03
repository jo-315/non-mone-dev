<?php
/*
カテゴリー毎、投稿一覧
blog,event,orgで同じもの
*/
?>

<?php
get_header('post');
?>

  <div id="content" class="site-content post-content">
    <div class="archive-content-wrap">

			<div id="primary">
				<main id="main" role="main">
					<?php
  					/* 投稿記事をloopで表示 */
  					while ( have_posts() ) :
  						the_post();

  	          // 投稿記事のアイテム
  						get_template_part( 'template-parts/content' );

  					endwhile;
          ?>

          <?php
  					the_posts_pagination(array(
              'mid_size' => 2,
              'prev_text' => '&lt;',
              'next_text' => '&gt;',
              'screen_reader_text' => 'ページネーション'
            ));
  				?>
				</main>
			</div>
		</div>
  </div>

<?php
get_footer();
