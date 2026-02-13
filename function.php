<?php
add_action('wp_enqueue_scripts', function() {
    wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');
});
function delta_growth_load_swiper() {

  // Swiper CSS
  wp_enqueue_style(
    'swiper-css',
    'https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css',
    array(),
    null
  );

  // Swiper JS
  wp_enqueue_script(
    'swiper-js',
    'https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js',
    array(),
    null,
    true
  );

  // Initialize Swiper
  wp_add_inline_script(
    'swiper-js',
    "
    document.addEventListener('DOMContentLoaded', function () {
      new Swiper('.testimonial-swiper', {
        loop: true,
        autoplay: {
          delay: 3000,
          disableOnInteraction: false
        },
        pagination: {
          el: '.swiper-pagination',
          clickable: true
        },
        slidesPerView: 1,
        spaceBetween: 30
      });
    });
    "
  );
}
add_action('wp_enqueue_scripts', 'delta_growth_load_swiper');
