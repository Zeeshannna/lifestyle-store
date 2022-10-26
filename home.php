<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags --> 
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  <!-- Load an icon library -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="jquery2.js"></script>

		<script src="main.js"></script>
    <link rel="stylesheet" href="nevfoot.css">
  <title>LIFESTYLE STORE</title>



<body>  

    <div class="navbar navbar-inverse navbar-fixed-top ">
            <a class="navbar-brand" href="home.php" style="color: black; text-decoration:none ;"><b>LIFESTYLE STORE </b></a>

             <!--search button
     
             <input class="sea" type="search" name="search" placeholder="Search" aria-label="Search">
-->
              <input class="search" type="search" placeholder="Search" aria-label="Search">
             </input>

     
                <button type="button" class="btn btn-group-lg" >
                 <a href="home.php" style="color: black; text-decoration:none ;"><b> Home</b></a>
                </button>
               
                <button type="button" class="btn btn-group-vertical">
                  <a href="contact.php" style="color:black; text-decoration:none ;"> <b>Contact Us</b> </a>
                </button>
                   <!-- Button trigger modal -->
                   <button type="button" class="btn btn-group-lg" >
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="20" fill="currentColor" class="bi bi-cart3" viewBox="0 0 16 16">
                    <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .49.598l-1 5a.5.5 0 0 1-.465.401l-9.397.472L4.415 11H13a.5.5 0 0 1 0 1H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l.84 4.479 9.144-.459L13.89 4H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                  </svg>
                  <i class="bi bi-cart3"> <a href="cart.php" style="color: black; text-decoration:none"><b>Cart</b></i></a>
                  </button>

                  <button type="button" class="btn btn-group-lg" >
                 
                  <z class="bi bi-cart3"> <a href="order.php" style="color: black; text-decoration:none"><b>Order</b></z></a>
                  </button>
                     <!-- Button trigger modal -->
                <button type="button" class="btn btn-group-lg" >

                  <button type="button" class="btn btn-group-lg" >
                  <a href="logout.php" style="color: black; text-decoration:none ;"><b>Logout</b></a>
                  </button>
                </div>
              </div>
            </div>
          </div>
        </nav>
    </div>

</div>

<!-- php code for user name show-->



<br>


<!-- Lifestyle Store Gallery Grid -->

<div class="za">
<div class='zee'>
				<div class="row">
					<div class="col-md-12 col-xs-12 " id="product_msg">
					</div>
			
				<div class="panel panel-info">
					<div class="panel-body">
						<div id="get_product">
							<!--Here we get product jquery Ajax Request-->
						</div>
						<!--<div class="col-md-4">
							<div class="panel panel-info">
								<div class="panel-heading">Samsung Galaxy</div>
								<div class="panel-body">
									<img src="product_images/images.JPG"/>
								</div>
								<div class="panel-heading">Rs.1500.00
									<button style="float:right;" class="btn btn-danger btn-xs">AddToCart</button>
								</div> -->
							</div>
						</div> 
					</div>
</div>
<!-- include footer -->
<?php
include "footer.php";
?>
</body>
</html>