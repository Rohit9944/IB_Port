var swiper = new Swiper(".team-swiper", {
  loop: true,

  autoplay: {
    delay: 4800,
    disableOnInteraction: false,
  },

  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
});
