<?php
     $connection = new mysqli("localhost", "root", "", "auction");

     if($connection->connect_error)
         {
             die("Connection failed:" .$connection->connect_error);
         }
   
    $id=$_GET['deleteid'];

    $sql ="delete from contact where id ='$id'";
    $result = $connection->query($sql);

    if($result){
        echo '<script>location.replace("submit.php")</script>';
    }
    else{
        echo "Error:".$connection->error;
    }
?>


