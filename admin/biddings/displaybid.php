<?php
  include '../user/connect.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Registration</title>
    <link rel="stylesheet" href="bidstyle.css"></link>
    <!-- <link rel="stylesheet" href="../style.css"></link> -->
    <link rel="stylesheet" href="../header.css">
</head>
<body>
<img src="../anbids.png"  style="display: block; margin: 0 auto">;
    <header>
        <div class="logo">
           
        </div>
        <nav>
        <ul>
                <li><a href="../index.php">Dashboard</a></li>
                <li><a href="../user/display_user.php">Users</a></li>
                <li><a href="../products/display_item.php">Products</a></li>
                <li><a href="biddings/displaybid.php">Biddings</a></li>
                <li><a href="../messages/displaymsg.php">Messages</a></li>
                <li><a href="../comments/displaycom.php">Comments</a></li>
            </ul>
        </nav>
    </header>


<div class="container">
  <a href="bid.php" class="buttona">Add Biddings</a>
</div>

<table class="table" cellspacing=0 cellpadding=0 border="1">
  
<thead>
<tr>
      <th>ItemID</th>
      <th >Full Name</th>
      <th >User Name</th>
      <th >Email</th>
      <th >Phone Number</th>
      <th >Password</th>
      <th >Bidding Price</th>
      <th >Bidding Date</th>
      <th >Operations</th>

    
</tr>
</thead>
  
<tbody>
    
    <?php
    $sql="select * from orders";
    $result=mysqli_query($con,$sql);

    if($result)
    {
     
         while($row=mysqli_fetch_assoc($result)){
          
          
          
            
            $ItemID=$row['ItemID'];
            $full_name=$row['full_name'];
            $user_name=$row['user_name'];
            $email=$row['email'];
            $phone_number=$row['phone_number'];
            $password=$row['password'];
            $bidding_price=$row['bidding_price'];
            $bidding_date=$row['bidding_date'];
            
            
            
            
            
            echo '<tr>
            <td class="tdItemID"> '.$ItemID.'</td>
            <td class="tdfull_name"> '.$full_name.'</td>
            <td class="tduser_name"> '.$user_name.'</td>
            <td class="tdemail"> '.$email.'</td>
            <td class="tdphone_number"> '.$phone_number.'</td>
            <td class="tdpassword"> '.$password.'</td>
            <td class="tdbidding_price"> '.$bidding_price.'</td>
            <td class="tdbidding_date"> '.$bidding_date.'</td>



            <td class="tdoperation">
			      <button class="buttonu"> <a href="updatebid.php? updateItemID='.$ItemID.' "> UPDATE </a></button>
			      <button class="buttond"> <a href="deletebid.php?  deleteItemID='.$ItemID.' "> DELETE </a></button>			  
			      </td>
            
          
            </tr>';

         }
    }

    ?>
    
    
    
   
  <td>
  
   
</tbody>  
</table>

</body>

</html>