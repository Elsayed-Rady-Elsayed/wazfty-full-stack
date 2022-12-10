<?php
    session_start();
    $id = $_SESSION['id'];
    $connection = mysqli_connect('localhost', 'root', '', 'application_db');
    $exe = mysqli_query($connection,"select * from job where id = '$id'");
    while($j = mysqli_fetch_array($exe)){
      $logo = $j['logo'];
      $name = $j['name'];
      $title = $j['title'];
      $phone = $j['phone'];
      $address = $j['address'];
      $date = $j['post_date'];
      $cat = $j['job_category'];
  $req = $j['description'];
    }
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>DETAILS | wazefتy</title>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Work+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="style/all.min.css" />
    <link rel="stylesheet" href="style/normalize.css" />
    <link rel="stylesheet" href="style/style.css" />
    <style>
      :root {
        --main-color: #390da0;
        --secondry-color: #b7c7de;
        --text-color: #fff;
      }
      .company-details {
        display: flex;
        margin: 50px;
        gap: 40px;
        align-items: center;
      }
      .company-details .details .title {
        font-size: 30px;
        font-weight: bold;
        color: var(--main-color);
      }
      .company-details .details .phone {
        color: gray;
        font-size: 20px;
      }
      .company-details .details .address {
        color: gray;
        font-size: 20px;
      }
      .company-details .details .date {
        color: gray;
        font-size: 20px;
      }
      .company-details .details .cat {
        color: gray;
        font-size: 20px;
      }
      .desc {
        width: 70%;
        height: 100vh;
        color: black;
        font-size: 17px;
        line-height: 1.7px;
        margin: 10px;
      }
    </style>
  </head>
  <body> 
    <div class="header" style="text-align: center; color: #390da0;font-weight: bold;padding-left: 40%;"><?php echo $name?></div>
    <div class="company-details">
      <img src="../jobs page/images/<?php echo $logo?>" alt="" />
      <div class="details">
        <div class="title"><?php echo $title?></div>
        <div class="phone"><?php echo $phone?></div>
        <div class="address"><?php echo $address?></div>
        <div class="date"><?php echo $date?></div>
        <div class="cat"><?php echo $cat?></div>
      </div>
    </div>
    <h3>requirments</h3>
    <div class="desc"><?php echo $req?></div>
  </body>
</html>
