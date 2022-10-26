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

$name= $_POST['name'];
$email = $_POST['email'];
$sub=$_POST['subject'];
$msg=$_POST['message'];

$db = "INSERT INTO usermsg (name,email, subject,message) VALUES ('$name','$email', '$sub', '$msg')";
$result=mysqli_query($conn,$db);


echo '<h3> <script> alert(" Your Message is Successfully Send , wait for Some time i will send the message your gamil "); document.location="contact.php"</script> </h3>';

  

?>