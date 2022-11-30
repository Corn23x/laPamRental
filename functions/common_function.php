<?php
function getLinks(){

  echo ' <!DOCTYPE html>
  <html lang="en">
  <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Document</title>
  
      <!-- Bootstrap CSS Link -->
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" 
      rel="stylesheet" 
      integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" 
      crossorigin="anonymous">
  
      <!-- Font Awesome link -->
  
      <link href="fontawesome/css/all.css" rel="stylesheet">
      <link rel="stylesheet" href="fontawesome/css/fontawesome.min.css">
      <link rel="stylesheet" href="fontawesome/css/solid.min.css">
      <link rel="stylesheet" href="fontawesome/css/solid.css">
  
        <!-- css file -->
        <link rel="stylesheet" href="style.css">
  </head>
  <body>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" 
        integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" 
        crossorigin="anonymous"></script>
  </body>
  </html>

  ';
}

function navBar(){
    echo '<section class="nav_section">
    <div class="container-fluid">
      <div class="custom_nav2">
        <nav class="navbar navbar-expand custom_nav-container ">
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <div class="d-flex  flex-column flex-lg-row align-items-center">
              <ul class="navbar-nav  ">
                <li class="nav-item active">
                  <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="about.php">About </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="product.php">Products </a>
                </li>


                <li class="nav-item">
                  <a class="nav-link" href="cart.php">Cart</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Login</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Register</a>
                </li>
              </ul>
              <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit" name="search">Search</button>
              </form>
            </div>
          </div>
        </nav>
      </div>
    </div>
  </section>';
}


function footer(){

    echo '<footer id="footer"  class="footer">
    <div class="container">
      <div class="hm-footer-copyright text-center">
        <div class="footer-social">
          <a href="#"><i class="fa fa-facebook"></i></a>	
          <a href="#"><i class="fa fa-instagram"></i></a>
        </div>
        <p>
          &copy;copyright. designed and developed by <a href="https://www.themesine.com/">themesine</a>
        </p><!--/p-->
      </div><!--/.text-center-->
    </div><!--/.container-->

    <div id="scroll-Top">
      <div class="return-to-top">
        <i class="fa fa-angle-up " id="scroll-top" data-toggle="tooltip" data-placement="top" title="" data-original-title="Back to Top" aria-hidden="true"></i>
      </div>
      
    </div><!--/.scroll-Top-->
    
      </footer>';
}


function getIPAddress(){
    //whether ip is from the share internet
    if(!empty($_SERVER['HTTP_CLIENT_IP'])){
        $ip = $_SERVER['HTTP_CLIENT_IP'];
    }
    //whether ip is from the proxy
    elseif(!empty($_SERVER['HTTP_X_FORWARDED_FOR'])){
        $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
    }
    //whether ip is from the remote address
    else{
        $ip = $_SERVER['REMOTE_ADDR'];
    }
    return $ip;
}



?>