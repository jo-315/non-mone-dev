<?php
// ヘッダーのナビゲーション
?>
<div class="header-inner-top">
  <div class="header-logo-wrap">
    <a href="/">
      <img
        data-src="<?php echo get_stylesheet_directory_uri(); ?>/images/non_mone_logo.png"
        class="lazyload"
      >
    </a>
  </div>

  <div class='header-title-wrap'>
    <a href="/">
      <span class="header-title">ノンマネ</span>
    </a>
  </div>

  <div class="header-main-navigation-wrap">
    <nav class="header-main-navigation">
      <ul class='header-main-navigation-items-wrap'>
        <li>
          <a href="/">
            HOME
          </a>
        </li>
        <li>
          <a>
            記事一覧
          </a>
          <div class="header-main-navigation-child header-main-navigation-big-child">
            <ul>
            <?php
							$categories = get_categories(
								array(
									'orderby' => 'count',
									'order'   => 'desc'
								)
							);

							foreach( $categories as $category ){
								$ID = $category->term_id;
								$slug = $category->slug;
						?>

							<li>
								<a href='<?php echo get_category_link( $ID )?>' >
									<?php echo $category->name ?>
								</a>
							</li>

						<?php } ?>
            </ul>
          </div>
        </li>
        <li>
          <a>
            記事募集
          </a>
          <div class="header-main-navigation-child header-main-navigation-big-child">
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
        </li>
        <li>
          <a>
            ノンマネとは
          </a>
          <div class="header-main-navigation-child header-main-navigation-big-child">
            <ul>
              <li>
                <a href="/about-us">
                  ノンマネとは
                </a>
              </li>
              <li>
                <a href="https://moire-org.com/" target="_blank">
                  運営団体HP
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
        </li>
      </ul>
    </nav>
  </div>

  <div class="header-menu-toggle-button-wrap">
    <button class="header-menu-toggle" aria-controls="primary-menu" aria-expanded="false"><i class="fa fa-bars"></i></button>
  </div>
</div>
