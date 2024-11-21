  <!-- JavaScript Libraries -->
  <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
  <script src="{{URL::asset('lib/wow/wow.min.js')}}"></script>
  <script src="{{URL::asset('lib/easing/easing.min.js')}}"></script>
  <script src="{{URL::asset('lib/waypoints/waypoints.min.js')}}"></script>
  <script src="{{URL::asset('lib/counterup/counterup.min.js')}}"></script>
  <script src="{{URL::asset('lib/owlcarousel/owl.carousel.min.js')}}"></script>
  <script src="{{URL::asset('lib/isotope/isotope.pkgd.min.js')}}"></script>
  <script src="{{URL::asset('lib/lightbox/js/lightbox.min.js')}}"></script>
  <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

  <!-- Template Javascript -->
  <script src="js/main.js"></script>
  <script>
    $('.my-slider').slick({
        slidesToShow: 5,
        slidesToScroll: 1,
        arrows: true,
        dots: true,
        speed: 300,
        infinite: true,
        // autoplaySpeed: 5000,
        // autoplay: true,
        centerMode: true,
        centerPadding: '0px',
        nextArrow: '<i class="fa fa-angle-right p-1 fs-6 rounded-circle slick-next bg-primary"></i>',
        prevArrow: '<i class="fa fa-angle-left p-1 fs-6 rounded-circle slick-prev bg-primary"></i>',
        responsive: [{
                breakpoint: 991,
                settings: {
                    slidesToShow: 3,
                }
            },
            {
                breakpoint: 767,
                settings: {
                    slidesToShow: 1,
                }
            }
        ]
    });
</script>
