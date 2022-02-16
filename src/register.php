<?php include('server.php'); ?>

   


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register New Account</title>
    <!--stylesheet css-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <link rel="stylesheet" href="/style2.css">
</head>
<body>
    
    <div class="container">
        <div class="row content">
            <div class="col-md-6 mb-3">
                <img src="/img/m7.png" class="img-fluid" alt="image">

            </div>
            <div class="col-md-6">
                <h3 class="signup-text mb-3">Sign Up</h3>

                <form action="register_db.php" method="post">

                    <div class="form-group">
                        <label for="name">Username</label>
                        <input type="text" name="username" class="form-control">

                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" name="email" class="form-control">

                    </div>
                    <div class="form-group">
                        <label for="password_1">Password</label>
                        <input type="password" name="password_1" class="form-control">
                        
                    </div>
                    <div class="form-group">
                        <label for="password_2">Confirm Password</label>
                        <input type="password" name="password_2" class="form-control">
                        
                    </div>
                    
                        <p>Already a member?<a href="login.php">Sign in</a></p>
                    
                    <button class="btn btn-class" type="submit" name="reg_user">Sign Up</button>
                    
                </form>
            </div>
        </div>
    </div>






    <!--icon-->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
</body>
</html>