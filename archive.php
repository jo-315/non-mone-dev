<?php
?>

<?php
get_header();
?>

  <div id="content" class="site-content post-content">
    <div class="breadcrumb-wrap">
      <?php breadcrumb(); ?>
    </div>

    <div class="archive-content-wrap">

			<div id="primary">
				<main id="main" role="main" class="archive_main">
					<?php
  					while ( have_posts() ) :
  						the_post();

  						get_template_part( 'template-parts/content' );

  					endwhile;
          ?>

          <div class="pagination_wrap">
            <?php
    				  $nav = get_the_posts_pagination(array(
                'mid_size' => 2,
                'prev_text' => '&lt;',
                'next_text' => '&gt;',
                'screen_reader_text' => 'nav'
              ));
              echo preg_replace('/\<h2 class=\"screen-reader-text\"\>(.*?)\<\/h2\>/ui', '', $nav);
    				?>
          </div>
				</main>
			</div>
		</div>
  </div>

<?php
get_footer();
