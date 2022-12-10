<?php
  session_start();
  $con = mysqli_connect('localhost','root','','application_db');
  if(isset($_SESSION['user_email'])){
    $email = $_SESSION['user_email'];
    $get_user = "select * from user where user_email = '$email'";
    $run_get_user = mysqli_query($con, $get_user);
    $row_get_user = mysqli_fetch_array($run_get_user);
    $user_id = $row_get_user['user_id'];
    $name = $row_get_user['username'];
    $pass = $row_get_user['user_pass'];
    $phone = $row_get_user['user_phone'];
    $bio = $row_get_user['bio'];
    $img = $row_get_user['user_img'];
  }
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>EDIT PRFILE | wazefتy</title>
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
  <?php
      error_reporting(0);
      $user_name = end(explode(' ',$name,-1));
    ?>
    <div class="header">Hello, <?php echo $user_name;?></div>

    <form action="" method="post" >
      <div class="image-part">
        <label for="">profile picture</label>
       
        <img src="../profile/images/<?php echo $img;?>" alt="" />
      </div>
      <label for="">username</label>
      <input type="text" name="username" id="" value="<?php echo $name;?>" />
      <label for="">phone</label>
      <input type="text" name="phone" id="" value="<?php echo $phone;?>" />
      
      <label for="">bio</label>
      <input type="text" name="bio" id="" value="<?php echo $bio;?>" />
      <input type="submit" name="update" value="edit" />
    </form>
  </body>
</html>
<?php
if(isset($_POST['update'])){

  $update_id = $user_id;
  
  $c_name = $_POST['username'];
  
  
  $c_phone = $_POST['phone'];
  
  $c_bio = $_POST['bio'];

  
          $update_customer = "update user set 
          username='$c_name',user_phone='$c_phone',bio='$c_bio'
          where 
          user_id='$update_id'";
          
          $run_customer = mysqli_query($con,$update_customer);
          
          if($run_customer){
          
          echo "<script>alert('Your account has been updated')</script>";
          
          echo "<script>window.open('../profile/index.php','_self')</script>";
  
          }
  
  
  
  
  }
?>
