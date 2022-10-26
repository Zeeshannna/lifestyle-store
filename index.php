<!doctype html>
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
<link rel="stylesheet" href="logsign.css">
  <title>LIFESTYLE STORE</title>

  <style>
body
{
  background-image:url('images/intro-bg_1.jpg');
  overflow-x: hidden;
  height: 100%;
}
 






  </style>
</head>

<body class="container-fluid">
  
      <a class="navbar-brand" href="#" style="color:black;">LIFESTYLE STORE</a>
      
    

  <div class="login-wrap">
  <div class="login-html">
    <input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">Sign In</label>
    <input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab">Sign Up</label>
    <div class="login-form">
      <form class="sign-in-htm" action="loginconn.php" method="GET">
        <div class="group">
          <label for="user" class="label">Email</label>
          <input id="email" name="email" type="email" class="input" Required>
        </div>
        <div class="group">
          <label for="pass" class="label">Password</label>
          <input id="password" name="pass" type="password" class="input" data-type="password" Required>
        </div>
        <div class="group">
          <input id="check" type="checkbox" class="check" checked>
          <label for="check"><span class="icon"></span> Keep me Signed in</label>
        </div>
        <div class="group">
          <input type="submit" class="button" value="Sign In">
        </div>
        <div class="hr"></div>
        <div class="foot-lnk">
          <a href="#forgot">Forgot Password?</a>
        </div>
      </form>
      <div class="za">
      <form class="sign-up-htm" action="signupconn.php" method="POST">
      <div class="group">
          <label class="label">First Name</label>
          <input name="fname" type="text" class="input" Required>
        </div>
       
        <div class="group">
          <label  class="label">Last Name</label>
          <input  name="lname" type="text" class="input" >
        </div>
      
        <div class="group">
          <label class="label">Phone</label>
          <input  name="phone" type="tel" class="input" Required>
        </div>
        <div class="group">
          <label for="email" class="label">Email</label>
          <input id="email" name="email" type="text" class="input" Required>
        </div>
        <div class="group">
          <label for="pass" class="label">Password</label>
          <input id="password" name="pass" type="password" class="input" data-type="password" Required>
        </div>
       
        
        <br><br>
        <div class="group">
          <input type="submit" class="button" value="Sign Up">
        </div>
        <div class="hr"></div>
      
      </form>
</div>
    </div>
  </div>
 </div>
  
  


  





<!-- Optional JavaScript; choose one of the two! -->

<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

<!-- Option 2: Separate Popper and Bootstrap JS -->
<!--
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
  -->
</footer>

</body>

</html>