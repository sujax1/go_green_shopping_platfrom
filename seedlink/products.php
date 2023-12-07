<?php require_once("config.php"); ?>

<!DOCTYPE html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="style2.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>
	<div class="container">
	    <?php include("navbar.php") ?>
	</div>

	<div class="small-container">
		<div class="row row-2">
			
		</div>
	   <div class="row row-2">
	   		<a class="btn" href="update_product_page.php">Update Products</a>

	       <h2>All Products</h2>

	       <div class="row">
	       	<div class="col" style="padding-right: 50px;">
	       		<?php search(); ?>
	       		<form class="" action="" method="post" enctype="multipart/form-data">
	       			<div class="form-group">
			       		<input type="text" name="search" placeholder="Search">
			       	</div>
			       	<div class="form-group">
			       		<input type="submit" name="search_product" class="btn btn-primary" value="Search">
			       	</div>
			       </form>
	       	</div>
	       	<div class="col">
	       			       	<div class="dropdown">
				<button class="dropbtn">Categories</button>
				<div class="dropdown-content">
					<?php get_categories();?>

				</div>
			</div>
	       	</div>

	       </div>
	       
	   </div>   
           <div class="row" >				   		

              <?php get_products(); ?>

           </div>
           
</div>

	

    <?php include("footer.php") ?>

