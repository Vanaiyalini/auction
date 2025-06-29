<?php
include '../admin/user/connect.php';

$id = $_GET['updateid']; 

$sql = "SELECT * FROM `users` WHERE UserID=$id"; // Corrected SQL query with backticks around table name

$result = mysqli_query($con, $sql);

if (!$result) {
    echo "Error: " . mysqli_error($con);
} else {
    $row = mysqli_fetch_assoc($result);
    $uname = $row['UserName'];
    $email = $row['Email'];
    $mobile = $row['ContactNo'];
    $DOB = $row['DateOfBirth'];
    $upassword = $row['UPassword'];
}

if(isset($_POST['submit'])) {
    $uname = $_POST['uname'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $DOB = $_POST['DOB'];
    $upassword = $_POST['upassword'];

    $sql = "UPDATE users SET UserName='$uname', Email='$email', ContactNo='$mobile', DateOfBirth='$DOB', UPassword='$upassword' WHERE UserID=$id";
    
    $result = mysqli_query($con, $sql);

    if($result) {
        echo "<script>alert('Updated sucessfully Login again to apply changes');window.location='../login/login.php';</script>";
       

    } else {
        echo "Error: " . mysqli_error($con);
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../css/displayuser.css">
    <link rel="stylesheet" href="../css/header.css"></link>

    <title>User Registration</title>
</head>
<body>
<img src="../images/anbids.png"  style="display: block; margin: 0 auto">;
    <header>
        <div class="logo">
           
        </div>
        <nav>
        <ul>
                <li><a href="../index.php">Home</a></li>
                <li><a href="../catelogue.php">Catalogue</a></li>
                <li><a href="../additem/additem.php">Add item</a></li>
                <li><a href="../aboutus.php">About us</a></li>
                <li><a href="../contact/submit.php">Contact us</a></li>
                <li><a href="../login/login.php">Login/Sign Up</a></li>
                <li><a href="displayuserprofile.php">My Account</a></li>
            </ul>
        </nav>
    </header>
    



<div class="content">
    <div class="container">
        <h2>User Registration</h2>
        <form method="post">
            <div class="mb-3">
                <label for="exampleInputUsername" class="form-label">Username</label><br>
                <input type="text" class="form-control" id="exampleInputUsername" name="uname" placeholder="Enter your username" value="<?php echo $uname; ?>" required> <!-- Added value attribute to populate input field -->
            </div><br>
            <div class="mb-3">
                <label for="exampleInputEmail" class="form-label">Email address</label><br>
                <input type="email" class="form-control" id="exampleInputEmail" name="email" placeholder="Enter your email address" value="<?php echo $email; ?>" required> <!-- Added value attribute to populate input field -->
            </div><br>
            <div class="mb-3">
                <label for="exampleInputContactNo" class="form-label">Contact Number</label><br>
                <input type="tel" class="form-control" id="exampleInputContactNo" name="mobile" placeholder="Enter your contact number" value="<?php echo $mobile; ?>" required> <!-- Added value attribute to populate input field -->
            </div><br>
            <div class="mb-3">
                <label for="exampleInputDOB" class="form-label">Date of Birth</label><br>
                <input type="date" class="form-control" id="exampleInputDOB" name="DOB" placeholder="Select your date of birth" value="<?php echo $DOB; ?>" required> <!-- Added value attribute to populate input field -->
            </div><br>
            <div class="mb-3">
                <label for="exampleInputPassword" class="form-label">Password</label><br>
                <input type="password" class="form-control" id="exampleInputPassword" name="upassword" placeholder="Enter your password" value="<?php echo $upassword; ?>" required> <!-- Added value attribute to populate input field -->
            </div><br>
            <button type="submit" class="btn btn-primary" name="submit">Update</button>
        </form>
    </div>
</div>
<footer>
    <div class="footer-content">
        <p>© AntiqueBids All rights reserved</p>
        <nav class="footer-nav">
            <a href="../privacy.php">Privacy Policy</a>
            <a href="../FAQ.php">FAQ</a>
            <a href="../term.php">Terms & Conditions</a>
        </nav>
    </div>
</footer>
</body>
</html>

