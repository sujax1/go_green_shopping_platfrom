<?php require_once("config.php"); ?>


<!DOCTYPE html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <?php include("navbar.php") ?>
    <h6 style="text-align: center;" class="text-center bg-warning"><?php display_message();?></h6>


       
<div class="accout-page">
    <div class="container">
  
       <div class="row">

          
           <div class="col-2" style="padding-left: 500px;">
              <div class="form-container">
                 <div class="form-btn">
                     <span>Login</span>
                 </div>
                 
                 <form class="" action="" method="post" enctype="multipart/form-data">

                      <?php login_user(); ?>


                        <input type="text" name="username" placeholder="username"></label>
                        <input type="password" name="password" placeholder="password"></label>

                        <input type="submit" name="submit" class="btn btn-primary" >

            </form>
              </div>

           </div>

       </div>
       <br>
            <h5 style="text-align: center;">Don't have an account? <a href="sign_up.php">Sign Up</a></h5>
</div>
</div>


    <?php include("footer.php") ?>

