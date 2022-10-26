<?php
session_start();

?>

<!DOCTYPE html>

<html>

<head>

	<title>My Cart</title>
	 <!-- Bootstrap CSS -->
	 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  <!-- Load an icon library -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<script src="jquery2.js"></script>
	
  <script src="main.js"></script>


	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
	   body
    {
      background-color: whitesmoke;
      overflow-x: hidden;
      height: 100%;
    }

    .navbar{
        background-color:rgb(188, 190, 103);
    }

    .mynavbar{
        text-align:center;
        color:white;
        background-color:black;
        margin: 23px;
        padding:23px;
    }
@import url('https://fonts.googleapis.com/css2?family=Comfortaa&display=swap');

*{

	font-family: 'Comfortaa', cursive;

	margin: 0;

	padding: 0;

	box-sizing: border-box;

}

.container{

	max-width: 1200px;

	margin: 0 auto;

}

.container > h1{

	padding: 20px 0;
}
.search{
  position: relative;
  width: 45%;
  height: 2.5rem;
  border-radius: 10px;
  
}

 

.content
{
  min-height: 600px;
}

.mynavbar{
        text-align:center;
        color:white;
        background-color:black;
        margin: 23px;
        padding:23px;
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
img{
  position: relative;
  width:10rem;
  height:10rem;
}

</style>
</head>

<body>

<div class="navbar navbar-inverse navbar-fixed-top ">
        <div class="container-fluid">
            <a class="navbar-brand" href="home.php" style="color: black; text-decoration:none ;"><b>LIFESTYLE STORE</b></a>


             <!--search button-->


             <input class="search" type="search" placeholder="Search" aria-label="Search">
             </input>
            
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02"
              aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
          
              <div class="mx-2">
              <button type="button" class="btn btn-group-lg" >
              <a href="home.php" style="color: black; text-decoration:none ;"> Home</a>
</button>

                <button type="button" class="btn btn-group-vertical">
                  <a href="contact.php" style="color: black; text-decoration:none ;">Contact Us </a>
                </button>
                <button type="button" class="btn btn-group-vertical">
                  <a href="order.php" style="color: black; text-decoration:none ;"> Order </a>
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


<br>
<h3> My Cart</h3>

<p><br/></p>
	<p><br/></p>
	<p><br/></p>
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-2"></div>
			<div class="col-md-8" id="cart_msg">
				<!--Cart Message--> 
			</div>
			<div class="col-md-2"></div>
		</div>
		<div class="row">
			<div class="col-md-2"></div>
			<div class="col-md-8">
				<div class="panel panel-primary">
					<div class="panel-heading">Cart Checkout</div>
					<div class="panel-body">
						<div class="row">
							<div class="col-md-2 col-xs-2"><b>Action</b></div>
							<div class="col-md-2 col-xs-2"><b>Product Image</b></div>
							<div class="col-md-2 col-xs-2"><b>Product Name</b></div>
							<div class="col-md-2 col-xs-2"><b>Quantity</b></div>
							<div class="col-md-2 col-xs-2"><b>Product Price</b></div>
              <div class="col-md-2 col-xs-2"><b>Total Price</b></div>
							
						</div>
						<div id="cart_checkout"></div>
						<div class="row">
							<div class="col-md-2">
								<div class="btn-group">
								</div>
							</div>
              <div class="zee">
						<!--	<div class="col-md-2"><img src='images/1.jpg'></div></div>
						  
              <div class="col-md-2">Product Name</div>
							<div class="col-md-2"><input type='number' class='form-control' value='1' min="1" max="5" required></div>
							<div class="col-md-2"><input type='text' class='form-control' value='5000' disabled></div>
							<div class="col-md-2"><input type='text' class='form-control' value='5000' disabled></div>
						</div> 
            
						<div class="row">
							<div class="col-md-8"></div>
							<div class="col-md-4">
								<b>Total RS 10000</b>
							</div> 
						</div> 
</div>-->
</div>
				</div>
			</div>
			<div class="col-md-2"></div>
			
		</div>
</div>
</div>
<div>



<?php
include "footer.php";
?>
    

          
</body>


</html>

