<?php
/*
カテゴリー毎、投稿一覧
blog,event,orgで同じもの
*/
?>

<?php
get_header('about-us');
?>

  <div class="page_content_block">
    <div class="page_content--text">
      <div class="about_content_block--img_wrap">
        <img
          src="<?php echo get_stylesheet_directory_uri(); ?>/images/non_mone_logo.png"
          alt="non money"
          class="about_content_block--img"
        >
      </div>

      <div class="about_content_block--title">
        <h3>ノンマネとは</h3>
      </div>
      <div class="about_content_wrap">
        ノンマネは『お金を超える価値の発掘』をテーマに、「お金以外を目的」とした「何かしらの活動」を発信するWebメディアです。
        <div class="about_content_wrap_imgs">
          <div class="about_content_wrap_imgs--left">
            <img
              src="http://moire.xsrv.jp/wp-content/uploads/2018/12/48199.jpg"
              alt="英語キャンプ"
            />
          </div>
          <div class="about_content_wrap_imgs--right">
            <img
              src="http://moire.xsrv.jp/wp-content/uploads/2018/12/234083.jpg"
              alt="自然保護"
            />
            <img
              src="http://moire.xsrv.jp/wp-content/uploads/2018/12/image19.jpeg"
              alt="子どもたちと"
            />
          </div>
        </div>
      </div>

      <div class="about_content_block--title">
        <h3>ミッション</h3>
      </div>
      <div class="about_content_wrap">
        ノンマネのミッションは、今まで社会貢献活動に関心のなかった人たちに関心を持ってもらうという、難関な課題に立ち向かうことです。</br>
        </br>
        その解決のために、社会貢献活動に興味のない人に、社会貢献活動以外の記事を目的にノンマネに来てもらい、そのついでに社会貢献活動の記事をチラッとでもいいから読んでもらう。
        そしてその記事を読むことで、社会貢献活動に少しでも興味を持ってもらう。</br>
        </br>
        この流れを作ることで僕たちは困難な課題に立ち向かっていきます！
      </div>

      <div class="about_content_block--title">
        <h3>運営体制</h3>
      </div>
      <div class="about_content_wrap">
        このHPは<a href="https://moire-org.com/" target="_blank">moire 社会貢献活動に繋ぐWebメディア</a>によって運営されています。
      </div>
    </div>
  </div>

<?php
get_footer();
