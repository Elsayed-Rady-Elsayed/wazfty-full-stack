<?php
$con = mysqli_connect('localhost','root','','application_db');

  if(isset($_POST["post"])){
    $logo = $_FILES['logo']['name'];
    $logo_tmp = $_FILES['logo']['tmp_name'];
    move_uploaded_file($logo_tmp,"../jobs page/images/$logo");
    $name = $_POST['username'];
    $title = $_POST['title'];
    $address = $_POST['address'];
    $phone = $_POST['phone'];
    $date =date('d/m/y h:i:s');
    $cat = $_POST['job-category'];
    $post_job = "insert into job (name,title,phone,address,logo,post_date,job_category) values ('$name','$title','$phone','$address','$logo','$date','$cat')";
    $post_query = mysqli_query($con,$post_job);
    if($post_query){
    echo"<script>alert('job posted successfully');</script>";
    header("Location: http://localhost/wazefty/wazef-y-main%202%20-%20Copy/jobs%20page/");
    exit;
    }else{
    echo"error";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>POST JOB | wazefتy</title>
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
    <div class="header">Hello</div>

    <form action="" method="post" enctype="multipart/form-data">
      <div class="image-part">
      <label for="">company logo</label>
      <input type="file" name="logo"/>
      <!-- <div  class="img-part">no image</div> -->
      </div>
      <label for="">company name</label>
      <input type="text" name="username" id="" value="the name of company" />
      <label for="">job title</label>
      <input type="text" name="title" id="" value="the job title" />
      <label for="">company address</label>
      <input type="text" name="address" id="" value="the company address" />
      <label for="">company phone</label>
      <input type="text" name="phone" id="" value="the company phone" />
      <label for="">job category</label>
      <select style="padding: 15px;border-radius: 20px;" name="job-category" id="">
          <option value="Education&learning">Education&learning</option>
          <option value="Sales&marketing">Sales&marketing</option>
          <option value="computer programming">computer programming</option>
          <option value="customer services">customer services</option>
          <option value="Design&multimedia">Design&multimedia</option>
          <option value="web development">web development</option>
          <option value="medical&pharma">medical&pharma</option>
          <option value="engineer&architecture">engineer&architecture</option>
        </select>
      <input type="submit" name="post" value="post" />
    </form>
    <script>
      console.log("sss")
    </script>
  </body>
</html>
