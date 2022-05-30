<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" >
    <!--jQuery library--> 
    <script src="bootstrap/js/jquery-3.6.0.min.js"></script>
    <!--Latest compiled and minified JavaScript--> 
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Products</title>
    <link type="text/css" rel="stylesheet" href="index.css">
  </head>
  <body>
    
    <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#mynavbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a href="index.php" class="navbar-brand">Lifestyle Store</a>
            </div>
            
            <div class="collaspe navbar-collapse" id="mynavbar">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="cart.php" ><span class="glyphicon glyphicon-shopping-cart"></span> Cart</a></li>
                    <li><a href="settings.php"><span class="glyphicon glyphicon-user"></span> Settings</a></li>
                    <li><a href="/lifestyle/creds.php/?logout=true"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
                </ul>
            </div>
            
        </div>
    </nav>
    
    <div class="container" style="margin-top:90px">
        <div class="jumbotron">
            <h1>Welcome <?php
            session_start();
            if(!$_SESSION['customer_email'])
            {
                header("location:/lifestyle/login.php");
                exit();
            }
            $first_name = strtok($_SESSION['customer_name']," ");
            echo $first_name;
            ?></h1>
            <p>We have the best cameras, watches and shirts for you. No need to hunt around, we have all in one place.</p>
        </div>
    </div>
    
    
    
    <div class="container"style="margin-bottom: 90px"> 
      
      <div class="row text-center">
              
              <div class="col-md-3 col-sm-6">
                  <div class="thumbnail">
                      <img src="bootstrap_assignment/5.jpg" alt="Camera1">
                      <div class="caption">
                      <h3>Cannon EOS</h3>
                      <p>Price:Rs.36000.00</p>
                      <a href="/lifestyle/creds.php/?product=cannoneos&&price=36000">Add to cart</a>
                      </div>
                  </div>
              </div>
                  <div class="col-md-3 col-sm-6">
                  <div class="thumbnail">
                      <img src="bootstrap_assignment/2.jpg" alt="Camera2">
                       <div class="caption">
                      <h3>Sony DSLR</h3>
                      <p>Price:Rs.40000.00</p>
                      <a href="/lifestyle/creds.php/?product=sonydslr&&price=40000">Add to cart</a>
                       </div>
                  </div>
                  </div>
                  <div class="col-md-3 col-sm-6">
                  <div class="thumbnail">
                      <img src="bootstrap_assignment/3.jpg" alt="Camera3">
                       <div class="caption">
                      <h3>Sony DSLR Mark 2</h3>
                      <p>Price:Rs.50000.0</p>
                       <a href="/lifestyle/creds.php/?product=sonydslr2&&price=50000">Add to cart</a>
                       </div>
                  </div>
                  </div>
                  <div class="col-md-3 col-sm-6">
                  <div class="thumbnail">
                      <img src="bootstrap_assignment/4.jpg" alt="Camera4">
                       <div class="caption">
                      <h3>Olympus DSLR</h3>
                      <p>Price:Rs.80000.0</p>
                       <a href="/lifestyle/creds.php/?product=olympusdslr&&price=80000">Add to cart</a>
                       </div>
                  </div>
                  </div>
                
          </div>
            
          
          
          <div class="row text-center">
              
              <div class="col-md-3 col-sm-6">
                  <div class="thumbnail">
                      <img src="bootstrap_assignment/9.jpg" alt="Watch1">
                       <div class="caption">
                      <h3>Titan Model #301</h3>
                      <p>Price:Rs.13000.00</p>
                       <a href="/lifestyle/creds.php/?product=titan301&&price=13000">Add to cart</a>
                       </div>
                  </div>
              </div>
                  <div class="col-md-3 col-sm-6">
                  <div class="thumbnail">
                      <img src="bootstrap_assignment/10.jpg" alt="Watch2">
                       <div class="caption">
                      <h3>Tital Model #201</h3>
                      <p>Price:Rs.3000.00</p>
                       <a href="/lifestyle/creds.php/?product=titan201&&price=3000">Add to cart</a>
                       </div>
                  </div>
                  </div>
                  <div class="col-md-3 col-sm-6">
                  <div class="thumbnail">
                      <img src="bootstrap_assignment/11.jpg" alt="Watch3">
                       <div class="caption">
                      <h3>HMT Milan</h3>
                      <p>Price:Rs.8000.0</p>
                       <a href="/lifestyle/creds.php/?product=hmtmilan&&price=8000">Add to cart</a>
                       </div>
                  </div>
                  </div>
                  <div class="col-md-3 col-sm-6">
                  <div class="thumbnail">
                      <img src="bootstrap_assignment/12.jpg" alt="Watch4">
                       <div class="caption">
                      <h3>Faber Luba #111</h3>
                      <p>Price:Rs.18000.0</p>
                       <a href="/lifestyle/creds.php/?product=faberluba&&price=18000">Add to cart</a>
                       </div>
                  </div>
                  </div>
                
          </div>
              
              <div class="row text-center">
              
              <div class="col-md-3 col-sm-6">
                  <div class="thumbnail">
                      <img src="bootstrap_assignment/8.jpg" alt="Shirt1">
                       <div class="caption">
                      <h3>H&W</h3>
                      <p>Price:Rs.800.00</p>
                       <a href="/lifestyle/creds.php/?product=h&w&&price=800">Add to cart</a>
                       </div>
                  </div>
              </div>
                  <div class="col-md-3 col-sm-6">
                  <div class="thumbnail">
                      <img src="bootstrap_assignment/6.jpg" alt="Shirt2">
                       <div class="caption">
                      <h3>Luis Phil</h3>
                      <p>Price:Rs.1000.00</p>
                       <a href="/lifestyle/creds.php/?product=luisphil&&price=1000">Add to cart</a>
                       </div>
                  </div>
                  </div>
                  <div class="col-md-3 col-sm-6">
                  <div class="thumbnail">
                      <img src="bootstrap_assignment/13.jpg" alt="Shirt3">
                       <div class="caption">
                      <h3>John Zok</h3>
                      <p>Price:Rs.1500.0</p>
                       <a href="/lifestyle/creds.php/?product=johnzok&&price=1500">Add to cart</a>
                       </div>
                  </div>
                  </div>
                  <div class="col-md-3 col-sm-6">
                  <div class="thumbnail">
                      <img src="bootstrap_assignment/14.jpg" alt="Shirt4">
                       <div class="caption">
                      <h3>Jhalsani</h3>
                      <p>Price:Rs.1300.0</p>
                       <a href="/lifestyle/creds.php/?product=jhalsani&&price=1300">Add to cart</a>
                       </div>
                  </div>
                  </div>
                
              </div>
      
    </div>


    
    <footer>
      <div class="container">
        <center>
            <p>Copyright © Lifestyle Store. All Rights Reserved | Contact Us: +91 90000 00000</p>
        </center>
      </div>
    </footer>
    
    
    
    
  </body>
</html>
