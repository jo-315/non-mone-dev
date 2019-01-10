
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
