<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" >
    <!--jQuery library--> 
    <script src="bootstrap/js/jquery-3.6.0.min.js"></script>
    <!--Latest compiled and minified JavaScript--> 
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Signup</title>
    <style>
      .row{
        margin-top:100px;
      }
      footer{
        padding: 10px 0;
        background-color: #101010;
        color: #9d9d9d;
        margin-top: 199px;
        width: 100%; 
      }
    </style>
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
        
        <div class="collapse navbar-collapse" id="mynavbar">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="signup.php"><span class="glyphicon glyphicon-user"></span>Signup</a></li>
            <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
          </ul>
        </div>
      
      </div>
      
    </nav>
    
    <div class="container">
        <div class="row">
            <div class="col-xs-4 col-xs-offset-4">
              <h2><B>SIGN UP</B></h2>
              <form class="form-group" method="post" action="creds.php">
                <input type="text" name="name" placeholder="Name" class="form-control"><br>
                <input type="email" name="email" placeholder="Email" class="form-control"><br>
                <input type="password" name="password" placeholder="Password" class="form-control"><br>
                <input type="tel" name="contact" placeholder="Contact" class="form-control"><br>
                <input type="text" name="city" placeholder="City" class="form-control"><br>
                <input type="text" name="address" placeholder="Address" class="form-control"><br>
                <input type="submit" value="Register" name="register" style="width:360px; background-color:#333; color:white; height:40px;">
              </form>              
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