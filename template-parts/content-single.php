<?php
// 個別投稿ページのコンテンツ
?>

<article id="post-<?php the_ID(); ?>" <?php post_class( 'article' ); ?>>
	<header>
		<div class="single-title-wrap">
			<?php
			the_title( '<h1 class="single-title">', '</h1>' );
			?>

			<div class="single-cat-wrap">
				<?php moire_category(); ?>
			</div>

      <div class="single-title-meta">
				<div class="single-author">
					<?php	moire_theme_single_posted(); ?>
				</div>

				<?php moire_posted_date(); ?>
			</div>

		</div>
	</header>

	<div class="single-content">
		<?php
      // 本文（ DBにデータはあるよん ）
			the_content(
				sprintf(
					wp_kses(
						'続きを読む %s <span class=\"meta-nav\">&rarr;</span>', array(
							'span' => array(
								'class' => array(),
							),
						)
					),
					the_title( '<span class="screen-reader-text">"', '"</span>', false )
				)
			);
		?>

		<div>
			人気記事ランキングに反映されます。クリックお願いします！
		</div>

		<div class="single-author single-author-page-bottom">
			<?php	moire_theme_single_posted(true); ?>
		</div>
	</div>
</article>
