<?php
include '../admin/user/connect.php';

if(isset($_GET['deleteid'])){
    $id = $_GET['deleteid'];
    
    $sql = "DELETE FROM `users` WHERE UserID = $id"; 
    $result = mysqli_query($con, $sql);
    if($result){
        echo "<script>alert('Your account was deleted Register again .');</script>" ;
        echo "<script>window.location='../login/register.php';</script>";
       
    } else {
        die(mysqli_error($con));
    }
}
?>
