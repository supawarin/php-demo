<?php include('server.php'); ?>

   



<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <link rel="stylesheet" href="/style1.css">
    <title>Login to your account</title>
  </head>
  <body>


  <section class="form">
      <div class="container">
          <div class="row no-gutters">
              <div class="col-lg-6">
                <img src="/img/jesus-1.jpg" class="img-fluid" alt="image">
              </div>
              <div class="col-lg-6 px-5 pt-5">
                  <h1 class="font-weight-bold py-3">Shalom</h1>
                  <h4>Sign into your account</h4>
                  <form action="register_db.php">
                      <div class="form-row">
                          <div class="col-lg-6">
                              <input type="text" name="username" placeholder="Username" class="form-control">
                          </div>
                      </div>   
                      <div class="form-row">
                          <div class="col-lg-6">
                              <input type="password" name="password" placeholder="Your Password" class="form-control">
                          </div>
                      </div>  
                      <div class="form-row">
                          <div class="col-lg-6">
                              <button type="submit" class="btn1 mt-3 mb-5"><ion-icon name="login_user"></ion-icon>Login</button>
                          </div>
                      </div>  
                      <div class="form-group form-check">

                          <input type="checkbox" name="checkbox" class="form-check-input" id="checkbox">
                           <label class="form-check-label" for="checkbox">Remember Me</label>
                          <p>Don't have an account ?<a href="register.php">Register here</a></p>
                      </div>
                      
                  </form>
              </div>
          </div>
      </div>
  </section>
   

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) 
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>-->

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous"></script>
    <!--icon-->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  </body>
</html>