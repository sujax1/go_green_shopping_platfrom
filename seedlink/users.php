<?php require_once("config.php"); ?>
<?php add_user_admin(); ?>  


    <?php include("admin_header.php") ?>

    <?php include("sidebar.php") ?>

        <div class="w3-overlay w3-hide-large w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

    <div class="w3-main" style="margin-left:300px;margin-top:43px;">

    <header class="w3-container" style="padding-top:22px">

  </header>

  <div class="w3-container">
  	<h5 style="color: red;" class="bg"><?php display_message();?></h5>
  	<h3> Users</h3>
  	<hr style="border-color: black;">
    <h5> Add User </h5>
    <form class="" action="" method="post" enctype="multipart/form-data">

   <div class="form-group">
      <input name="username" type="text" class="form-control" placeholder="Username">
  </div>
  <div class="form-group" style="padding-top: 10px;">
  	  <input name="email" type="text" class="form-control" placeholder="E-mail">
  </div>
  <div class="form-group" style="padding-top: 10px;">
  	  <input name="password" type="text" class="form-control" placeholder="Password">
  </div>

  <div class="form-group" style="padding-top: 10px;">
  	  <input name="add_user" type="submit" class="btn btn-primary" value="Add User">
  </div>

  </form>
  </div>

  <br>
  <br>

  <div class="w3-container">
  	
    <table class="table">
        <thead>
        	<h6>Users</h6>
        	<hr style="border-color: grey; width: 40%;">
        <tr>
            <th>id</th>
            <th style="padding-left: 50px;">Username</th>
            <th style="padding-left: 50px;">E-mail</th>

        </tr>
            </thead>


	    <tbody>
	        <?php display_users(); ?>
	    </tbody>

        </table>
  </div>

</body>
</html>
