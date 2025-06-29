<?php
include 'connect.php';
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
                <li><a href="../messages/displaymsg.php">Messages</a></li>
                <li><a href="../comments/displaycom.php">Comments</a></li>
            </ul>
        </nav>
    </header>

    


<div class="content">
<div class="container">
    <a href="sid_user.php" class="buttona">Add user</a>
     <br>
     <br>
     <table border ='1'> 
        <thead>
            <tr>
                <th scope="col">UserID</th>
                <th scope="col">UserName</th>
                <th scope="col">Email</th>
                <th scope="col">ContactNo</th>
                <th scope="col">DateOfBirth</th>
                <th scope="col">UPassword</th>
                <th scope="col">Actions</th> <!-- Added Actions column header -->
            </tr>
        </thead>
        <tbody>
            <?php
            $sql = "SELECT * FROM `users`";
            $result = mysqli_query($con, $sql);
            if ($result) {
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<tr>";
                    echo "<td>" . $row['UserID'] . "</td>";
                    echo "<td>" . $row['UserName'] . "</td>";
                    echo "<td>" . $row['Email'] . "</td>";
                    echo "<td>" . $row['ContactNo'] . "</td>";
                    echo "<td>" . $row['DateOfBirth'] . "</td>";
                    echo "<td>" . $row['UPassword'] . "</td>";     
                    echo "<td>"; 
                    echo "<button class='buttonu' style='height:40px'><a href='update.php?updateid=" . $row['UserID'] . "'>Update</a></button>"; // Update button
                    echo "<button class='buttond' style='height:40px'><a href='delete.php?deleteid=" . $row['UserID'] . "'>Delete</a></button>"; // Delete button with deleteid parameter

                    echo "</td>";
                    echo "</tr>";
                }
            }
            ?>
        </tbody>
    </table>
</div>
        </div>
</body>
</html>
