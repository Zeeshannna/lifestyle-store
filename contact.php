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
    
      <title>LIFESTYLE STORE</title>
    <style>
    
    body
    {
      overflow-x: hidden;
      height: 100%;
    }
    
    .content
    {
      min-height: 600px;
    }
    
    .mynavbar{
            position:relative;
            top:5rem;
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
      top:-5rem;
      }
    
    @media (max-width: 767px) {
  .footer {
    font-size: 14px;
  }
  }


    
  </style>
  </head>
  <body class="container-fluid">
   
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container-fluid">
        <a class="navbar-brand" href="home.php"><b>LIFESTYLE STORE</b></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02"
          aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <button type="button" class="btn btn-secondary" >
                 <a href="home.php" style="color: white; text-decoration:none ;"> Home</a>
                </button>
                <button type="button" class="btn btn-secondary" >
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="20" fill="currentColor" class="bi bi-cart3" viewBox="0 0 16 16">
                    <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .49.598l-1 5a.5.5 0 0 1-.465.401l-9.397.472L4.415 11H13a.5.5 0 0 1 0 1H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l.84 4.479 9.144-.459L13.89 4H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                  </svg>
                  <i class="bi bi-cart3"> <a href="cart.php" style="color: white; text-decoration:none">Cart</i></a>
                  </button>
                  
          <div class="mx-2">
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#LoginModal">
             <a href="logout.php" style="color: white; text-decoration:none ;"> logout</a>
            </button>
          </div>
        </div>
      </div>
    </nav>


  




<!--Section: Contact v.2-->
<div class="container d-flex justify-content-center align-items-center">
    <section class="mb-4">
    
      <!--Section heading-->
      <h2 class="h1-responsive font-weight-bold text-center my-4">Contact Us</h2>
      <!--Section description-->
      <p class="text-center w-responsive mx-auto mb-5">Do you have any questions? Please do not hesitate to contact us directly. Our team will come back to you within
          a matter of hours to help you.</p>
    
      <div class="row">
    
          <!--Grid column-->
          <div class="col-md-9 mb-md-0 mb-5">
              <form id="contact-form" name="contact-form" action="conmsg.php" method="POST">
    
                  <!--Grid row-->
                  <div class="row">
    
                      <!--Grid column-->
                      <div class="col-md-6">
                          <div class="md-form mb-0">
                              
                              <label for="name" class="">Your name</label>
                              <input type="text" id="name" name="name" class="form-control" required>
                          </div>
                      </div>
                      <!--Grid column-->
    
                      <!--Grid column-->
                      <div class="col-md-6">
                          <div class="md-form mb-0">
                            <label for="email" class="">Your email</label>
                              <input type="text" id="email" name="email" class="form-control" required>
                              
                          </div>
                      </div>
                      <!--Grid column-->
    
                  </div>
                  <!--Grid row-->
                   <br>
                  <!--Grid row-->
                  <div class="row">
                      <div class="col-md-12">
                          <div class="md-form mb-0">
                             <label for="subject" class="">Subject</label>
                              <input type="text" id="subject" name="subject" class="form-control" required>
                              
                          </div>
                      </div>
                  </div>
                  <!--Grid row-->
                        <br>
                  <!--Grid row-->
                  <div class="row">
    
                      <!--Grid column-->
                      <div class="col-md-12">
    
                          <div class="md-form">
                              <label for="message">Your message</label>
                              <textarea type="text" id="message" name="message"  class="form-control md-textarea" required></textarea>
                              
                          </div>
    
                      </div>
                  </div>
                  <!--Grid row-->
    
              
              <br>
              <div class="text-center text-md-left">
              <button type="submit" class="btn btn-primary">Send</button>
              </form>
              </div>
              <div class="status"></div>
          </div>
          <!--Grid column-->
    
          <!--Grid column-->
          <div class="col-md-3 text-center">
              <ul class="list-unstyled mb-0">
                  <li><i class="fas fa-map-marker-alt fa-2x"></i>
                      <p> BBSBEC 140407, IND</p>
                  </li>
    
                  <li><i class="fas fa-phone mt-4 fa-2x"></i>
                      <p>+91 9430230974</p>
                  </li>
    
                  <li><i class="fas fa-envelope mt-4 fa-2x"></i>
                      <p>contact@Lifestyle_store.com</p>
                  </li>
              </ul>
          </div>
          <!--Grid column-->
    
      </div>
    
    </section>
    </div>

    <footer>
        <div class="mynavbar" >
            <p>“Copyright &copy; Lifestyle Store. All Rights Reserved” ​and ​“Contact Us: +91 9430230974”</p>
          </div>
    </div>
  </footer>

</body>
</html>