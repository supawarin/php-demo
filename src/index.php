<?php

  session_start();

  if (!isset($_SESSION['username'])) {
    $_SESSION['msg'] = "You must log in first";
    header('location: login.php');
  }

  if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['username']);
    header('location: login.php');
  }


   
?>


<!doctype html>
<html lang="en">
  <head>
    
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="/styles.css">

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>


    
    <title>Shalom DetUdom</title>
  </head>

  <body>

    
    <div class="content">

      <!-- notification message -->
      <?php if (isset($_SESSION['success'])) : ?>
        <div class="success">
          <h3>
            <?php
              echo $_SESSION['success'];
              unset($_SESSION['success']);
            ?>
          </h3>
        </div>
      <?php endif ?>
    
      <!-- logged in user information -->

      <?php if (isset($_SESSION['username'])) : ?>
        <p>Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
        <p><a href="index.php?logout='1'" style="color: red;">Logout</a></p>
      <?php endif ?>  
  
  

    </div>


    <section id="nav-bar">

        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container-fluid">
              <a class="navbar-brand" href="#"><img src="img/jesus-1.png" width="120px"></a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fa fa-bars" aria-hidden="true"></i>
              </button>
              <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                  <li class="nav-item">
                    <a class="nav-link" href="#top">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#services">Product</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#about-us">About Us</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#footer">Contact</a>
                  </li>
                  
                </ul>
              </div>
            </div>
          </nav>

    </section>

    <!---------------banner section---------------->

    <section id="banner">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <p class="promo-title">Web Test php</p>
            <p>Home Page Web Test For PHP on Docker </p>
            
          </div>
          <div class="col-md-6 text-center">
            <img src="img/m7.png" class="img-fluid">

          </div>
        </div>
      </div>

      <img src="img/wave4.png" class="bottom-img">

    </section>

    <!-----------------services section------------->

    <section id="services">
      <div class="container text-center">
        <h1 class="title">Post galley</h1>
        <div class="row text-center">
          <div class="col-md-4 services">
            <img src="img/tutim.jpg" class="service-img">
            <h4>Sunday </h4>
            <p>Dried bananas, original flavor Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
          </div>
          <div class="col-md-4 services">
            <img src="img/m3.jpg" class="service-img">
            <h4>Christmas</h4>
            <p>Dried bananas, original flavor Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
          </div>
          <div class="col-md-4 services">
            <img src="img/praise.jpg" class="service-img">
            <h4>Family</h4>
            <p>Dried bananas, original flavor Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
          </div>
        </div>
        <button type="button" class="btn btn-warning">All Product</button>
      </div>
    </section>

    <!----------------About Us--------------->

    <section id="about-us">
      <div class="container">
        <h1 class="title text-center">WHY CHOOSE US ?</h1>

        <div class="row">
          <div class="col-md-6 about-us">
            <p class="about-title">WHY WE'RE DIFFERENT ?</p>
            <ul>
              <li>Lorem Ipsum is simply dummy text of the printing .</li>
              <li>Lorem Ipsum is simply dummy text of the printing .</li>
              <li>Lorem Ipsum is simply dummy text of the printing .</li>
              <li>Lorem Ipsum is simply dummy text of the printing .</li>
              <li>Lorem Ipsum is simply dummy text of the printing .</li>
              <li>Lorem Ipsum is simply dummy text of the printing .</li>
            </ul>
          </div>

          <div class="col-md-6">
            <img src="img/family1.png" class="img-fluid">
          </div>

        </div>
      </div>

    </section>

    <!---------------testimonial-------------->

    <section id="testimonials">
      <div class="container">
        <h1 class="title text-center">WHAT CLIENT SAY ?  </h1>
        <div class="row">
          <div class="col-md-4 testimonials">
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
            <img src="img/imgNok.jpg" class="">
            <p class="user-details"><b>Supawarin</b><br> Jesus bless you</p>
          </div>

          <div class="col-md-4 testimonials">
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
            <img src="img/logo.w.jpg" class="">
            <p class="user-details"><b>Workstation</b><br> Work from home</p>
          </div>

          <div class="col-md-4 testimonials">
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
            <img src="img/5.png" class="">
            <p class="user-details"><b>Ekachai</b><br> Worship Our God</p>
          </div>
        </div>


      </div>

    </section>

    <!-----------------social media section----------------->

    <section id="social-media">
      <div class="container text-center">
        <p>FIND US ON SOCIAL MEDIA</p>
        <div class="social-icons">
          <a href="#"><img src="img/facebook.png"></a>
          <a href="#"><img src="img/intragram2.png"></a>
          <a href="#"><img src="img/was.png"></a>
          <a href="#"><img src="img/Youtube2.png"></a>
          <a href="#"><img src="img/Linkedin2.png"></a>
          <a href="#"><img src="img/twit.png"></a>
         
        </div>

      </div>
    </section>

    <!-----------------video------------------>

    <section id="video">
      <div class="container text-center">
      
      <iframe width="560" height="315" src="https://www.youtube.com/embed/y7Xa1fN2-xA" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
      </div>
    </section>

    <!-----------------footer----------------->

    <section id="footer">
      
      <img src="img/wave5.png" class="footer-img">
      <div class="container">
        <div class="row">
          <div class="col-md-4 footer-box">
            <img src="img/jesus-1.png">
            <p>Subscribe Youtube Channel To Watch More Videos on Website Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
          </div>

          <div class="col-md-4 footer-box-contact">
            <p><b>CONTACT US</b></p>
            <i class="fa fa-home" aria-hidden="true"></i>Det Udom , Ubonrachatanee , Thailand<br>
            <i class="fa fa-volume-control-phone" aria-hidden="true"></i>087 654 7219 ,093 167 6795<br>
            <i class="fa fa-envelope" aria-hidden="true"></i>supawarin@gmail.com

          </div>

          <div class="col-md-4 footer-box-subscribe">
            <p><b>SUBSCRIBE NEWSLETTER</b></p>
            <input type="email" class="form-control" placeholder="Your Email"><br>
            <button type="button" class="btn btn-primary">Subscribe</button>
            
          </div>
        </div>
        <hr>
        <p class="copyright">Website Created By Nok Supawarin</p>
      </div>

    </section>

    <!--------------------smooth scroll------------------->
    <script src="path/to/smooth-scroll.polyfills.min.js"></script>


    
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

   

    
  </body>
</html>