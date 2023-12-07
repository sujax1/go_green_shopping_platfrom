<?php require_once("config.php"); ?>
<?php add_product_user();?>

<!DOCTYPE html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Product</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
  <div class="container">
    
    <?php include("navbar.php") ?>
    <h6 style="text-align: center;" class="text-center bg-warning"><?php display_message();?></h6>


       
<div class="add-product-page">
    <div class="container">
        <h3 style="padding-left: 580px;">Add New Product</h3>
        <br>
        <br>

       <div class="row" style="justify-content: space-between;">

          
           <div class="col-2" style="padding-left: 200px;">

              <div class="form-container2">
                 <div class="form-btn">
                 </div>
                 
                 <form class="" action="" method="post" enctype="multipart/form-data">

                      <div class="col-md-8">
                        
                        <div class="form-group" style="align-items: center;">
                          <label for="product-title">Product Title </label>
                          <input type="text" name="product_title" placeholder="Title"></label>
                      </div>

                      <br>
                      <div class="form-group">
                        <div class="col-xs-3">
                          <label for="product-price">Product Price</label>
                          <input type="number" name="product_price" class="form-control" placeholder="Price" size="60">
                        </div>
                        <br>
                        <label for="product-title">Product Description</label>
                           <br>
                        <textarea name="product_description" id="" cols="76" rows="10" class="form-control" placeholder="Write product description here..."></textarea>
                    </div>

                      <br>
                      <div class="form-group">
                         <label for="product-title">Product Category   </label>
                        <select name="product_category_id" class="form-control">
                            <option value="">Select Category</option>

                            <?php show_categories_add_product(); ?>
                           
                        </select>

                    </div>


                    <br>
                    <div class="form-group">
                        <label for="product-title">Product Quantity</label>
                           <input type="number" name="product_quantity" class="form-control" placeholder="Change Quantity">
                      </div>

                      <br>
                      <div class="form-group">
                            <label for="product-title">Product Short Description</label>
                          <input type="text" name="product_short_desc" class="form-control" placeholder="Write a short description">
                      </div>


                      <br>
                      <div class="form-group">
                          <label for="product-title">Product Image</label>
                          <input type="file" name="file">
                        
                      </div>

                        <div class="form-group">
                          <div class="row">
                            <div class="col-2">
                              <input type="submit" name="back" class="btn" value="Back">
                            </div>
                            <div class="col-2">
                              <input type="submit" name="publish" class="btn" value="Publish">
                            </div>
                          </div>
                        
                      </div>

                       </div>

            </form>
              </div>

           </div>

       </div>
       <br>
</div>
</div>
</div>


    <?php include("footer.php") ?>

