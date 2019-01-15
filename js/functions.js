/*
#### Header
*/

// headerメニューバーのアニメーション
// toggle button
jQuery(function($) {
  $('.header-menu-toggle').click(() => {
    const toggleMenue = $('.header-main-navigation')
    if(toggleMenue.hasClass('active')){
      toggleMenue.removeClass('active');
      $('.header-main-navigation').slideUp();
    } else {
      toggleMenue.addClass('active');
      $('.header-main-navigation').slideDown();
    }  });
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

// portfolio
jQuery(function($){
  var fix    = $(".portfolio_wrapper");
  if (fix.length !== 0) {
    var fixTop = fix.offset().top;
    $(window).scroll(function () {
      if($(window).scrollTop() >= fixTop - 50) {
        fix.css({
          "position": "fixed",
          "top": 52
        });
      } else {
        fix.css({
          "position": "absolute",
          "top": 0
        });
      }
    });
  }
});
