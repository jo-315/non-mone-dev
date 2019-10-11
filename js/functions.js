/*
#### Header
*/

// headerメニューバーのアニメーション
// toggle button
jQuery(function($) {
  $('.header-menu-toggle').click(() => {
    const toggleMenue = $('.header-main-navigation__res')
    if(toggleMenue.hasClass('active')){
      toggleMenue.removeClass('active');
      $('.header-main-navigation__res').slideUp();
    } else {
      toggleMenue.addClass('active');
      $('.header-main-navigation__res').slideDown();
    }  });
});

jQuery(function($) {
  $('.header-main-navigation-closebutton').click(() => {
    $('.header-main-navigation__res').removeClass('active');
    $('.header-main-navigation__res').slideUp();
  });
});

/*
### Footer
 */
// scroll to top
jQuery(function($) {
  const topBtn = $('.back-top-button')
  topBtn.hide();
  //スクロールが100に達したらボタン表示
  $(window).scroll(function () {
    if ($(this).scrollTop() > 100) {
        topBtn.fadeIn();
    } else {
        topBtn.fadeOut();
    }
  });
  //スクロールしてトップ
  topBtn.click(function () {
    $('body,html').animate({
        scrollTop: 0
    }, 500);
  });
});
