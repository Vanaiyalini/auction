<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comment</title>
    <link rel="stylesheet" href="comment.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
  
    </head>

    <body>
    <img src="../images/anbids.png"  style="display: block; margin: 0 auto">;
    <header>
      
        <nav>
        <ul>
                <li><a href="../index.php">Home</a></li>
                <li><a href="../catelogue.php">Catalogue</a></li>
                <li><a href="../additem/additem.php">Add item</a></li>
                <li><a href="../aboutus.php">About us</a></li>
                <li><a href="../contact/contactus.php">Contact us</a></li>
                <li><a href="../login/login.php">Login/Sign Up</a></li>
                <li><a href="../myacc/displayuserprofile.php">My Account</a></li>
            </ul>
        </nav>
    </header>

        <div class="nav-comment" style="background-color: rgb(218, 192, 159); width: 1000px; height: auto; margin-left: 250px; margin-top:15px; border: solid; border-radius: 20px; border-width: 3px; border-color: black; margin-bottom: 10px;">
            <h2>Type a message</h2>

            <?php
                // Database connection
                $servername = "localhost";
                $username = "root"; // Assuming you're using the default username for XAMPP
                $password = ""; // Assuming no password for XAMPP
                $dbname = "auction";

                $conn = new mysqli($servername, $username, $password, $dbname);

                // Check connection
                if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                }

                // Handle form submission for adding a new comment
                if(isset($_POST['submit_comment'])) {
                    $comment = $_POST['comment'];
                    $sql = "INSERT INTO comments (comment, datetime) VALUES (?, NOW())";
                    $stmt = $conn->prepare($sql);
                    $stmt->bind_param("s", $comment);
                    if ($stmt->execute()) {
                        echo '<script>alert("Thank you for your comment!"); window.location.href = window.location.href;</script>';
                    } else {
                        echo "Error: Unable to add comment.";
                    }
                    $stmt->close();
                }

                // Handle form submission for deleting a comment
                if(isset($_POST['delete_comment'])) {
                    $comment_id = $_POST['delete_comment'];
                    $sql = "DELETE FROM comments WHERE comment_Id=?";
                    $stmt = $conn->prepare($sql);
                    $stmt->bind_param("i", $comment_id);
                    if ($stmt->execute()) {
                        echo '<script>alert("Comment deleted successfully!"); window.location.href = window.location.href;</script>';
                    } else {
                        echo "Error deleting comment: " . $conn->error;
                    }
                    $stmt->close();
                }

                // Handle form submission for updating a comment
                if(isset($_POST['update_comment'])) {
                    $comment_id = $_POST['comment_id'];
                    $updated_comment = $_POST['updated_comment'];
                    $sql = "UPDATE comments SET comment=? WHERE comment_Id=?";
                    $stmt = $conn->prepare($sql);
                    $stmt->bind_param("si", $updated_comment, $comment_id);
                    if ($stmt->execute()) {
                        echo '<script>alert("Comment updated successfully!"); window.location.href = window.location.href;</script>';
                    } else {
                        echo "Error updating comment: " . $conn->error;
                    }
                    $stmt->close();
                }

                // Close the database connection
                $conn->close();
            ?>

            <form method="post" action="">
                <textarea name="comment" rows="4" cols="50"></textarea><br>
                <input type="submit" name="submit_comment" value="Submit Comment">
            </form>

            <h2>Show message</h2>
            <button id="show-comments">Show Comments</button>

            <div class="comment-container hide-comments">
                
                <?php
                    // Reconnect to the database
                    $conn = new mysqli($servername, $username, $password, $dbname);

                    // Check connection
                    if ($conn->connect_error) {
                        die("Connection failed: " . $conn->connect_error);
                    }

                    // Read comments
                    $sql = "SELECT * FROM comments";
                    $result = $conn->query($sql);
                    if ($result->num_rows > 0) {
                        while($row = $result->fetch_assoc()) {
                            echo "<div class='comment'>" . $row["comment"]. "
                                <form method='post' action=''>
                                    <input type='hidden' name='delete_comment' value='".$row["comment_Id"]."'>
                                    <input type='submit' value='Delete'>
                                </form>
                                <form method='post' action=''>
                                    <input type='hidden' name='comment_id' value='".$row["comment_Id"]."'>
                                    <textarea name='updated_comment' rows='2' cols='30'></textarea>
                                    <input type='submit' name='update_comment' value='Update'>
                                </form>
                            </div>";
                        }
                    } else {
                        echo "No comments yet.";
                    }

                    // Close the database connection
                    $conn->close();
                ?>
            </div>

        </div>

        <footer>
    <div class="footer-content">
        <p>© AntiqueBids All rights reserved</p>
        <nav class="footer-nav">
            <a href="privacy.php">Privacy Policy</a>
            <a href="FAQ.php">FAQ</a>
            <a href="term.php">Terms & Conditions</a>
        </nav>
    </div>
</footer>
        <script>
            document.getElementById("show-comments").addEventListener("click", function() {
                var commentsContainer = document.querySelector(".comment-container");
                commentsContainer.classList.toggle("hide-comments");
            });
        </script>

    </body>
</html>