<?php require_once("config.php"); ?>

<!DOCTYPE html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="style2.css">

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>
   
   <div class="header">
       <div class="container">
            <?php include("navbar.php") ?>
           <div class="row">
                <div class="col-2">

                    <h1>BUY,SELL & DONATE PLANTS</h1>
                    <p>SeedLink is our own e-commerce market place to buy or donate online Tree, seeds, fruit seeds, grow bags and other home/terrace gardening products.</p>
                    <a href="products.php" class="btn">Explore Now &#8594;</a>
                </div>
                <div class="col-2">
                    <img src="images\signup.png">
                </div>
               
           </div>
           
       </div>
       </div>
  
  
  <div class="small-container">
        <h2 class="title">Latest Products</h2>
             <div class="row">
             	<?php get_four_products(); ?>
           </div>
           
       </div>
         
   <div class="offer">
       <div class="small-container">
           <div class="row">
           <div class="col-2">
               <img src="uploads\ourwork-bg.jpg" class="offer-img">
           </div>
           <div class="col-2">
               <p>Exclusively Available on Music Store</p>
               <h1>WHY DONATE?</h1>
               <small>If you are interested in donating unwanted plants, We at Nature's Legacy are perfect thing for you.</small>
               <br>
               <a href="donate.html" class="btn">Donate  Now &#8594;</a>
           </div>
       </div>
       </div>
       
   </div>  

   <br>
   <br>


    <?php include("footer.php") ?>


   
