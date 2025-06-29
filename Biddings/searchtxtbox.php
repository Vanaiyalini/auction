<?php
include '../admin/user/connect.php';
?>




<html>
  <head>
    <title>Search data and update it</title>
</head>
<style>
body{
  background-color:whitesmoke;
}

input{
 
  height:5%;
  border:1px;
  border-radius:5px;
  padding:8px 15px 8px 15px;
  margin:10px 0px 15px 0px;
  box-shadow:1px 1px 2px 1px grey;
}


</style>


<body>
 <centre>
  <h3>Update Bidding</h3>

<form action="" method="POST" style="background-color:lightblue">
 <div> <input  type="text" name="id" placeholder="Enter Id for Search"></div>
 <div> <input  type="submit" name="search" placeholder="Search Details"></div>

</form>

<?php 

    
    if(isset($_POST['search']))
    {
      $ItemID=$_POST['id'];

      $query="SELECT * FROM orders where ItemID='$ItemID' ";
      $query_run=mysqli_query($con,$query);

      while($row=mysqli_fetch_array($query_run))
      {
        ?>
        <form action="" method="POST">
        
        <input type="hidden" name="ItemID" value="<?php echo $row['ItemID'] ?>"><br>
        <input type="text"   name="full_name" value="<?php echo $row['full_name'] ?>"><br>
        <input type="text"   name="user_name" value="<?php echo $row['user_name'] ?>"><br>
        <input type="text"   name="email" value="<?php echo $row['email'] ?>"><br>
        <input type="text"   name="phone_number" value="<?php echo $row['phone_number'] ?>"><br>
        <input type="text"   name="password" value="<?php echo $row['password'] ?>"><br>
        <input type="text"   name="bidding_price" value="<?php echo $row['bidding_price'] ?>"><br>
        <input type="date"   name="bidding_date" value="<?php echo $row['bidding_date'] ?>"><br>



       <input type="submit" name="update" value="Update Data">
        <?php 
      }

    }

?>
 </centre>
</body>
  </html>

<?php


  if(isset($_POST['update']))
  {
    $id=$_POST['ItemID'];
    $full_name=$_POST['full_name'];
    $user_name=$_POST['user_name'];
    $email=$_POST['email'];
    $phone_number=$_POST['phone_number'];
    $password=$_POST['password'];
    $bidding_price=$_POST['bidding_price'];
    $bidding_date=$_POST['bidding_date'];



    $query = "UPDATE orders SET full_name='$full_name', user_name='$user_name', email='$email', phone_number='$phone_number', password='$password', bidding_price='$bidding_price', bidding_date='$bidding_date' WHERE ItemID='$id'";
    $query_run=mysqli_query($con,$query);

    if($query_run)
    {
      echo '<script> alert("Data Updated");<script>';
    }

    else{
      echo '<script> alert("Data not Updated")<script>';
    }
  }
  


?>

