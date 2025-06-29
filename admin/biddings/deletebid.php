<?php
include '../user/connect.php';

if (isset($_GET['deleteItemID'])) {
    
  //to access the id 
    $id = $_GET['deleteItemID'];

    $sql = "DELETE FROM orders WHERE ItemID=$id";

    //to execute the query 
    $result = mysqli_query($con, $sql);

    if ($result) {
        //echo "Deleted successful";
        header('location:displaybid.php');
        exit;
    } else {
        die(mysqli_error($con));
    }
}
?>
