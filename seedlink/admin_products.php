<?php require_once("config.php"); ?>


    <?php include("admin_header.php") ?>

    <?php include("sidebar.php") ?>

        <div class="w3-overlay w3-hide-large w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

    <div class="w3-main" style="margin-left:300px;margin-top:43px;">

    <header class="w3-container" style="padding-top:22px">

  </header>

  <div class="w3-container">
  	<h3 class="bg"><?php display_message();?></h3>
  	<h3> Products </h3>
  </div>

  <table>
       <tr>
       		<th></th>
           <th>Product</th>
           <th></th>
           <th>Category</th>
           <th>Price</th>
           <th>Quantity</th>
           <th></th>

       </tr>
        <?php get_products_admin_page(); ?>

       
   </table>