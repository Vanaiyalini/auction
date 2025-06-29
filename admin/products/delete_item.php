<?php
include '../user/connect.php';

if (isset($_GET['deleteProductID'])) {
    
  //to access the id 
    $id = $_GET['deleteProductID'];

    $sql = "DELETE FROM products WHERE ProductID=$id";

    //to execute the query 
    $result = mysqli_query($con, $sql);

    if ($result) {
        //echo "Deleted successful";
        header('location:display_item.php');
        exit;
    } else {
        die(mysqli_error($con));
    }
}
?>