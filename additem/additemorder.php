<?php 
include '../admin/user/connect.php';

// Process form submission
if (isset($_POST['send'])){
    // Retrieve form data
    $u_name = $_POST['name'];
    $number = $_POST['number'];
    $email = $_POST['email'];
    $state= $_POST['state'];
    $item = $_POST['item'];
    $mes = $_POST['message'];
   
    // //hashing the password
    // $password = password_hash($password, PASSWORD_DEFAULT);

    // Insert into users table
    $sql = "INSERT INTO products (Name, ContactNo, Email, Country, ItemName, Message)
            VALUES ('$u_name', '$number', '$email', '$state', '$item', '$mes')";

    if ($con->query($sql) === TRUE) {
        echo "<script>alert('Item added sucessfully');window.location='additem.php';</script>";
        exit;
    } else {
        echo "Error: " . $sql . "<br>" . $con->error;
    }
}

// Close database connection
$con->close();
?>
