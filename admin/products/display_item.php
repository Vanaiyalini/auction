<?php
   include '../user/connect.php';
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Registration</title>
    
    <link rel="stylesheet" href="../user/style.css"></link>
    <link rel="stylesheet" href="../user/userstyle.css"></link>
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
                <li><a href="display_item.php">Products</a></li>
                <li><a href="../biddings/displaybid.php">Biddings</a></li>
                <li><a href="../messages/displaymsg.php">Messages</a></li>
                <li><a href="../comments/displaycom.php">Comments</a></li>
               
            </ul>
        </nav>
    </header>

<div class="container">
  <button class=buttona><a href="sid_item.php" class="text-light">Add item</a></button>
</div>

<table class="table" cellspacing=0 cellpadding=0 border="1">
  
<thead>
<tr>
      <th>ProductID</th>
      <th >Name</th>
      <th >ContactNo</th>
      <th >Email</th>
      <th >Country</th>
      <th >ItemName</th>
      <th >Message</th>  
      <th >Operations</th>
</tr>
</thead>
  
<tbody>
    
    <?php
    $sql="select * from products";
    $result=mysqli_query($con,$sql);

    if($result)
    {
     
         while($row=mysqli_fetch_assoc($result)){
          
          
          
            
            $ProductID=$row['ProductID'];
            $Name=$row['Name'];
            $ContactNo=$row['ContactNo'];
            $Email=$row['Email'];
            $Country=$row['Country'];
            $ItemName=$row['ItemName'];
            $Message=$row['Message'];
            
            
            
            echo '<tr>
            <td class="tdProductID"> '.$ProductID.'</td>
            <td class="tdName"> '.$Name.'</td>
            <td class="tdContactNo"> '.$ContactNo.'</td>
            <td class="tdEmail"> '.$Email.'</td>
            <td class="tdCounty"> '.$Country.'</td>
            <td class="tdItemName"> '.$ItemName.'</td>
            <td class="tdMessage"> '.$Message.'</td>

         
            <td class="tdoperation">
			      <button class="buttonu"> <a href="update_item.php?updateProductID='.$ProductID.' "> UPDATE </a></button>
			      <button class="buttond"> <a href="delete_item.php?deleteProductID='.$ProductID.' "> DELETE </a></button>			  
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