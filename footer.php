	</div>

	<?php
		wp_reset_query();
		if (is_front_page() || is_single()) {
			set_query_var( 'part', 'footer' );
			get_template_part( 'template-parts/content', 'portfolio' );
		};
	?>

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="footer-inner">
			<div class="footer_navigation">
				<div class="footer_nav_column">
				  <span class="footer_nav_column_title">記事一覧</span>
					<ul>
					  <li>
							<a href="/category/international-cooperation/">
								国際協力
							</a>
						</li>
						<li>
							<a href="/category/nature-conservation">
								自然保護
							</a>
						</li>
						<li>
							<a href="/category/regional-action">
								地域の活動
							</a>
						</li>
						<li>
							<a href="/category/study-abroad">
								留学
							</a>
						</li>
						<li>
							<a href="/category/intern">
								インターン
							</a>
						</li>
						<li>
							<a href="/category/other">
								その他
							</a>
						</li>
					</ul>
				</div>
				<div class="footer_nav_column">
				  <span class="footer_nav_column_title">記事募集</span>
					<ul>
						<li>
							<a href="/recruit">
								ライター募集
							</a>
						</li>
						<li>
							<a href="/article_contribution">
								寄稿の募集
							</a>
						</li>
					</ul>
				</div>
				<div class="footer_nav_column">
				  <span class="footer_nav_column_title">ノンマネ</span>
					<ul>
              <li>
                <a href="/about-us">
                  ノンマネとは
                </a>
              </li>
              <li>
                <a href="https://moire-org.com/" target="_blank">
                  運営団体
                </a>
              </li>
              <li>
                <a href="/member">
                  ライター一覧
                </a>
              </li>
              <li>
                <a href="/contributer">
                  寄稿者一覧
                </a>
              </li>
            </ul>
				</div>
			</div>

			<div class="footer-moire-wrap">
				<div class="footer-moire-img">
					<img
						src="<?php echo get_stylesheet_directory_uri(); ?>/images/moire_logo.svg"
						class="footer-moire-logo"
					>
				</div>

				<div class="footer-moire-desc">
					<span class="footer-moire-desc-header">
						moire</br>
						社会貢献が身近にある社会をつくる団体</br>
					</span>
					<span class="footer-moire-desc-link">
						<a href="https://moire-org.com/" target="_blank">https://moire-org.com/</a>
					</span>
					<div class="sidebar_moire_sns">
						<a
							href="https://twitter.com/moire45522311?lang=ja"
							target="_blank"
							class="sns-social-wrap"
						>
							<img
								src="<?php echo get_stylesheet_directory_uri(); ?>/images/Twitter_Social_Icon_Rounded_Square_Color.png"
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
								src="<?php echo get_stylesheet_directory_uri(); ?>/images/f-ogo_RGB_HEX-100.svg"
								alt="Facebook"
								class="sns-social-icon"
							/>
						</a>
					</div>

				</div>
			</div>
		</div>

		<div class="site-info">
			ノンマネ 2019 <i class="fa fa-arrow-right"></i> 20xx
		</div>
	</footer>

<?php wp_footer(); ?>
</body>
</html>
