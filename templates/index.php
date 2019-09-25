<?php 
  
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Korean LipNet</title>
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
  <!-- Bootstrap core CSS -->
  <link href="../static/css/bootstrap.min.css" rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link href="../static/css/mdb.min.css" rel="stylesheet">
  <!-- Your custom styles (optional) -->
  <link href="../static/css/style.min.css" rel="stylesheet">
  <style type="text/css">
    html,

    body,

    header,

    .carousel {

      height: 60vh;

    }

    header {

      position: relative;

      background-color: black;

      height: 75vh;

      min-height: 25rem;

      width: 100%;

      overflow: hidden;

    }



    header video {

      position: absolute;

      top: 50%;

      left: 50%;

      min-width: 100%;

      min-height: 100%;

      width: auto;

      height: auto;

      z-index: 0;

      -ms-transform: translateX(-50%) translateY(-50%);

      -moz-transform: translateX(-50%) translateY(-50%);

      -webkit-transform: translateX(-50%) translateY(-50%);

      transform: translateX(-50%) translateY(-50%);

    }



    header .container {

      position: relative;

      z-index: 2;

    }
    p.center{
      text-align: center;
    }


    header .overlay {

      position: absolute;

      top: 0;

      left: 0;

      height: 100%;

      width: 100%;

      background-color: black;

      opacity: 0.5;

      z-index: 1;

    }

    @media (pointer: coarse) and (hover: none) {

      header {

        background: url('https://source.unsplash.com/XT5OInaElMw/1600x900') black no-repeat center center scroll;

      }

      header video {

        display: none;

      }

    }

    @media (max-width: 740px) {



      html,

      body,

      header,

      .carousel {

        height: 100vh;

      }

    }



    @media (min-width: 800px) and (max-width: 850px) {



      html,

      body,

      header,

      .carousel {

        height: 100vh;

      }

    }



    @media (min-width: 800px) and (max-width: 850px) {

      .navbar:not(.top-nav-collapse) {

        background: #929FBA !important;

      }

    }
  </style>
</head>

<body>

  <header>

    <!-- Navbar -->
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark scrolling-navbar">
      <div class="container">

        <!-- Brand -->
        <a class="navbar-brand" href="index.php">
          <strong>kykymouse</strong>
        </a>

        <!-- Collapse -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Links -->
        <div class="collapse navbar-collapse" id="navbarSupportedContent">

          <!-- Left -->
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="index.php">Home
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="upload.php">KoreanLipNet Demo</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="list.php">Output Video List</a>
            </li>
          </ul>

          <!-- Right -->
          <ul class="navbar-nav nav-flex-icons">
            <li class="nav-item">
              <a href="https://github.com/kykymouse/koreanLipNet/tree/master/KoreanLipNet"
                class="nav-link border border-light rounded">
                <i class="fab fa-github mr-2"></i>kykymouse GitHub
              </a>
            </li>
          </ul>

        </div>

      </div>
    </nav>
    <!-- Navbar -->

    <div class="overlay"></div>

    <video playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop">

      <source src="../static/resources/lip.mp4" type="video/mp4">

    </video>

    <div class="container h-100">

      <div class="d-flex h-100 text-center align-items-center">

        <div class="w-100 text-white">

          <h1 class="display-3">Korean Lipnet</h1><br>

          <p class="lead mb-0">영상속에 입술을 읽어서 한국어로 가장 유사한 단어 및 문장을 추출합니다.</p>

          <a href="upload.php"
            class="btn btn-outline-white btn-lg">Predict Lip
            <i class="fas fa-graduation-cap ml-2"></i>

          </a>

        </div>

      </div>

    </div>

  </header>

  <!--Main layout-->
  <main>
    <div class="container">

      <!--Section: Main info-->
      <section class="mt-5 wow fadeIn">

        <!--Grid row-->
        <div class="row">

          <!--Grid column-->
          <div class="col-md-6 mb-4">

            <img src="../static/resources/model4.png" class="img-fluid z-depth-1-half" alt="모델 사진">

          </div>
          <!--Grid column-->

          <!--Grid column-->
          <div class="col-md-6 mb-4">

            <!-- Main heading -->
            <h3 class="h3 mb-3">KoreanLipNet 모델</h3>
            <p>동영상과 Text으로 지도학습</p>
            <hr>
            <p>동영상 프레임에서 입술을 추출하여 CNN학습 알고리즘의 한 종류인 <strong>STCNN</strong>(Spatiotemporal Convolution Neural Network :
              시공간 이미지 학습)학습을 진행합니다.</p>
            <!-- Main heading -->
            <p>그 이후 RNN학습 알고리즘의 한 종류인 <strong>GRU</strong>(Gated Recurrent Unit : 순차 데이터 처리학습)학습을 진행합니다.</p>
            <p>손실함수로는 <strong>CTC loss</strong>(Connectionist Temporal Classification loss)를 사용합니다.</p>

            <!-- CTA -->
            <a href="https://github.com/kykymouse/koreanLipNet/blob/master/KoreanLipNet/evaluation/models/overlapped-weights368.h5" class="btn btn-grey btn-md">Download
              <i class="fas fa-download ml-1"></i>
            </a>
            <a href="upload.php" class="btn btn-grey btn-md">Live
              demo
              <i class="far fa-image ml-1"></i>
            </a>

          </div>
          <!--Grid column-->

        </div>
        <!--Grid row-->

      </section>
      <!--Section: Main info-->

      <hr class="my-5">

      <!--Section: Main features & Quick Start-->
      <section>

        <h3 class="h3 text-center mb-5">Korean LipNet 데모 영상</h3>

        <!--Grid row-->
        <div class="row wow fadeIn">

          <!--Grid column-->
          <div class="col-lg-6 col-md-12">
            <!-- <div class="embed-responsive embed-responsive-16by9"> -->

                <video playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop">

                    <source src="../static/resources/a_lipnet_sub.mp4" type="video/mp4">
              
                </video>

              <!-- <iframe width="560" height="315"
                src="https://youtube.com/embed/GhoXxqlM678?controls=0&autoplay=1&loop=1&playlist=GhoXxqlM678&modestbranding=1"
                frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                allowfullscreen></iframe> -->
            <!-- </div> -->
          </div>
          <!--/Grid column-->
           <!--Grid column-->
           <div class="col-lg-6 col-md-12">
              <!-- <div class="embed-responsive embed-responsive-16by9"> -->

                  <video playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop">

                      <source src="../static/resources/b_lipnet_sub.mp4" type="video/mp4">
                
                  </video>

                <!-- <iframe width="560" height="315"
                  src="https://www.youtube.com/embed/5XIeUmok7pI?controls=0&autoplay=1&loop=1&playlist=5XIeUmok7pI&modestbranding=1"
                  frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                  allowfullscreen></iframe> -->
              <!-- </div> -->
            </div>
            <!--/Grid column-->

        </div>
        <!--/Grid row-->

      </section>
      <!--Section: Main features & Quick Start-->

      <hr class="my-5">

      <!--Section: 확장성 part-->
      <section>

        <h2 class="my-5 h3 text-center">기대효과</h2>

        <div class="container marketing">

          <!-- Three columns of text below the carousel -->
          <div class="row">
            <div class="col-lg-3">
              <p class="center"><img src="../static/resources/videocall.png" width="100" height="100"></p>

              <p><br>화상 회의 상황에서 자막을 넣어줄 수 있습니다.</p>

            </div><!-- /.col-lg-4 -->
            <div class="col-lg-3">
                <p class="center"><img src="../static/resources/promotion.png" width="100" height="100"></p>

              <p><br>음성인식률이 떨어지는 소음이 있는 상황에서 입모양을 읽어 소통을 할 수 있게 해줍니다.</p>

            </div><!-- /.col-lg-4 -->
            <div class="col-lg-3">
              <p class="center"><img src="../static/resources/conversation.png" width="100" height="100"></p>

              <p><br>청각에 문제가 있는 사람에게 다른 사람과의 대화에 도움이 될 수 있습니다.</p>

            </div><!-- /.col-lg-4 -->
            <div class="col-lg-3">
              <p class="center"><img src="../static/resources/improve.png" width="100" height="100"></p>

              <p><br>음성 인식과 Korean Lipnet Model 을 함께 이용하면 음성인식 정확도를 향상시킬 수 있습니다.</p>

            </div><!-- /.col-lg-4 -->
          </div><!-- /.row -->
      </section>
      <!--Section: Not enough-->
    </div>
  </main>
  <!--Main layout-->

  <!--Footer-->
  <footer class="page-footer text-center font-small mt-4 wow fadeIn">

    <!--Call to action-->
    <div class="pt-4">
      <a class="btn btn-outline-white" href="https://github.com/kykymouse/koreanLipNet/archive/master.zip"
        role="button">Download Project
        <i class="fas fa-download ml-2"></i>
      </a>
      <a class="btn btn-outline-white" href="upload.php" role="button">
        Demo Korean LipNet
        <i class="fas fa-graduation-cap ml-2"></i>
      </a>
    </div>
    <!--/.Call to action-->

    <hr class="my-4">

    <!-- Social icons -->
    <div class="pb-4">
      <a href="https://github.com/kykymouse/koreanLipNet/tree/master/KoreanLipNet">
        <i class="fab fa-github mr-3"></i>
      </a>
    </div>
    <!-- Social icons -->

    <!--Copyright-->
    <div class="footer-copyright py-3">
      © 2019 Copyright:
      <a href="https://github.com/kykymouse/koreanLipNet/tree/master/KoreanLipNet">kykymouse</a>
    </div>
    <!--/.Copyright-->

  </footer>
  <!--/.Footer-->

  <!-- SCRIPTS -->
  <!-- JQuery -->
  <script type="text/javascript" src="../static/js/jquery-3.4.1.min.js"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="../static/js/popper.min.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="../static/js/bootstrap.min.js"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="../static/js/mdb.min.js"></script>
  <!-- Initializations -->
  <script type="text/javascript">
    // Animations initialization
    new WOW().init();

  </script>
</body>

</html>