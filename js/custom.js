(function ($) {
  "use strict";

  // AOS ANIMATIONS
  AOS.init();

  // NAVBAR
  $(".navbar-nav .nav-link").click(function () {
    $(".navbar-collapse").collapse("hide");
  });

  // NEWS IMAGE RESIZE
  function NewsImageResize() {
    $(".navbar").scrollspy({ offset: -76 });

    var LargeImage = $(".large-news-image").height();

    var MinusHeight = LargeImage - 6;

    $(".news-two-column").css({ height: MinusHeight - LargeImage / 2 + "px" });
  }

  $(window).on("resize", NewsImageResize);
  $(document).on("ready", NewsImageResize);

  $('a[href*="#"]').click(function (event) {
    if (
      location.pathname.replace(/^\//, "") ==
        this.pathname.replace(/^\//, "") &&
      location.hostname == this.hostname
    ) {
      var target = $(this.hash);
      target = target.length ? target : $("[name=" + this.hash.slice(1) + "]");
      if (target.length) {
        event.preventDefault();
        $("html, body").animate(
          {
            scrollTop: target.offset().top - 66,
          },
          1000
        );
      }
    }
  });
})(window.jQuery);

$(document).ready(function () {
  var itemsMainDiv = ".MultiCarousel";
  var itemsDiv = ".MultiCarousel-inner";
  var itemWidth = "";

  $(".leftLst, .rightLst").click(function () {
    var condition = $(this).hasClass("leftLst");
    if (condition) click(0, this);
    else click(1, this);
  });

  ResCarouselSize();

  $(window).resize(function () {
    ResCarouselSize();
  });

  //this function define the size of the items
  function ResCarouselSize() {
    var incno = 0;
    var dataItems = "data-items";
    var itemClass = ".item";
    var id = 0;
    var btnParentSb = "";
    var itemsSplit = "";
    var sampwidth = $(itemsMainDiv).width();
    var bodyWidth = $("body").width();
    $(itemsDiv).each(function () {
      id = id + 1;
      var itemNumbers = $(this).find(itemClass).length;
      btnParentSb = $(this).parent().attr(dataItems);
      itemsSplit = btnParentSb.split(",");
      $(this)
        .parent()
        .attr("id", "MultiCarousel" + id);

      if (bodyWidth >= 1200) {
        incno = itemsSplit[3];
        itemWidth = sampwidth / incno;
      } else if (bodyWidth >= 992) {
        incno = itemsSplit[2];
        itemWidth = sampwidth / incno;
      } else if (bodyWidth >= 768) {
        incno = itemsSplit[1];
        itemWidth = sampwidth / incno;
      } else {
        incno = itemsSplit[0];
        itemWidth = sampwidth / incno;
      }
      $(this).css({
        transform: "translateX(0px)",
        width: itemWidth * itemNumbers,
      });
      $(this)
        .find(itemClass)
        .each(function () {
          $(this).outerWidth(itemWidth);
        });

      $(".leftLst").addClass("over");
      $(".rightLst").removeClass("over");
    });
  }

  //this function used to move the items
  function ResCarousel(e, el, s) {
    var leftBtn = ".leftLst";
    var rightBtn = ".rightLst";
    var translateXval = "";
    var divStyle = $(el + " " + itemsDiv).css("transform");
    var values = divStyle.match(/-?[\d\.]+/g);
    var xds = Math.abs(values[4]);
    if (e == 0) {
      translateXval = parseInt(xds) - parseInt(itemWidth * s);
      $(el + " " + rightBtn).removeClass("over");

      if (translateXval <= itemWidth / 2) {
        translateXval = 0;
        $(el + " " + leftBtn).addClass("over");
      }
    } else if (e == 1) {
      var itemsCondition = $(el).find(itemsDiv).width() - $(el).width();
      translateXval = parseInt(xds) + parseInt(itemWidth * s);
      $(el + " " + leftBtn).removeClass("over");

      if (translateXval >= itemsCondition - itemWidth / 2) {
        translateXval = itemsCondition;
        $(el + " " + rightBtn).addClass("over");
      }
    }
    $(el + " " + itemsDiv).css(
      "transform",
      "translateX(" + -translateXval + "px)"
    );
  }

  //It is used to get some elements from btn
  function click(ell, ee) {
    var Parent = "#" + $(ee).parent().attr("id");
    var slide = $(Parent).attr("data-slide");
    ResCarousel(ell, Parent, slide);
  }
});

$("#myModal").on("shown.bs.modal", function () {
  $("#myInput").trigger("focus");
});

// Function to check screen width and update classes
function updateSliderClasses() {
  const slideTrack = document.querySelectorAll(".slide-tracks");

  if (window.innerWidth <= 768) {
    // Remove 'slide-tracks' and add 'slider slider-nav'
    $(slideTrack).removeClass("slide-tracks").addClass("slider slider-nav");

    // Reinitialize Slick slider
    if (!$(".slider").hasClass("slick-initialized")) {
      $(".slider").slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: true,
        dots: true,
        //slidesToScroll: 1,
        infinite: true,
        // asNavFor: '.slider-for',
        focusOnSelect: true,
        variableWidth: true,
        autoplay: true,
        autoplaySpeed: 1000,
      });
    }
  } else {
    // Remove 'slider slider-nav' and add 'slide-tracks'
    if ($(slideTrack).hasClass("slick-initialized")) {
      $(".slider").slick("unslick"); // Destroy Slick instance
    }
    $(slideTrack).removeClass("slider slider-nav").addClass("slide-tracks");
  }
}

// Initial check when the page loads
updateSliderClasses();

let currentSlide = 0;
const customSlides = document.querySelectorAll('.custom-carousel-slide');
let slideInterval; // Declare the interval variable

// Function to show the current slide
function showCustomSlide(index) {
    customSlides.forEach((slide, i) => {
        slide.classList.remove('active', 'prev');
        if (i === index) {
            slide.classList.add('active');
        } else if (i === currentSlide) {
            slide.classList.add('prev'); // Previous slide goes left
        }
    });
    currentSlide = index; // Update the currentSlide to the new index
}

// Function to go to the next slide
function nextCustomSlide() {
  resetSlideInterval();
    currentSlide = (currentSlide + 1) % customSlides.length;
    showCustomSlide(currentSlide);
}

// Function to go to the previous slide
function prevCustomSlide() {
  resetSlideInterval();
    currentSlide = (currentSlide - 1 + customSlides.length) % customSlides.length;
    showCustomSlide(currentSlide);
}

// Function to reset and restart the interval after manual navigation
function resetSlideInterval() {
    clearInterval(slideInterval); // Clear the current interval
    slideInterval = setInterval(nextCustomSlide, 8000); // Restart the interval
}



// Initialize autoplay
// slideInterval = setInterval(nextCustomSlide, 5000); // Autoplay every 8 seconds

 // JavaScript for autoplay custom carousel with arrows

 
// Check screen width whenever the window is resized
window.addEventListener("resize", updateSliderClasses);
