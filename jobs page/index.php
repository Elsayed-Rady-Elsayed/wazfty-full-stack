<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>JOB | wazefتy</title>
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
  <style>
    
  </style>
  <body>
    <div class="header">wzefتy</div>
    <div class="category-choosen">
      <h1>posted jobs</h1>
      <a style="text-decoration: none;" href="http://localhost/wazefty/wazef-y-main%202%20-%20Copy/POST%20JOB/"> <button class="post-job" name="goPostJob">post job</button></a>
    </div>
    <div class="jobs-list">
      <?php
      session_start();
      $cate_name = $_SESSION["name"];
      $con = mysqli_connect("localhost", "root", "", "application_db");
      $select_all_jobs = "select * from job where job_category='$cate_name'";
      $exe_query = mysqli_query($con,$select_all_jobs);
      $jobs_count = mysqli_num_rows($exe_query);
      $job_id = $_SESSION['id'];
      $num_of_applications = mysqli_num_rows(mysqli_query($con, "select * from applications where job_id = '$job_id'"));
      if($jobs_count == 0){
        echo "<div>no jobs</div>";
      }else{
      while($job = mysqli_fetch_array($exe_query)){
        $name = $job["name"];
        $title = $job["title"];
        $phone = $job["phone"];
        $address = $job["address"];
        $date = $job["post_date"];
        $logo = $job["logo"];
        $id = $job['id'];
        echo "
        <div class=\"box\">
        <img src='images/$logo' alt='' />
        <div class='details'>
          <div class='left'>
            <h2>$name</h2>
            <p class='job-title'>$title</p>
            <p class='phone-number'>$phone</p>
            <p class='period'>$date</p>
            <p class='number-of-application'>$num_of_applications applaied</p>
          </div>
          <div class='right-part' style=\"  
          width:200px;
          margin-right: 1%;
          overflow:hidden;
          display: flex;
          flex-direction: column;
          justify-content: space-around;
          align-items: center;
          text-overflow: ellipsis;
          \">
            <p class='address'>$address</p>
            <form action=\"\" method=\"post\">
            <input type=\"text\" value = \"$id\" name=\"id\" style=\"display:none;\">
            <input class='' id=\"applay\" style=\"  background-color:#390da0;border:none;color: white;text-align: center;padding: 10px 25px;cursor: pointer;\" type=\"submit\" name= \"applay\" value=\"applay\">
            <input class='' id=\"more\" style=\" margin:5px;display:block;background-color:#390da0;border:none;color: white;text-align: center;padding: 10px 25px;cursor: pointer;\" type=\"submit\" name= \"more\" value=\"more\">
            </form>
          </div>
        </div>
      </div>
        ";
        if(isset($_POST['more'])){
          $id = $_POST['id'];
          $_SESSION['id'] = $id;
          header("Location: http://localhost/wazefty/wazef-y-main%202%20-%20Copy/details/");
        }
        if(isset($_POST["applay"])){
          $id = $_POST['id'];
          $_SESSION['id'] = $id;
          header("Location: http://localhost/wazefty/wazef-y-main%202%20-%20Copy/application%20form/");
          }
        }
      }
      ?>
    </div>
  </body>
</html>
