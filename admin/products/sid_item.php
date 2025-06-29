<?php

include '../user/connect.php';


  if(isset($_POST['submit']))
  {

    echo "post request";

    $Name=$_POST['Name'];
    $ContactNo=$_POST['ContactNo'];
    $Email=$_POST['Email'];
    $Country=$_POST['Country'];
    $ItemName=$_POST['ItemName'];
    $Message=$_POST['Message'];


   //insert query 
   $sql="insert into products (Name,ContactNo,Email,Country,ItemName,Message)
   values('$Name','$ContactNo','$Email','$Country','$ItemName','$Message')";

   
   //to execute the query
   $result=mysqli_query($con,$sql);
  
   //if the query has executed successfully
   if($result){
      
    echo "<script>alert('Data Inserted successfully!!'); window.location='display_item.php';</script>";
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
    <link rel="stylesheet" href="style.css"></link>
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
                <li><a href="display_item.php">Products</a></li>
                <li><a href="../biddings/biddings/displaybid.php">Biddings</a></li>
                <li><a href="../contact/contactus.php">Messages</a></li>
               
            </ul>
        </nav>
    </header>
  <body>
   
  <div class="container">
  <form method="post" >
            <div class="form-group">
                <label>Name</label>
                <input type="text" class="form-control" placeholder="Enter your name" name="Name">
            </div>

            <div class="form-group">
                <label>ContactNo</label>
                <input type="text" class="form-control" placeholder="Enter your mobile number" name="ContactNo">
            </div>

            <div class="form-group">
                <label>Email</label>
                <input type="Email" class="form-control" placeholder="Enter your Email" name="Email" >
            </div>

            <div class="form-group">
                <label>Country</label>
                <input type="text" class="form-control" placeholder="Enter your Country" name="Country">
            </div>

            <div class="form-group">
                <label>ItemName</label>
                <input type="ItemName" class="form-control" placeholder="ItemName" name="ItemName" >
            </div>

            <div class="form-group">
                <label>Message</label>
                <input type="text" class="form-control" placeholder="Type message" name="Message">
            </div>

            <button type="submit" name="submit">Submit</button>
</form>


  </div>

   
    
  </body>
</html>


