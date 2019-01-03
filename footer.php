<?php
// 全ページ共通フッター
?>

	<div class="between_content">
		<div class="between_content_effect">
		</div>
	</div>

	<div class="sns-block-wrapper">
		<a
			href="/"
			target="_blank"
			class="sns-social-wrap"
		>
			<img
				src="<?php echo get_stylesheet_directory_uri(); ?>/images/moire_logo.svg"
				class="sns-social-icon"
			/>
		</a>
		<a
		  href="https://twitter.com/moire45522311?lang=ja"
			target="_blank"
			class="sns-social-wrap"
		>
		  <img
			  src="https://moire.xsrv.jp/wp-content/uploads/Twitter_Social_Icon_Rounded_Square_Color.png"
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
			  src="https://moire.xsrv.jp/wp-content/uploads/f-ogo_RGB_HEX-100.png"
				alt="Twitter"
				class="sns-social-icon"
			/>
		</a>
	</div>

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="container container-footer">
			<div class="footer-inner">
				<div class="footer-widget-wrap">
					<?php
					if ( is_active_sidebar( 'moire-footer-widget-area' ) ) {
						dynamic_sidebar( 'moire-footer-widget-area' );
					}
					?>
				</div>

				<div class="footer-widget-wrap">
					<?php
					if ( is_active_sidebar( 'moire-footer-widget-area-2' ) ) {
						dynamic_sidebar( 'moire-footer-widget-area-2' );
					}
					?>
				</div>

				<div class="footer-widget-wrap">
					<?php
					if ( is_active_sidebar( 'moire-footer-widget-area-3' ) ) {
						dynamic_sidebar( 'moire-footer-widget-area-3' );
					}
					?>
				</div>

				<div class="footer-widget-wrap">
					<div class="footer-widget-img">
						<img
							src="<?php echo get_stylesheet_directory_uri(); ?>/images/moire_logo.svg"
							class="footer-moire-logo"
						>
					</div>
					<div class="footer-moire-desc">
						<div class="footer-moire-desc-header">
							moire</br>
							社会貢献活動に繋ぐWebメディア
						</div>
						<div class="footer-moire-desc-body">
							Webメディアとして No Money Action を発信することで社会貢献活動に関心のない人を社会貢献活動に繋いでいきます
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="site-info">
			<div class="footer-back-top">
					トップへ戻る<i class="fa fa-angle-double-up" aria-hidden="true"></i>
			</div>
		</div>
	</footer>

<?php wp_footer(); ?>
</body>
</html>
