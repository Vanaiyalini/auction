<?php
 $connection = new mysqli("localhost", "root", "", "auction");

 if($connection->connect_error)
     {
         die("Connection failed:" .$connection->connect_error);
     }
  
    session_start();
    $firstname=$_SESSION['firstname'];


    $_SESSION['firstname']=$firstname;

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Submit Success</title>
    <style>
                body {
                font-family: Arial, sans-serif;
                margin: 0;
                padding: 0;
                background-color: #f2f2f2;
                display: flex;
                justify-content: center;
                align-items: center;
                height: 100vh;
            }

            .container {
                max-width: 600px;
                padding: 20px;
                background-color: #fff;
                border-radius: 10px;
                box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
                text-align: center; /* Centering the content inside container */
            }

            h2 {
                color: #333;
            }

            p {
                color: #666;
                margin: 10px 0; /* Add margin between paragraphs */
            }

            button {
                padding: 10px 20px;
                margin: 10px; /* Add margin to separate buttons */
                border: none;
                border-radius: 5px;
                background-color: #4CAF50;
                color: white;
                cursor: pointer;
                transition: background-color 0.3s;
            }

            button:hover {
                background-color: #45a049;
            }

            </style>
</head>
<body>
    <div>
    <h2>Submit Successful!</h2>
    <p>Your details has been successfully completed.</p>
    <button onclick="window.location.href='Edit.php'">Edit Details</button>
    <button>Back to home</button>
    </div>
</body>
</html>
