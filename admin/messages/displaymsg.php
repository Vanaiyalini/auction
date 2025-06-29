<?php
  include '../user/connect.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Registration</title>
    <link rel="stylesheet" href="../biddings/bidstyle.css"></link>
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
                <li><a href="../biddings/displaybid.php">Biddings</a></li>
                <li><a href="displaymsg.php">Messages</a></li>
                <li><a href="../comments/displaycom.php">Comments</a></li>
               
            </ul>
        </nav>
    </header>




<table class="table" cellspacing=0 cellpadding=0 border="1">
  
<thead>
<tr>
      <th>ID</th>
      <th >firstname</th>
      <th >lastname</th>
      <th >email</th>
      <th >mobile</th>
      <th >message</th>
      

    
</tr>
</thead>
  
<tbody>
    
    <?php
    $sql="select * from contact";
    $result=mysqli_query($con,$sql);

    if($result)
    {
     
         while($row=mysqli_fetch_assoc($result)){
          
          
          
            
            $id=$row['id'];
            $firstname=$row['firstname'];
            $lastname=$row['lastname'];
            $email=$row['email'];
            $mobile=$row['mobile'];
            $message=$row['message'];
            
            
            
            
            
            echo '<tr>
            <td class="tdid"> '.$id.'</td>
            <td class="tdfirstname"> '.$firstname.'</td>
            <td class="tdlastname"> '.$lastname.'</td>
            <td class="tdemail"> '.$email.'</td>
            <td class="tdmobile"> '.$mobile.'</td>
            <td class="tdmessage"> '.$message.'</td>
          
            </tr>';

         }
    }

    ?>
    
    
    
   
  <td>
  
   
</tbody>  
</table>

</body>

</html>