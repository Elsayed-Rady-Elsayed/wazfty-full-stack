<?php

use function PHPSTORM_META\type;

  session_start();
  $con = mysqli_connect('localhost','root','','application_db');
  if(isset($_SESSION['user_email'])){
    $email = $_SESSION['user_email'];
    $get_user = "select * from user where user_email = '$email'";
    $run_get_user = mysqli_query($con, $get_user);
    $row_get_user = mysqli_fetch_array($run_get_user);
    $update_id = $row_get_user['user_id'];
    $name = $row_get_user['username'];
    $phone = $row_get_user['user_phone'];
    $bio = $row_get_user['bio'];
    $img = $row_get_user['user_img'];
    $skills = $row_get_user['skills'];
    $projects = $row_get_user['projects'];
    $jobs = $row_get_user['jobs'];
    $skills_array = explode(',',$skills);
    $projects_array = explode(',',$projects);
    $jobs_array = explode(',',$jobs);
  }
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>PRFILE | wazefتy</title>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Work+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="style/all.min.css" />
    <link rel="stylesheet" href="style/normalize.css" />
    <link rel="stylesheet" href="style/style.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
      .personal-info .left-info .img-part{
        position: relative;
      }
      .personal-info .left-info .img-part .round{
        position: absolute;
        bottom: 0;
        right: 0;
        background: #00B4FF;
        width: 32px;
        height: 32px;
        line-height: 33px;
        text-align: center;
        border-radius: 50%;
        overflow: hidden;
      }

      .personal-info .left-info .img-part .round input[type = "file"]{
        position: absolute;
        transform: scale(2);
        opacity: 0;
      }

      input[type=file]::-webkit-file-upload-button{
          cursor: pointer;
      }
     
    </style>
  </head>
  <body>
    <?php
      error_reporting(0);
      $user_name = end(explode(' ',$name,-1));
    ?>
    <div class="header">Hello, <?php echo $user_name;?></div>
    <div class="personal-info">
      <div class="left-info">
        <div class="img-part" ><img src="images/<?php echo $img;?>" alt="" />
         <div class="round">
        
        <a href="../EDIT PROFILE/edit_img.php"><i class = "fa fa-camera" style = "color: #fff;"></i></a>
        
          </div>        
        </div>
        
        <div class="text-part">
          <h2><?php echo $name;?></h2>
          <div class="inner-texts">
            <p><?php echo $email;?></p>
            <p><?php echo $phone;?></p>
            <p><?php echo $bio;?></p>
          </div>
        </div>
      </div>
      <div class="right-info">
      <a href="../EDIT PROFILE/index.php" style="text-decoration:none;"><div class="edit-profile">edit profile</div></a>
      </div>
    </div>
    <div class="skills">
      <div class="head-of-list">
        <h2>MY SKILLS</h2>
        <p id="add-skill-btn">+ADD</p>
      </div>
      <ol class="skills-list">
        <?php
        if (count($skills_array) > 1) {
          foreach ($skills_array as $i) {
            if (empty($i))continue;
            echo "<li>$i</li>";
          }
        }
        ?>
      </ol>
      <div id="add-skill-card" style="box-shadow: 5px 10px 8px 10px #888888;padding: 10px;z-index: 1022;display: none;width: 400px;background-color: white; position: absolute; left: 50%;top: 50%;transform: translate(-50%,-50%);">
      <p id="exit" style="background-color: var(--main-color);width: fit-content;color: white;padding: 5px 7px;position: relative;top: -20px;cursor: pointer;left: 0;">x</p>
      <form method="get" action="" id="skills-form" class="skills-form" style="display: flex; flex-direction: column;justify-content: space-between;">
            <h3 style="color: var(--main-color);text-align: center;">add skills</h3>
        <input id="skill-field" required name="skill" placeholder="add only one" type="text" name="skill" style="  border-color: var(--main-color) var(--main-color) var(--main-color) var(--main-color);
        border-width: 3px;
        margin-bottom: 40px;
        padding: 15px;">
        <input id="submit" type="submit" name="submit" value="add" style="  width: 100%;
        padding: 25px;
        border-radius: 15px;
        background-color: var(--main-color);
        border: none;
        color: white;
        font-size: 20px;
        margin-top: 10px;
        margin-bottom: 10px;
        outline: none;
        cursor: pointer;">
      </form>
      </div>
    </div>
    <?php
    if(isset($_GET['submit'])){
      unset($_GET['submit']);
      $skills .= ",{$_GET['skill']}";
      if(!in_array($_GET['skill'],$skills_array)){ 
      $update_skills = "update user set skills = '".$skills."' where user_email = '".$email."'";
      $exe_update = mysqli_query($con, $update_skills);
      header("Refresh: 0");
      }
    }
    ?>
<div class="projects">
      <div class="head-of-list">
        <h2>MY PROJECTS</h2>
        <p id="add-projects-btn">+ADD</p>
      </div>
      <ol class="projects-list">
         <?php
         if (count($projects_array) > 1) {
           foreach ($projects_array as $i) {
           if (empty($i))continue;
           echo "<li>$i</li>";
           }
         }
        ?>
      </ol>
      <div id="add-projects-card" style="box-shadow: 5px 10px 8px 10px #888888;padding: 10px;z-index: 1022;display: none;width: 400px;background-color: white; position: relative; left: 50%;top: 50%;transform: translate(-50%,-50%);">
      <p id="exit-projects-btn" style="background-color: var(--main-color);width: fit-content;color: white;padding: 5px 7px;position: relative;top: -20px;cursor: pointer;left: 0;">x</p>
      <form method="get" action="" id="projects-form" class="projects-form" style="display: flex; flex-direction: column;justify-content: space-between;">
            <h3 style="color: var(--main-color);text-align: center;">add projects</h3>
        <input name="projects" placeholder="add only one" type="text" name="projects" style="  border-color: var(--main-color) var(--main-color) var(--main-color) var(--main-color);
          border-width: 3px;
          margin-bottom: 40px;
          padding: 15px;">
        <input name="submit-project" type="submit" value="add" style="  width: 100%;
          padding: 25px;
          border-radius: 15px;
          background-color: var(--main-color);
          border: none;
          color: white;
          font-size: 20px;
          margin-top: 10px;
          margin-bottom: 10px;
          outline: none;
          cursor: pointer;">
      </form>
      </div>
    </div>
    <?php
    if(isset($_GET['submit-project'])){
      unset($_GET['submit-project']);
      $projects .= ",{$_GET['projects']}";
      if (!in_array($_GET['projects'],$projects_array)) { 
        $update_skills = "update user set projects = '" . $projects . "' where user_email = '" . $email . "'";
        $exe_update = mysqli_query($con, $update_skills);
        header("Refresh:0");
      }
    }
    ?>
  <div class="old-jop">
      <div class="head-of-list">
        <h2 style="color: var(--main-color);">MY OLD JOBS</h2>
        <p id="add-old-jop-btn">+ADD</p>
      </div>
      <ol class="old-jop-list">
     <?php
     if (count($jobs_array) > 1) {
       foreach ($jobs_array as $i) {
         if (empty($i))
           continue;
         echo "<li>$i</li>";
       }
     }
        ?>  
    </ol>
      <div id="add-old-jop-card" style="box-shadow: 5px 10px 8px 10px #888888;padding: 10px;z-index: 1022;display: none;width: 400px;background-color: white; position: relative; left: 50%;top: 50%;transform: translate(-50%,-50%);">
      <p id="exit-old-jop-btn" style="background-color: var(--main-color);width: fit-content;color: white;padding: 5px 7px;position: relative;top: -20px;cursor: pointer;left: 0;">x</p>
      <form method="get" action="" id="old-jop-form" class="old-jop-form" style="display: flex; flex-direction: column;justify-content: space-between;">
      <h3 style="color: var(--main-color);text-align: center;">add old job</h3>
        <input name="job" placeholder="add only one" type="text" name="old-jop" style="  border-color: var(--main-color) var(--main-color) var(--main-color) var(--main-color);
          border-width: 3px;
          margin-bottom: 40px;
          padding: 15px;">
        <input type="submit" name="submit-job" value="add" style="  width: 100%;
          padding: 25px;
          border-radius: 15px;
          background-color: var(--main-color);
          border: none;
          color: white;
          font-size: 20px;
          margin-top: 10px;
          margin-bottom: 10px;
          outline: none;
          cursor: pointer;">
      </form>
      </div>
    </div>
     <?php
    if(isset($_GET['submit-job'])){
      unset($_GET['submit-job']);
      $jobs .= ",{$_GET['job']}";
       if (!in_array($_GET['job'],$jobs_array)) {
         $update_skills = "update user set jobs = '" . $jobs . "' where user_email = '" . $email . "'";
         $exe_update = mysqli_query($con, $update_skills);
         header("Location:http://localhost/wazefty/wazef-y-main%202%20-%20Copy/profile/");
       }
    }
    ?>
    <script src="file.js"></script>
  </body>
</html>
