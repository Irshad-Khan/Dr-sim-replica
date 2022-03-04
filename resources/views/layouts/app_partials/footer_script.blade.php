 <script src="{{ asset('client/js/vendor/modernizr-3.11.2.min.js') }}"></script>
  <script src="{{ asset('client/js/jquery.js') }}"></script>
  <script src="{{ asset('client/js/plugins.js') }}"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.0.8/popper.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-beta/js/bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.2/js/bootstrap-select.min.js"></script>
  <script src="{{ asset('client/js/slick.min.js') }}"></script>
  <script src="{{ asset('client/js/main.js') }}"></script>
  <script>
  $('.testimonialImgSlide').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: false,
    fade: true,
    asNavFor: '.testimonialSlider'
  });
  $('.testimonialSlider').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    asNavFor: '.testimonialImgSlide',
    dots: true,
    arrows: false,
    focusOnSelect: true
  });
  $('.serviceSlider').slick({
    slidesToShow: 7,
    slidesToScroll: 1,
    dots: false,
    arrows: false,
    responsive: [
      {
        breakpoint: 1024,
        settings: {
          slidesToShow: 5,
          slidesToScroll: 3,
        }
      },
      {
        breakpoint: 600,
        settings: {
          slidesToShow: 3,
          slidesToScroll: 2
        }
      },
      {
        breakpoint: 480,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 1
        }
      }
      // You can unslick at a given breakpoint now by adding:
      // settings: "unslick"
      // instead of a settings object
    ]
  });
  </script>
