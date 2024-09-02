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


 // Click event for sidebar menu items
 $('.b-menu').on('click', function(e) {
  e.preventDefault(); // Prevent default link behavior

  var target = $(this).data('target'); // Get the target ID

  // Hide all content rows
  $('.content-row').hide();

  // Show the targeted content row
  $('#' + target).show();

  // Remove active class from all menu items
  $('.b-menu').removeClass('active');

  // Add active class to the clicked menu item
  $(this).addClass('active');
});


$('.join-us-btn').click(function() {
  console.log('clicked');
  window.location.href = 'pages/auth.html';
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
      delay: 2500,
      disableOnInteraction: false,
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
      var img = document.createElement("img");
      img.classList.add("gallery-img");
      template.classList.add("template");
      img.setAttribute("src", images[i].source);
      img.setAttribute("alt", images[i].title);

      title.appendChild(titleText);
      template.appendChild(img);
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

// Show the lightbox when an image is clicked
// gallery.addEventListener('click', function(e) {
//   if (e.target && e.target.classList.contains('gallery-img')) {
//       var lightbox = document.getElementById('lightbox');
//       var lightboxImg = document.getElementById('lightbox-img');

//       // Set the src of the lightbox image to the clicked image
//       lightboxImg.src = e.target.src;

//       // Display the lightbox
//       lightbox.style.display = 'block';
//   }
// });

// // Close the lightbox when the close button is clicked
// var lightboxClose = document.querySelector('.lightbox-close');
// lightboxClose.addEventListener('click', function() {
//   document.getElementById('lightbox').style.display = 'none';
// });

// Close the lightbox if the user clicks anywhere outside the image
window.addEventListener("click", function (e) {
  var lightbox = document.getElementById("lightbox");
  if (e.target == lightbox) {
    lightbox.style.display = "none";
  }
});

// $("body").append(
//   '<div class="fixed-button active"><a href="https://codedthemes.com/item/flash-able-bootstrap-admin-template/" target="_blank" class="btn btn-md btn-primary"><i class="fa fa-shopping-cart" aria-hidden="true"></i> Upgrade To Pro</a> </div>'
// );
var $window = $(window),
  nav = $(".fixed-button");
