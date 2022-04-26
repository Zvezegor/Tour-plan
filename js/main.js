const swiper = new Swiper('.swiper', {
    // Optional parameters
    loop: true,
    // Navigation arrows
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
  });
$('.newsletter').parallax({imageSrc: '../img/newsletter-bg.jpeg'});