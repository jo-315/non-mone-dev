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

jQuery(function($) {
  add_circle = function() {
    let options
    if (window.matchMedia( "(min-width: 480px)" ).matches) {
      options = {
      	widthRatio: Math.random(),
      	heightRatio: Math.random(),
        delay: 0,
        gap: 0,
      	effect: "drop-css",
      	effectOptions: {
      		radius: 200,
          width: 1 + Math.random() * 5,
      		duration: 2e3 + Math.random() * 1e3,
      		color: '#ffffff',
          opacity: 0.3
      	}
      }
    } else {
      options = {
      	widthRatio: Math.random(),
      	heightRatio: Math.random(),
        delay: 0,
        gap: 0,
      	effect: "drop-css",
      	effectOptions: {
      		radius: 100,
          width: 1 + Math.random() * 2,
      		duration: 1.5e3 + Math.random() * 1e3,
      		color: '#ffffff',
          opacity: 0.3
      	}
      }
    }
  	$("#content-effect").twinkle(options);
  	$(".between_content_effect").twinkle(options);
  }

  if (window.matchMedia( "(min-width: 480px)" ).matches) {
    add_circle()
    // setInterval(add_circle, 2000);
  } else {
    add_circle()
    // setInterval(add_circle, 3000);
  }
});

/*
### Footer
 */
// scroll to top
jQuery(function($) {
  $('.site-info').click(() => {
    $('html, body').animate({ scrollTop: 0 });
  })
})
