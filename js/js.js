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
  stopThis();
}

function SlideShow(n) {
  var i;
  var slides = document.getElementsByClassName("Containers");
  var circles = document.getElementsByClassName("dots");

  if (n > slides.length) {slidePosition = 1}
    if (n < 1) {slidePosition = slides.length}
      for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
        document.getElementsByTagName('iframe')[i].className += " unactive";
        
    }
    for (i = 0; i < circles.length; i++) {
        circles[i].className = circles[i].className.replace(" enable", "");
    }
    slides[slidePosition-1].style.display = "block";
    document.getElementsByTagName('iframe')[slidePosition-1].classList.remove("unactive");
    circles[slidePosition-1].className += " enable";

}


function stopThis(){

  var iframe = document.getElementsByTagName("iframe");

  for (i = 0; i < iframe.length; i++){
    if (iframe[i].classList.contains('unactive') ){
      var url = iframe[i].getAttribute('src');
      iframe[i].setAttribute('src', '');
      iframe[i].setAttribute('src', url);      
  }
}
}

var responsiveSlider = function() {

    var slider = document.getElementById("slider");
    var sliderWidth = slider.offsetWidth;
    var slideList = document.getElementById("slideWrap");
    var count = 1;
    var items = slideList.querySelectorAll("li").length;
    var prev = document.getElementById("prev");
    var next = document.getElementById("next");

    window.addEventListener('resize', function() {
      sliderWidth = slider.offsetWidth;
  });

    var prevSlide = function() {
      if(count > 1) {
        count = count - 2;
        slideList.style.left = "-" + count * sliderWidth + "px";
        count++;
    }
    else if(count = 1) {
        count = items - 1;
        slideList.style.left = "-" + count * sliderWidth + "px";
        count++;
    }
};

var nextSlide = function() {
  if(count < items) {
    slideList.style.left = "-" + count * sliderWidth + "px";
    count++;
}
else if(count = items) {
    slideList.style.left = "0px";
    count = 1;
}
};

next.addEventListener("click", function() {
  nextSlide();
});

prev.addEventListener("click", function() {
  prevSlide();
});

setInterval(function() {
  nextSlide()
}, 5000);

};

window.onload = function() {
    responsiveSlider();  
}