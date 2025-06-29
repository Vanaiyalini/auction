<?php
include 'connect.php';

if(isset($_GET['deleteid'])){
    $id = $_GET['deleteid'];
    
    $sql = "DELETE FROM `users` WHERE UserID = $id"; 
    $result = mysqli_query($con, $sql);
    if($result){
        
        echo "<script>alert('Deleted successfully!!')</script>";
        header('location:display_user.php');
    } else {
        die(mysqli_error($con));
    }
}
?>
