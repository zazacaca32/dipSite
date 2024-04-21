
var feedback = new Swiper('.feedback__list', {
  loop: true,
  effect: "slide",
  slidesPerView: 1,
  speed: 1200,
  autoplay: {
    delay: 5000,
  },
  // navigation: {
  //   nextEl: '.feedback__arrow--next',
  //   prevEl: '.feedback__arrow--prev',
  // },
  pagination: {
    el: '.feedback__pagination',
    clickable: true,
  },
});

var certificates = new Swiper('.gallery-slide__container', {
  loop: true,
  effect: "slide",
  slidesPerView: 4,
  spaceBetween: 0,
  speed: 1200,
  autoplay: {
    delay: 5000,
  },
  breakpoints: {
    767: {
      slidesPerView: 2,
    },
    991: {
      slidesPerView: 3,
    },
  },
  navigation: {
    nextEl: '.gallery-slide__arrow--next',
    prevEl: '.gallery-slide__arrow--prev',
  },
});

/*ymaps.ready(init);

function init() {

  var myMap;

  myMap = new ymaps.Map("map", {
    center: [55.866302914542224,38.2088970237117],
    zoom: 16,
    controls: []
  });

}*/