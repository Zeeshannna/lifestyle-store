<?php
//require "config/constants.php";

session_start();

?>
<!DOCTYPE html>
<html>

 <!-- Required meta tags --> 
 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  <!-- Load an icon library -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <title>LIFESTYLE STORE</title>
		<script src="js/jquery2.js"></script>
	
		<script src="main.js"></script>

		
<style>
    body
    {
      background-color: whitesmoke;
      overflow-x: hidden;
      height: 100%;
    }

    .navbar{
        font-family: 'Comfortaa', cursive;
        background-color:rgb(188, 190, 103);
    }

    .mynavbar{
        text-align:center;
        color:white;
        background-color:black;
        margin: 23px;
        padding:23px;
    }
    
    .row {
  display: flex;
  flex-wrap: wrap;
  padding: 0 4px;
}

/* Create four equal columns that sits next to each other */
.column {
  flex: 25%;
  max-width: 25%;
  padding: 0 4px;
}

.column img {
  margin-top: 8px;
  vertical-align: middle;
  width: 100%;
}

* {
  box-sizing: border-box;
}



/* Center website */
.main {
  max-width: 1000px;
  margin: auto;
}

h1 {
  
  word-break: break-all;
}

.row {
  margin: 8px -16px;
}

/* Add padding BETWEEN each column (if you want) */
.row,
.row > .column {
  padding: 8px;
}

/* Create four equal columns that floats next to each other */
.column {
  float: left;
  width: 25%;
}

/* Clear floats after rows */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Content */
.content {
  background-color: white;
  padding: 10px;
}

/* Responsive layout - makes a two column-layout instead of four columns */
@media screen and (max-width: 900px) {
  .column {
    width: 50%;
  }
}

/* Responsive layout - makes the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .column {
    width: 100%;
  }
}

.column p{
  display:inline-block;
}
.column button{
  margin-left:3rem;
  right:1rem;

}

.price {
  color:black;
  font-size: 20px;
}

.footer {
  background-color: #414141;
  width: 100%;
  text-align: left;
  font-family: sans-serif;
  font-weight: bold;
  font-size: 16px;
  padding: 50px;
  margin-top: 50px;
}

.footer .footer-left,
.footer .footer-center,
.footer .footer-right {
  display: inline-block;
  vertical-align: top;
}


/* footer left*/

.footer .footer-left {
  width: 33%;
  padding-right: 15px;
}

.footer .about {
  line-height: 20px;
  color: #ffffff;
  font-size: 13px;
  font-weight: normal;
  margin: 0;
}

.footer .about span {
  display: block;
  color: #ffffff;
  font-size: 14px;
  font-weight: bold;
  margin-bottom: 20px;
}

.footer .icons {
  margin-top: 25px;
}

.footer .icons a {
  display: inline-block;
  width: 35px;
  height: 35px;
  cursor: pointer;
  background-color: #33383b;
  border-radius: 2px;
  font-size: 20px;
  color: #ffffff;
  text-align: center;
  line-height: 35px;
  margin-right: 3px;
  margin-bottom: 5px;
}


/* footer center*/

.footer .footer-center {
  width: 30%;
}

.footer .footer-center i {
  background-color: #33383b;
  color: #ffffff;
  font-size: 25px;
  width: 38px;
  height: 38px;
  border-radius: 50%;
  text-align: center;
  line-height: 42px;
  margin: 10px 15px;
  vertical-align: middle;
}

.footer .footer-center i.fa-envelope {
  font-size: 17px;
  line-height: 38px;
}

.footer .footer-center p {
  display: inline-block;
  color: #ffffff;
  vertical-align: middle;
  margin: 0;
}

.footer .footer-center p span {
  display: block;
  font-weight: normal;
  font-size: 14px;
  line-height: 2;
}

.footer .footer-center p a {
  color: #0099ff;
  text-decoration: none;
}


/* footer right*/

.footer .footer-right {
  width: 35%;
}

.footer h2 {
  color: #ffffff;
  font-size: 36px;
  font-weight: normal;
  margin: 0;
}

.footer h2 span {
  color: #0099ff;
}

.footer .menu {
  color: #ffffff;
  margin: 20px 0 12px;
  padding: 0;
}

.footer .menu a {
  display: inline-block;
  line-height: 1.8;
  text-decoration: none;
  color: inherit;
}

.footer .menu a:hover {
  color: #0099ff;
}

.footer .name {
  color: #0099ff;
  font-size: 14px;
  font-weight: normal;
  margin: 0;
}

@media (max-width: 767px) {
  .footer {
    font-size: 14px;
  }
  .footer .footer-left,
  .footer .footer-center,
  .footer .footer-right {
    display: block;
    width: 100%;
    margin-bottom: 40px;
    text-align: center;
  }
  .footer .footer-center i {
    margin-left: 0;
  }
}
.sea{
  position: relative;
  width: 45%;
  height: 2.5rem;
  border-radius: 10px;
  
}
img:hover{
  transform: scale(1.04);
}
p button{

  background-color:green;
  border: 1px;
  font-weight: 600;
}
.za button:hover{

  font-weight: 600;

}


</style>

	</head>
<body>
<div class="za">  
<div class="navbar navbar-inverse navbar-fixed-top ">
        <div class="container-fluid">
            <a class="navbar-brand" href="home.php" style="color: black; text-decoration:none ;">LIFESTYLE STORE</a>


             <!--search button-->


             <input class="sea" type="search" placeholder="Search" aria-label="Search">
             </input>
            
         
          
                <button type="button" class="btn btn-group-lg" >
                 <a href="home.php" style="color: black; text-decoration:none ;"> Home</a>
                </button>

                <button type="button" class="btn btn-group-vertical">
                  <a href="contact.php" style="color:black; text-decoration:none ;">Contact Us </a>
                </button>
                   <!-- Button trigger modal -->
                   <button type="button" class="btn btn-group-lg" >
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="20" fill="currentColor" class="bi bi-cart3" viewBox="0 0 16 16">
                    <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .49.598l-1 5a.5.5 0 0 1-.465.401l-9.397.472L4.415 11H13a.5.5 0 0 1 0 1H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l.84 4.479 9.144-.459L13.89 4H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                  </svg>
                  <i class="bi bi-cart3"> <a href="cart.php" style="color: black; text-decoration:none">Cart</i></a>
                  </button>
                     <!-- Button trigger modal -->
                <button type="button" class="btn btn-group-lg" >
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-gear-fill" viewBox="0 0 16 16">
                    <path d="M9.405 1.05c-.413-1.4-2.397-1.4-2.81 0l-.1.34a1.464 1.464 0 0 1-2.105.872l-.31-.17c-1.283-.698-2.686.705-1.987 1.987l.169.311c.446.82.023 1.841-.872 2.105l-.34.1c-1.4.413-1.4 2.397 0 2.81l.34.1a1.464 1.464 0 0 1 .872 2.105l-.17.31c-.698 1.283.705 2.686 1.987 1.987l.311-.169a1.464 1.464 0 0 1 2.105.872l.1.34c.413 1.4 2.397 1.4 2.81 0l.1-.34a1.464 1.464 0 0 1 2.105-.872l.31.17c1.283.698 2.686-.705 1.987-1.987l-.169-.311a1.464 1.464 0 0 1 .872-2.105l.34-.1c1.4-.413 1.4-2.397 0-2.81l-.34-.1a1.464 1.464 0 0 1-.872-2.105l.17-.31c.698-1.283-.705-2.686-1.987-1.987l-.311.169a1.464 1.464 0 0 1-2.105-.872l-.1-.34zM8 10.93a2.929 2.929 0 1 1 0-5.86 2.929 2.929 0 0 1 0 5.858z"/>
                  </svg>
                  <i class="bi bi-gear-fill">Settings</i></button>
                  <button type="button" class="btn btn-group-lg" >
                  <a href="logout.php" style="color: black; text-decoration:none ;">Logout</a>
                  </button>
</div>
            </div>
            </div>
          </div>
        </nav>
    </div>


	<p><br/></p>
	<p><br/></p>
	<p><br/></p>
	<div class="container-fluid">
	<div class='zss'> 
		<div class="row">
			<div class="col-md-2"></div>
			<div class="col-md-8">
				<div class="panel panel-default">
					<div class="panel-heading"></div>
					<div class="panel-body">
						<h1>My Order</h1>
						<hr/>
						<?php
							include_once("db.php");
							
							$orders_list = "SELECT o.id,o.user_id,o.prod_id,o.qty,o.trx_id,o.p_status,p.prod_title,p.prod_prize,p.prod_img FROM orders o,products p WHERE  o.prod_id=p.prod_id";
							$query = mysqli_query($conn,$orders_list);
							if (mysqli_num_rows($query) > 0) {
								while ($row=mysqli_fetch_array($query)) {
									?>
										<div class="row">
											<div class="col-md-6">
												<img style="float:right;" src="images/<?php echo $row['prod_img']; ?>" class="img-responsive img-thumbnail"/>
											</div>
											<div class="col-md-6">
                        <div class="zee">
												<table>
													<tr><td>Product Name </td><td><b><?php echo $row["prod_title"]; ?></b> </td></tr>
													<tr><td>Product Price</td><td><b><?php echo  " ".$row["prod_prize"]; ?></b></td></tr>
													<tr><td>Quantity</td><td><b><?php echo $row["qty"]; ?></b></td></tr>
													<tr><td>Order Id</td><td><b><?php echo $row["trx_id"]; ?></b></td></tr>
												</table>
											</div>
                </div>
										</div>
									<?php
								}
							}
						?>
						
					</div>
					<div class="panel-footer"></div>
				</div>
			</div>
			<div class="col-md-2"></div>
		</div>
	</div>

            </div>

	
<!--FOOTER -->

<footer class="footer">
  <div class="footer-left col-md-4 col-sm-6">
    <p class="about">
      <span> About the store</span> Ut congue augue non tellus bibendum, in varius tellus condimentum. In scelerisque nibh tortor, sed rhoncus odio condimentum in. Sed sed est ut sapien ultrices eleifend. Integer tellus est, vehicula eu lectus tincidunt,
      ultricies feugiat leo. Suspendisse tellus elit, pharetra in hendrerit ut, aliquam quis augue. Nam ut nibh mollis, tristique ante sed, viverra massa.
    </p>
    <div class="icons">
      <a href="#"><i class="fa fa-facebook"></i><img class="img-fluid" height="50px" width="60px" src="./facebook1.webp" alt=""></a>
      <a href="#"><i class="fa fa-twitter"></i><img class="img-fluid" height="50px" width="60px" src="./twitter1.jpg" alt=""></a>
      <a href="#"><i class="fa fa-linkedin"></i><img class="img-fluid" height="50px" width="60px" src="./linkedin1.png" alt=""></a>
      <a href="#"><i class="fa fa-google-plus"></i><img class="img-fluid" height="50px" width="60px" src="./google1.jpg" alt=""></a>
      <a href="#"><i class="fa fa-instagram"></i><img class="img-fluid" height="50px" width="60px" src="./instagram1.jpg" alt=""></a>
    </div>
  </div>
  <div class="footer-center col-md-4 col-sm-6">
    <div>
      <i class="fa fa-map-marker"></i>
      <p><span> India</span>BBSBEC 140407, IND</p>
    </div>
    <div>
      <i class="fa fa-phone"></i>
      <p> +91 9430230974 </p>
    </div>
  
  </div>
  <div class="footer-right col-md-4 col-sm-6">
    <h2> Lifestyle Store</h2>
  
    <p class="name"> Lifestyle Store  &copy; 2022</p>
  </div>
  </footer>

<!-- Optional JavaScript; choose one of the two! -->

<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

<!-- Option 2: Separate Popper and Bootstrap JS -->
<!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->

</body>
</html>
















































