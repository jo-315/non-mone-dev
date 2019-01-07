
<script src=<?php echo get_template_directory_uri() . "/js/glide.min.js"?>></script>

<style type="text/css">
  .glide_wrapper {
    width: 400px;
    height: 200px;
    margin: 30px auto;
  }
</style>

<div class="glide_wrapper">
  <div class="glide">
    <div class="glide__track" data-glide-el="track">
      <ul class="glide__slides">
        <li class="glide__slide">0</li>
        <li class="glide__slide">1</li>
        <li class="glide__slide">2</li>
      </ul>
    </div>

    <div class="glide__arrows" data-glide-el="controls">
      <button class="glide__arrow glide__arrow--left" data-glide-dir="<">prev</button>
      <button class="glide__arrow glide__arrow--right" data-glide-dir=">">next</button>
    </div>
  </div>
</div>

<script>
  new Glide('.glide', {
    type: 'carousel',
    startAt: 0,
    perView: 3,
    focusAt: 'center',
    autoplay: 2000
  }).mount()
</script>
