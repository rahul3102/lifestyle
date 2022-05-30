<?php
  session_start();
  include 'dbconnect.php';
  $tabul = strtok(strtolower($_SESSION['customer_name'])," ");
  $sql = "select * from $tabul";
  $sql2 = "select sum(amount) as stotal from $tabul";
  $result = mysqli_query($connection_status,$sql);
  $result2 = mysqli_query($connection_status,$sql2);
  $stotal = mysqli_fetch_assoc($result2);
  $taxes = $stotal['stotal']*0.18;
  $net_payable = $stotal['stotal'] + $taxes;
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
    <title>Cart</title>
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
          
          <div class="collapse navbar-collapse" id="mynavbar">
            <ul class="nav navbar-nav navbar-right">
              <li><a href="settings.php"><span class="glyphicon glyphicon-user"></span>Settings</a></li>
              <li><a href="/lifestyle/creds.php/?logout=true"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
            </ul>
          </div>
        
        </div>
        
      </nav>
      
      <div class="container mar">
        <div class="table-responsive"  style="margin-left: 300px; margin-right: 300px">
        <?php if(mysqli_num_rows($result)) { ?>
                  <table class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th>Item Name</th>
                                <th>Price</th>
                                <th>Quantity</th>
                                <th>Amount</th>
                            </tr>
                          </thead>
                          <tbody>
                            <?php while($row = mysqli_fetch_assoc($result)) { ?>
                            <tr>
                                <td><?php echo ucfirst($row['product_name']) ;?> </td>
                                <td><?php echo $row['price'];?> </td>
                                <td><?php echo $row['stock'];?> </td>
                                <td><?php echo $row['amount'];?> </td>
                            </tr>
                            <?php } ?>
                            <tr>
                              <th>Sub Total</th>
                              <th colspan="3"><?php echo $stotal['stotal'];?></th>
                            </tr>
                            <tr>
                              <th>Taxes</th>
                              <th colspan="3"><?php echo $taxes;?></th>
                            </tr>
                            <tr>
                              <th>Net Payable</th>
                              <th colspan="2"><?php echo $net_payable;?></th> 
                            </tr>
                      </tbody>
                  </table>
                  <?php } else { ?>
                    <h3 style="text-align:center;">Your cart is empty... Get busy shopping</h3>
                    <?php } ?>
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