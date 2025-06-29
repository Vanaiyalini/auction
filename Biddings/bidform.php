<!DOCTYPE html>
<html>
<head>
    <title>Home page</title>
    <link rel="stylesheet" href="../css/bidstyle.css"> 
    <link rel="stylesheet" href="../css/header.css">
    <script src="../js/bidform.js"></script>

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

    <div class="wrapper">
        <form method="post" action="order.php">
            <h1>Bidding Form</h1>
            <div class="input-box">
                <div class="input-field">
                    <input type="text" name="full_name" placeholder="Full Name" required>
                    <i class='bx bxs-user'></i>
                </div>
                <div class="input-field">
                    <input type="text" name="user_name" placeholder="User Name" required>
                    <i class='bx bxs-user'></i>
                </div>
            </div>
            <div class="input-box">
                <div class="input-field">
                    <input type="email" name="email" placeholder="Email" required>
                    <i class='bx bxs-envelope'></i>
                </div>
                <div class="input-field">
                    <input type="number" name="phone_number" placeholder="Phone Number" required>
                    <i class='bx bxs-phone'></i>
                </div>
            </div>
            <div class="input-box">
                <div class="input-field">
                    <input type="password" name="password" placeholder="Password" required>
                    <i class='bx bxs-lock-alt'></i>
                </div>
                <div class="input-field">
                    <input type="password" name="confirm_password" placeholder="Confirm Password" required>
                    <i class='bx bxs-lock-alt'></i>
                </div>
            </div>
            <div class="input-box">
                <div class="input-field">
                    <input type="text" name="bidding_price" placeholder="Bidding Price" required>
                    <i class='bx bxs-purchase-tag'></i>
                </div>
                <div class="input-field">
                    <input type="Date" name="bidding_date" placeholder="Bidding Date" required>
                    <i class='bx bxs-calendar'></i>
                </div>
            </div>
            <label><input type="checkbox" id="checkBox" required> Agree to terms and conditions</label>
            <button type="submit" class="btn">Submit</button>
            <button  class="btn"><a href ="searchtxtbox.php">Update</a></button>

        </form>
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
</body>
</html>
