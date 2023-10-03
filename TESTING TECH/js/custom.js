$('.banner-slidr').slick({
  dots: false,
  infinite: true,
  autoplay: true,
  fade: true,
  arrows:false,
  autoplaySpeed: 2000,
  slidesToShow: 1,
  pauseOnHover: false,
  slidesToScroll: 1,
  responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 3,
        infinite: true,
        dots: true
      }
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 2
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }
    // You can unslick at a given breakpoint now by adding:
    // settings: "unslick"
    // instead of a settings object
  ]
});
$('.cir-txt-slider').slick({
  dots: false,
  infinite: true,
  autoplay: true,
  fade: true,
  arrows:false,
  autoplaySpeed: 2000,
  slidesToShow: 1,
  pauseOnHover: false,
  slidesToScroll: 1,
  responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 3,
        infinite: true,
        dots: true
      }
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 2
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }
    // You can unslick at a given breakpoint now by adding:
    // settings: "unslick"
    // instead of a settings object
  ]
});


$('.platform-slider').slick({
  dots: false,
  infinite: true,
  autoplay: true,
  autoplaySpeed: 2000,
  slidesToShow: 3,
  slidesToScroll: 1,
  responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 1,
        infinite: true,
        dots: true
      }
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 2
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }

    // You can unslick at a given breakpoint now by adding:

    // settings: "unslick"

    // instead of a settings object

  ]

});
$('.fade-slider').slick({
  dots: false,
  infinite: true,
  speed: 500,
  fade: true,
  arrows:false,
  autoplay:true,
  cssEase: 'linear'
});

 $('.platform-slider').slick({

  dots: false,
  arrows: true,
  infinite: true,

  autoplay: true,
  
  autoplaySpeed: 2000,

  slidesToShow: 3,

  slidesToScroll: 1,

  responsive: [

    {

      breakpoint: 1024,

      settings: {

        slidesToShow: 2,

        slidesToScroll: 1,

        infinite: true,

        dots: true

      }

    },

    {

      breakpoint: 600,

      settings: {

        slidesToShow: 2,

        slidesToScroll: 2

      }

    },

    {

      breakpoint: 480,

      settings: {

        slidesToShow: 1,

        slidesToScroll: 1

      }

    }

    // You can unslick at a given breakpoint now by adding:

    // settings: "unslick"

    // instead of a settings object

  ]

});
$('.indust-slider').slick({

  dots: false,

  infinite: true,

  autoplay: true,
  
  autoplaySpeed: 2000,

  slidesToShow: 3,

  slidesToScroll: 1,

  responsive: [

    {

      breakpoint: 1024,

      settings: {

        slidesToShow: 2,

        slidesToScroll: 1,

        infinite: true,

        dots: true

      }

    },

    {

      breakpoint: 600,

      settings: {

        slidesToShow: 2,

        slidesToScroll: 2

      }

    },

    {

      breakpoint: 480,

      settings: {

        slidesToShow: 1,

        slidesToScroll: 1

      }

    }

    // You can unslick at a given breakpoint now by adding:

    // settings: "unslick"

    // instead of a settings object

  ]

});

$('.contact-slider').slick({

  dots: false,

  infinite: true,

  autoplay: true,
  
  autoplaySpeed: 2000,

  slidesToShow: 1,

  slidesToScroll: 1,

  responsive: [

    {

      breakpoint: 1024,

      settings: {

        slidesToShow: 3,

        slidesToScroll: 1,

        infinite: true,

        dots: true

      }

    },

    {

      breakpoint: 600,

      settings: {

        slidesToShow: 2,

        slidesToScroll: 2

      }

    },

    {

      breakpoint: 480,

      settings: {

        slidesToShow: 1,

        slidesToScroll: 1

      }

    }

    // You can unslick at a given breakpoint now by adding:

    // settings: "unslick"

    // instead of a settings object

  ]

});


$('.fade-slider-2').slick({
  dots: true,
  infinite: true,
  arrows:false,
  speed: 500,
  fade: true,
  cssEase: 'linear'
});


// LOADER
$(document).ready(function() {
  // Users can skip the loading process if they want.
  $('.skip').click(function() {
    $('.overlay, body').addClass('loaded');
  })
  
  // Will wait for everything on the page to load.
  $(window).bind('load', function() {
    $('.overlay, body').addClass('loaded');
    setTimeout(function() {
      $('.overlay').css({'display':'none'})
    }, 2000)
  });
  
  // Will remove overlay after 1min for users cannnot load properly.
  setTimeout(function() {
    $('.overlay, body').addClass('loaded');
  }, 60000);
});

//STICKY HEADER
$(window).scroll(function(){
  if ($(window).scrollTop() >= 300) {
      $('header').addClass('fixed-header');
      $('header div').addClass('visible-title');
  }
  else {
      $('header').removeClass('fixed-header');
      $('header div').removeClass('visible-title');
  }
});


// Hamburger Menu

$(".hambergur").on("click", () => {

  $(".fullscreen").toggleClass("active").removeClass("reverse_anim");

});



$(".close").on("click", () => {

  $(".fullscreen").toggleClass("reverse_anim");

});











// Gallery

// 



$(document).ready(function(){



    $(".filter-button").click(function(){

        var value = $(this).attr('data-filter');

        

        if(value == "all")

        {

            //$('.filter').removeClass('hidden');

            $('.filter').show('1000');

        }

        else

        {

//            $('.filter[filter-item="'+value+'"]').removeClass('hidden');

//            $(".filter").not('.filter[filter-item="'+value+'"]').addClass('hidden');

            $(".filter").not('.'+value).hide('3000');

            $('.filter').filter('.'+value).show('3000');

            

        }

    });

    

    if ($(".filter-button").removeClass("active")) {

$(this).removeClass("active");

}

$(this).addClass("active");



});

















// Menu Js

(function($) {

$.fn.menumaker = function(options) {  

 var cssmenu = $(this), settings = $.extend({

   format: "dropdown",

   sticky: false

 }, options);

 return this.each(function() {

   $(this).find(".button").on('click', function(){

     $(this).toggleClass('menu-opened');

     var mainmenu = $(this).next('ul');

     if (mainmenu.hasClass('open')) { 

       mainmenu.slideToggle().removeClass('open');

     }

     else {

       mainmenu.slideToggle().addClass('open');

       if (settings.format === "dropdown") {

         mainmenu.find('ul').show();

       }

     }

   });

   cssmenu.find('li ul').parent().addClass('has-sub');

multiTg = function() {

     cssmenu.find(".has-sub").prepend('<span class="submenu-button"></span>');

     cssmenu.find('.submenu-button').on('click', function() {

       $(this).toggleClass('submenu-opened');

       if ($(this).siblings('ul').hasClass('open')) {

         $(this).siblings('ul').removeClass('open').slideToggle();

       }

       else {

         $(this).siblings('ul').addClass('open').slideToggle();

       }

     });

   };

   if (settings.format === 'multitoggle') multiTg();

   else cssmenu.addClass('dropdown');

   if (settings.sticky === true) cssmenu.css('position', 'fixed');

resizeFix = function() {

  var mediasize = 1000;

     if ($( window ).width() > mediasize) {

       cssmenu.find('ul').show();

     }

     if ($(window).width() <= mediasize) {

       cssmenu.find('ul').hide().removeClass('open');

     }

   };

   resizeFix();

   return $(window).on('resize', resizeFix);

 });

  };

})(jQuery);



(function($){

$(document).ready(function(){

$("#cssmenu").menumaker({

   format: "multitoggle"

});

});

})(jQuery);













// Road Map Js

$('#myCarousel').carousel({

  interval: 3000,

  loop:true,

  draggable:true,

  autoplay:true,

  autoplayHoverPause:true

})



// Road Map Tab Js

function openCity(evt, cityName) {

  // Declare all variables

  var i, tabcontent, tablinks;



  // Get all elements with class="tabcontent" and hide them

  tabcontent = document.getElementsByClassName("tabcontent");

  for (i = 0; i < tabcontent.length; i++) {

    tabcontent[i].style.display = "none";

  }



  // Get all elements with class="tablinks" and remove the class "active"

  tablinks = document.getElementsByClassName("tablinks");

  for (i = 0; i < tablinks.length; i++) {

    tablinks[i].className = tablinks[i].className.replace(" active", "");

  }



  // Show the current tab, and add an "active" class to the button that opened the tab

  document.getElementById(cityName).style.display = "block";

  evt.currentTarget.className += " active";

}



//COUNTER



(function ($) {

  $.fn.countTo = function (options) {

    options = options || {};

    

    return $(this).each(function () {

      // set options for current element

      var settings = $.extend({}, $.fn.countTo.defaults, {

        from:            $(this).data('from'),

        to:              $(this).data('to'),

        speed:           $(this).data('speed'),

        refreshInterval: $(this).data('refresh-interval'),

        decimals:        $(this).data('decimals')

      }, options);

      

      // how many times to update the value, and how much to increment the value on each update

      var loops = Math.ceil(settings.speed / settings.refreshInterval),

        increment = (settings.to - settings.from) / loops;

      

      // references & variables that will change with each update

      var self = this,

        $self = $(this),

        loopCount = 0,

        value = settings.from,

        data = $self.data('countTo') || {};

      

      $self.data('countTo', data);

      

      // if an existing interval can be found, clear it first

      if (data.interval) {

        clearInterval(data.interval);

      }

      data.interval = setInterval(updateTimer, settings.refreshInterval);

      

      // initialize the element with the starting value

      render(value);

      

      function updateTimer() {

        value += increment;

        loopCount++;

        

        render(value);

        

        if (typeof(settings.onUpdate) == 'function') {

          settings.onUpdate.call(self, value);

        }

        

        if (loopCount >= loops) {

          // remove the interval

          $self.removeData('countTo');

          clearInterval(data.interval);

          value = settings.to;

          

          if (typeof(settings.onComplete) == 'function') {

            settings.onComplete.call(self, value);

          }

        }

      }

      

      function render(value) {

        var formattedValue = settings.formatter.call(self, value, settings);

        $self.html(formattedValue);

      }

    });

  };

  

  $.fn.countTo.defaults = {

    from: 0,               // the number the element should start at

    to: 0,                 // the number the element should end at

    speed: 1000,           // how long it should take to count between the target numbers

    refreshInterval: 100,  // how often the element should be updated

    decimals: 0,           // the number of decimal places to show

    formatter: formatter,  // handler for formatting the value before rendering

    onUpdate: null,        // callback method for every time the element is updated

    onComplete: null       // callback method for when the element finishes updating

  };

  

  function formatter(value, settings) {

    return value.toFixed(settings.decimals);

  }

}(jQuery));



jQuery(function ($) {

  // custom formatting example

  $('.count-number').data('countToOptions', {

  formatter: function (value, options) {

    return value.toFixed(options.decimals).replace(/\B(?=(?:\d{3})+(?!\d))/g, ',');

  }

  });

  

  // start all the timers

  $('.timer').each(count);  

  

  function count(options) {

  var $this = $(this);

  options = $.extend({}, options || {}, $this.data('countToOptions') || {});

  $this.countTo(options);

  }

});



$(document).ready(

  (function () {

    $(".client-single").on("click", function (event) {

      event.preventDefault();



      var active = $(this).hasClass("active");



      var parent = $(this).parents(".testi-wrap");



      if (!active) {

        var activeBlock = parent.find(".client-single.active");



        var currentPos = $(this).attr("data-position");



        var newPos = activeBlock.attr("data-position");



        activeBlock

          .removeClass("active")

          .removeClass(newPos)

          .addClass("inactive")

          .addClass(currentPos);

        activeBlock.attr("data-position", currentPos);



        $(this)

          .addClass("active")

          .removeClass("inactive")

          .removeClass(currentPos)

          .addClass(newPos);

        $(this).attr("data-position", newPos);

      }

    });

  })(jQuery)

);

 
var telInput = $("#phone"),
errorMsg = $("#error-msg"),
validMsg = $("#valid-msg");

// initialise plugin
telInput.intlTelInput({

allowExtensions: true,
formatOnDisplay: true,
autoFormat: true,
autoHideDialCode: true,
autoPlaceholder: true,
defaultCountry: "ae",
ipinfoToken: "yolo",

nationalMode: false,
numberType: "MOBILE",
//onlyCountries: ['us', 'gb', 'ch', 'ca', 'do'],
preferredCountries: ['sa', 'ae', 'qa','om','bh','kw','ma'],
preventInvalidNumbers: true,
separateDialCode: true,
initialCountry: "ae",
geoIpLookup: function(callback) {
$.get("http://ipinfo.io", function() {}, "jsonp").always(function(resp) {
  var countryCode = (resp && resp.country) ? resp.country : "";
  callback(countryCode);
});
},
 utilsScript: "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/11.0.9/js/utils.js"
});

var reset = function() {
telInput.removeClass("error");
errorMsg.addClass("hide");
validMsg.addClass("hide");
};

// on blur: validate
telInput.blur(function() {
reset();
if ($.trim(telInput.val())) {
  if (telInput.intlTelInput("isValidNumber")) {
    validMsg.removeClass("hide");
  } else {
    telInput.addClass("error");
    errorMsg.removeClass("hide");
  }
}
});

// on keyup / change flag: reset
telInput.on("keyup change", reset);




$(".nav-item").click(function(){
var name = $(this).data("name")
$(".nav-item").each(function(i,e){
  if($(e).data("name") == name){
      $(e).addClass("active")
      $(e).find("a").addClass("active")
      $(e).find("a").addClass("show")
      $("#all-cities").html($(e).data("city"))
  }else{
      $(e).removeClass("active")
      $(e).find("a").removeClass("active")
      $(e).find("a").removeClass("show")
  }
})

$(".tab-pane").each(function(i,e){
  if($(e).prop("id") == name){
      $(e).addClass("show")          
      $(e).addClass("active")
  }else{
      $(e).removeClass("show")
      $(e).removeClass("active")
  }
})


});

