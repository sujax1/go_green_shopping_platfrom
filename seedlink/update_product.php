<?php require_once("config.php"); ?>
<?php 

  if(isset($_GET['id'])) {
    $query = query("SELECT * FROM products WHERE product_id = " . escape_string($_GET['id']) . " ");
    confirm($query);

    while($row = fetch_array($query)) {

      $product_title = escape_string($row['product_title']);
      $product_category_id = escape_string($row['product_category_id']);
      $product_price = escape_string($row['product_price']);
      $product_description = escape_string($row['product_description']);
      $product_short_desc = escape_string($row['product_short_desc']);
      $product_quantity = escape_string($row['product_quantity']);
      $product_image = escape_string($row['product_image']);

    }
    update_product();
  }

?>

<!DOCTYPE html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Product</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <?php include("navbar.php") ?>
    <h6 style="text-align: center;" class="text-center bg-warning"><?php display_message();?></h6>


       
<div class="add-product-page">
    <div class="container">
      <h3 style="padding-left: 550px;">Update Product</h3>
      <br>
       <div class="row">

          <div class="form-container2">
           <div class="col-2">
              <div class="">
                 <div class="form-btn">
                     <br>
                     <br>
                 </div>
                 
                 <form class="" action="" method="post" enctype="multipart/form-data">

                      <div class="col-md-8">
                        
                        <div class="form-group">
                          <label for="product-title">Product Title </label>
                          <input type="text" name="product_title" value="<?php echo $product_title; ?>"></label>
                        </div>

                      <br>
                      <div class="form-group">
                        <div class="col-xs-3">
                          <label for="product-price">Product Price</label>
                          <input type="number" name="product_price" class="form-control" value="<?php echo $product_price; ?>" size="60">
                        </div>
                        <br>
                        <label for="product-title">Product Description</label>
                           <br>
                        <textarea name="product_description" id="" cols="76" rows="10" class="form-control"><?php echo $product_description; ?></textarea>
                    </div>

                      <br>
                      <div class="form-group">
                         <label for="product-title">Product Category   </label>
                        <select name="product_category_id" class="form-control">
                            <option value="<?php echo $product_category_id; ?>"><?php echo show_product_category_title($product_category_id); ?></option>

                            <?php show_categories_add_product(); ?>
                           
                        </select>

                    </div>


                    <br>
                    <div class="form-group">
                        <label for="product-title">Product Quantity</label>
                           <input type="number" name="product_quantity" class="form-control" value="<?php echo $product_quantity; ?>">
                      </div>

                      <br>
                      <div class="form-group">
                            <label for="product-title">Product Short Description</label>
                          <input type="text" name="product_short_desc" class="form-control" value="<?php echo $product_short_desc; ?>">
                      </div>


                      <br>
                      <div class="form-group">
                          <label for="product-title">Product Image</label>
                          <input type="file" name="file">
                          <img width='100' src="uploads/<?php echo $product_image; ?>" alt="">

                        
                      </div>
                        <div class="form-group">
                          <div class="row">
                            <div class="col-2">
                              <input type="submit" name="back" class="btn" value="Back">
                            </div>
                            <div class="col-2">
                              <input type="submit" name="update" class="btn" value="Update">
                            </div>
                          </div>
                        
                      </div>

                       </div>

            </form>
              </div>

           </div>
         </div>
       </div>
       <br>
</div>
</div>


    <?php include("footer.php") ?>

