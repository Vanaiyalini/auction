<?php 

include '../admin/user/connect.php';

// Process form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $full_name = $_POST['full_name'];
    $user_name = $_POST['user_name'];
    $email = $_POST['email'];
    $phone_number = $_POST['phone_number'];
    $password = $_POST['password'];
    $bidding_price = $_POST['bidding_price'];
    $bidding_date = $_POST['bidding_date'];

    // Insert into orders table
    $sql = "INSERT INTO orders (full_name, user_name, email, phone_number, password, bidding_price, bidding_date)
            VALUES ('$full_name', '$user_name', '$email', '$phone_number', '$password', '$bidding_price', '$bidding_date')";

    if ($con->query($sql) === TRUE) {
        // Select the last inserted ItemID
        $sql = "SELECT ItemID FROM orders ORDER BY ItemID DESC LIMIT 1";
        $result = $con->query($sql);

        if ($result->num_rows > 0) {
            // Fetch the result row
            $row = $result->fetch_assoc();
            $ItemID = $row['ItemID'];

            // Display the ItemID in a JavaScript alert
            echo "<script>alert('Your item ID is: $ItemID');</script>";
        } else {
            echo "<script>alert('Failed to fetch ItemID');</script>";
        }
    } else {
        echo "Error: " . $sql . "<br>" . $con->error;
    }
}

// Close database connection
$con->close();
?>
