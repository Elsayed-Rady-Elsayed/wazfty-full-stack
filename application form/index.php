<?php
session_start();
$job_id = $_SESSION['id'];
$connection = mysqli_connect('localhost','root','','application_db');
$select_job_info = "select * from job where id = '$job_id'";
$exe_query = mysqli_query($connection, $select_job_info);
$logo = "";
$name = "";
$title = "";
while($row = mysqli_fetch_array($exe_query)){
$logo = $row['logo'];
$name = $row['name'];
$title = $row['title'];
}
if(isset($_POST['send'])){
      $first_name = $_POST['first_name'];
      $last_name = $_POST['last_name'];
      $email = $_POST['email'];
      $phone = $_POST['phone'];
      $address = $_POST['address'];
      $educational_degree = $_POST['educational_degree'];
      $university_gpa = $_POST['university_gpa'];
      $work_nature = $_POST['work_nature'];
      $skills = $_POST['skills'];
      $cv = $_POST['cv'];
      $check_email="select * from applications where email= '$email' and job_id = '$job_id'";
      $run_check_email=mysqli_query($connection, $check_email);
      $count=mysqli_num_rows($run_check_email);
      if ($count>0)
      {
        echo"<script> alert ('you sent an application before')</script> ";
        exit();
      }
        $request = "insert into applications (job_id,first_name, last_name, email, phone, address, educational_degree, university_gpa, work_nature, skills,cv) 
        values($job_id,'$first_name','$last_name','$email','$phone','$address','$educational_degree','$university_gpa','$work_nature','$skills','$cv') ";
        $exe_query = mysqli_query($connection, $request);
        if($exe_query){
        echo"<script> alert ('Application Sent Successfully') </script>";
                echo "<script> window.open('../HOME PAGE/index.html','_self') </script>";
        }else{
    echo "error";
      }
      }
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>APPLICATION FORM | wazefتy</title>
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
    <div class="application-details">
      <img src="../jobs page/images/<?php echo $logo; ?>" alt="" />
      <div class="texts">
        <h2><?php echo $name; ?></h2>
        <p><?php echo $title; ?></p>
      </div>
    </div>
    <div class="personal-information">
      <h2>personal information</h2>
      <hr />
      <form action="" method="post" enctype="multipart/form-data">
        <div class="name">
          <div class="f-name">
            <label for=""
              ><span class="star" style="color: red">*</span>first name</label
            >
            <input name ="first_name" type="text" required />
          </div>
          <div class="l-name">
            <label for=""
              ><span class="star" style="color: red">*</span>last name</label
            >
            <input name="last_name" type="text" required />
          </div>
        </div>
        <label for=""
          ><span class="star" style="color: red">*</span>email</label
        >
        <input name="email" type="email" required />
        <label for=""
          ><span class="star" style="color: red">*</span>phone</label
        >
        <input name="phone"type="tel" required />
        <label for=""
          ><span class="star" style="color: red">*</span>address</label
        >
        <input name="address"type="text" required />
        <h2>Technical information</h2>
        <hr />
        <label for=""
          ><span class="star" style="color: red">*</span>educational
          degree</label
        >
        <input name="educational_degree"type="text" required />
        <label for=""
          ><span class="star" style="color: red">*</span>university_gpa</label
        >
        <input name="university_gpa" type="text" required />
        <!--  -->
        <label for=""
          ><span class="star" style="color: red">*</span>work_nature</label
        >
        <select name="work_nature" id="">
          <option value="remotely">remotely</option>
          <option value="inplace">inplace</option>
        </select>
        <!-- heree -->
        <label for=""
          ><span class="star" style="color: red">*</span>skills</label
        >
        <input name="skills" type="text" required />
        <label for=""><span class="star" style="color: red">*</span>cv</label>
        <input name="cv" type="text" />
        <input name="send" type="submit" value="applay" />
      </form>
    </div>
  </body>
</html>



