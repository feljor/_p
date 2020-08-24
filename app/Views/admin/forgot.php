﻿<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- ===============================================-->
    <!--    Document Title-->
    <!-- ===============================================-->
    <title>Reset Password | SmartPlay</title>

    <!-- ===============================================-->
    <!--    Favicons-->
    <!-- ===============================================-->
    <link rel="apple-touch-icon" sizes="180x180" href="assets\img\favicons\apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets\img\favicons\favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets\img\favicons\favicon-16x16.png">
    <link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
    <link rel="manifest" href="assets\img\favicons\manifest.json">
    <meta name="msapplication-TileImage" content="assets/img/favicons/mstile-150x150.png">
    <meta name="theme-color" content="#ffffff">

    <!-- ===============================================-->
    <!--    Stylesheets-->
    <!-- ===============================================-->
    <script src="assets\js\config.navbar-vertical.min.js"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin="">
    <link href="assets\lib\perfect-scrollbar\perfect-scrollbar.css" rel="stylesheet">
    <link href="assets\css\theme.min.css" rel="stylesheet">
  </head>

  <body>
    <!-- ===============================================-->
    <!--    Main Content-->
    <!-- ===============================================-->
    <main class="main" id="top">

      <div class="container" data-layout="container">
        <div class="row flex-center min-vh-100 py-6">
          <div class="col-sm-10 col-md-8 col-lg-6 col-xl-5 col-xxl-4"><a class="d-flex flex-center mb-4" href="/"><img class="mr-2" src="img\logo.png" alt="" width="58"><span class="text-sans-serif font-weight-extra-bold fs-5 d-inline-block">SmartPlay</span></a>
            <div class="card">
              <div class="card-body p-4 p-sm-5">
                <div class="row text-left justify-content-between align-items-center mb-2">
                  <div class="col-auto">
                    <h5>Reset Password</h5>
                  </div>
                  <div class="col-auto">
                    <p class="fs--1 text-600 mb-0">or <a href="/">Back to Home</a></p>
                  </div>
                </div>
                <form>
                    <div class="form-group"><input class="form-control" type="password" name="n_password" placeholder="New Password"></div>
                    <div class="form-group"><input class="form-control" type="password" name="cn_password" placeholder="Repeat New Password"></div>
                    <div class="form-group"><input class="form-control" type="email" name="email" placeholder="Email address"></div>
                    <div class="form-group"><input class="form-control" type="number" name="pin" placeholder="Pin..."></div>
                    <div class="row justify-content-between align-items-center">

                        <div class="col-auto"><a class="fs--1" href="/login">Back to Login</a></div>
                    </div>
                    <div class="form-group"><button class="btn btn-primary btn-block mt-3" type="submit" name="reset">Reset Password</button></div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </main><!-- ===============================================-->
    <!--    End of Main Content-->
    <!-- ===============================================-->

    <script>
      var isFluid = JSON.parse(localStorage.getItem('isFluid'));
      if (isFluid) {
        var container = document.querySelector('[data-layout]');
        container.classList.remove('container');
        container.classList.add('container-fluid');
      }
    </script>

    <!-- ===============================================-->
    <!--    JavaScripts-->
    <!-- ===============================================-->
    <script src="assets\js\jquery.min.js"></script>
    <script src="assets\js\popper.min.js"></script>
    <script src="assets\js\bootstrap.min.js"></script>
    <script src="assets\lib\@fortawesome\all.min.js"></script>
    <script src="assets\lib\stickyfilljs\stickyfill.min.js"></script>
    <script src="assets\lib\sticky-kit\sticky-kit.min.js"></script>
    <script src="assets\lib\is_js\is.min.js"></script>
    <script src="assets\lib\lodash\lodash.min.js"></script>
    <script src="assets\lib\perfect-scrollbar\perfect-scrollbar.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,500,600,700%7cPoppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
    <script src="assets\js\theme.min.js"></script>
  </body>

</html>