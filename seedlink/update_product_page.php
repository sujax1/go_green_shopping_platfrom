<?php require_once("config.php"); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Products</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <?php include("navbar.php") ?>

       
       
<div class="small-container cart-page">
    <a class="btn" href="add_product.php">Add New Product</a>


    <h4 class="text-center bg-danger"><?php display_message(); ?></h4>

   
   <table>
       <tr>
          <th>Id</th>
          <th></th>
           <th>Product</th>
           <th>Category</th>
           <th>Price</th>
           <th>Quantity</th>
          <th>  </th>

       </tr>

       <?php get_products_update_page(); ?>   
   </table>
    
    
</div>

	<?php include("footer.php") ?>