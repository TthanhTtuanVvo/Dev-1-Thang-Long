//Scroll animate
$(window).load(function() { 
    $("html").niceScroll({
        cursorcolor: "#d8a052",
        cursorwidth: "8px",
        scrollspeed: 100,
    });
});


// mmenu
jQuery(document).ready(function( $ ) {
  $("nav#menu").mmenu({
     "offCanvas": {
        "position": "right"
     },
     "extensions": [
        "theme-dark"
     ],
     "counters": true,
     "navbars": [
        {
           "position": "top"
        }
     ]
  });
});

// Booking Fixed
// $(window).scroll(function() {
//   if ($(this).scrollTop() > 100){
//     $('.block-booking').addClass('booking-fix');
//   } else {
//     $('.block-booking').removeClass('booking-fix');
//   }
// });

// Date Time
// $(function () {
//   $('#datetimepicker6').datetimepicker();
//   $('#datetimepicker7').datetimepicker({
//       useCurrent: false //Important! See issue #1075
//   });
//   $("#datetimepicker6").on("dp.change", function (e) {
//       $('#datetimepicker7').data("DateTimePicker").minDate(e.date);
//   });
//   $("#datetimepicker7").on("dp.change", function (e) {
//       $('#datetimepicker6').data("DateTimePicker").maxDate(e.date);
//   });
// });
// Slick slide
$('.product-right').slick({
  centerMode: true,
  centerPadding: '120px',
  slidesToShow: 3,
  autoplay: true,
  autoplaySpeed: 3000,
  responsive: [
    {
      breakpoint: 769,
      settings: {
        arrows: false,
        centerMode: true,
        centerPadding: '0px',
        slidesToShow: 2,
      }
    },
    {
      breakpoint: 480,
      settings: {
        arrows: false,
        centerMode: true,
        centerPadding: '0px  ',
        slidesToShow: 1
      }
    }
  ]
});

// Back To Top
if ( ($(window).height() + 100) < $(document).height() ){
  $('#top-link-block').removeClass('hidden').affix({
      // how far to scroll down before link "slides" into view
      offset: {top:100}
  });
}
