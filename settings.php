<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" >
    <!--jQuery library--> 
    <script src="bootstrap/js/jquery-3.6.0.min.js"></script>
    <!--Latest compiled and minified JavaScript--> 
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Settings</title>
    <link type="text/css" rel="stylesheet" href="index.css">
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
             <li><a href="cart.php"><span class="glyphicon glyphicon-shopping-cart"></span>Cart</a></li>
             <li><a href="/lifestyle/creds.php/?logout=true"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
           </ul>
                  
        </div>
        
      </div>
    </nav>
    
    <div class="container mar">
      
      <div class="row">
        <div class="col-sm-6 col-sm-offset-3">
          <form class="form-group">
            <h2><b>Change Password</b></h2>
            <input type="password" name="oldpassword" placeholder="Old Password" class="form-control"><br>
            <input type="password" name="newpassword" placeholder="New Password" class="form-control"><br>
            <input type="password" name="newpassword" placeholder="Re-type New Password" class="form-control"><br>
            <button type="button" class="btn btn-primary" value="Change">Change</button>
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
