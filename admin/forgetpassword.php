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
  <div class="d-flex align-items-center justify-content-center" style=" height: 250px; margin-top:15%;">
    <div class="" style="max-width:380px; ">
      <h2 class="h3">Enter your email adress to <br><span class="custom-green"> recovery your account !</span></h2>
      <!--begin::Input group-->
      <div class="form-floating  remove-focus mb-4 mt-3">
        <input type="email" class="form-control postion-absolute" id="floatingInput icon-email"
          placeholder="name@example.com" />
        <label for="floatingInput">Email address</label>
        <i class="fa-solid fa-envelope position-absolute top-50 end-0 translate-middle-y translate-middle p-2"></i>
      </div>
      <!--end::Input group-->
      <a class="medium  " href="#">Send Email</a>
    </div>
  </div>
  <script src="main-js/main.js"></script>
</body>
</html>