<?php

include '../user/connect.php';

  if(isset($_POST['submit']))
  {

    $full_name=$_POST['full_name'];
    $user_name=$_POST['user_name'];
    $email=$_POST['email'];
    $phone_number=$_POST['phone_number'];
    $password=$_POST['password'];
    $bidding_price=$_POST['bidding_price'];
    $bidding_date=$_POST['bidding_date'];
  

   //insert query 
   $sql="insert into orders (ItemID,full_name,user_name,email,phone_number,password,bidding_price,bidding_date)
   values('','$full_name','$user_name','$email','$phone_number','$password','$bidding_price','$bidding_date')";

   
   //to execute the query
   $result=mysqli_query($con,$sql);
  
   //if the query has executed successfully
   if($result){
      
    echo "<script>alert('Data Inserted successfully!!'); window.location='displaybid.php';</script>";
   }

   else{
    die(mysqli_error($con));
   }
   }
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Registration</title>
    <link rel="stylesheet" href="../user/userstyle.css"></link>
    <link rel="stylesheet" href="bidstyle.css"></link>
      <link rel="stylesheet" href="../header.css">
      <link rel="stylesheet" href="../sidstyle.css"></link>

</head>
<body>
<img src="../anbids.png"  style="display: block; margin: 0 auto">;
    <header>
        <div class="logo">
           
        </div>
        <nav>
        <ul><li><a href="../index.php">Dashboard</a></li>
                <li><a href="../user/display_user.php">Users</a></li>
                <li><a href="../products/display_item.php">Products</a></li>
                <li><a href="biddings/displaybid.php">Biddings</a></li>
                <li><a href="../contact/contactus.php">Messages</a></li>
               
            </ul>
        </nav>
    </header>

  <body>
   
  <div class="container">
  <form method="post">
  <div class="form-group">
    <label>Full name</label>
    <input type="text" class="form-control" placeholder="Full name" name="full_name" >
 
  </div>

  <div class="form-group">
    <label>User name</label>
    <input type="text" class="form-control" placeholder="User name" name="user_name" >
 
  </div>


  <div class="form-group">
    <label>Email</label>
    <input type="email" class="form-control" placeholder="Email" name="email" >
 
  </div>

  <div class="form-group">
    <label>mobile number</label>
    <input type="text" class="form-control" placeholder=" mobile number" name="phone_number">
 
  </div>

  <div class="form-group">
    <label>Password</label>
    <input type="password" class="form-control" placeholder="Enter your password" name="password">
 
  </div>

  <div class="form-group">
    <label>Bidding Price</label>
    <input type="text" class="form-control" placeholder="Enter bidding price" name="bidding_price">
 
  </div>

  <div class="form-group">
    <label>Bidding Date</label>
    <input type="date" class="form-control" placeholder="Enter bidding date" name="bidding_date">
 
  </div>

  <button type="submit" name="submit">Submit</button>
</form>


  </div>

   
    
  </body>
</html>


