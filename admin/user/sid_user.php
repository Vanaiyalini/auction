<?php
include 'connect.php';

if(isset($_POST['submit'])) {
    $uname = $_POST['uname'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $DOB = $_POST['DOB'];
    $upassword = $_POST['upassword'];

    $sql = "INSERT INTO users (UserName,Email,ContactNo,DateOfBirth,UPassword) VALUES ('$uname','$email','$mobile','$DOB','$upassword')";

    $result = mysqli_query($con, $sql);

    if($result) {
        echo "<script>alert('Data inserted successfully!!'); window.location='display_user.php';</script>";

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
            <div class="form-group">
                <label for="exampleInputUsername" class="form-label">Username</label>
                <input type="text" class="form-control" id="exampleInputUsername" name="uname" placeholder="Enter your username" required>
            </div>
            <div class="form-group">
                <label for="exampleInputEmail" class="form-label">Email address</label>
                <input type="email" class="form-control" id="exampleInputEmail" name="email" placeholder="Enter your email address" required>
            </div>
            <div class="form-group">
                <label for="exampleInputContactNo" class="form-label">Contact Number</label>
                <input type="tel" class="form-control" id="exampleInputContactNo" name="mobile" placeholder="Enter your contact number" required>
            </div>
            <div class="form-group">
                <label for="exampleInputDOB" class="form-label">Date of Birth</label>
                <input type="date" class="form-control" id="exampleInputDOB" name="DOB" placeholder="Select your date of birth" required>
            </div>
            <div class="form-group">
                <label for="exampleInputPassword" class="form-label">Password</label>
                <input type="password" class="form-control" id="exampleInputPassword" name="upassword" placeholder="Enter your password" required>
            </div>
            <button type="submit" class="btn btn-primary" name="submit">Submit</button>
        </form>
    </div>
</div>





    </div>
</div>
</body>
</html>
