<?php
session_start();
$_SESSION['isLogined'] = "false";
  $con = mysqli_connect('localhost','root','','application_db');
  if(isset($_POST["login"])){
  $email = $_POST["username"];
  $password = $_POST["password"];
  $check_email_existance = "select * from user where user_email = '" . $email . "' and user_pass = '" . $password . "'";
  $start_check = mysqli_query($con, $check_email_existance);
  $existOrNot = mysqli_num_rows($start_check);
  if($existOrNot != 0){
    $_SESSION['isLogined'] = "true";
    $_SESSION['user_email']=$email;
      header("Location: http://localhost/wazefty/wazef-y-main%202%20-%20Copy/HOME%20PAGE/");
    exit();
  }else{
        echo "<script>alert('This email or password is not true')</script>";
  }
  }
  if(isset($_POST["forgot_btn"])){
      header("Location: http://localhost/wazefty/wazef-y-main%202%20-%20Copy/RESTORE%20PASSWORD/");
  }
  if(isset($_POST["register_btn"])){
      header("Location: http://localhost/wazefty/wazef-y-main%202%20-%20Copy/REGISTER/"); 
  }
$s = "sayed";
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>LOGIN | wazefتy</title>
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
        <div class="auth-contnet">
          <h2>WELCOME,<br />HAPPY TO SEE YOU</h2>
          <form action="" method="post">
            <label for="">Email</label><br />
            <input id="email" type="text" name="username"  /><br />
            <span style="display: none;margin-bottom: 10px;margin-top: -25px;color: red;" id="username">please check your email</span>
            <label for="">Password</label><br />
            <input id="password" type="password" name="password"  /><br />
            <span style="display: none;margin-bottom: 10px;margin-top: -25px;color: red;" id="password">please check your password</span>
            <div class="acc-settings">
              <div class="check" style="display: inline-block">
                <input id="remeber-me" type="checkbox" class="check-box" />
                <label id="check" for="remember me?">remember me?</label>
              </div>
              <button style="background-color: transparent; color: #390da0;border: none;" type="submit" name="forgot_btn" class="restore-password" id="restore-password">
                forgpt password?
              </button>
            </div>
            <br />
            <input type="submit" value="LOGIN" name="login" id="submit-btn" />
            <p id="sign-up-btn">dont have an account? <button style="cursor: pointer;background-color: transparent; color: #390da0;border: none; text-decoration: underline; font-weight: bold;" type="submit" name="register_btn">register</button></p>
          </form>
        </div>
      </div>
      <div class="image-part">
        <img src="images/Repeat Grid 3.png" alt="Login Image" />
      </div>
    </div>
    <script>
      if(window.localStorage.getItem("email")!==null && window.localStorage.getItem("password")!==null){
        "<?php $_SESSION['isLogined'] = "true";?>"
        window.open("../HOME PAGE/index.php","_self");
      }
      document.getElementById("check").addEventListener('click',function (){
        document.getElementById("remeber-me").toggleAttribute("checked");
        if(document.getElementById("remeber-me").checked){
            window.localStorage.setItem("email",document.getElementById("email").value);
            window.localStorage.setItem("password",document.getElementById("password").value);
        }
      });
    </script>
  </body>
</html>