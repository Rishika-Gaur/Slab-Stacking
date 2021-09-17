<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <style>
      *{margin:0;
        padding:0;
        box-sizing:border-box;
        font-family: 'Open Sans', sans-serif;}
      .carousel-item img{width:100%;
                         height:90vh;}
      .about_img{min-width:100%;
                 max-height:400px;}
      .offer_style{background:#F7DC6F;}
      .ofer_style{background:#D98880;}
      footer p{margin-bottom:0;
               text-align:center;}
    </style>
    <link rel="shortcut icon" type="image/png" href="images/favicon.png">
    <title>SLAB STACKING</title>
  </head>
  <body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark bg-gradient sticky-top">
  <div class="container-fluid">
    <a class="navbar-brand" href="Home Page.php">
      <img src="images/favicon.png" alt="" width="30" height="30" class="d-inline-block align-text-top">
      Slab Stacking
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="Home Page.php">Home</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            About Us
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#whatarewe">What are we</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#benefits">Benefits</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#howtoplay">How to play</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#startplaying">Start Playing</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#contactus">Contact Us</a>
        </li>
      </ul>
    </div>
  </div>
</nav>


<?php

if($_SERVER['REQUEST_METHOD'] == 'POST')
{
$name=$_POST['name'];
$email=$_POST['email'];
$message=$_POST['message'];

$host="localhost";
$user="root";
$password="";
$dbname="contactus";

$conn=mysqli_connect($host,$user,$password,$dbname);

if(!$conn)
{
  die("Sorry we failed to connect: ".mysql_connect_error());
}
else
{
  $sql= "INSERT INTO `messages` (`name`, `email`, `message`, `dt`) VALUES ('$name', '$email', '$message', current_timestamp());";
  $request=mysqli_query($conn,$sql);
  if($request)
  {
      echo '<script>alert("Success! message has been submitted successfully")</script>';
  }
  else{
    echo '<script>alert("The record was not inserted successfully because of some technical issues.")</script>';
  }
}
} ?>



<header>
  <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/home1.jpg" class="d-block w-100" alt="images/home1.jpg">
      <div class="carousel-caption d-md-block">
        <h3>Develop Skills While Playing</h3>
      </div>
    </div>
    <div class="carousel-item">
      <img src="images/home2.jpg" class="d-block w-100" alt="images/home2.jpg">
      <div class="carousel-caption d-md-block">
        <h3>Break Your Records and Surpass your Limits</h3>
      </div>
    </div>
    <div class="carousel-item">
      <img src="images/home3.jpg" class="d-block w-100" alt="images/home3.jpg">
      <div class="carousel-caption d-md-block">
        <h3>Get Ready With Your Controller</h3>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
</header>

<section class="main_heading my-5">
  <div class="text-center">
    <h1 class="display-4">About Us</h1>
    <hr class="w-25 mx-auto"/>
  </div>
  <a name="whatarewe"></a>
  <div class="container" data-aos="zoom-in" data-aos-duration="1500" data-aos-easing="ease-in-sine">
     <div class="row my-5">
        <div class="col-lg-6 col-md-6 col-12 col-xxl-6 d-flex justify-content-center align-items-center flex-column">
           <h1>What are we</h1>
        </div>
        <div class="col-lg-6 col-md-6 col-12 col-xxl-6">
           <p>We present you this funny stack game to build the highest tower of slabs. Building your construction seems easy, but it takes some skills, balance games and best timing for building the highest skyscraper from stacking slabs. It's okay if the tower falls, you can play and enjoy it again  :)</p>
        </div>
     </div>
  </div>
  <a name="benefits"></a>
  <div class="container offer_style pt-1" data-aos="fade-right" data-aos-duration="1500" data-aos-easing="ease-in-sine">
     <div class="row my-5">
        <div class="col-lg-6 col-md-6 col-12 col-xxl-6">
           <figure>
             <img src="images/benefits.jpg" alt="benefits" class="img-fluid about_img">
           </figure>
        </div>
        <div class="col-lg-6 col-md-6 col-12 col-xxl-6 d-flex justify-content-center align-items-center flex-column">
           <h1>Benefits</h1>
        </div>
     </div>
  </div>
  <a name="howtoplay"></a>
  <div class="container ofer_style pt-1" data-aos="fade-left" data-aos-duration="1500" data-aos-easing="ease-in-sine">
     <div class="row my-5">
        <div class="col-lg-6 col-md-6 col-12 col-xxl-6 d-flex justify-content-center align-items-center flex-column">
           <h1>How to play</h1>
        </div>
        <div class="col-lg-6 col-md-6 col-12 col-xxl-6">
          <figure>
             <img src="images/howtoplay.jpg" alt="howtoplay" class="img-fluid about_img">
           </figure>
        </div>
     </div>
  </div>
</section>

<a name="startplaying"></a>
<section class="main_heading my-5 bg-light pt-5" data-aos="flip-down" data-aos-duration="1000">
  <div class="text-center">
    <h1 class="display-4">Start Playing</h1>
    <hr class="w-25 mx-auto"/>
    <a href="images/index.html"><button type="button" class="btn btn-outline-success btn-lg my-5" data-bs-toggle="tooltip" data-bs-placement="right" title="Click to start playing">
  Let's Play
</button></a>
  </div>
</section>

<a name="contactus"></a>
<section class="main_heading my-5">
  <div class="text-center">
    <h1 class="display-4">Contact Us</h1>
    <hr class="w-25 mx-auto"/>
  </div>
  <div class="container">
    <div class="row">
      <div class="col-xxl-8 col-10 col-md-8 mx-auto">
<form action="Home Page.php" method="POST" autocomplete="off">
  <div class="mb-3">
    <label for="inputPassword" class="form-label">Name</label>
    <input type="text" class="form-control" id="inputPassword" placeholder="Enter your name" name="name">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="email@example.com" name="email">
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>
  <div class="mb-3">
  <label for="exampleFormControlTextarea1" class="form-label">Enter your Message</label>
  <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="message"></textarea>
  </div>
  <button type="submit" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telegram" viewBox="0 0 16 16">
  <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.287 5.906c-.778.324-2.334.994-4.666 2.01-.378.15-.577.298-.595.442-.03.243.275.339.69.47l.175.055c.408.133.958.288 1.243.294.26.006.549-.1.868-.32 2.179-1.471 3.304-2.214 3.374-2.23.05-.012.12-.026.166.016.047.041.042.12.037.141-.03.129-1.227 1.241-1.846 1.817-.193.18-.33.307-.358.336a8.154 8.154 0 0 1-.188.186c-.38.366-.664.64.015 1.088.327.216.589.393.85.571.284.194.568.387.936.629.093.06.183.125.27.187.331.236.63.448.997.414.214-.02.435-.22.547-.82.265-1.417.786-4.486.906-5.751a1.426 1.426 0 0 0-.013-.315.337.337 0 0 0-.114-.217.526.526 0 0 0-.31-.093c-.3.005-.763.166-2.984 1.09z"/>
</svg> Submit</button>
</form>
    </div>
  </div>
</section>

<footer class="bg-dark bg-gradient text-white">
<p><br><br>
<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
  <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
</svg> Rishika Yatishwar Gaur<br>
<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope-fill" viewBox="0 0 16 16">
  <path d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555zM0 4.697v7.104l5.803-3.558L0 4.697zM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586l-1.239-.757zm3.436-.586L16 11.801V4.697l-5.803 3.546z"/>
</svg> Email: gotguitarinninthclass@gmail.com<br>
<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-geo-fill" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M4 4a4 4 0 1 1 4.5 3.969V13.5a.5.5 0 0 1-1 0V7.97A4 4 0 0 1 4 3.999zm2.493 8.574a.5.5 0 0 1-.411.575c-.712.118-1.28.295-1.655.493a1.319 1.319 0 0 0-.37.265.301.301 0 0 0-.057.09V14l.002.008a.147.147 0 0 0 .016.033.617.617 0 0 0 .145.15c.165.13.435.27.813.395.751.25 1.82.414 3.024.414s2.273-.163 3.024-.414c.378-.126.648-.265.813-.395a.619.619 0 0 0 .146-.15.148.148 0 0 0 .015-.033L12 14v-.004a.301.301 0 0 0-.057-.09 1.318 1.318 0 0 0-.37-.264c-.376-.198-.943-.375-1.655-.493a.5.5 0 1 1 .164-.986c.77.127 1.452.328 1.957.594C12.5 13 13 13.4 13 14c0 .426-.26.752-.544.977-.29.228-.68.413-1.116.558-.878.293-2.059.465-3.34.465-1.281 0-2.462-.172-3.34-.465-.436-.145-.826-.33-1.116-.558C3.26 14.752 3 14.426 3 14c0-.599.5-1 .961-1.243.505-.266 1.187-.467 1.957-.594a.5.5 0 0 1 .575.411z"/>
</svg> Address: Pinjore,Haryana,India<br>
<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-linkedin" viewBox="0 0 16 16">
  <path d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854V1.146zm4.943 12.248V6.169H2.542v7.225h2.401zm-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.709-.52-1.248-1.342-1.248-.822 0-1.359.54-1.359 1.248 0 .694.521 1.248 1.327 1.248h.016zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.274 0-1.845.7-2.165 1.193v.025h-.016a5.54 5.54 0 0 1 .016-.025V6.169h-2.4c.03.678 0 7.225 0 7.225h2.4z"/>
</svg> <a href="https://www.linkedin.com/in/rishika-gaur-aaba211a2/" class="pe-auto link-light">Linkedin</a><br>
<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-github" viewBox="0 0 16 16">
  <path d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27.68 0 1.36.09 2 .27 1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.012 8.012 0 0 0 16 8c0-4.42-3.58-8-8-8z"/>
</svg> <a href="https://github.com/Rishika-Gaur" class="pe-auto link-light">Github</a><br><br>
</p>
</footer>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    <script type="text/javascript">
      var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
  return new bootstrap.Tooltip(tooltipTriggerEl)
})
    </script>
    <script>
  AOS.init();
</script>

  </body>

</html>