<?php 
session_start();
$id=$_SESSION['id'];

?>
<!DOCTYPE html>
<html>
<head>
    <title>HOME</title>
    <link rel="stylesheet" type="text/css" href="../css/displayuser.css">
    <link rel="stylesheet" type="text/css" href="../css/header.css">
</head>
<body>
<img src="../images/anbids.png"  style="display: block; margin: 0 auto">;
    <header>
        <div class="logo">
           
        </div>
        <nav>
            <ul>
            <ul>
                <li><a href="../index.php">Home</a></li>
                <li><a href="../catelogue.php">Catalogue</a></li>
                <li><a href="../additem/additem.php">Add item</a></li>
                <li><a href="../aboutus.php">About us</a></li>
                <li><a href="../contact/submit.php">Contact us</a></li>
                <li><a href="../login/login.php">Login/Sign Up</a></li>
                <li><a href="displayuserprofile.php">My Account</a></li>
            </ul>
            </ul>
        </nav>
    </header>
    <form>
        <h1>Hello, <?php echo $_SESSION['user_name']; ?></h1>
        <label for="userID">User ID:</label>
        <input type="text" id="userID" name="userID" value="<?php echo $id; ?>" readonly><br>
        <?php if(isset($_SESSION['contactno'])) { ?>
        <label for="contactNumber">Contact Number:</label>
        <input type="text" id="contactNumber" name="contactNumber" value="<?php echo $_SESSION['contactno']; ?>" readonly><br>
        <?php } ?>
        <?php if(isset($_SESSION['email'])) { ?>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" value="<?php echo $_SESSION['email']; ?>" readonly><br>
        <?php } ?>
        <?php if(isset($_SESSION['dob'])) { ?>
        <label for="dob">Date of Birth:</label>
        <input type="text" id="dob" name="dob" value="<?php echo $_SESSION['dob']; ?>" readonly><br>
        <?php } ?>
        <?php if(isset($_SESSION['password'])) { ?>
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" value="<?php echo $_SESSION['password']; ?>" readonly><br>
        <?php } ?>
        <div><?php echo '<a href="editprofile.php? updateid='.$id.'"><button class="buttonu">Change Profile</a></button>' ?>
        <?php echo '<a href="deleteprofile.php? deleteid='.$id.'"><button class="buttond">Delete Profile</a></button>' ?></div>
    </form>
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


