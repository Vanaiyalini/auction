<?php
include '../user/connect.php';

if (!isset($_GET['updateItemID'])) {
    die("No item ID provided for update.");
}

$ItemID = $_GET['updateItemID'];

$sql = "SELECT * FROM orders WHERE ItemID=$ItemID";
$result = mysqli_query($con, $sql);

if (!$result) {
    echo "<script>alert('Data Updated successfully!!'); window.location='displaybid.php';</script>";
}

$row = mysqli_fetch_assoc($result);

$full_name = $row['full_name'];
$user_name = $row['user_name'];
$email = $row['email'];
$phone_number = $row['phone_number'];
$password = $row['password'];
$bidding_price = $row['bidding_price'];
$bidding_date = $row['bidding_date'];

if (isset($_POST['submit'])) {
    $full_name = $_POST['full_name'];
    $user_name = $_POST['user_name'];
    $email = $_POST['email'];
    $phone_number = $_POST['phone_number'];
    $password = $_POST['password'];
    $bidding_price = $_POST['bidding_price'];
    $bidding_date = $_POST['bidding_date'];

    $sql = "UPDATE orders SET full_name='$full_name', user_name='$user_name', email='$email', phone_number='$phone_number', password='$password', bidding_price='$bidding_price', bidding_date='$bidding_date' WHERE ItemID=$ItemID";

    $result = mysqli_query($con, $sql);

    if ($result) {
        echo "<script>alert('Data Updated successfully!!'); window.location='displaybid.php';</script>";
    } else {
        die("Error: " . mysqli_error($con));
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Registration</title>
    <link rel="stylesheet" href="../user/userstyle.css"></link>
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
                <li><a href="../user/display_user.php">Users</a></li>
                <li><a href="../products/display_item.php">Products</a></li>
                <li><a href="biddings/displaybid.php">Biddings</a></li>
                <li><a href="../contact/contactus.php">Messages</a></li>
               
               
            </ul>
        </nav>
    </header>
<body>
    <div class="container">
        <form method="post">
            <div class="form-group">
                <label>Full name</label>
                <input type="text" class="form-control" placeholder="Full name" name="full_name" value="<?php echo $full_name ?>">
            </div>

            <div class="form-group">
                <label>User name</label>
                <input type="text" class="form-control" placeholder="User name" name="user_name" value="<?php echo $user_name ?>">
            </div>

            <div class="form-group">
                <label>Email</label>
                <input type="email" class="form-control" placeholder="Email" name="email" value="<?php echo $email ?>">
            </div>

            <div class="form-group">
                <label>Mobile number</label>
                <input type="text" class="form-control" placeholder="Mobile number" name="phone_number" value="<?php echo $phone_number ?>">
            </div>

            <div class="form-group">
                <label>Password</label>
                <input type="password" class="form-control" placeholder="Enter your password" name="password" value="<?php echo $password ?>">
            </div>

            <div class="form-group">
                <label>Bidding Price</label>
                <input type="text" class="form-control" placeholder="Enter bidding price" name="bidding_price" value="<?php echo $bidding_price ?>">
            </div>

            <div class="form-group">
                <label>Bidding Date</label>
                <input type="text" class="form-control" placeholder="Enter bidding date" name="bidding_date" value="<?php echo $bidding_date ?>">
            </div>

            <button type="submit" name="submit">Update</button>
        </form>
    </div>
</body>
</html>
