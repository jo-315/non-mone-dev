<?php
// 個別投稿ページ
?>

<?php
get_header();
?>

	<div id="content" class="post-content">
  	<div class="breadcrumb-wrap">
      <?php breadcrumb(); ?>
    </div>

		<div class="content-wrap">
			<div id="primary" class="single-content-area">
				<main id="main" role="main">

				<?php
				while ( have_posts() ) :
					the_post();

					get_template_part( 'template-parts/content', 'single' );

					// If comments are open or we have at least one comment, load up the comment template.
					// TODO コメントは残す
					// if ( comments_open() || get_comments_number() ) :
					// 	echo '<div class="comments-area-wrap">';
					// 	comments_template();
					// 	echo '</div>';
					// endif;

				endwhile;
				?>

				</main>

				<div class="snsShareArea">
					<!-- Twitter -->
					<a class="btn--twitter" href="http://twitter.com/share?url=<?php the_permalink();?>&text=<?php echo get_the_title(); ?>&via=moire45522311&related=moire45522311" target="_blank" rel="nofollow">
						Twitter
					</a>

					<!-- Facebook -->
				  <a href="http://www.facebook.com/share.php?u=<?php the_permalink(); ?>&t=<?php echo get_the_title(); ?>" class="btn--facebook" target="_blank" rel="nofollow">
					  Facebook
					</a>

				  <!-- Line -->
			 	  <a class="btn--line" href="https://social-plugins.line.me/lineit/share?url=<?php the_permalink(); ?>" target="_blank" rel="nofollow">
	 				  LINE
					</a>
				</div>

				<div class="related-post-wrap">
					<div class="related-post-title">
						<span>関連記事</span>
					</div>

					<ul class="related-post-content">

						<?php
							$categories = get_the_category($post->ID);
							$category_ID = array();

							foreach($categories as $category){
							    array_push($category_ID,$category->cat_ID);
							}

							$posts_number = 6; // 表示したい件数を指定

							$args = array(
							    'post__not_in'=>array($post->ID), // 現在のページの投稿を除外
							    'category__in'=>$category_ID, // 現在の投稿のカテゴリーの関連記事を取得
							    'orderby'=>'rand', // ランダムに並べる
							    'posts_per_page'=>$posts_number, // 表示する件数の指定
							);
							$wp_query = new WP_Query($args);

					    while($wp_query->have_posts()):$wp_query->the_post();
					  ?>

								<li class="related-post-item-wrap">

									<div class="related-post-img-wrapper">
										<?php the_post_thumbnail('large'); ?>
									</div>

									<div class="entry-header">
										<div class="archive-content-inner-wrap">
											<div class="archive-content-desc">
												<div class="archive-item-tag">
													<?php
														$tags = get_the_tags();
														if ($tags) {
															foreach($tags as $tag) {
																echo '<span>' . $tag->name . '</span>';
															}
														}
													?>
												</div>
												<div class="archive-item-author-wrap">
													<?php
														moire_theme_posted_by_no_name()
													?>
												</div>
											</div>

											<?php
												the_title( '<h2 class="archive-item-title">', '</h2>' );
											?>
										</div>
									</div>

									<div class="related-post-item-bottom">
									</div>

									<a href="<?php the_permalink(); ?>"></a>
								</li>

						<?php endwhile; ?>
					</ul>
	      </div>
	    </div>
		</div>
	</div>

	<?php get_template_part( 'template-parts/single', 'sidebar' ); ?>

<?php
get_footer();
