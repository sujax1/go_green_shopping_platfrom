<?php require_once("config.php"); ?>


<!DOCTYPE html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
    <script  src="functions.js"></script>
</head>
<body>
    <?php include("navbar.php") ?>
    <h6 style="text-align: center;" class="text-center bg-warning"><?php display_message();?></h6>


       
<div class="add-product-page">
    <div class="container" style="padding-left: 500px;">
        <h3>Order Information</h3>

  
       <div class="row">

           <div class="col-2">
              <div class="">
                 <div class="form-btn">
                     <br>
                 </div>
                 
                 <form class="" action="" method="post" enctype="multipart/form-data">

                      <div class="col-md-8">
                        
                        <div class="form-group">
                          <label for="product-title">Address</label>
                          <div class="col-2">
                          	<input type="text" name="product_title" placeholder="A-11,kalyani,West Bengal">
                          </div>
                          </label>
                      </div>

                      <br>

                        <div style="padding-bottom: 10px;"> <span id="card-inner">Country</span> 
                        </div>
                                <div class="custom-select" style="width:200px;">
                                      <select>
                                        <option value="0">Select City:</option>
                                        <option value="1">Kalyani</option>
                                        <option value="2">Bolpur</option>
                                        <option value="3">Kolkata</option>
                                        <option value="4">Nadia</option>
                                        <option value="5">krishnanagar</option>
                                        <option value="6">Santipur</option>
                                        <option value="7">Tatanagar</option>
                                        <option value="8">Delhi</option>
                                        <option value="9">Punjab</option>
                                        <option value="10">J&K</option>
                                        <option value="11">Gujrat</option>
                                        <option value="12">Hariyana</option>
                                      </select>
                            </div>
                           <br>

                            <div class="nav">
                                <form> <span id="card-header">Payment Type</span>
                                <div class="row row-1" style="padding-bottom: 10px; padding-top: 10px;">
                                    <div class="col-7">
                                        <div class="custom-select" style="width:200px;">
                                              <select onchange="yesnoCheck(this); wireCheck(this);">
	                                                <option value="0">Choose Payment Type</option>
	                                                <option value="credit">Credit Card</option>
	                                                <option value="wire">Wire Transfer</option>
                                              </select>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            </div>
                            <form id="ifYes" style="display: none;" onsubmit="return false"> <span id="card-header"></span>
                                            <div>
                                                <div class="col-2" style="padding-bottom: 15px; padding-top: 10px">
                                                    <span id="card-inner">Card number</span> 
                                                </div>
                                                <div class="row">
                                                	<div class="col-2">
                                                    	<input type="text" placeholder="**** **** **** 3193">
                                                	
                                                	</div>
                                                    
                                                </div>
                                            </div>
                                            <div class="row three">
                                                <div class="col-2">
                                                    <div class="">
                                                        <div class="row row-2" style="padding-top: 5px; padding-bottom: 10px"> <span id="card-inner" style="float: left">Card Holder Name</span> </div>
                                                        <div class="row row-2"> <input type="text" placeholder="Name Surname"> </div>
                                                    </div>
                                                </div>
                                                <div class="row three">

                                                <div class="col-2" style="float: right"> <input type="text" placeholder="Exp. date"><input type="text" placeholder="CVV"> </div> 
                                            </div>
                                            </div>
                                        </form>
                                        <br>
                                        <form id="ifWire" style="display: none;" onsubmit="return false"> <span id="card-header"></span>
                                            <div class="row three">
                                            	<div class="col-2">
                                            		<span id="card-inner">Account Name</span> 
                                            	</div>
                                            </div>
                                                <div class="row row-2">
                                                    <input type="text" placeholder="Enter account name">
                                                </div>
                                                <div class="form-group">
                                                     <span id="card-inner" style="float: left">Account Number</span>
                                                        <div class="col-2"> <input type="text" placeholder="Enter account number"> </div>
                                                </div>

                                                <div class="form-group">
                                                        <span id="card-inner" style="float: left">Bank Name</span>
                                                        <div class="col-2"> <input type="text" placeholder="Enter bank name"></div>
                                                </div>
                                                    <div class="form-group">
                                                        <span id="card-inner" style="float: left">IBAN</span>
                                                        <div class="col-2"> <input type="text" placeholder="AL47 2121 1009 0000 0002 3569 87411﻿"> </div>
                                                    </div>

                                        </form>


                        <div class="form-group">
                          <div class="row">
                            <div class="col-2">
                              <a class="btn" style="text-align: center;" href="shopping_cart.php">Back</a>
                            </div>
                        </div>
                          <div class="row">
                            <div class="col-2">
                              <a href="homepage.php" style="text-align: center;" class="btn">Purchase</a>
                            </div>
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


    <?php include("footer.php") ?>

