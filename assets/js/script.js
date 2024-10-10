"use strict";
$(document).ready(function () {
  // card js start
  $(".card-header-right .close-card").on("click", function () {
    var $this = $(this);
    $this.parents(".card").animate({
      opacity: "0",
      "-webkit-transform": "scale3d(.3, .3, .3)",
      transform: "scale3d(.3, .3, .3)",
    });

    setTimeout(function () {
      $this.parents(".card").remove();
    }, 800);
  });
  $(".card-header-right .reload-card").on("click", function () {
    var $this = $(this);
    $this.parents(".card").addClass("card-load");
    $this
      .parents(".card")
      .append(
        '<div class="card-loader"><i class="fa fa-circle-o-notch rotate-refresh"></div>'
      );
    setTimeout(function () {
      $this.parents(".card").children(".card-loader").remove();
      $this.parents(".card").removeClass("card-load");
    }, 3000);
  });
  $(".card-header-right .card-option .open-card-option").on(
    "click",
    function () {
      var $this = $(this);
      if ($this.hasClass("fa-times")) {
        $this.parents(".card-option").animate({
          width: "30px",
        });
        $(this).removeClass("fa-times").fadeIn("slow");
        $(this).addClass("fa-wrench").fadeIn("slow");
      } else {
        $this.parents(".card-option").animate({
          width: "140px",
        });
        $(this).addClass("fa-times").fadeIn("slow");
        $(this).removeClass("fa-wrench").fadeIn("slow");
      }
    }
  );
  $(".card-header-right .minimize-card").on("click", function () {
    var $this = $(this);
    var port = $($this.parents(".card"));
    var card = $(port).children(".card-block").slideToggle();
    $(this).toggleClass("fa-minus").fadeIn("slow");
    $(this).toggleClass("fa-plus").fadeIn("slow");
  });
  $(".card-header-right .full-card").on("click", function () {
    var $this = $(this);
    var port = $($this.parents(".card"));
    port.toggleClass("full-card");
    $(this).toggleClass("fa-window-restore");
  });
  $("#more-details").on("click", function () {
    $(".more-details").slideToggle(500);
  });
  $(".mobile-options").on("click", function () {
    $(".navbar-container .nav-right").slideToggle("slow");
  });
  $(".search-btn").on("click", function () {
    $(".main-search").addClass("open");
    $(".main-search .form-control").animate({
      width: "200px",
    });
  });
  $(".search-close").on("click", function () {
    $(".main-search .form-control").animate({
      width: "0",
    });
    setTimeout(function () {
      $(".main-search").removeClass("open");
    }, 300);
  });
  $(document).ready(function () {
    $(".header-notification").click(function () {
      $(this).find(".show-notification").slideToggle(500);
      $(this).toggleClass("active");
    });
  });
  $(document).on("click", function (event) {
    var $trigger = $(".header-notification");
    if ($trigger !== event.target && !$trigger.has(event.target).length) {
      $(".show-notification").slideUp(300);
      $(".header-notification").removeClass("active");
    }
  });

  // card js end
  $.mCustomScrollbar.defaults.axis = "yx";
  $("#styleSelector .style-cont").slimScroll({
    setTop: "1px",
    height: "calc(100vh - 320px)",
  });
  $(".main-menu").mCustomScrollbar({
    setTop: "1px",
    setHeight: "calc(100% - 56px)",
  });
  /*chatbar js start*/
  /*chat box scroll*/
  var a = $(window).height() - 80;
  $(".main-friend-list").slimScroll({
    height: a,
    allowPageScroll: false,
    wheelStep: 5,
    color: "#1b8bf9",
  });

  // search
  $("#search-friends").on("keyup", function () {
    var g = $(this).val().toLowerCase();
    $(".userlist-box .media-body .chat-header").each(function () {
      var s = $(this).text().toLowerCase();
      $(this).closest(".userlist-box")[s.indexOf(g) !== -1 ? "show" : "hide"]();
    });
  });

  // open chat box
  $(".displayChatbox").on("click", function () {
    var my_val = $(".pcoded").attr("vertical-placement");
    if (my_val == "right") {
      var options = {
        direction: "left",
      };
    } else {
      var options = {
        direction: "right",
      };
    }
    $(".showChat").toggle("slide", options, 500);
  });

  //open friend chat
  $(".userlist-box").on("click", function () {
    var my_val = $(".pcoded").attr("vertical-placement");
    if (my_val == "right") {
      var options = {
        direction: "left",
      };
    } else {
      var options = {
        direction: "right",
      };
    }
    $(".showChat_inner").toggle("slide", options, 500);
  });
  //back to main chatbar
  $(".back_chatBox").on("click", function () {
    var my_val = $(".pcoded").attr("vertical-placement");
    if (my_val == "right") {
      var options = {
        direction: "left",
      };
    } else {
      var options = {
        direction: "right",
      };
    }
    $(".showChat_inner").toggle("slide", options, 500);
    $(".showChat").css("display", "block");
  });
  $(".back_friendlist").on("click", function () {
    var my_val = $(".pcoded").attr("vertical-placement");
    if (my_val == "right") {
      var options = {
        direction: "left",
      };
    } else {
      var options = {
        direction: "right",
      };
    }
    $(".p-chat-user").toggle("slide", options, 500);
    $(".showChat").css("display", "block");
  });
  // /*chatbar js end*/

  $('[data-toggle="tooltip"]').tooltip();

  // wave effect js
  Waves.init();
  Waves.attach(".flat-buttons", ["waves-button"]);
  Waves.attach(".float-buttons", ["waves-button", "waves-float"]);
  Waves.attach(".float-button-light", [
    "waves-button",
    "waves-float",
    "waves-light",
  ]);
  Waves.attach(".flat-buttons", [
    "waves-button",
    "waves-float",
    "waves-light",
    "flat-buttons",
  ]);

  $(".form-control").on("blur", function () {
    if ($(this).val().length > 0) {
      $(this).addClass("fill");
    } else {
      $(this).removeClass("fill");
    }
  });
  $(".form-control").on("focus", function () {
    $(this).addClass("fill");
  });
});
$(document).ready(function () {
  $(".theme-loader").animate(
    {
      opacity: "0",
    },
    1000
  );
  setTimeout(function () {
    $(".theme-loader").remove();
  }, 1000);
});

// toggle full screen
function toggleFullScreen() {
  var a = $(window).height() - 10;

  if (
    !document.fullscreenElement && // alternative standard method
    !document.mozFullScreenElement &&
    !document.webkitFullscreenElement
  ) {
    // current working methods
    if (document.documentElement.requestFullscreen) {
      document.documentElement.requestFullscreen();
    } else if (document.documentElement.mozRequestFullScreen) {
      document.documentElement.mozRequestFullScreen();
    } else if (document.documentElement.webkitRequestFullscreen) {
      document.documentElement.webkitRequestFullscreen(
        Element.ALLOW_KEYBOARD_INPUT
      );
    }
  } else {
    if (document.cancelFullScreen) {
      document.cancelFullScreen();
    } else if (document.mozCancelFullScreen) {
      document.mozCancelFullScreen();
    } else if (document.webkitCancelFullScreen) {
      document.webkitCancelFullScreen();
    }
  }
}
$(document).ready(function () {
  var $submenuItems = $(".pcoded-submenu .sidebar-link");
  $submenuItems.on("click", function (e) {
    e.preventDefault();
    //get this href parent li and add active class but remove active class from siblings
    $(this).parent("li").addClass("active").siblings().removeClass("active");
    const targetTab = $(this).attr("href");
    // Activate the corresponding tab
    $('.nav-tabs a[href="' + targetTab + '"]').tab("show");
    $('.accordion-msg[href="' + targetTab + '"]').click();
  });
  // Handle accordion title click
  $(".accordion-msg").on("click", function () {
    var targetAccordion = $(this).attr("href");

    // Remove active class from all li elements
    $(".pcoded-submenu li").removeClass("active");

    // Add active class to the corresponding sidebar menu item
    $('.pcoded-submenu .sidebar-link[href="' + targetAccordion + '"]')
      .closest("li")
      .addClass("active");

    // Optionally, you can show the tab associated with the accordion as well
    $('.nav-tabs a[href="' + targetAccordion + '"]').tab("show");
  });

  // Handle tab click
  $(".about-tabs a").on("click", function () {
    var targetTab = $(this).attr("href");

    // Remove active class from all li elements
    $(".pcoded-submenu li").removeClass("active");

    // Add active class to the corresponding sidebar menu item
    $('.pcoded-submenu .sidebar-link[href="' + targetTab + '"]')
      .closest("li")
      .addClass("active");

    // Optionally, trigger the accordion as well
    $('.accordion-msg[href="' + targetTab + '"]').click();
  });

  $(".goToPay").on("click", function () {
    document.getElementById("next").click();
  });

  // Click event for sidebar menu items
  $(".b-menu").on("click", function (e) {
    e.preventDefault(); // Prevent default link behavior

    var target = $(this).data("target"); // Get the target ID

    // Hide all content rows
    $(".content-row").hide();

    // Show the targeted content row
    $("#" + target).show();

    // Remove active class from all menu items
    $(".b-menu").removeClass("active");

    // Add active class to the clicked menu item
    $(this).addClass("active");
  });

  // Handle click event on the "Profile" menu item
  $('.b-menu[data-target="profile-bppa"]').on("click", function () {
    // e.preventDefault();
    $("li.pcoded-hasmenu.b-menu.pcoded-trigger").removeClass(
      "pcoded-trigger active"
    );
    $(".pcoded-submenu").css("display", "none");
  });

  $(".join-us-btn").click(function () {
    console.log("clicked");
    window.location.href = "pages/auth.html";
  });
});

// Initialize first Swiper
function initializeSwiper(
  containerClass,
  paginationClass,
  nextButtonClass,
  prevButtonClass
) {
  return new Swiper(containerClass, {
    slidesPerView: 5,
    spaceBetween: 25,
    loop: true,
    centerSlide: true,
    fade: true,
    grabCursor: true,
    autoplay: {
      delay: 2000,
      disableOnInteraction: true,
    },
    pagination: {
      el: paginationClass,
      clickable: true,
      dynamicBullets: true,
    },
    navigation: {
      nextEl: nextButtonClass,
      prevEl: prevButtonClass,
    },
    breakpoints: {
      0: {
        slidesPerView: 1,
      },
      520: {
        slidesPerView: 2,
      },
      950: {
        slidesPerView: 4,
      },
      1250: {
        slidesPerView: 5,
      },
    },
  });
}

// Initialize Swipers
initializeSwiper(
  ".slide-content1",
  ".swiper-pagination1",
  ".swiper1-next",
  ".swiper1-prev"
);
initializeSwiper(
  ".slide-content2",
  ".swiper-pagination2",
  ".swiper2-next",
  ".swiper2-prev"
);
initializeSwiper(
  ".slide-content3",
  ".swiper-pagination3",
  ".swiper3-next",
  ".swiper3-prev"
);

var previous = document.getElementById("btnPrevious");
var next = document.getElementById("btnNext");
var gallery = document.getElementById("image-gallery");
var pageIndicator = document.getElementById("page");
var galleryDots = document.getElementById("gallery-dots");

var images = [];

for (var i = 23; i > 0; i--) {
  images.push({
    title: "Image" + i,
    source: "assets/images/gallery/img" + i + ".jpg",
  });
}

var perPage = 12;
var page = 1;
var pages = Math.ceil(images.length / perPage);

// Gallery dots
for (var i = 0; i < pages; i++) {
  var dot = document.createElement("button");
  var dotSpan = document.createElement("span");
  var dotNumber = document.createTextNode(i + 1);
  dot.classList.add("gallery-dot");
  dot.setAttribute("data-index", i);
  dotSpan.classList.add("sr-only");

  dotSpan.appendChild(dotNumber);
  dot.appendChild(dotSpan);

  dot.addEventListener("click", function (e) {
    var self = e.target;
    goToPage(self.getAttribute("data-index"));
  });

  galleryDots.appendChild(dot);
}

// Previous Button
previous.addEventListener("click", function () {
  if (page === 1) {
    page = 1;
  } else {
    page--;
    showImages();
  }
});

// Next Button
next.addEventListener("click", function () {
  if (page < pages) {
    page++;
    showImages();
  }
});

// Jump to page
function goToPage(index) {
  index = parseInt(index);
  page = index + 1;

  showImages();
}

// Load images
function showImages() {
  while (gallery.firstChild) gallery.removeChild(gallery.firstChild);

  var offset = (page - 1) * perPage;
  var dots = document.querySelectorAll(".gallery-dot");

  for (var i = 0; i < dots.length; i++) {
    dots[i].classList.remove("active");
  }

  dots[page - 1].classList.add("active");

  for (var i = offset; i < offset + perPage; i++) {
    if (images[i]) {
      var template = document.createElement("div");
      var title = document.createElement("p");
      var titleText = document.createTextNode(images[i].title);

      // Create the <a> element and set its attributes
      let anchor = document.createElement("a");
      anchor.setAttribute("data-fancybox", "gallery");
      anchor.setAttribute("href", images[i].source);

      // Create the <img> element and set its attributes
      let img = document.createElement("img");
      img.classList.add("gallery-img");
      template.classList.add("template");
      img.setAttribute("src", images[i].source);
      img.setAttribute("alt", images[i].title);

      title.appendChild(titleText);
      anchor.appendChild(img);
      template.appendChild(anchor);
      // template.appendChild(title);
      gallery.appendChild(template);
    }
  }

  // Animate images
  var galleryItems = document.querySelectorAll(".template");
  for (var i = 0; i < galleryItems.length; i++) {
    var onAnimateItemIn = animateItemIn(i);
    setTimeout(onAnimateItemIn, i * 100);
  }

  function animateItemIn(i) {
    var item = galleryItems[i];
    return function () {
      item.classList.add("animate");
    };
  }
  // Update page indicator
  pageIndicator.textContent = "Page " + page + " of " + pages;
}

showImages();

$(document).ready(function () {
  $("#gallery-section .gallery-item").click(function () {
    $("#gallery-section").hide(); // Hide the gallery section
    $(".gallery").show(); // Show the gallery
  });

  // Back button to return to gallery section
  $("#backButton").click(function () {
    $(".gallery").hide(); // Hide the gallery
    $("#gallery-section").show(); // Show the gallery section again
  });

  $(".ag-courses_item").on("click", function () {
    // Remove 'active' class from all slides
    $(".ag-courses_item").removeClass("active-card");
    // Add 'active' class to the clicked slide
    $(this).addClass("active-card");
  });
});




var $window = $(window),
  nav = $(".fixed-button");

$(document).ready(function () {
  // Find all <ul> and <li> inside the element with id 'history'
  $("#history ul li").each(function () {
    // Add the icon before the text inside each <li>
    $(this).prepend(
      '<i class="icofont icofont-double-right text-success"></i> '
    );
  });
  $("#constitution ul li").each(function () {
    // Add the icon before the text inside each <li>
    $(this).prepend(
      '<i class="icofont icofont-double-right text-success"></i> '
    );
  });

  // $('.close-nav').on('click', function() {
  //   $('#pcoded').attr("vertical-nav-type", "offcanvas");
    
  // });
  $('.close-nav').on('click', function() {
    var $pcoded = $('#pcoded');
    console.log($pcoded);
    if (
        ($pcoded.attr("pcoded-device-type") === "tablet" || $pcoded.attr("pcoded-device-type") === "phone")
    ) {
      $('body').css('overflow', 'auto'); 
        $pcoded.attr("vertical-nav-type", "offcanvas");
    }
});
});


setTimeout(function() {
  $('[data-fancybox="gallery"]').fancybox({
    // Core options
    loop: true, // Allows looping through items
    buttons: [
      "zoom",        // Zoom in/out
      "slideShow",   // Start slideshow
      "fullScreen",  // Fullscreen mode
      "download",    // Download image
      "thumbs",      // Show thumbnails
      "close"        // Close button
    ],
    toolbar: true,      // Show toolbar at the top
    arrows: true,       // Show navigation arrows
    protect: true,      // Protect images from being saved by right-click
    animationEffect: "zoom",  // Animation for opening and closing (zoom, fade, etc.)
    transitionEffect: "fade", // Transition effect between slides (fade, slide, tube, etc.)
    transitionDuration: 500,  // Duration of transition effect
    slideShow: {
      autoStart: true, // Automatically start slideshow
      speed: 3000      // Delay between slides (in ms)
    },
    thumbs: {
      autoStart: true  // Show thumbnail sidebar on start
    },
    // Customize behavior
    clickContent: function(current, event) {
      return current.type === "image" ? "zoom" : false;
    },
    clickSlide: function(current, event) {
      return "close"; // Close on clicking the slide
    },
    
    // Customize appearance
    infobar: true,         // Show image count ("1 of 3")
    baseClass: 'custom-class',  // Custom class for styling
    caption: function(instance, item) {
      return $(this).attr('data-caption') || '';  // Captions for images
    },
  
    // Customize interactions
    keyboard: true,         // Allow keyboard navigation
    touch: {
      vertical: true,       // Allow vertical swipe to close
      momentum: true        // Enable swipe momentum
    },
    
    // Enable thumbnails sidebar
    thumbs: {
      autoStart: true,      // Display thumbnails sidebar automatically
      axis: 'x'             // Axis for thumbnail display (x or y)
    },
    
    // Fullscreen behavior
    fullScreen: {
      autoStart: false      // Auto-start fullscreen
    }
  });
}, 2000);
