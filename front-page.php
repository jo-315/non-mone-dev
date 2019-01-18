<?php get_header(); ?>

  <div class="content_wrapper">
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

              default:
                get_template_part( 'template-parts/content' );
                break;
            }

          endwhile;
        endif;
        ?>

        <div class="pagination_wrap">
          <?php
          if ($the_query->max_num_pages > 1) {
            echo paginate_links(array(
              'base' => get_pagenum_link(1) . '%_%',
              'format' => 'page/%#%/',
              'current' => max(1, $paged),
              'total' => $the_query->max_num_pages,
              'end_size' => 1
            ));
          }
          ?>
        </div>

        <?php wp_reset_postdata(); ?>
      </div>
    </div>
  </div>

  <?php get_template_part( 'template-parts/content', 'sidebar' ); ?>

<?php
get_footer();
