<?php 

$error = "";
$name = "";
$email = "";
$password = "";
$confirm_password = "";

if( isset($_POST['registerUser']) ){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm-password'];

    // check if password === confirm password 
    if($password !== $confirm_password){
      $error = "passwords must match!";
    }else {
      // save to database
      // redirect to confirm email page
      header('Location: ./admin/profile.php'); // change the . to base_url
      // shows sweet alert
      // $result = " 
      //   <script type=\"text/javascript\">
      //       swal({
      //           title: \"Congratulations $name\",
      //           text: \"Registration has been successful\",
      //           type: \"success\",
      //           confirmButtonText: \"Continue\"});
                
      //   </script>";
    }
}

?>