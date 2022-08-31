<!DOCTYPE html>
<html>
<head>
  <title>TheGrint</title>
  <meta charset="UTF-8">
  <link rel="icon" type="image/x-icon" href="assets/favicon.png">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="font/stylesheet.css">
  <link rel="stylesheet" href="css/header.css">
  <link rel="stylesheet" href="css/carousel.css">  
  <link rel="stylesheet" href="css/style.css">

  <style>
    body,h1,h2,h3,h4,h5,h6 {font-family: "Helvetica Neue"}

    body, html {
      height: 100%;
      margin: 0;
    }
  </style>
</head>
<body>
  <header>
    <div class="head_container container">
      <div class="logo">
        <img src="assets/white_logo.png">
      </div>
      <div class="menu" id="myTopnav">
        <ul>
          <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="openNav()">&#9776;</a>
          <li><a href="#">Home</a></li>
          <li><a href="#">About</a></li>
          <li><a href="#">Portfolio</a></li>
          <li><a href="#">Request Quote</a></li>
          <li><a href="#">Contact</a></li>
        </ul>
      </div>
    </div>
  </header>
  <div id="mySidenav" class="sidenav">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
    <a href="#">Home</a>
    <a href="#">About</a>
    <a href="#">Portfolio</a>
    <a href="#">Request Quote</a>
    <a href="#">Contact</a>
    <p style="color: #1c3664; text-align: center">Hubover &copy; 2017</p>
  </div>
  <section class="main-banner white">
    <div class="overlay"></div>
    <svg id="Layer_1" class="shape" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1920 114.21"><defs><style>.shaper-svg{fill:#fff;}</style></defs><path class="shaper-svg" d="M0,114.2s586.81,2.32,900.35-72,682.84-34.84,838.45,0,181.19,37.16,181.19,37.16v34.84H0Z"/></svg>

    <div style="display: none;" class="shape shape-bottom">
      <?xml version="1.0" encoding="UTF-8"?><svg id="Layer_1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1920 114.21"><defs><style>.shaper-svg{fill:#fff;}</style></defs><path class="shaper-svg" d="M0,114.2s586.81,2.32,900.35-72,682.84-34.84,838.45,0,181.19,37.16,181.19,37.16v34.84H0Z"/></svg>
    </div>
    <div class="banner-content container">
      <h1>The Best <b>Golf App</b></h1>
      <h2>Manage your Scores, USGA Handicap, GPS and more</h2>
      <div class="buttons">
       <?php include "sections/buttons.html" ?>
     </div>
     <p class="reviews">4.8 ⭐⭐⭐⭐⭐ (12K+ reviews)</p>
   </div>
 </section>
 <section class="first-section">
  <div class="container">
    <h1><b>TheGrint</b> is the best <br><b class="green">golf scoretracker!</b></h1>
    <div class="first-wrapper">
      <div class="left"><img src="assets/scoretracker1.webp" alt=""></div>
      <div class="right">
        <img src="assets/scoretracker2.webp" alt="">
        <div class="first-content">
          <h2><b>Track as you play</b><br>with our advanced score tracker</h2>
          <p>The advance Score Selector feature will let you track three main additional things which we'll explain in more detail: Far Left or Far Right misses, Tee shot club, and 1st putt distance</p>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="second-section blue-bg">
  <div class="shape shape2" data-negative="false">
    <?xml version="1.0" encoding="UTF-8"?>
    <svg id="Layer_1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1920 100"><defs>
      <style>.c{fill:#fff;}</style>
    </defs>
    <polygon style="opacity: .5;" class="c" points="0 50 1920 50 1920 0 0 29.31 0 50"/><polygon style="opacity: .25;" class="c" points="0 50 1920 50 1920 100 0 70.69 0 50"/><polygon class="c" points="1920 0 0 0 0 29.31 1920 0"/>
  </svg>
</div>
<div class="blue-overlay"></div>
<div class="container">
  <div class="second-wrapper white">
    <div class="left">
      <img src="assets/devices2.webp" alt="">
    </div>
    <div class="right">
      <h1><b class="green">TheGrint</b> can be used to play golf <b>around the world</b></h1>
      <p>We offer more than 40.000 mapped golf courses around the world that you can play and navigate through our advanced golf GPS feature.</p>
      <p>whichever your golf needs are, TheGrint will help you enjoy your golf game around the globe. Use it to keep scores using our advanced score tracker, navigate any course with our Golf GPS or analyze your game with our advanced stats module, we have it all.</p>
      <p class="reviews">4.8 ⭐⭐⭐⭐⭐ (12K+ reviews)</p>
      <div class="buttons">
       <?php include "sections/buttons.html" ?>
     </div>
   </div>
 </div>
</div>
</section>

<section class="third-section">
  <div class="container">
    <h1>Some of <b><span class="green">TheGrint</span> Features</b></h1>
    <!-- The circles/dots -->
    <div class="video-buttons" style="text-align:center">
      <span class="dots" onclick="currentSlide(1)"><i class="fa-solid fa-circle-play"></i> Handicaps & Scorecard</span>
      <span class="dots" onclick="currentSlide(2)"><i class="fa-solid fa-circle-play"></i> GPS Rangefinder</span>
      <span class="dots" onclick="currentSlide(3)"><i class="fa-solid fa-circle-play"></i> Golf Handicap Calculator</span>
      <span class="dots" onclick="currentSlide(4)"><i class="fa-solid fa-circle-play"></i> Foursomes & Live Scoring</span>
    </div>
    <!-- Slideshow container -->
    <div class="slideshow-container fade">

      <!-- Full images with numbers and message Info -->
      <div class="Containers">
        <div class="video">
          <iframe width="560" height="315" src="https://www.youtube-nocookie.com/embed/vgnzfau7Mmw?rel=0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
      </div>

      <div class="Containers">
        <div class="video" >
          <iframe width="560" height="315" src="https://www.youtube-nocookie.com/embed/bUMQTnwfrYA?rel=0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
      </div>

      <div class="Containers">
        <div class="video">
          <iframe width="560" height="315" src="https://www.youtube-nocookie.com/embed/_tEn0E-QEDM?rel=0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
      </div>

      <div class="Containers">
        <div class="video">
          <iframe width="560" height="315" src="https://www.youtube-nocookie.com/embed/vgnzfau7Mmw?rel=0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
      </div>

    </div>
    <br>


    <div class="awards">
      <div class="a-wrapper">
        <div class="a-img-box"><img src="assets/cnn.png" alt=""></div>
        <p>“App changes golf for amateurs”</p>
      </div>
      <div class="a-wrapper">
        <div class="a-img-box"><img src="assets/golf_digest.png" alt=""></div>
        <p>“Score, stats and GPS”</p>
      </div>
      <div class="a-wrapper">
        <div class="a-img-box"><img src="assets/golf_magazine.png" alt=""></div>
        <p>“Top App for Handicaps and scoring”</p>
      </div>
    </div>
  </div>
</section>
<section class="fourth-section blue-bg">
  <div class="blue-overlay"></div>
  <div class="container">
    <div class="fourth-wrapper white">
      <div class="left">
        <img src="assets/4-1.webp" alt="">
        <img src="assets/4-2.webp" alt="">
        <img src="assets/4-3.webp" alt="">
      </div>
      <div class="right">
        <h1 class="align-left">Golf GPS Rangefinder<br><b class="green">Smartwatch ready</b></h1>
        <ul class="icon-list-items">
          <li class="icon-list-item white">
            <span class="icon-list-icon">
              <i aria-hidden="true" class="fas fa-check-circle"></i>
            </span>
            <span class="icon-list-text">Shot tracking and distance calculation on nearly every course worldwide</span>
          </li>
          <li class="icon-list-item white">
            <span class="icon-list-icon">
              <i aria-hidden="true" class="fas fa-check-circle"></i>
            </span>
            <span class="icon-list-text">Know the distance of the fairway and get on to the green</span>
          </li>
          <li class="icon-list-item white">
            <span class="icon-list-icon">
              <i aria-hidden="true" class="fas fa-check-circle"></i>
            </span>
            <span class="icon-list-text">Tee off with confidence, knowing the distance to the green</span>
          </li>
        </ul>
      </div>
    </div>
  </div>
</section>
<section class="fifth-section">
  <div class="container">
    <div class="fifth-wrapper">

      <div class="left">
        <h1 class="align-left">Try our <b class="green">Green Maps</b></h1>
        <ul class="icon-list-items">
          <li class="icon-list-item">
            <span class="icon-list-icon">
              <i aria-hidden="true" class="fas fa-check-circle"></i>
            </span>
            <span class="icon-list-text">Dual view topographic slope shown in % with precise green slopes.</span>
          </li>
          <li class="icon-list-item">
            <span class="icon-list-icon">
              <i aria-hidden="true" class="fas fa-check-circle"></i>
            </span>
            <span class="icon-list-text">Use it to improve your approach game.</span>
          </li>
          <li class="icon-list-item">
            <span class="icon-list-icon">
              <i aria-hidden="true" class="fas fa-check-circle"></i>
            </span>
            <span class="icon-list-text">Over 13k green maps available.</span>
          </li>
        </ul>
        <p>With Green Maps you will now be able to determine the best location to place your ball on your approach shots, or at least try it. If the Golf Course that you are playing has the greens mapped, you will see a sloped green icon right above the GPS icon on the top right side of your GPS screen.</p>
      </div>

      <div class="right">
        <img src="assets/new/asset2.png" alt="">
        <div class="img-wrapper">
          <img src="assets/new/greenmaps.webp" alt="">
          <img src="assets/5-2.webp" alt="">
        </div>        
      </div>

    </div>
  </div>
</section>

<section class="sixth-section blue-bg">
  <div class="shape shape2" data-negative="false">
    <?xml version="1.0" encoding="UTF-8"?>
    <svg id="Layer_1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1920 100"><defs>
      <style>.c{fill:#fff;}</style>
    </defs>
    <polygon style="opacity: .5;" class="c" points="0 50 1920 50 1920 0 0 29.31 0 50"/><polygon style="opacity: .25;" class="c" points="0 50 1920 50 1920 100 0 70.69 0 50"/><polygon class="c" points="1920 0 0 0 0 29.31 1920 0"/>
  </svg>
</div>
<div class="blue-overlay"></div>
<div class="container">
  <div class="second-wrapper sixth-wrapper white">
    <div class="left">
      <div id="slider">
        <img class="iphone-border" src="assets/iphone_border.webp" alt="">
        <ul id="slideWrap"> 
          <li><img src="assets/image-3.webp" alt=""></li>
          <li><img src="assets/image-4.webp" alt=""></li>
          <li><img src="assets/image-5.webp" alt=""></li>
          <li><img src="assets/image-6.webp" alt=""></li>
        </ul>

        <a id="prev" >&#8810;</a>
        <a id="next" >&#8811;</a>
      </div>


    </div>
    <div class="right">
      <h1>Golf Stats <b class="green">Module</b></h1>
      <ul class="icon-list-items">
        <li class="icon-list-item">
          <span class="icon-list-icon">
            <i aria-hidden="true" class="fas fa-check-circle"></i>
          </span>
          <span class="icon-list-text">Know your Strengths and Weaknesses</span>
        </li>
        <li class="icon-list-item">
          <span class="icon-list-icon">
            <i aria-hidden="true" class="fas fa-check-circle"></i>
          </span>
          <span class="icon-list-text">In-depth look into your golf habits, distances of swings, and past scores</span>
        </li>
        <li class="icon-list-item">
          <span class="icon-list-icon">
            <i aria-hidden="true" class="fas fa-check-circle"></i>
          </span>
          <span class="icon-list-text">View scores, stats, and photos uploaded by your golf buddies</span>
        </li>
        <li class="icon-list-item">
          <span class="icon-list-icon">
            <i aria-hidden="true" class="fas fa-check-circle"></i>
          </span>
          <span class="icon-list-text">Our 4somes tool lets you organize your next tee time with your foursome</span>
        </li>
      </ul>
    </div>
  </div>
</div>
</section>


<section class="fifth-section seventh-section">
  <div class="container">
    <div class="fifth-wrapper seventh-wrapper">

      <div class="left">
        <h1 class="align-left">Live <b class="green">Leaderboard</b></h1>
        <ul class="icon-list-items">
          <li class="icon-list-item">
            <span class="icon-list-icon">
              <i aria-hidden="true" class="fas fa-check-circle"></i>
            </span>
            <span class="icon-list-text">Get instant Push Notification of what your friends are doing live on the golf course</span>
          </li>
          <li class="icon-list-item">
            <span class="icon-list-icon">
              <i aria-hidden="true" class="fas fa-check-circle"></i>
            </span>
            <span class="icon-list-text">Compete with other foursomes in real-time</span>
          </li>
          <li class="icon-list-item">
            <span class="icon-list-icon">
              <i aria-hidden="true" class="fas fa-check-circle"></i>
            </span>
            <span class="icon-list-text">Keep score within your group on multiple phones</span>
          </li>
          <li class="icon-list-item">
            <span class="icon-list-icon">
              <i aria-hidden="true" class="fas fa-check-circle"></i>
            </span>
            <span class="icon-list-text">Ryder Cup Format competitions</span>
          </li>
        </ul>
      </div>

      <div class="right">
        <img src="assets/new/asset3.png" alt="">
        <div class="img-wrapper">
          <img src="assets/leaderboards.webp" alt="">
          <img src="assets/new/section-gaming.webp" alt="">
        </div>        
      </div>

    </div>
  </div>
</section>

<section class="second-section eighth-section blue-bg">
  <div class="shape shape2 shape-reversed" data-negative="false">
    <?xml version="1.0" encoding="UTF-8"?>
    <svg id="Layer_1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1920 100"><defs>
      <style>.c{fill:#fff;}</style>
    </defs>
    <polygon style="opacity: .5;" class="c" points="0 50 1920 50 1920 0 0 29.31 0 50"/><polygon style="opacity: .25;" class="c" points="0 50 1920 50 1920 100 0 70.69 0 50"/><polygon class="c" points="1920 0 0 0 0 29.31 1920 0"/>
  </svg>
</div>
<div class="blue-overlay"></div>
<div class="container">
  <div class="second-wrapper eighth-wrapper white">
    <div class="left">
      <img src="assets/new/social.webp" alt="">
    </div>
    <div class="right">
      <h1>Golf Community for you to connect with  <b class="green">friends and new groups</b></h1>
      <ul class="icon-list-items">
        <li class="icon-list-item">
          <span class="icon-list-icon">
            <i aria-hidden="true" class="fas fa-check-circle"></i>
          </span>
          <span class="icon-list-text">View scores, stats, and photos uploaded by your golf buddies</span>
        </li>
        <li class="icon-list-item">
          <span class="icon-list-icon">
            <i aria-hidden="true" class="fas fa-check-circle"></i>
          </span>
          <span class="icon-list-text">Our 4somes tool lets you organize your next tee time with your foursome</span>
        </li>
        <li class="icon-list-item">
          <span class="icon-list-icon">
            <i aria-hidden="true" class="fas fa-check-circle"></i>
          </span>
          <span class="icon-list-text">See how you rank among your friends and the rest of TheGrint community</span>
        </li>
      </ul>   </div>
    </div>
  </div>
</section>

<section class="ninth-section">
  <div class="container ninth-container">
    <h1>Our website is <b style="color:#b5d44f;">awesome too!</b></h1>
    <p>Want to analyze your game back at home or at the office? Our website offers even more in-depth stats and is designed for a larger screen.</p>
    <div><img src="assets/thegrint_desktop2.1.webp" alt=""></div>
    <h1>Ready to have the  <br><b>best golf experience ever?</b></h1>
    <div class="buttons">
     <?php include "sections/buttons.html" ?>
   </div>
   <a class="register-btn" href="https://sandbox.thegrint.com/passthru/register">JOIN FOR FREE TODAY</a>
 </div>
</section>

<!-- Footer -->
<footer class="blue-bg">
  <svg  class="footer-shape" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 100" preserveAspectRatio="none">
    <path class="elementor-shape-fill" d="M421.9,6.5c22.6-2.5,51.5,0.4,75.5,5.3c23.6,4.9,70.9,23.5,100.5,35.7c75.8,32.2,133.7,44.5,192.6,49.7
    c23.6,2.1,48.7,3.5,103.4-2.5c54.7-6,106.2-25.6,106.2-25.6V0H0v30.3c0,0,72,32.6,158.4,30.5c39.2-0.7,92.8-6.7,134-22.4
    c21.2-8.1,52.2-18.2,79.7-24.2C399.3,7.9,411.6,7.5,421.9,6.5z"></path>
  </svg>
  <div class="blue-overlay"></div>
  <div class="container footer-container white">
   <div class="top">
    <div class="footer-logo">
      <img src="assets/white_logo.png" alt="">
    </div>
    <h2>The Best Golf App</h2>
    <p class="green">Manage your Scores, USGA Handicap, GPS and more</p>
    <div class="social-media">
      <a href=""><i aria-hidden="true" class="fab fa-facebook-f"></i></a>
      <a href=""><i aria-hidden="true" class="fab fa-instagram"></i></a>
      <a href=""><i aria-hidden="true" class="fab fa-twitter"></i></a>
    </div>
  </div>
  <div class="bot">
   <div class="bot-box">
     <h4>TheGRint</h4>
     <p>Since Ⓒ 2011 | All Rights Are Reserved</p>
   </div>
   <div class="bot-box">
     <h4>Need Help</h4>
     <a href="">Member Support | FAQ</a>
   </div>
   <div class="bot-box">
     <h4>Terms & Conditions</h4>
     <a href="">Terms of use | Privacy Policy</a>
   </div>
 </div>
</div>
</footer>


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="js/js.js"></script>

<script>

</script>

</body>
</html>
