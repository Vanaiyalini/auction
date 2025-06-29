<?php 
include '../admin/user/connect.php';

// Process form submission
if (isset($_POST['register'])){
    // Retrieve form data
    $user_name = $_POST['UserName'];
    $email = $_POST['Email'];
    $phone_number = $_POST['ContactNo'];
    $dob = $_POST['DateOfBirth'];
    $password = $_POST['UPassword'];
   
    // //hashing the password
    // $password = password_hash($password, PASSWORD_DEFAULT);

    // Insert into users table
    $sql = "INSERT INTO users (UserName, Email, ContactNo, DateOfBirth, UPassword)
            VALUES ('$user_name', '$email', '$phone_number', '$dob', '$password')";

    if ($con->query($sql) === TRUE) {
        echo "<script>alert('Your account has been created ');window.location='login.php';</script>";
        exit;
    } else {
        echo "Error: " . $sql . "<br>" . $con->error;
    }
}

// Close database connection
$con->close();
?>
