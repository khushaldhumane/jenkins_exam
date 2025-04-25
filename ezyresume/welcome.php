<!-- Code welcome.php as described/written in the video -->

<?php

session_start();

if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
  header("location: login.php");
}


?>


<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" -->
  <!-- integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> -->
  <link rel="stylesheet" href="style/welcome.css">
  <link rel="shortcut icon" type="icon/png" href="icon/r.png"> 
  <title>Home | ezyResume</title>
</head>

<body>
  <div>
  <div class="cont ">
    <div class="navbar">

      <a class="logobar" href="#"><img class="logo" src="img/logo3.png"></a>
      <!-- <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
        aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button> -->
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <div class="navbar-collapse collapse">
          <ul class="navbar-nav ">
            <li class="nav-item">
              <a class="navu" href="#"> <img src="https://img.icons8.com/metro/26/000000/guest-male.png"><br>
                <?php echo "" . $_SESSION['username'] ?>
              </a>
            </li>
          </ul>
        </div>
        <ul class="menu">
          <li class="menu-item">
            <a class="nav-link active" href="#"><img class="icon" src="icon/home.gif"><b>Home</b> </a>
          </li>
          <li class="menu-item">
            <a class="nav-link" href="resume/index.php"><img class="icon" src="icon/r.png">Get Resume</a>
          </li>
          <!-- <li class="nav-item">
        <a class="nav-link" href="login.php">Login</a>
      </li> -->
          <li class="menu-item">
            <a class="nav-link" href="logout.php"><img class="icon" src="icon/logout.png">Logout</a>
          </li>
        </ul>



      </div>
    </div>


    <div class="container">
      <div class="heading">
        <h3>
          <u>
            <?php echo "Welcome " . $_SESSION['username'] ?>!
          </u>
        </h3>
      </div>
<div class="para2">
      <div class="blog">
      
        <img class="resume" src="img/s.jpg">
        <div class="para">
          <p><b>Are you struggling to create a professional resume that showcases your skills and experiences?</b> Look no
            further than our website, the go-to platform for job seekers to create impressive resumes that help them
            stand out from the competition.</p>
          <p>A well-written resume is essential for landing your dream job, but it can be challenging to know where to
            start. Our website makes it easy for you to build a personalized and tailored resume that highlights your
            unique qualifications.</p>
          
        </div>
        
      </div>
      <div class="para1 ">
        <p><b>ezyResume</b> offers customizable templates, expert tips, and guidance to ensure that your resume is easy to
            read, well-organized, and tailored to the specific job you're applying for. With our <b>user-friendly interface</b>
            and step-by-step instructions, you can create a professional resume in minutes.</p>
        <p><b>Don't let a poorly written resume hold you back in your job search. Let us help you build a resume that
            showcases your skills and experiences and increases your chances of being hired for your dream job.</b></p>
      </div>
      
      

      <div class="get">
      <a class="get-btn" href="resume/index.php"><b>Get Your Resume Now !!</b> </a>
      </div>
      


    </div>
  </div>
</div>

  <footer style="margin-top:12px;" class="bg-light text-center text-lg-start">
  <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2); text-align: center; color: white; padding:8px ">
  This Site is designed and Developed By Khushal Dhumane <br> Copyright © 2023 www.ezyResume.unaux.com - All Rights Reserved 
  </div>
</footer>

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
    crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
    crossorigin="anonymous"></script>
</body>

</html>