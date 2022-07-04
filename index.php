<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Evil Magic Defense</title>
  <link rel="stylesheet" type="text/css" href="./assets/css/main.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css" />
  <link rel="stylesheet" href="./assets/css/owl.carousel.min.css" />
  <link rel="icon" type="image/x-icon" href="./assets/img/icon/favi.png">
  <link href="./assets/css/main.css" rel="stylesheet" type="text-css" />
  <style>
    #logodesktopmain {
      max-width: 1250px;
      left: 50%;
      transform: translateX(-50%);
      position: absolute;
      z-index: 99999;
    }
  </style>
</head>

<body>
  <div id="loader" style="z-index: 10007; position: fixed; top:0; left:0; display:block; background-color: black; height: 100vh; width: 100%; ">
    <video width="66%" height="66%" id="OracleVid" style="    position: absolute;
    left: 50%;
    z-index: 10008;
    top: 50%;
    transform: translate(-50%, -50%);" playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop">
      <source id="video" src="./assets/video/loadingalpha.webm" type="video/webm">
    </video>
  </div>
  <header class="mainHeader">
    <?php require_once './layers/nav.php'; ?>
    <div class="headerArea d-none d-lg-block">
      <img src="./assets/img/icon/1bg.png" id="1bg" alt="">
      <img src="./assets/img//icon/2Agaclar.png" alt="">
      <img src="./assets/img/icon/3Zemin.png" alt="">
      <img src="./assets/img/icon/7_on.png" id="yediOn" alt="">
      <img src="./assets/img/icon/4arkasira.png" id="4ortasira" alt="">
      <img src="./assets/img/icon/5ortasira.png" id="5ortasira" alt="">
      <img src="./assets/img/icon/6onsira.png" id="6onsira" alt="">
      <video class="d-none vidPro" style="position: absolute; z-index: 0;     left: 50%;  padding-top: 100px;
    transform: translateX(-50%);" width="80%" height="80%" id="homeVid" playsinline="playsinline" autoplay="autoplay" muted="muted">
        <source id="video" src="./assets/video/lastLogo.webm" type="video/webm">
      </video>
      <div class="bottomImgT"></div>
    </div>
    <div class="headerAreaMobil d-block d-lg-none">
      <div class="mobillogo">
        <img id="logo" class="logoItem" src="./assets/img/icon/logo-min.png" alt="">
      </div>
    </div>
  </header>
  <section class="sectionImg">
    <div class="centerText">
      <div class="d-flex justify-content-center">
        <img class="wicked" src="./assets/img/joinImg.png" alt="">
      </div>
      <p class="wickedT">Evil Magic Defense is Play & Earn Autochess game project with an original gameplay.
        Defeat your enemies as the evil wizard, lure them to your side, build your army and don't stop until you conquer the world. If you can gather heroes with the same origin, you’ll become even much stronger! More matches mean more tokens and more glory! By purchasing our NFTs, take the first step to become a part of the Wickedverse.</p>
    </div>
  </section>
  <section class="video">
    <div class="topImg"></div>
    <div class="bottomImg"></div>
    <video width="100%" height="100%" id="OracleVid" playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop">
      <source id="video" src="./assets/video/bbb.webm" type="video/webm">
    </video>
  </section>
  <section class="roadMap">
    <div class="container-fluid heightRoadMap">
      <div class="row">
        <div class="col-12">
          <div id="journey" class="rHood">
            <h6>JOURNEY</h6>
            <img class="d-none d-lg-block" id="roadMapLine" src="./assets/img/icon/roadMapLine.png" alt="">
          </div>
        </div>
      </div>
      <div class="row firstArea">
        <div class="col-12 col-lg-6">
          <div class="phaseArea">
            <img class="phaseImg d-block d-lg-none" src="./assets/img/icon/p1.png" alt="">
          </div>
          <div class="textArea">
            <p>Evil Wizards</p>
            <p>Minting</p>
            <p>EMD’s very first NFT colleection</p>
            <p style="opacity: 0.3;">NFT</p>
            <button>Litepaper</button>
          </div>
        </div>
        <div class="col-12 col-lg-6  position-relative zindex natoshireset">
          <div class="imgArea d-none d-lg-block">
            <img src="./assets/img/icon/cart.png" alt="">
          </div>
        </div>
      </div>
      <div class="row secondArea">
        <div class="col-12 col-lg-6 position-relative">
          <div class="imgArea d-none d-lg-block">
            <img class="imgS" src="./assets/img/icon/monk.png" alt="">
          </div>
        </div>
        <div class="col-12 col-lg-6 natoshireset">
          <div class="phaseArea">
            <img class="phaseImg d-block d-lg-none" src="./assets/img/icon/p2.png" alt="">
          </div>
          <div class="textArea">
            <p class="natoshireset"  style="opacity: 0.3;">UP!</p>
            <p>Fusion the <br> team</p>
            <p>More employee means more content: We will expand our team and move to a new, larger office.</p>
            <a href="./aboutUs.php">
              <button>The Team</button>
            </a>
          </div>
        </div>
      </div>
      <div class="row thirtArea">
        <div class="col-12 col-lg-6">
          <div class="phaseArea">
            <div class="phaseArea" <img class="phaseImg d-block d-lg-none " src="./assets/img/icon/p3.png" alt="">
            </div>
          </div>
          <div class="textArea">
            <p  style="opacity: 0.3;">IDO</p>
            <p>EMD Token</p>
            <p>This includes designing tokens and VC processes that will shape the in-game economy.</p>
            <button>Tokenomics</button>
          </div>
        </div>
        <div class="col-12 col-lg-6 position-relative natoshireset">
          <div class="imgArea d-none d-lg-block">
            <img class="opacityImag" src="./assets/img/icon/circle.png" alt="">
            <img class="imgS" src="./assets/img/icon/circle.png" alt="">
          </div>
        </div>
      </div>
      <div class="row fourthArea">
        <div class="col-12 col-lg-6 position-relative">
          <div class="imgArea d-none d-lg-block">
            <img class="imgS" src="./assets/img/icon/logo-min.png" alt="">
          </div>
        </div>
        <div class="col-12 col-lg-6">
          <div class="phaseArea">
            <img class="phaseImg d-block d-lg-none phaseFour" src="./assets/img/icon/p4.png" alt="">
            <img class="phaseImg d-block d-lg-none logo" src="./assets/img/icon/logo-min.png" alt="">
          </div>
          <div class="textArea">
            <p> </p>
            <p>Beta Test</p>
            <p>EMD</p>
            <p>With Beta test, Wickedverse will open its doors for the first time. Look through the threshold and get
              a chance to be a part of this universe. It is only the start.</p>
            <button><a style="text-decoration: none; color: #ffff;" href="./theGame.php">The Game</a></button>
          </div>
        </div>
      </div>
      <div class="row fiveArea d-none">
        <div class="col-12 col-lg-6">
          <div class="phaseArea">
            <img class="phaseImg d-block d-lg-none" src="./assets/img/icon/p5.png" alt="">
          </div>
          <div class="textArea">
            <p>First set of</p>
            <p>Ancient Items <br> release</p>
            <p>Early sale of game cards with a key role in the game will take place in this phase.</p>
            <p></p>
          </div>
        </div>
        <div class="col-12 col-lg-6 position-relative">
        </div>
      </div>
      <div class="row sixArea d-none">
        <div class="col-12 col-lg-6 position-relative">
        </div>
        <div class="col-12 col-lg-6">
          <div class="phaseArea">
            <img class="phaseImg d-block d-lg-none" src="./assets/img/icon/p6.png" alt="">
          </div>
          <div class="textArea">
            <p></p>
            <p>Cave Sales<br> Limited</p>
            <p>There’s more to do than being just a player: Like being a Cave (a.k.a land), Owner. Caves are essential
              to craft prestigious potions and card sets. Crafted potions and items can be sold in market or can be
              used to reach higher ranks -it’s all up to you. </p>
            <p></p>
          </div>
        </div>
      </div>
      <div class="row sevenArea d-none">
        <div class="col-12 col-lg-6">
          <div class="phaseArea">
            <img class="phaseImg d-block d-lg-none" src="./assets/img/icon/p7.png" alt="">
          </div>
          <div class="textArea">
            <p>EMD</p>
            <p>Softlaunch</p>
            <p>Evil Magic Defense is here: Join us in the Wickedverse and defeat your opponents to become the
              world's most notorious evil wizard.</p>
          </div>
        </div>
        <div class="col-12 col-lg-6 position-relative">
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row">
        <div class="buttonArea">
          <button id="longRoadMap">READ MORE</button>
        </div>
      </div>
    </div>
  </section>
  <section class="sliderRightLeft">
    <div class="carousel-wrap">
      <div class="owl-carousel owl-Two owl-theme">
        <div><img src="./assets/img/icon/Varlık142x.png"></div>
        <div><img src="./assets/img/icon/Varlık142x.png"></div>
        <div><img src="./assets/img/icon/Varlık142x.png"></div>
        <div><img src="./assets/img/icon/Varlık142x.png"></div>
        <div><img src="./assets/img/icon/Varlık142x.png"></div>
        <div><img src="./assets/img/icon/Varlık142x.png"></div>
        <div><img src="./assets/img/icon/Varlık142x.png"></div>
      </div>
    </div>
    <div class="nftTExt">
      <div class="container">
        <div class="row">
          <div class="col-12 col-md-6">
            <div class="imgArea">
              <img class="img-fluid" src="./assets/img/icon/Varlık142x.png" alt="">
            </div>
          </div>
          <div class="col-12 col-md-6">
            <div class="textAreaBtn">
              <p class="one">Check the</p>
              <h6>Gallery</h6>
              <p class="two">“Evil League” is full of genius, charismatic Evil Wizards . Check our gallery to browse them all.</p>
              <button>GO</button>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="carousel-wrap">
      <div class="owl-carousel owl-Three owl-theme">
        <div><img src="./assets/img/icon/Varlık142x.png"></div>
        <div><img src="./assets/img/icon/Varlık142x.png"></div>
        <div><img src="./assets/img/icon/Varlık142x.png"></div>
        <div><img src="./assets/img/icon/Varlık142x.png"></div>
        <div><img src="./assets/img/icon/Varlık142x.png"></div>
        <div><img src="./assets/img/icon/Varlık142x.png"></div>
        <div><img src="./assets/img/icon/Varlık142x.png"></div>
      </div>
    </div>
  </section>
  <section class="faq">
    <div class="container">
      <div class="row specialRow">
        <div class="col-12 col-lg-12">
          <div class="hoodArea">
            <p>FAQ</p>
          </div>
          <div class="content">
            <div id="accordion" class="accordion-container">
              <article class="content-entry">
                <h4 class="article-title"><i></i>When is Evil Magic Defense Mint?</h4>
                <div class="accordion-content">
                  <p>TBA</p>
                </div>
              </article>
              <article class="content-entry">
                <h4 class="article-title"><i></i>What is The Total Mint Supply?</h4>
                <div class="accordion-content">
                  <p>TBA</p>
                </div>
              </article>
              <article class="content-entry">
                <h4 class="article-title"><i></i>What is The Mint Price?</h4>
                <div class="accordion-content">
                  <p>TBA</p>
                </div>
              </article>
              <article class="content-entry">
                <h4 class="article-title"><i></i>How Many Can We Mint?</h4>
                <div class="accordion-content">
                  <p>TBA</p>
                </div>
              </article>
              <article class="content-entry">
                <h4 class="article-title"><i></i>How to get allowlisted?</h4>
                <div class="accordion-content">
                  <p>TBA</p>
                </div>
              </article>
              <article class="content-entry">
                <h4 class="article-title"><i></i>What is the EMD?</h4>
                <div class="accordion-content">
                  <p>Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet</p>
                </div>
              </article>
              <article class="content-entry">
                <h4 class="article-title"><i></i>What marketplaces are you listed on?</h4>
                <div class="accordion-content">
                  <p>Magic Eden Opensea</p>
                </div>
              </article>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <?php include './layers/footer.php'; ?>
</body>
<script src="./assets/js/jquery-3.6.0.min.js"></script>
<script src="./assets/js/owl.carousel.min.js"></script>
<script>
  $(document).ready(function(){
    if (window.innerHeight >= 980) {

      $("#6onsira").css("bottom","20%");

    }else{

      $("#6onsira").css("bottom","20%");
    }
   
  });
  //if (window.innerHeight >= 992) {
  if (window.innerWidth >= 992) {
    var gizle = ((window.innerWidth * 19) / 100);
    var headerHeight = $(".mainHeader").height();
    var logoHeight = $("#logodesktopmain").height();
    var yediOnTop = $("#yediOn").position().top;
    var AltionsiraTop = $("#6onsira").position().top;
    var BesortasiraTop = $("#5ortasira").position().top;
    var bghgt = $("#1bg").height();

    $("#logodesktopmain").css("bottom", (((headerHeight) - (logoHeight)) / 2))
    $(window).scroll(function(event) {
      var scroll = $(window).scrollTop();
      var mainhdr = $(".mainHeader").height();

      if (scroll > gizle) {
        $("#1bg").height(0);
      } else {
        if (bghgt + scroll > (mainhdr - 10)) {
          $("#1bg").height(bghgt / 2);
        } else {
          $("#1bg").height(bghgt);
        }

      }
      if (scroll < 800) {
        $(".mainHeader").height(headerHeight - scroll);
        $("#5ortasira").css("top", BesortasiraTop - scroll / 3);
        $("#4ortasira").css("top", BesortasiraTop - scroll / 3);
        $("#homeVid").css("top", BesortasiraTop - scroll * 0);
      } else {
        //$(".mainHeader").height(headerHeight);
      }
    });
  }
</script>
<script src="./assets/bootstrap/js/bootstrap.min.js"></script>
<script src="./assets/js/main.js?v=<?= rand(); ?>"></script>


<script>
  const video = document.getElementById('homeVid');

  if ($(document).width() > 768) {
    $(window).on('load', function() {
      setTimeout(function() {
        $('#loader').hide();
        $("#homeVid").removeClass("d-none");
      }, 1000);
    })
  } else {
    $("#loader").addClass("d-none");
  }
</script>

</html>