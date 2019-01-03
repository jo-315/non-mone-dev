jQuery(function($) {
  add_first_circle = function() {
    const options = {
    	widthRatio: 0.5,
    	heightRatio: 0.5,
      delay: 0,
      gap: 0,
    	effect: "drop-css",
    	effectOptions: {
        radius: 400,
    		duration: 3e3,
    		color: '#ffffff',
        opacity: 0.3
    	}
    }
  	$(".content-effect").twinkle(options);
  }

  add_random_circle = function() {
    const options = {
      widthRatio: Math.random(),
      heightRatio: Math.random(),
      delay: 0,
      gap: 0,
      effect: "drops-css",
      effectOptions: {
        radius: 200,
        width: Math.random() * 10,
        duration: 1e3 + Math.random() * 1e3,
        color: '#ffffff',
        opacity: 0.3
      }
    }

    $(".content-effect").twinkle(options);
  }

  if (window.matchMedia( "(min-width: 480px)" ).matches) {
    return new Promise((resolve, reject) => {
      setTimeout(() => {
        resolve(add_first_circle())
      }, 300)
    }).then(() => {
      return $(".moire-title").fadeIn(4000)
    }).then(() => {
      $(".moire-sub-title").fadeIn(5000)
    }).then(() => {
      setTimeout(() => {
        setInterval(add_random_circle, 2000);
        $('.content-effect-wrapper')
          .animate({ 'width': '60%' })
          .css('float', 'left')
        $('.right-top-column')
          .css('display', 'block')
          .animate({'width':'40%'})
      }, 3500);

      return
    })
  } else {
    return new Promise((resolve, reject) => {
      setTimeout(() => {
        resolve(add_first_circle())
      }, 300)
    }).then(() => {
      return $(".moire-title").fadeIn(1500)
    }).then(() => {
      $(".moire-sub-title").fadeIn(2500)
    }).then(() => {
      setTimeout(() => {
        $('.right-top-column')
          .animate({'width':'100%'})
          .css('display', 'block')
      }, 2000);

      return
    })
  }
})
