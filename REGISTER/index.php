<?php
  session_start();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>REGISTER | wazefتy</title>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Work+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="style/all.min.css" />
    <link rel="stylesheet" href="style/normalize.css" />
    <link rel="stylesheet" href="style/style.css" />
  </head>
  <body>
    <div class="login-body">
      <div class="bubble one"></div>
      <div class="bubble two"></div>
      <div class="bubble three"></div>
      <div class="auth-data">
        <div class="auth-contnet" >
          <h2 >WELCOME,<br />CREATE ACCOUNT</h2>
          <form action="" method="POST" enctype="multipart/form-data">
            <label for="">Email</label><br />
            <input type="text" name="email" required /><br />
            <label for="">Username</label><br />
            <input type="text" name="name" required /><br />
            <label for="">Password</label><br />
            <input type="password" name="pass" required /><br />
            <label for="">Phone</label><br />
            <input type="text" name="phone" required /><br />
            <label for="">BIO</label><br />
            <input type="text" name="bio" required /><br />
            <label for="">Image</label><br />
            <div style="display: flex; flex-direction: row;">
            <label for="choose-img" style="background-color:#390da0;color: white;padding: 10px;border-radius: 10px;cursor: pointer;">choose profile</label>
            <input hidden id="choose-img" type="file" name="c_image" /><br /> 
            </div>
            <input type="submit" name="send" value="REGISTER" id="submit-btn" />
          </form>
        </div>
      </div>
      <div class="image-part">
        <img src="images/Repeat Grid 3.png" alt="Login Image" />
      </div>
    </div>
    <!-- <style src="style/style.css"></style> -->
  </body>
</html>
<?php
$con = mysqli_connect('localhost','root','','application_db');
  if(isset($_POST['send'])){
    
    $user_name = $_POST['name'];
    $email = $_POST['email'];
    $pass = $_POST['pass'];
    $phone = $_POST['phone'];
    $bio = $_POST['bio'];
    
    $check_email = "select * from user where user_email='$email'";
    $run_check_email = mysqli_query($con,$check_email);
    $count = mysqli_num_rows($run_check_email);
    if($count > 0){
      echo"<script>alert('This email is already exist, try again')</script>";
      echo"<script>window.open('index.php','_self')</script>";
      exit();
    }
    $c_image = $_FILES['c_image']['name'];
    
    $c_image_tmp = $_FILES['c_image']['tmp_name'];

    
          move_uploaded_file($c_image_tmp,"../profile/images/$c_image");
          $add_user = "insert into user(username,user_email,user_pass,user_phone,bio,user_img) 
          values('$user_name','$email','$pass',$phone,'$bio','$c_image')";
          $run_add_user = mysqli_query($con,$add_user);
          if($run_add_user){
            $_SESSION['user_email'] = $email;
            echo"<script>alert('Registration successful');</script>";
            echo"<script>window.open('../HOME PAGE/index.php','_self')</script>";
          }else{
            echo"error";
          }
        }
    

 
?>
