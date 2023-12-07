<?php require_once("config.php"); ?>
<?php add_category();?>


    <?php include("admin_header.php") ?>

    <?php include("sidebar.php") ?>

        <div class="w3-overlay w3-hide-large w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

    <div class="w3-main" style="margin-left:300px;margin-top:43px;">

    <header class="w3-container" style="padding-top:22px">

  </header>

  <div class="w3-container">
  	<h5 style="color: red;" class="bg"><?php display_message();?></h5>
  	<h3> Product Categories </h3>
  	<hr style="border-color: black;">
    <h5> Title </h5>
    <form class="" action="" method="post" enctype="multipart/form-data">

    <div class="form-group">
      <input name="cat_title" type="text" class="form-control">
      <input name="add_category" type="submit" class="btn btn-primary" value="Add Category">

    </div>
  </form>
  </div>

  <br>
  <br>

  <div class="w3-container">
  	
    <table class="table">
        <thead>
        	<h6>Categories</h6>
        	<hr style="border-color: grey; width: 30%;">
        <tr>
            <th>id</th>
            <th style="padding-left: 50px;">Title</th>
        </tr>
            </thead>


	    <tbody>
	        <?php show_categories_in_admin(); ?>
	    </tbody>

        </table>
  </div>

</body>
</html>
