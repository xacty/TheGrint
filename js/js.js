function openNav() {
    document.getElementById("mySidenav").style.width = "250px";
    //document.getElementById("header").style.marginLeft = "250px";
}

function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
    //document.getElementById("header").style.marginLeft= "0";
};
$(function() {
    //caches a jQuery object containing the header element
    var header = $("header");
    $(window).scroll(function() {
        var scroll = $(window).scrollTop();

        if (scroll >= 90) {
            header.addClass("effect-header");
        } else {
            header.removeClass("effect-header");
        }
    });
});

  var slidePosition = 1;
  SlideShow(slidePosition);

// forward/Back controls
function plusSlides(n) {
  SlideShow(slidePosition += n);
}

//  images controls
function currentSlide(n) {
  SlideShow(slidePosition = n);
}

function SlideShow(n) {
  var i;
  var slides = document.getElementsByClassName("Containers");
  var circles = document.getElementsByClassName("dots");

  if (n > slides.length) {slidePosition = 1}
    if (n < 1) {slidePosition = slides.length}
      for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
      }
      for (i = 0; i < circles.length; i++) {
        circles[i].className = circles[i].className.replace(" enable", "");
      }
      slides[slidePosition-1].style.display = "block";
      circles[slidePosition-1].className += " enable";

    } 