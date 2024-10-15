
  document.addEventListener( 'DOMContentLoaded', function () {
    new Splide( '.splide',{
    type   : 'loop',
    drag   : 'free',
    focus  : 'center',
    perPage: 1,
    autoScroll: {
      speed: 2,
    },
} ).mount(window.splide.Extensions);
  });




