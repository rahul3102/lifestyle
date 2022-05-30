<?php
include 'dbconnect.php';
if(isset($_POST['register']))
{
    session_start();
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $contact = $_POST['contact'];
    $city = $_POST['city'];
    $address = $_POST['address'];
    $table_name = strtok(strtolower($name)," ");
    $sql = "insert into user(name,email,password,contact,city,address) values('$name','$email','$password','$contact','$city','$address')";
    $sql2 = "create table $table_name(product_name varchar(50) not null, stock int not null default 0, price int not null default 0, amount int not null default 0)";
    if(mysqli_query($connection_status,$sql))
    {
        mysqli_query($connection_status,$sql2);
        echo "<script>alert('Registration Successful, now login!');
        window.location.href='/lifestyle/login.php'</script>";
        
    }
    else echo "Not able to register";
}

if(isset($_POST['login']))
{
    session_start();
    $email = $_POST['email'];
    $password = $_POST['password'];
    $sql = "select * from user where email = '$email' && password = '$password'";
    $sql2 = "select * from user where email ='$email'";
    $result = mysqli_query($connection_status,$sql);
    if(mysqli_num_rows($result) == 1)
    {
        $result2 = mysqli_query($connection_status,$sql2);
        $row = mysqli_fetch_assoc($result2);
        $_SESSION['customer_name'] = $row['name'];
        $_SESSION['customer_email'] = $row['email'];
        echo "<script>alert('Login successful')
        window.location.href='/lifestyle/product.php'</script>";
    }
}
if($_SERVER['REQUEST_METHOD']=='GET')
{
    $logout_status = $_GET['logout'] ?? NULL;
    if($logout_status=='true')
    {
        session_start();
        session_unset();
        session_destroy();
        echo "<script>alert('Logged out successfully')
        window.location.href='/lifestyle/index.php'</script>";
    }
}
if($_SERVER['REQUEST_METHOD']=='GET')
{
    session_start();
    $product = $_GET['product'];
    $price = $_GET['price'];
    $tabul = strtok(strtolower($_SESSION['customer_name'])," ");
    $sql = "select * from product where product_name = '$product'";
    $sql2 = "insert into $tabul(product_name, price) values('$product','$price')";
    $sql3 = "update $tabul set stock = stock+1 where product_name='$product'";
    $sql4 = "update product set stock = stock-1 where product_name='$product'";
    $sql5 = "select * from $tabul where product_name = '$product'";
    $sql6 = "update $tabul set amount= (stock*price) where product_name='$product'";
    $result = mysqli_query($connection_status,$sql);
    $row = mysqli_fetch_assoc($result);
    if($row['stock']>0)
    {
        if(mysqli_num_rows(mysqli_query($connection_status,$sql5))==1)  
        { 
            mysqli_query($connection_status,$sql3);
        }
        else
        { 
            mysqli_query($connection_status,$sql2);
            mysqli_query($connection_status,$sql3);
         }
        mysqli_query($connection_status,$sql4);
        mysqli_query($connection_status,$sql6);
        echo "<script>alert('Added to cart')
        window.location.href='/lifestyle/product.php'</script>";
    }
    else
    {
        echo "<script>alert('Out of stock... try again later')
        window.location.href='/lifestyle/product.php'</script>";
        
    }
    
}

?>