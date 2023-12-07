<?php require_once("config.php"); ?>

<!DOCTYPE html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products</title>
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
		<br>
		<br>
	   <div class="row row-2">

	       <h2>Search Results</h2>

	   </div>
	  
    		<br>
           <div class="row" >				   		

           		<?php 
           		$term = escape_string($_GET['search']);

           		$query = query("SELECT * FROM products WHERE product_title LIKE '%$term%' ");
			    confirm($query);

			          while ($row = fetch_array($query)) {
						$product = <<<DELIMETER
						    <div class="col-4">
						    	<a href="product_detail.php?id={$row['product_id']}"><img width='100' src="uploads/{$row['product_image']}"></a>
						    	<h4><a href="product_detail.php?id={$row['product_id']}">{$row['product_title']}</a></h4>
						    	<p>&#36;{$row['product_price']}</p>
						    	<p>{$row['product_short_desc']}</p>
						        <a class="btn btn-primary" target="_blank" href="cart.php?add={$row['product_id']}">Add to cart</a>
						    </div>
						DELIMETER;

						echo $product;
				    }        

			      ?>

           </div>
           
</div>

    <?php include("footer.php") ?>

