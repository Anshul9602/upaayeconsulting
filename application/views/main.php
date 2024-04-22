<link href="<?php echo base_url(); ?>/assets/css/mainpage.css" rel="stylesheet">

<link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
<script src="
https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/js/splide.min.js
"></script>
<link href="
https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/css/splide.min.css
" rel="stylesheet">

<style>
  section {
    z-index: 999;
  }

  .header {
    background-color: transparent;
    position: absolute;
  }

  .mobile-nav-toggle {
    color: #000;
  }

  .navbar a {
    color: #2f2e2e;
  }

  .sticked .navbar a {
    color: #fff;
  }

  .sticked .mobile-nav-toggle {
    color: #fff !important;
  }

  .video-section {
    position: relative;
    height: 100vh;
    overflow: hidden;
  }

  .video-overlay {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    z-index: 1;
    overflow: hidden;
  }

  #backgroundVideo {
    width: 100%;
    height: 100%;
    object-fit: cover;
    opacity: 1;
  }

  .text-overlay {
    position: absolute;
    top: 30%;
    left: 50%;
    transform: translate(-50%, -50%);
    text-align: center;
    color: #00243a;
    z-index: 1;
  }

  .text-overlay h1 {
    margin: 0;
    font-size: 6em;
  }

  .text-overlay h3 {
    margin: 0;
    font-size: 1.5em;
    line-height: 1.2;
    letter-spacing: 2px;
    line-height: 36px;
  }

  .def {
    background-position: 50% 50%;
    background-size: cover;
    display: flex;
    align-items: center;
    min-height: 600px;
    position: relative;
    z-index: 2;
  }

  .def .container {
    height: 70%;
    margin: auto;
    text-align: start;
    color: #fff;
  }

  .defh2 {
    font-size: 48px;
    line-height: 1;
  }

  .def.un {
    height: 2px;
    width: 200px;
    background: #fff;
    margin: 0 auto;
  }

  .def h3 {
    font-size: 22px;
    line-height: 1.2;
    margin-top: 20px;
  }


  .def p {
    color: #fff;
  }

  .mob {
    display: none;
  }

  @media screen and (max-width: 768px) {
    .bg-black1 {

      min-height: 400px !important;

    }

    .def {

      min-height: 400px !important;

    }

    .text-overlay h1 {
      margin: 0;
      font-size: 3em;
    }

    .desk {
      display: none;
    }

    .mob {
      display: block !important;
    }

    .text-overlay h3 {
      margin: 0;
      font-size: 1em;
      line-height: 1;
      letter-spacing: 2px;
      line-height: 28px;
    }

    .cou .col-8 {
      margin: 20px;
    }

    .cou {
      justify-content: center;
      padding: 0;
    }

    .co1 {
      margin: 2%;
    }

    .tc1 {
      text-align: center;
    }

    .mtm {
      margin-top: 50px;
    }
  }

  .dd .card {

    border: none;
    outline: none;
    color: #fff;
    background: #00243a;

    position: relative;
    z-index: 0;
    border-radius: 10px;
  }

  .dd .card:before {
    content: '';
    background: linear-gradient(45deg, #ff7300, #ff0000);
    position: absolute;
    top: -4px;
    left: -4px;
    background-size: 400%;
    z-index: -1;
    filter: blur(1px);
    width: calc(100% + 8px);
    height: calc(100% + 8px);
    animation: glowing 20s linear infinite;
    opacity: 0;
    transition: opacity .3s ease-in-out;
    border-radius: 10px;
  }

  .dd .card:active {
    color: #000
  }



  .dd .card:hover:before {
    opacity: 1;
  }

  .dd .card:after {
    z-index: -1;
    content: '';
    position: absolute;
    width: 100%;
    height: 100%;
    background: #00243a;
    left: 0;
    top: 0;
    border-radius: 10px;
  }


  .bg-black1 {
    width: 100%;
    height: 100%;
    opacity: 0.7;
    min-height: 600px;
    justify-content: center;
    display: flex;
    background-color: black;
  }

  .dds {
    display: none;
    max-width: 250px;
  }

  .ds {
    display: block;
    max-width: 250px;
  }
</style>
<section class="p-0">
  <div class="main">
    <div class="video-section desk" id="parallax-section">
      <div class="video-overlay" style="position: relative;">
        <img src="assets/img/ban1.jpg" alt="" style="width: 100%;">
        <div class="text-overlay">
          <h1>ACCOUNTING</h1>
          <h3>PRECISION <strong>|</strong> ANALYSIS <strong>|</strong> GROWTH</h3>
        </div>
      </div>

    </div>
    <div class="mob">
      <div class="video-overlay" style="position: relative;">
        <img src="assets/img/ban1mob.png" alt="" style="width: 100%;">
        <div class="text-overlay" style="WIDTH: 100%;">
          <h1>ACCOUNTING</h1>
          <h3>PRECISION <strong>|</strong> ANALYSIS <strong>|</strong> GROWTH</h3>
        </div>
      </div>

    </div>


  </div>

  

</section>
<section color-mode="light" theme-mode="healthie" class="section is--small">
  <div class="container is--overflow">
    <div class="flex-row is--centered">
      <div class="wrapper-medium">
        <h2 class="tagline text-center">Healthie is trusted by the leaders reshaping healthcare delivery</h2>
      </div>
    </div>
  </div>
  <div class="sl">
    <section class="splide" aria-label="Splide Basic HTML Example">
      <div class="splide__track">
        <ul class="splide__list">
          <li class="splide__slide">Slide 01</li>
          <li class="splide__slide">Slide 02</li>
          <li class="splide__slide">Slide 03</li>
          <li class="splide__slide">Slide 01</li>
          <li class="splide__slide">Slide 02</li>
          <li class="splide__slide">Slide 03</li>
          <li class="splide__slide">Slide 01</li>
          <li class="splide__slide">Slide 02</li>
          <li class="splide__slide">Slide 03</li>
        </ul>
      </div>
    </section>
  </div>
  
  <div class="bg is--secondary"></div>
</section>




<script>
  var splide = new Splide( '.splide', {
    perPage: 3,
    rewind : true,
  } );
  
  splide.mount();
  // Parallax effect using JavaScript
  document.addEventListener("DOMContentLoaded", function () {
    var parallaxSection = document.getElementById("parallax-section");
    var backgroundVideo = document.getElementById("backgroundVideo");
    var textOverlay = document.querySelector(".text-overlay");

    function updateParallax() {
      var scrollPosition = window.scrollY;
      var parallaxValue = scrollPosition * 0.5; // Adjust the speed of parallax

      backgroundVideo.style.transform = "translateY(" + parallaxValue + "px)";
      textOverlay.style.transform = "translate(-50%, calc(-50% + " + parallaxValue + "px))";
    }

    window.addEventListener("scroll", updateParallax);
  });

</script>

<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script>
  document.addEventListener("DOMContentLoaded", function () {
    var video = document.getElementById('backgroundVideo');
    var additionalText = document.getElementById('additionalText');

    // Play the video
    video.play();

    // Show the additional text after the video has started playing
    video.addEventListener('playing', function () {
      additionalText.style.opacity = 1;
    });
  });
</script>
<script>
  //window.addEventListener('scroll', function () {
  //var dsImage = document.querySelector('.ds');
  // var ddsImage = document.querySelector('.dds');

  // Get the scroll position
  // var scrollPosition = window.scrollY || document.documentElement.scrollTop;

  // Define the threshold for switching images (adjust as needed)
  //var switchThreshold = 20;

  // Toggle the visibility of images based on scroll position
  // if (scrollPosition > switchThreshold) {
  ////  dsImage.style.display = 'none';
  //ddsImage.style.display = 'inline-block';
  // } else {
  //  dsImage.style.display = 'inline-block';
  //  ddsImage.style.display = 'none';
  // }
  //});
</script>