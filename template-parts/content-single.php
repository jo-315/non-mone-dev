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
			<?php $name = get_the_author_meta('user_nicename'); ?>
			<div class='single-author-img'>
				<img src="https://moire.xsrv.jp/wp-content/uploads/profile/profile_<?php echo $name; ?>.png" />
			</div>
			<div class='single-author-contents'>
				<div class='single-author-contents-headline'>
					<?php echo the_author_meta( 'position' ); ?>
					<span><?php echo the_author_meta( 'display_name' ); ?></span>
				</div>

				<?php $description = get_the_author_meta( 'user_description' ); ?>
				<?php if ($description !== '') { ?>
					<div class='single-author-contents-desc'>
						<?php echo $description; ?>
					</div>
				<?php }	?>

				<div class="profile_text_content-button-wrap">
          <a href='/author/<?php echo $name; ?>' class="profile_text_content-button">記事一覧</a>

					<?php $twitter = get_the_author_meta( 'twitter' ); ?>
					<?php if ($twitter !== '') { ?>
						<a
							href=<?php echo $twitter; ?>
							target="_blank"
							class="sns-social-wrap"
						>
							<img
								src="https://moire.xsrv.jp/wp-content/uploads/Twitter_Social_Icon_Rounded_Square_Color.png"
								alt="Twitter"
								class="profile-sns-social-icon"
							/>
						</a>
					<?php } ?>

					<?php $instagram = get_the_author_meta( 'instagram' ); ?>
					<?php if ($instagram !== '') { ?>
						<a
							href="<?php echo $instagram; ?>"
							target="_blank"
							class="sns-social-wrap "
						>
							<img
								src="https://moire.xsrv.jp/wp-content/uploads/IG_Glyph_Fill.psd-8.png"
								alt="instagram"
								class="profile-sns-social-icon"
							/>
						</a>
					<?php } ?>

					<?php $facebook = get_the_author_meta( 'facebook' ); ?>
					<?php if ($facebook !== '') { ?>
						<a
							href="<?php echo $facebook; ?>"
							target="_blank"
							class="sns-social-wrap "
						>
							<img
								src="https://moire.xsrv.jp/wp-content/uploads/f-ogo_RGB_HEX-100.png"
								alt="Facebook"
								class="profile-sns-social-icon"
							/>
						</a>
					<?php } ?>

				</div>
			</div>
		</div>
	</div>
</article>
