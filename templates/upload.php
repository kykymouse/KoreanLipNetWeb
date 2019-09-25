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
        <a class="navbar-brand" href="index.php" >
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
            <li class="nav-item">
              <a class="nav-link" href="index.php">Home
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item active">
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
                class="nav-link border border-light rounded" >
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
          <h1 class="display-3">Korean LipNet</h1><br>
          <p class="lead mb-0">영상속에 입술을 읽어서 한국어로 가장 유사한 단어 및 문장을 추출합니다.</p>
          <a  href="upload.php"
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
      <section class="mt-5 wow fadeIn">
        <!--Grid row-->
        <div class="row">
          <!--Grid column-->
          <div class="col-md-6 mb-4">
            <!-- Main heading -->
            <h3 class="h3 mb-3">Korean LipNet Predict</h3>
            <p>동영상을 Upload 하십시오</p>
            <div>
              <form action= "upload_process.php" method="post" enctype="multipart/form-data">
                <div class="custom-file">
                  <input type="file" class="custom-file-input" accept="video/*" name="content" id="content" required>
                  <label id="uploadFileName" class="custom-file-label text-truncate" for="content">Choose file</label>
                </div>
                <div class= "input-group mt-3">
                  <div class="input-group-append">
                    <button type="submit" class="btn btn-outline-secondary" id="inputGroupFileAddon02">Upload</button> 
                  </div>
              </form>
            </div>
            <hr>
            <p>※ 정면이 잘 드러난 영상이 아닌경우 예측결과가 많이 다를 수 있습니다.</p>
            <!-- Main heading -->
          </div>
          <!--Grid column-->

          <!--Grid column-->
          <div class="col-md-6 mb-4">
            <!-- file upload -->
          </div>
          <!--Grid column-->
        </div>
        <!--Grid row-->
      </section>
    </div>
  </main>
  <!--Main layout-->

  <!--Footer-->
  <footer class="page-footer text-center font-small mt-4 wow fadeIn">
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