<?php
include '../user/connect.php';

if (!isset($_GET['updateProductID'])) {
    die("No Product ID provided for update.");
}

$ProductID = $_GET['updateProductID'];

$sql = "SELECT * FROM products WHERE ProductID=$ProductID";
$result = mysqli_query($con, $sql);

if (!$result) {
    echo "<script>alert('Data Updated successfully!!'); window.location='display_item.php';</script>";
}


$row = mysqli_fetch_assoc($result);

$Name=$row['Name'];
$ContactNo=$row['ContactNo'];
$Email=$row['Email'];
$Country=$row['Country'];
$ItemName=$row['ItemName'];
$Message=$row['Message'];

if (isset($_POST['submit'])) {
    $Name=$_POST['Name'];
    $ContactNo=$_POST['ContactNo'];
    $Email=$_POST['Email'];
    $Country=$_POST['Country'];
    $ItemName=$_POST['ItemName'];
    $Message=$_POST['Message'];

    $sql = "UPDATE products SET Name='$Name', ContactNo='$ContactNo', Email='$Email', Country='$Country', ItemName='$ItemName', Message='$Message' WHERE ProductID=$ProductID";

    $result = mysqli_query($con, $sql);

    if ($result) {
        echo "<script>alert('Data Updated successfully!!'); window.location='display_item.php';</script>";
    } else {
        die("Error: " . mysql_error($con));
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
        <ul><li><a href="../index.php">Dashboard</a></li>
                <li><a href="../user/display_user.php">Users</a></li>
                <li><a href="display_item.php">Products</a></li>
                <li><a href="../biddings/biddings/displaybid.php">Biddings</a></li>
                <li><a href="../contact/contactus.php">Messages</a></li>
               
            </ul>
        </nav>
    </header>
<body>
    <div class="container">
        <form method="post">
            <div class="form-group">
                <label>Name</label>
                <input type="text" class="form-control" placeholder="Enter your name" name="Name" value="<?php echo $Name ?>">
            </div>

            <div class="form-group">
                <label>ContactNo</label>
                <input type="text" class="form-control" placeholder="Enter your mobile number" name="ContactNo" value="<?php echo $ContactNo ?>">
            </div>

            <div class="form-group">
                <label>Email</label>
                <input type="Email" class="form-control" placeholder="Enter your Email" name="Email" value="<?php echo $Email ?>">
            </div>

            <div class="form-group">
                <label>Country</label>
                <input type="text" class="form-control" placeholder="Enter your Country" name="Country" value="<?php echo $Country ?>">
            </div>

            <div class="form-group">
                <label>ItemName</label>
                <input type="ItemName" class="form-control" placeholder="ItemName" name="ItemName" value="<?php echo $ItemName ?>">
            </div>

            <div class="form-group">
                <label>Message</label>
                <input type="text" class="form-control" placeholder="Type message" name="Message" value="<?php echo $Message ?>">
            </div>

            <button type="submit" name="submit">Update</button>
        </form>
    </div>
</body>
</html>
