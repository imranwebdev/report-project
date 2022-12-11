<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <?php include "headerScript.php" ?>
</head>
<style>
  ::-webkit-input-placeholder {
    font-size: 12px;
    text-transform: uppercase;
  }
  .ajax-button{
  position:relative;
  display:inline-block;
  width:100px;
  height:40px;
  left:50%;
  top:50%;
  margin-left:-50px;
  margin-top:-20px;
  text-align:center;
}
.submit{
  -webkit-appearance: none;
  -moz-appearance: none;
  appearance: none;
  width:100px;
  height:40px;
  background-color:#111111;
  border:2px solid #FFFFFF;
  border-radius:10px;
  color:#FFFFFF;
  font-size:17px;
  cursor:pointer !important;
  outline:none;
}

.submit:hover{
  background-color:#222222;
}
.loading{
  font-size:0;
  width:30px;
  height:30px;
  margin-top:5px;
  border-radius:15px;
  padding:0;
  border:3px solid #222;
  border-bottom:3px solid rgba(255,255,255,0.0);
  border-left:3px solid rgba(255,255,255,0.0);
  background-color:transparent !important;
  animation-name: rotateAnimation;
  -webkit-animation-name: wk-rotateAnimation;
  animation-duration: 1s;
  -webkit-animation-duration: 1s;
  animation-delay: 0.2s;
  -webkit-animation-delay: 0.2s;
  animation-iteration-count: infinite;
  -webkit-animation-iteration-count: infinite;
}

@keyframes rotateAnimation {
    0%   {transform: rotate(0deg);}
    100% {transform: rotate(360deg);}
}
@-webkit-keyframes wk-rotateAnimation {
    0%   {-webkit-transform: rotate(0deg);}
    100% {-webkit-transform: rotate(360deg);}
}

.fa{
  color:#ffffff;
  font-size:18px !important;
  position:absolute;
  left:50%;
  top:50%;
  margin-left:-9px;
  margin-top:-9px;
  -webkit-transform:scaleX(0) !important;
  transform:scaleX(0) !important;
}

.finish{
  -webkit-transform:scaleX(1) !important;
  transform:scaleX(1) !important;
}
.hide-loading{
  opacity:0;
  -webkit-transform: rotate(0deg) !important;
  transform: rotate(0deg) !important;
  -webkit-transform:scale(0) !important;
  transform:scale(0) !important;
}
</style>

<body>
  <!-- php database connection -->

  <!-- php header -->
  <?php include "header.php" ?>
  <!-- header section -->
  <section class="hero-sectoin m-3">
    <div class="container py-3 px-3 mt-5 h-100 border bg-white">
      <div class="row gx-5 py-3 justify-content-center align-items-center h-100">
        <div class="col-md-5 d-none d-md-block">
          <h1 class="text-custom-font">
            <span class="h2 custom-green"> Welcome to productreport</span>
            <span class="h4"> make a product report easiy!</span>
          </h1>
          <br />
          <img src="../images/hero image.jpg" class="img-fluid" alt="" srcset="" />
        </div>

        <div class="col-md">
          <div class="row justify-content-center align-items-center">
            <div class="col">
              <img src="images/logo.png" class="img-fluid mx-auto d-block" style="width: 80px" alt="" srcset="" />
              <h3 class="mb-4 pb-2 pb-md-0 mb-md-5 h5 text-center">
                Sign up into your account
              </h3>
            </div>
          </div>

          <form method="POST" id="myform">
            <div class="row">
              <div class="col-md-6 mb-4">
                <span id="message"></span>
                <div class="form-outline remove-focus">
                  <label class="form-label" for="firstName">First Name</label>
                  <input type="text" id="fname" name="fname" class="form-control form-control-lg " placeholder="Jhon" />
                  <small class="text-danger fname_err"></small>
                </div>
              </div>


              <div class="col-md-6 mb-4">
                <div class="form-outline remove-focus">
                  <label class="form-label" for="lastName">Last Name</label>
                  <input type="text" id="lname" name="lname" class="form-control form-control-lg" placeholder="Doe" />
                  <small class="text-danger lname_err"></small>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-md-6 mb-4">
                <div class="form-outline remove-focus">
                  <label class="form-label" for="username">username</label>
                  <input type="text" id="username" name="username" class="form-control form-control-lg"
                    placeholder="jhon123" />
                  <small class="text-danger user_err"></small>
                </div>
              </div>
              <div class="col-md-6 mb-4">
                <div class="form-outline remove-focus">
                  <label class="form-label" for="mobileNo">Mobile No</label>
                  <input type="number" id="phone" name="mobileno" class="form-control form-control-lg"
                    placeholder="01*********" />
                  <small class="text-danger phone_err"></small>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6 mb-4">

                <div class="form-outline remove-focus ">
                  <label class="form-label" for="password">Password</label>
                  <div class="pass-custom position-relative">
                  <input type="password" id="password" name="password" class="form-control form-control-lg  "
                    placeholder="******" />
                    <i class="bi bi-eye-slash position-absolute top-50 end-0 translate-middle-y p-2"id="show"></i>

                  </div>
                   
                  <small class="text-danger pass_err"></small>
                </div>


              </div>
              <div class="col-md-6 mb-4">
                <div class="form-outline remove-focus">
                  <label class="form-label" for="lastName">Confirm Password</label>
                  <input type="password" id="cpassword" name="cpassword" class="form-control form-control-lg"
                    placeholder="******" />

                  <small class="text-danger cpass_err"></small>
                </div>
              </div>
            </div>
            <div class="row">
            <div class="col-md-6 mb-4">
                <div class="form-outline remove-focus">
                  <label class="form-label" for="email">Email Adress</label>
                  <input type="email" id="email" name="email" class="form-control form-control-lg"
                    placeholder="example@gmail.com" />
                  <small class="text-danger email_err"></small>
                </div>
              </div>

            
              <div class="col ">
                <label class="form-label select-label">Your Designation</label>
                <br />
                <select class="select form-control-lg" name="designation">
                  <option value="1" disabled>Choose option</option>
                  <option value="2">product Auditor</option>
                  <option value="3">packing auditor</option>
                  <option value="4">qms auditor</option>
                  <option value="5">GPQ</option>
                  <option value="6">QA incharge</option>
                </select>
              </div>
</div>

            <div class="mt-4 pt-2 d-flex align-items-center justify-content-between">
              <!-- <input type="button" class="btn custom-green-bg px-5 py-2 " id="submitbtn" value="submit"> -->
              <div class="ajax-button">
              <i class="bi bi-check2-circle done fa"></i>
              <i class="bi bi-x-circle failed fa"></i>
          <input type="button" class="submit " id="submitbtn" value="submit">

            </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>
  <script src="../main-js/main.js"></script>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script type="text/javascript">
 


    $(document).ready(function () {
      $('#username').on('input', function () {
        checkuser();
      });
      $('#email').on('input', function () {
          checkemail();
      });
      $('#password').on('input', function () {
        checkpass();
      });
      $('#cpassword').on('input', function () {
        checkcpass();
      });
      $('#phone').on('input', function () {
        checkmobile();
      });
      $('#fname').on('input', function () {
        checkfname();
      });
      $('#lname').on('input', function () {
        checklname();
      });



      $('#submitbtn').click(function () {


        if (!checkuser() && !checkemail() && !checkfname() && !checklname() && !checkmobile() && !checkpass() && !checkcpass()) {
          console.log("er1");
          $(".text-danger").html(`Please fill all required field`);
        } else if (!checkuser() || !checkfname() || !checkemail() || !checklname() || !checkmobile() || !checkpass() || !checkcpass()) {
          $(".text-danger").html(`Please fill all required field`);
          console.log("er");
        }
        else {
          console.log("ok");
          $(".text-danger").html("");
          var form = $('#myform')[0];
          var data = new FormData(form);
          $.ajax({
            type: "POST",
            url: "reg.php",
            data: data,
            processData: false,
            contentType: false,
            cache: false,
            async: false,
            beforeSend: function () {
              $(".submit").addClass("loading");
               
              },

            success: function (data) {
              $('#message').html(data);

            //   setTimeout(function(){
            //     window.location = 'https://www.geeksforgeeks.org/how-to-run-javascript-from-php/';
            // },5000)
            }
            ,
            complete: function () {
              // $(".submit").removeClass("loading");
                // setTimeout(function () {
                //     $('#myform').trigger("reset");
                //     $('#submitbtn').html('Submit');
                //     $('#submitbtn').attr("disabled", false);
                //     $('#submitbtn').css({ "border-radius": "4px" });
                // }, 50000);
                alert("mail send successfuly!")
            }
          });
        }
      });
    });


    function checkuser() {
      var pattern = /^[0-9a-zA-Z]+$/;
      var user = $('#username').val();
      var validuser = pattern.test(user);
      if ($('#username').val().length > 8) {
        $('.user_err').html('username length is too long');
        return false;
      } else if (!validuser) {
        $('.user_err').html('username should be a-z and digit only');
        return false;
      } else {
        $('.user_err').html('');
        return true;
      }
    }
    function checkemail() {
        var pattern1 = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
        var email = $('#email').val();
        var validemail = pattern1.test(email);
        if (email == "") {
            $('.email_err').html('required field');
            return false;
        } else if (!validemail) {
            $('.email_err').html('invalid email');
            return false;
        } else {
            $('.email_err').html('');
            return true;
        }
    }
    function checkpass() {
      console.log("sass");
      var pattern2 = /^(?=.*\d)(?=.*[!@#$%^&*])(?=.*[a-z])(?=.*[A-Z]).{8,}$/;
      var pass = $('#password').val();
      var validpass = pattern2.test(pass);

      if (pass == "") {
        $('.pass_err').html('password can not be empty');
        return false;
      } else if (!validpass) {
        $('.pass_err').html('Minimum 5 and upto 15 characters, at least one uppercase letter, one lowercase letter, one number and one special character:');
        return false;

      } else {
        $('.pass_err').html("");
        return true;
      }
    }
    function checkcpass() {
      var pass = $('#password').val();
      var cpass = $('#cpassword').val();
      if (cpass == "") {
        $('.cpass_err').html('confirm password cannot be empty');
        return false;
      } else if (pass !== cpass) {
        $('.cpass_err').html('confirm password did not match');
        return false;
      } else {
        $('.cpass_err').html('');
        return true;
      }
    }

    function checkmobile() {
      if (!$.isNumeric($("#phone").val())) {
        $(".phone_err").html("only number is allowed");
        return false;
      } else if ($("#phone").val().length != 11) {
        $(".phone_err").html("11 digit required");
        return false;
      }
      else {
        $(".phone_err").html("");
        return true;
      }
    }



    function checkfname() {
      var pattern = /^[A-Za-z]*$/;
      var fname = $('#fname').val();
      var validfname = pattern.test(fname);
      if ($('#fname').val().length > 15) {
        $('.fname_err').html('first name length is too long');
        return false;
      } else if (!validfname) {
        $('.fname_err').html('first name should be a-z ,A-Z only');
        return false;
      } else {
        $('.fname_err').html('');
        return true;
      }
    };

    function checklname() {
      var pattern = /^[A-Za-z]*$/;
      var lname = $('#lname').val();
      var validlname = pattern.test(lname);
      if ($('#lname').val().length > 15) {
        $('.lname_err').html('first name length is too long');
        return false;
      } else if (!validlname) {
        $('.lname_err').html('first name should be a-z ,A-Z only');
        return false;
      } else {
        $('.lname_err').html('');
        return true;
      }
    };

    $('#show').on('click', function(){

      var passInput=$("#password");
      var passInput2= $("#cpassword");
      if(passInput.attr('type')==='password')
        {
          passInput.attr('type','text');
      }else{
         passInput.attr('type','password');
      }
      // 
      if(passInput2.attr('type')==='password')
        {
          passInput2.attr('type','text');
      }else{
         passInput2.attr('type','password');
      }
      this.classList.toggle("bi-eye");

  })
  
  </script>
</body>

</html>