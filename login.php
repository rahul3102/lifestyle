<?php
  session_start();
  if($_SESSION['customer_email'])
  {
    header("location:/lifestyle/product.php");
  }
?>

<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" >
    <!--jQuery library--> 
    <script src="bootstrap/js/jquery-3.6.0.min.js"></script>
    <!--Latest compiled and minified JavaScript--> 
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
    <link type="text.css" rel="stylesheet" href="index.css">
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
          <a href="index.html" target="_blank" class="navbar-brand">Lifestyle Store</a>
                
        </div>
        
        <div class="collapse navbar-collapse" id="mynavbar">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="signup.html" target="_blank"><span class="glyphicon glyphicon-user"></span> Signup</a></li>
            <li><a href="login.html" target="_blank"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
          </ul>
        </div>
        
      </div>
    </nav>
    
    <div class="container" style="margin-top: 72px;">
      <div class="row">
        <div class="col-xs-4">
            
            <div class="panel panel-primary">
            
              <div class="panel-heading"><h4>LOGIN</h4></div>
            
              <div class="panel-body">
                  <p class="text-warning"><i>Login to make a purchase</i></p>
            
                  <form class="form-group" method="post" action="creds.php">
                    <input type="text" name="email" placeholder="Email" class="form-control"><br>
                    <input type="password" name="password" placeholder="Password" class="form-control"><br>
                    <input type="submit" name="login" class="btn btn-primary" value="Login"/>
                  </form>
                
              </div>
              
              <div class="panel-footer">
                <p>Don't have an account? <a href="/lifestyle/signup.php" >Register</a></p>
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