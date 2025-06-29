<?php 
session_start(); // Start session

include '../admin/user/connect.php';

// Process form submission
if (isset($_POST['login'])){
    // Retrieve form data
    $user_name = $_POST['UserName'];
    $password = $_POST['UPassword'];
}
    if($user_name === "admin" && $password === "123@") {
        header("Location:../admin/index.php");
        exit(); // Stop further execution

    }  
   

    // Query to check user credentials
    $result = mysqli_query($con, "SELECT * FROM users WHERE UserName='$user_name' AND UPassword='$password' ") or die(mysqli_error($con)); 

    // Fetch user data
    $row = mysqli_fetch_assoc($result);

    // If user exists
    if(is_array($row) && !empty($row)){
        // Set session variables

        $_SESSION['user_name'] = $row['UserName'];
        $_SESSION['password'] = $row['UPassword'];
        $_SESSION['id'] = $row['UserID'];
        $_SESSION['contactno'] = $row['ContactNo'];
        $_SESSION['email'] = $row['Email'];
        $_SESSION['dob'] = $row['DateOfBirth'];
        $_SESSION['valid'] = true; // Set a flag indicating user is logged in
        header("Location: ../index.php");
        exit(); // Stop further execution and redirect
    } else {
        // Display error message if credentials are incorrect
        echo "<script>alert('Wrong Username or Password');window.location='login.php';</script>";
        
      
    }

?>
