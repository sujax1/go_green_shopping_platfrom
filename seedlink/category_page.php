<?php require_once("config.php"); ?>

<?php 

  if(isset($_GET['id'])) {
    $query = query("SELECT * FROM categories WHERE cat_id = " . escape_string($_GET['id']) . " ");
    confirm($query);

    while($row = fetch_array($query)) {

      $cat_title = escape_string($row['cat_title']);

    }
  }

?>


<!DOCTYPE html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Category</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="dropdown.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
	<div class="container">
	    <?php include("navbar.php") ?>
	</div>

	<div class="small-container">
	   <div class="row row-2">
	   		<a class="btn btn-primary" target="_blank" href="update_product_page.php">Update Products</a>

	       <h2>Category: <?php echo $cat_title; ?></h2>

                <div class="dropdown">
				<button class="dropbtn">Categories</button>
				<div class="dropdown-content">
					<?php get_categories();?>

				</div>
			</div>


	   </div>
    
           <div class="row">
                <?php get_category_products(); ?>


           </div>
           
</div>

    <?php include("footer.php") ?>

