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
  $('.site-info').click(() => {
    $('html, body').animate({ scrollTop: 0 });
  })
});
