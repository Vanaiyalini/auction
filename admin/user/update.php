<?php
include 'connect.php';

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
        echo "<script>alert('Data Updated successfully!!'); window.location='display_user.php';</script>";

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
    <title>User Registration</title>
    <link rel="stylesheet" href="userstyle.css"></link>
    <link rel="stylesheet" href="style.css"></link>
      <link rel="stylesheet" href="../header.css">
      <link rel="stylesheet" href="../sidstyle.css"></link>

</head>
<body>
<img src="../anbids.png"  style="display: block; margin: 0 auto">;
    <header>
        <div class="logo">
           
        </div>
        <nav>
        <ul>
                <li><a href="../index.php">Dashboard</a></li>
                <li><a href="display_user.php">Users</a></li>
                <li><a href="../products/display_item.php">Products</a></li>
                <li><a href="../biddings/displaybid.php">Biddings</a></li>
                <li><a href="../contact/contactus.php">Messages</a></li>
               
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
</body>
</html>

