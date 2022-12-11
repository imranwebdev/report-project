<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <?php include "headerScript.php" ?>
</head>

<body>
  <?php include "header.php" ?>
  <section class="hero-sectoin m-3">
    <div class="container py-3 px-3 mt-5 h-100 border bg-white">
      <div class="row gx-5 py-3 justify-content-center align-items-center h-100">
        <div class="col-md-7 d-none d-md-block">
          <h1 class="text-custom-font">
            <span class="h2 custom-green"> Welcome to productreport</span>
            <span class="h4"> make a product report easiy!</span>
          </h1>
          <br />
          <img src="images/hero image.jpg" class="img-fluid" alt="" srcset="" />
        </div>

        <div class="col-md">
          <div class="row justify-content-center align-items-center">
            <div class="col">
              <img src="images/logo.png" class="img-fluid mx-auto d-block" style="width: 80px" alt="" srcset="" />
              <h3 class="mb-4 pb-2 pb-md-0 mb-md-5 h5 text-center">
                Login into your account
              </h3>
            </div>
          </div>

          <form action="" method="post">
            <!--begin::Input group-->
            <div class="form-floating remove-focus mb-4">
              <input type="email" class="form-control " id="floatingInput" placeholder="name@example.com" />
              <label for="floatingInput">Email address</label>
            </div>
            <!--end::Input group-->

            <!--begin::Input group-->
            <div class="form-floating  remove-focus mb-4">
              <input type="password" class="form-control" id="floatingPassword" placeholder="Password" />
              <label for="floatingPassword">Password</label>
            </div>
            <!--end::Input group-->
            <div class="form-check d-flex justify-content-start mb-3">
              <input class="form-check-input" type="checkbox" value="" id="form1Example3" />
              <label class="form-check-label" for="form1Example3">&nbsp Remember password </label>
            </div>
            <!-- end- input group -->
            <div class="pt-1 mb-4">
              <button class="btn custom-green-bg btn-lg btn-block w-100" type="button">Login</button>
            </div>
            <!-- end btn group -->
            <a class="small text-muted" href="admin/forgetpassword.php">Forgot password?</a>
            <p class="mb-5 pb-lg-2" style="color: #393f81;">Don't have an account? <a href="admin/register.php"
                style="color: #393f81;">Register here</a></p>
          </form>
        </div>
      </div>
    </div>
  </section>
  <script src="main-js/main.js"></script>
</body>

</html>