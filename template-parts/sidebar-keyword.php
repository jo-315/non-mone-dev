<div class="sidebar_item_title">
  <span>注目コンテンツ</span>
</div>

<div class="sidebar_keyword_wrapper">
  <ul>

  <?php
    $posttags = get_tags();

    if ( $posttags ){
      foreach( $posttags as $tag ) {
  ?>
    <li>
      <a href="<?php echo get_tag_link( $tag->term_id ) ?>">
        <p><?php echo $tag->name ?></p>
        <i class="fa fa-arrow-circle-right"></i>
      </a>
    </li>
  <?php }} ?>

  </ul>
</div>
