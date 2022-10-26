<?php

$host ="localhost";
$username="root";
$password="";
$dbname="store";
$conn= mysqli_connect($host,$username,$password,$dbname);
if ($conn) {
    echo "successfully";
}

else{
    echo "error";
}

$fname = $_POST['fname'];
$mname = $_POST['mname'];
$lname = $_POST['lname'];
$email = $_POST['email'];
$pass = $_POST['pass'];
$dob= $_POST['dob'];
$phone = $_POST['phone'];

$timezone= date_default_timezone_set('Asia/kolkata');
$regtime= date('Y-m-d H:i:s');
$hash=password_hash($pass, PASSWORD_DEFAULT);
$db = "INSERT INTO userdata (fname,mname, lname, email, pass ,dob, regtime, phone) VALUES ('$fname','$mname','$lname','$email','$hash','$dob', '$regtime','$phone')";
$result=mysqli_query($conn,$db);


echo ' <script> alert("Successfully Signup"); document.location="index.php"</script>';

  

?>