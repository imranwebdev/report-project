<?php
session_start();
$email = "";
$name = "";
$errors = array();
include '../global-script/config.php';
$fname = mysqli_real_escape_string($conn, $_POST["fname"]);
$lname = mysqli_real_escape_string($conn, $_POST["lname"]);
$user = mysqli_real_escape_string($conn, $_POST["username"]);
$email = mysqli_real_escape_string($conn, $_POST["email"]);
$phone = $_POST["mobileno"];
$password = mysqli_real_escape_string($conn, md5($_POST["password"]));
$designation = mysqli_real_escape_string($conn, $_POST["designation"]);

$sql = "SELECT username FROM users WHERE username = '{$user}' ";
$result = mysqli_query($conn, $sql) or die("query failed");

if (mysqli_num_rows($result) > 0) {
  echo "user already exist";
}
if (count($errors) == 0) {
  $code = rand(999999, 111111);
  $status = "notverified";
  $sqli = "INSERT INTO users (firstName, lastName, username, phone, user_password,email,designation,code,status) 
      VALUES
      ('{$fname}','{$lname}','{$user}','{$phone}','{$password}','{$email}','{$designation}','$code','$status')";
  $data_check = mysqli_query($conn, $sqli);

  if ($data_check) {
    $subject = "Email Verification Code";
    $message = "thanks for registration! Your verification code is $code";
    $sender = "From:mdyounusk593@gmail.com";

    if (mail($email, $subject, $message, $sender)) {
      $info = "We've sent a verification code to your email - $email";
      $_SESSION['info'] = $info;
      $_SESSION['email'] = $email;
      $_SESSION['password'] = $password;
      echo '<div class="alert alert-success" role="alert">
      we have sent a otp code to your mail!
    </div>';
      
    }else{
      $errors['otp-error'] = "Failed while sending code!";
  }
}else{
  $errors['db-error'] = "Failed while inserting data into database!";
}
  }




?>