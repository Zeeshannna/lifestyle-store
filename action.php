<?php
session_start();
$ip_add = getenv("REMOTE_ADDR");
include "db.php";


if(isset($_POST["page"])){
	$sql = "SELECT * FROM products";
	$run_query = mysqli_query($conn,$sql);
	$count = mysqli_num_rows($run_query);
	$pageno = ceil($count/9);
	for($i=1;$i<=$pageno;$i++){
		echo "
			<li><a href='#' page='$i' id='page'>$i</a></li>
		";
	}
}
if(isset($_POST["getProduct"])){
	$limit = 1000000;
	if(isset($_POST["setPage"])){
		$pageno = $_POST["pageNumber"];
		$start = ($pageno * $limit) - $limit;
	}else{
		$start = 0;
	}
	$product_query = "SELECT * FROM products LIMIT $start,$limit";
	$run_query = mysqli_query($conn,$product_query);
	if(mysqli_num_rows($run_query) > 0){
		while($row = mysqli_fetch_array($run_query)){
			$prod_id    = $row['prod_id'];
			$prod_title = $row['prod_title'];
			$prod_price = $row['prod_prize'];
			$prod_img = $row['prod_img'];
			$prod_desc=$row['prod_dec'];
			echo "
			    <div class='zee'>
								
								<div class='panel-body' style='width:100%;'>
									<img src='images/$prod_img' style='height:12rem; width:100%;'/>
								</div>
								<div class='panel-heading'><h3>$prod_title</h3></div>
								<div class='panel-heading'><h5> Rs $prod_price</h5></div>
								<div class='panel-heading'>
									<button pid='$prod_id' style='float:left;   border:3px;' id='product' class=' btn-xs'>Add To Cart</button>
									<button pid='$prod_id' style='float:right;   border:3px;' id='product' class=' btn-xs'>Buy Now</button>
										</div><br>
							</div>
						</div>	
			";
		}
	}
}









//by Md Zeeshan

	if(isset($_POST["addToCart"])){
		

		$p_id = $_POST["proId"];
		

		if(isset($_SESSION["uid"])){

		$user_id = $_SESSION["uid"];

		$sql = "SELECT * FROM cart WHERE p_id = '$p_id' ";
		$run_query = mysqli_query($conn,$sql);
		$count = mysqli_num_rows($run_query);
		if($count > 0){
			echo "
				<div class='alert alert-warning'>
						<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
						<b>Product is already added into the cart Continue Shopping..!</b>
				</div>
			";//not in video
		} else {
			$sql = "INSERT INTO `cart`
			(`p_id`, `ip_add`, `user_id`, `qty`) 
			VALUES ('$p_id','$ip_add','$user_id','1')";
			if(mysqli_query($conn,$sql)){
				echo "
					<div class='alert alert-success'>
						<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
						<b>Product is Added..!</b>
					</div>
				";
			}
		}
		}else{
			$sql = "SELECT id FROM cart WHERE ip_add = '$ip_add' AND p_id = '$p_id' AND user_id = -1";
			$query = mysqli_query($conn,$sql);
			if (mysqli_num_rows($query) > 0) {
				echo "
					<div class='alert alert-warning'>
							<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
							<b>Product is already added into the cart Continue Shopping..!</b>
					</div>";
					exit();
			}
			$sql = "INSERT INTO `cart`
			(`p_id`, `ip_add`, `user_id`, `qty`) 
			VALUES ('$p_id','$ip_add','-1','1')";
			if (mysqli_query($conn,$sql)) {
				echo "
					<div class='alert alert-success'>
						<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
						<b>Your product has been added to cart!</b>
					</div>
				";
				exit();
			}
			
		}
		
		
		
		
	}




	if(isset($_POST["order"])){
		

		$prod_id = $_POST["prod_Id"];
		

		if(isset($_SESSION["uid"])){

		$user_id = $_SESSION["uid"];

		$sql = "SELECT * FROM orders WHERE prod_id = '$prod_id' ";
		$run_query = mysqli_query($conn,$sql);
		$count = mysqli_num_rows($run_query);
		if($count > 0){
		/*	echo "
				<div class='alert alert-warning'>
						<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
						<b>Product is already added into the cart Continue Shopping..!</b>
			</div>
			";//not in video */
		} else {
			$sql = "INSERT INTO `orders`
			(`prod_id`, `user_id`, `trx_id`, 'p_status', `qty`) 
			VALUES ('$prod_id','$user_id','$trx_id','$p_status', '1')";
			if(mysqli_query($conn,$sql)){
				/*echo "
					<div class='alert alert-success'>
						<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
						<b>Product is Added..!</b>
					</div>
				";*/
			}
		}
		}else{
			$sql = "SELECT id FROM orders WHERE prod_id = '$prod_id' AND prod_id = '$prod_id' AND user_id = -1";
			$query = mysqli_query($conn,$sql);
			if (mysqli_num_rows($query) > 0) {
			/*	echo "
					<div class='alert alert-warning'>
							<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
							<b>Product is already added into the cart Continue Shopping..!</b>
					</div>";
					exit();  */
			}
			$sql = "INSERT INTO `orders`
			(`prod_id`, `user_id`, `trx_id`,'p_status', `qty`) 
			VALUES ('$prod_id','$user_id','-1','1')";
			if (mysqli_query($conn,$sql)) {
			/*	echo "
					<div class='alert alert-success'>
						<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
						<b>Your product has been added to cart!</b>
					</div>
				";*/
				exit();
			}
			
		}
		
		
		
		
	}










//Count User cart item
if (isset($_POST["count_item"])) {
	//When user is logged in then we will count number of item in cart by using user session id
	if (isset($_SESSION["uid"])) {
		$sql = "SELECT COUNT(*) AS count_item FROM cart WHERE user_id = $_SESSION[uid]";
	}else{
		//When user is not logged in then we will count number of item in cart by using users unique ip address
		$sql = "SELECT COUNT(*) AS count_item FROM cart WHERE ip_add = '$ip_add' AND user_id < 0";
	}
	
	$query = mysqli_query($conn,$sql);
	$row = mysqli_fetch_array($query);
	echo $row["count_item"];
	exit();
}
//Count User cart item

//Get Cart Item From Database to Dropdown menu
if (isset($_POST["Common"])) {

	if (isset($_SESSION["uid"])) {
		//When user is logged in this query will execute
		$sql = "SELECT a.prod_id,a.prod_title,a.prod_prize,a.prod_img,b.id,b.qty FROM products a,cart b WHERE a.prod_id=b.p_id ";
		
}
	else{
		//When user is not logged in this query will execute
		$sql = "SELECT a.prod_id,a.prod_title,a.prod_prize,a.prod_img FROM products a,cart b WHERE a.prod_id=b.p_id AND b.ip_add='$ip_add'";
	}
	$query = mysqli_query($conn,$sql);
	if (isset($_POST["getCartItem"])) {
		//display cart item in dropdown menu
		if (mysqli_num_rows($query) > 0) {
			$n=0;
			while ($row=mysqli_fetch_array($query)) {
				$n++;
				$product_id = $row["prod_id"];
				$product_title = $row["prod_title"];
				$product_price = $row["prod_prize"];
				$product_image = $row["prod_img"];
				$qty = $row["qty"];
				echo '
					<div class="row">
						<div class="col-md-3">'.$n.'</div>
						<div class="col-md-3"><img class="img-responsive" src="images/'.$prod_image.'" /></div>
						<div class="col-md-3">'.$product_title.'</div>
			
					</div>';
				
			}
			?>
			<?php
			exit();
		}
	}
	if (isset($_POST["checkOutDetails"])) {
		if (mysqli_num_rows($query) > 0) {
			//display user cart item with "Ready to checkout" button if user is not login
			echo "<form method='post' action='#'>";
				$n=0;
				while ($row=mysqli_fetch_array($query)) {
					$n++;
					$product_id = $row["prod_id"];
					$product_title = $row["prod_title"];
					$product_price = $row["prod_prize"];
					$product_image = $row["prod_img"];
					

					echo 
						'<div class="row">
								<div class="col-md-2">
									<div class="btn-group">
										<a href="#" remove_id="'.$product_id.'" class="btn btn-danger remove" style=" text-decoration:none ">delete</a>
										<a href="#" update_id="'.$product_id.'" class="btn btn-primary update" style="text-decoration:none ">Comform</a>
									</div>
								</div>
								<input type="hidden" name="prod_id[]" value="'.$product_id.'"/>
								<div class="col-md-2"><img class="img-responsive" src="images/'.$product_image.' "></div>
								<div class="col-md-2">'.$product_title.'</div>
								<div class="col-md-2"><input type="number" class="form-control qty" value="1" min="1" mix="5" ></div>
								<div class="col-md-2"><input type="text" class="form-control price" value="'.$product_price.'" readonly="readonly"></div>
								<div class="col-md-2"><input type="text" class="form-control total" value="'.$product_price.'" readonly="readonly"></div>
							</div>';
				}
				

if (isset($_POST["checkOutDetails"])) {
	if (mysqli_num_rows($query) > 0) {
		//display user cart item with "Ready to checkout" button if user is not login
		echo "<form method='post' action='#'>";
		//because payment not pattan

			$n=0;
			while ($row=mysqli_fetch_array($query)) {
				$n++;
				$product_id = $row["prod_id"];
				$product_title = $row["prod_title"];
				$product_price = $row["prod_prize"];
				$product_image = $row["prod_image"];
				

				echo 
					'<div class="row">
							<div class="col-md-2">
								<div class="btn-buy">
									
								</div>
							</div>
							<input type="hidden" name="prod_id[]" value="'.$product_id.'"/>
							<div class="col-md-2"><img class="img-responsive" src="images/'.$product_image.'"></div>
							<div class="col-md-2">'.$product_title.'</div>
							<div class="col-md-2"><input type="text" class="form-control price" value="'.$product_price.'" readonly="readonly"></div>
						</div>';
			}


		}}

				echo '<div class="row">
							<div class="col-md-8"></div>
							<div class="col-md-4">
								<b class="net_total" style="font-size:20px;"> </b>
					</div>';
				if (!isset($_SESSION["uid"])) {
					echo '<input type="submit" style="float:right; background-color:red; color:black;" name="login_user_with_product" class="btn btn-info btn-lg" value="Process to Check" >
							</form>';
					
				}else if(isset($_SESSION["uid"])){
					//Paypal checkout form
					echo '
						</form>
						<form action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post">
							<input type="hidden" name="cmd" value="_cart">
							<input type="hidden" name="business" value="zeeshanzp78@gmail.com">
							<input type="hidden" name="upload" value="1">';
							  
							$x=0;
							$sql = "SELECT a.prod_id,a.prod_title,a.prod_price,a.prod_image,b.id,b.qty FROM products a,cart b WHERE a.prod_id=b.p_id ";
							$query = mysqli_query($conn,$sql);
							while($row=mysqli_fetch_array($query)){
								$x++;
								echo  	
									'<input type="hidden" name="item_name_'.$x.'" value="'.$row["prod_title"].'">
								  	 <input type="hidden" name="item_number_'.$x.'" value="'.$x.'">
								     <input type="hidden" name="amount_'.$x.'" value="'.$row["prod_price"].'">
								     <input type="hidden" name="quantity_'.$x.'" value="'.$row["qty"].'">';
								}
							  
							echo   
								'<input type="hidden" name="return" value="http://localhost/project1/payment_success.php"/>
					                <input type="hidden" name="notify_url" value="http://localhost/ecommerce-app-h/payment_success.php">
									<input type="hidden" name="cancel_return" value="http://localhost/ecommerce-app-h/cancel.php"/>
									<input type="hidden" name="currency_code" value="USD"/>
									<input type="hidden" name="custom" value="'.$_SESSION["uid"].'"/>
									<input style="float:right;margin-right:80px;" type="image" name="submit"
										src="https://www.paypalobjects.com/webstatic/en_US/i/btn/png/blue-rect-paypalcheckout-60px.png" alt="Process to Checkout"
										alt="PayPal - The safer, easier way to pay online">
								</form>';
				}
			}
	}
	
	
}

//Remove Item From cart
if (isset($_POST["removeItemFromCart"])) {
	$remove_id = $_POST["rid"];
	if (isset($_SESSION["uid"])) {
		$sql = "DELETE FROM cart WHERE p_id = '$remove_id' ";
	}else{
		$sql = "DELETE FROM cart WHERE p_id = '$remove_id' AND ip_add = '$ip_add'";
	}
	if(mysqli_query($conn,$sql)){
		echo "<div class='alert alert-danger'>
						<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
						<b>Product is removed from cart</b>
				</div>";
		exit();
	}
}


//Update Item From cart
if (isset($_POST["updateCartItem"])) {
	$update_id = $_POST["update_id"];
	$qty = $_POST["qty"];
	if (isset($_SESSION["uid"])) {
		$sql = "UPDATE cart SET qty='$qty' WHERE p_id = '$update_id' ";
	}else{
		$sql = "UPDATE cart SET qty='$qty' WHERE p_id = '$update_id' AND ip_add = '$ip_add'";
	}
	if(mysqli_query($conn,$sql)){
		echo "<div class='alert alert-info'>
						<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
						<b>Product is updated</b>
				</div>";
		exit();
	}
}


	

?>