<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>HOME | wazefتy</title>
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
    <a href="#home"> <div style="  position: fixed;
  right: 0;
  bottom: 0;
  background-color: var(--main-color);
  color: white;
  padding: 10px;
  z-index: 111111;
  cursor: pointer;
  margin: 10px;" class="home-button">HOME</div></a>
    <div class="header">
      <div class="logo">wzefتy</div>
      <div class="nav">
        <button id="search" name="search" style="cursor: text;margin: 5px;width: 260px;padding: 10px;background-color: white;border: none;color: gray; border-radius: 30px;">search <i style="margin-left: 50px;" class="fa-solid fa-magnifying-glass"></i></button>
        <script>
          document.getElementById("search").onclick = function(){
            window.open("../search/index.php","_self")
          }
        </script>
        <ul class="nav-ul">
          <li><a href="#home" class="active">home</a></li>
          <li><a href="#job">jop</a></li>
          <li><a href="#about">about</a></li>
          <li><a href="#footer">contact</a></li>
          <?php
          session_start();
          if ($_SESSION['isLogined'] === "true") { ?>
          <li><a href="http://localhost/wazefty/wazef-y-main%202%20-%20Copy/profile/">profile</a></li>
          <?php } ?>
        </ul>
        <?php
          if ($_SESSION['isLogined'] === "false") { ?>
        <a href="http://localhost/wazefty/wazef-y-main%202%20-%20Copy/LOGIN/"
          ><div class="login-button">LOGIN</div></a
        > 
        <?php } else { ?>
          <a href= "../LOGIN/index.php"
          ><div style="background-color: red;" class="login-button" id="logout">logout</div></a
        >
        <?php } ?>
      </div>
    </div>
    <div class="landing" id="home">
      <div class="landing-image">
        <img src="images/pexels-fauxels-3183198.jpg" alt="landing image" />
        <div class="landing-text">
          <h2>Find Job With Easy Way</h2>
          <p>
            here you will find the job you are searching for and will find some
            interships for student and employee can but job for users to find
            that all in this web site
          </p>
        </div>
      </div>
    </div>
    <div class="category" id="job">
      <h2>choose category</h2>
      <p>choose the category of job your are looking for</p>
      <div class="categories-boxs">
          <?php
          $connection = mysqli_connect('localhost', 'root', '', 'application_db');
          $select_categories = "select * from categories";
          $exe_query = mysqli_query($connection,$select_categories);
          while($cat = mysqli_fetch_array($exe_query)){
          $n = $cat['name'];
          $select_num_of_posts ="select * from job where job_category='$n'";
          $exe = mysqli_query($connection, $select_num_of_posts);
          $count = mysqli_num_rows($exe);
          echo "
          <div class=\"box\" style=\"cursor: auto;\">
          <div class=\"img-box\">
          <img src=\"{$cat['logo']}\" alt=\"\" />
          </div>
          <p>{$cat['name']}</p>
          <form action=\"\" method=\"post\">
            <input style=\"display:none;\" type=\"text\" value=\"{$cat['name']}\" name=\"name\">
            <input style=\"display:none;\" type=\"text\" value=\"{$cat['id']}\" name=\"id\">
            <input style=\"
              margin-top:18%;
              border: 1px solid #707070;
              padding: 20px 30px;
              border-radius: 20px;
              color: var(--main-color);
              font-weight: 500;
              cursor:pointer;
            \" type=\"submit\" value=\"{$count} jop posts\"  name=\"submit\">
          </form>
        </div>";
          }
          if(isset($_POST['submit'])){
            $_SESSION['id'] = $_POST['id'];
            $_SESSION["name"] = $_POST['name'];
            echo "<script>window.open('../jobs page/index.php','_self')</script>"; 
          }
          ?>

      </div>
      <div class="see-all">see all categories</div>
    </div>
    <div class="about-us" id="about">
      <h2>why choosing wzyfتy?</h2>
      <p>the reason why you will choose us to help you find your job</p>
      <div class="about-us-content">
        <div class="about-us-text">
          <img class="main-image" src="images/gallery-03.png" alt="" />
          <img class="man-img" src="images/man.png" alt="" />
          <div class="texts">
            <h2>what make us the best place to get job ?</h2>
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Pariatur
              <br />
              modi corporis deleniti velit repellat sed provident ea similique
              <br />
              tempore qui accusantium expedita voluptate deserunt incidunt,
              <br />
              cupiditate mollitia iste aliquam explicabo. <br />
            </p>
            <h2 class="ol-h2">what is our advantages ?</h2>
            <ol type="A" class="aboutus-ul">
              <li>easy to find job</li>
              <li>easy to post jop</li>
              <li>honest and realiable</li>
              <li>security and safety of data</li>
            </ol>
            <h2 class="ol-h2">what is our skills ?</h2>
            <ol type="A" class="aboutus-ul">
              <li>easy to find job</li>
              <li>easy to post jop</li>
              <li>honest and realiable</li>
            </ol>
          </div>
        </div>
      </div>
    </div>
    <div class="developer" id="developer">
      <i class="fas fa-angle-left change-background" id="arrow1"></i>
      <i class="fas fa-angle-right change-background" id="arrow2"></i>
      <h2>the developers</h2>
      <p class="dev-p">the team who develop this web site from skratch</p>
      <div class="developer-list">
        <div class="box">
          <div class="outer-img"><img id="dev-img" src="images/avatar-04.png" alt="" /></div>
          <h2 id="name">sayed rady</h2>
          <p id="about-dev">
            Lorem ipsum dolor, sit amet consectetur adipisicing elit.
            Perferendis vero hic, voluptate temporibus praesentium molestiae id
            facere nesciunt, voluptatum officiis asperiores quisquam repellat
            odio a ut fugiat laudantium eos explicabo!
          </p>
        </div>
      </div>
      <div class="left" style="left: 10%;width: 30%;"></div>
      <div class="right" style="right: 10%;width: 30%;"></div>
      <div class="bullets" id="bullets">
        <span class="active"></span><span></span><span></span><span></span><span></span
        ><span></span>
      </div>
    </div>
    <div class="footer" id="footer">
      <div class="left">
        <h3>about us</h3>
        <p>
          Tristique velit phasellus sed auctor leo eros luctus nibh fermentu ad
          impediet rhonus dolor habitant purus velit aliquet donecurna ut in
          turpis faucibus Tristique velit phasellus sed auctor leo eros luctus
          nibh fermentu ad impediet rhonus dolor habitant purus velit aliquet
          donecurna ut in turpis faucibus
        </p>
        <div class="social-media-logos">
          <a href="https://www.facebook.com/sayed.rady.3720/"
            ><span><i class="fa-brands fa-square-facebook"></i></span
          ></a>
          <a href="https://twitter.com/Sayed17359078/likes"
            ><span><i class="fa-brands fa-square-twitter"></i></span
          ></a>
          <a href="https://www.youtube.com/"
            ><span><i class="fa-brands fa-youtube"></i></span
          ></a>
          <a href="https://www.instagram.com/"
            ><span><i class="fa-brands fa-square-instagram"></i></span
          ></a>
          <a href="https://www.linkedin.com/in/sayed-rady-3b6931233/"
            ><span><i class="fa-brands fa-linkedin"></i></span
          ></a>
        </div>
      </div>
      <div class="right">
        <h3>complainn</h3>
        <form action="#" method="get">
          <textarea
            placeholder="if you have any complain submit it and help us tosolve it."
            name="complain"
            id="complain"
            cols="20"
            rows="5"
          ></textarea>
          <input type="submit" name="complainbtn" value="submit" />
          <?php
          $email = $_SESSION["user_email"];
          $select_user_info = "select * from user where user_email = '$email'";
          $exe = mysqli_query($connection, $select_user_info);
          $id = $_SESSION['id'];
          while($user = mysqli_fetch_array($exe)){
            $id = $user['user_id'];
          }
          if(isset($_GET['complainbtn'])){
            $message = $_GET['complain'];
            $add_complain = "insert into complains (message,email,user_comp_id) values ('$message','$email','$id')";
            $send_complain = mysqli_query($connection, $add_complain);
          }
          ?>
        </form>
      </div>
    </div>
    <script>
      let developers = [
        {name : "abdelmonem1",desc:" Lorem ipsum dolor, sit amet consectetur adipisicing elit.Perferendis vero hic, voluptate temporibus praesentium molestiae idfacere nesciunt, voluptatum officiis asperiores quisquam repellatodio a ut fugiat laudantium eos explicabo!",img:"images/twitter-logo-vector-png-clipart-1.png"},
        {name : "abdelmonem2",desc:" Lorem ipsum dolor, sit amet consectetur adipisicing elit.Perferendis vero hic, voluptate temporibus praesentium molestiae idfacere nesciunt, voluptatum officiis asperiores quisquam repellatodio a ut fugiat laudantium eos explicabo!",img:"images/twitter-logo-vector-png-clipart-1.png"},
        {name : "abdelmonem3",desc:" Lorem ipsum dolor, sit amet consectetur adipisicing elit.Perferendis vero hic, voluptate temporibus praesentium molestiae idfacere nesciunt, voluptatum officiis asperiores quisquam repellatodio a ut fugiat laudantium eos explicabo!",img:"images/twitter-logo-vector-png-clipart-1.png"},
        {name : "abdelmonem4",desc:" Lorem ipsum dolor, sit amet consectetur adipisicing elit.Perferendis vero hic, voluptate temporibus praesentium molestiae idfacere nesciunt, voluptatum officiis asperiores quisquam repellatodio a ut fugiat laudantium eos explicabo!",img:"images/twitter-logo-vector-png-clipart-1.png"},
        {name : "abdelmonem5",desc:" Lorem ipsum dolor, sit amet consectetur adipisicing elit.Perferendis vero hic, voluptate temporibus praesentium molestiae idfacere nesciunt, voluptatum officiis asperiores quisquam repellatodio a ut fugiat laudantium eos explicabo!",img:"images/twitter-logo-vector-png-clipart-1.png"},
      ];
      let bullets = document.querySelectorAll("#bullets span");
      let index = 0;
      document.getElementById("arrow1").onclick = function (){
        if(index>=0){
          if(index>0)index--;
          document.getElementById("name").innerText = developers[index].name;
          document.getElementById("about-dev").innerText =developers[index].desc;
          document.getElementById("dev-img").src =developers[index].img;
        }
        bullets.forEach((e,i)=>{
            if(i === index)e.style.background = "#707070";
          else e.style.background = "white";
      });
      }
        document.getElementById("arrow2").onclick = function (){
          if(index<5){
            document.getElementById("name").innerText = developers[index].name;
            document.getElementById("about-dev").innerText =developers[index].desc;
            document.getElementById("dev-img").src =developers[index].img;
            index++;
        }
           bullets.forEach((e,i)=>{
          if(i === index){e.style.background = "#707070";
          }
          else e.style.background = "white";
      });
      }
    </script>
  </body>
</html>
