new Swiper('.carousel-container', {
    loop: true,
    spaceBetween: 30,
    pagination: {
      el: '.swiper-pagination',
      clickable: true,
      dynamicBullets: true
    },
  
    // Navigation arrows
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
  breakpoints: {
    0: {
        slidesPerView : 1
    },
    600: {
        slidesPerView : 2
    },
    1024: {
        slidesPerView : 3
    },
    1200: {
        slidesPerView : 4
    },
  }
   
  });