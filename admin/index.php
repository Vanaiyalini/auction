<?php
 include "user/connect.php";
 ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/header.css">

</head>
<body>
<img src="../images/anbids.png"  style="display: block; margin: 0 auto">;
    <header>
        <div class="logo">
           
        </div>
        <nav>
        <ul>
                <li><a href="index.php">Dashboard</a></li>
                <li><a href="user/display_user.php">Users</a></li>
                <li><a href="products/display_item.php">Products</a></li>
                <li><a href="biddings/displaybid.php">Biddings</a></li>
                <li><a href="messages/displaymsg.php">Messages</a></li>
                <li><a href="comments/displaycom.php">Comments</a></li>
               
            </ul>
        </nav>
    </header>

    <h2><i><center>Welcome to AntiqueBids Admin Portal</center></i></h2>


<div class="content">

<div class="card">
  <div class="title">Total Users</div>
  <div class="value"><?php
                        $sql="SELECT * from users";
                        $result=$con-> query($sql);
                        $count=0;
                        if ($result-> num_rows > 0){
                            while ($row=$result-> fetch_assoc()) {
                    
                                $count=$count+1;
                            }
                        }
                        echo $count;
                    ?></div>
</div>

<div class="card">
  <div class="title">Total Products</div>
  <div class="value"><?php
                        $sql="SELECT * from products";
                        $result=$con-> query($sql);
                        $count=0;
                        if ($result-> num_rows > 0){
                            while ($row=$result-> fetch_assoc()) {
                    
                                $count=$count+1;
                            }
                        }
                        echo $count;
                    ?></div>
</div>

<div class="card">
  <div class="title">Total Orders</div>
  <div class="value"><?php
                        $sql="SELECT * from orders";
                        $result=$con-> query($sql);
                        $count=0;
                        if ($result-> num_rows > 0){
                            while ($row=$result-> fetch_assoc()) {
                    
                                $count=$count+1;
                            }
                        }
                        echo $count;
                    ?></div>
</div>

<br>
<br>
<br>

<div class="card">
  <div class="title">Total Messages</div>
  <div class="value"><?php
                        $sql="SELECT * from contact";
                        $result=$con-> query($sql);
                        $count=0;
                        if ($result-> num_rows > 0){
                            while ($row=$result-> fetch_assoc()) {
                    
                                $count=$count+1;
                            }
                        }
                        echo $count;
                    ?></div>
</div>

<br>
<br>


   
</div>

<div class="card">
  <div class="title">Total Comments</div>
  <div class="value"><?php
                        $sql="SELECT * from comments";
                        $result=$con-> query($sql);
                        $count=0;
                        if ($result-> num_rows > 0){
                            while ($row=$result-> fetch_assoc()) {
                    
                                $count=$count+1;
                            }
                        }
                        echo $count;
                    ?></div>
</div>


   
</div>


</body>
</html>
