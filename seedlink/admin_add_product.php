<?php require_once("config.php"); ?>
<?php add_product_admin();?>


    <?php include("admin_header.php") ?>

    <?php include("sidebar.php") ?>

        <div class="w3-overlay w3-hide-large w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

    <div class="w3-main" style="margin-left:300px;margin-top:43px;">

    <header class="w3-container" style="padding-top:22px">

  </header>

  <div class="w3-container">
  	<h3 class="bg"><?php display_message();?></h3>
  	<h3> Add Product </h3>
    <hr style="border-color: black;">
  </div>

          
           <div class="col-2" style="padding-left: 20px;">

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

                      <br>

                        <div class="form-group" style="padding-left: 800px;">
                          <div class="row">
                              <input type="submit" name="back" class="btn" value="Back">
                              <input type="submit" name="publish" class="btn" value="Publish">
                          </div>
                        
                      </div>

                       </div>

            </form>
              </div>

           </div>