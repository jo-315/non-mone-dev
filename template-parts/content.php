<?php
/*
カテゴリー毎、投稿一覧内のアイテム
*/
?>

<article
  id="post-<?php the_ID(); ?>"
	<?php
	  if(is_front_page()) {
	    post_class( 'front-post' );
		} else {
			post_class( 'archive-post' );
		}
	 ?>
>
	<?php
		moire_post_thumbnail()
	?>

	<div class="entry-header">
    <div class="archive-content-inner-wrap">
			<div class="archive-content-desc">
				<div class="archive-item-tag">
					<?php
						$categories = get_the_category();
						if ($categories) {
							foreach ($categories as $cat ) {
								echo '<span>' . $cat->name . '</span>';
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


	<a
	  href="<?php echo esc_url(get_permalink()) ?>"
		rel="bookmark"
	>
	</a>
</article><!-- #post-## -->
