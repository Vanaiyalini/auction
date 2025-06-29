<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Item</title>
    <link rel="stylesheet" href="../css/register.css">
    <link rel="stylesheet" href="../css/header.css">
</head>
<body>
<img src="../images/anbids.png"  style="display: block; margin: 0 auto">;
    <header>
        <div class="logo">
           
        </div>
        <nav>
        <ul>
                <li><a href="../index.php">Home</a></li>
                <li><a href="../catelogue.php">Catalogue</a></li>
                <li><a href="../additem/additem.php">Add item</a></li>
                <li><a href="../aboutus.php">About us</a></li>
                <li><a href="../contact/submit.php">Contact us</a></li>
                <li><a href="../login/login.php">Login/Sign Up</a></li>
                <li><a href="../myacc/displayuserprofile.php">My Account</a></li>
            </ul>
        </nav>
    </header>

<div class="wrapper">
        <form action="registerorder.php" method="POST" id="form">
            <h1>Registration</h1>
            <div class="input-box">
                <label>User Name</label>
                <div class="input-field">
                    <input type="text" placeholder="User name" name="UserName" required>
                    <div class="error"></div>
                    <i class='bx bxs-user'></i>  
                </div>

                <label>Email</label>
                <div class="input-field">
                    <input type="email" placeholder="Email" name="Email" required>
                    <div class="error"></div>
                    <i class='bx bxl-gmail'></i>  
                </div>
               
                <label>Contact No</label>
                <div class="input-field">
                    <input type="text" placeholder="Contact No" name="ContactNo" required>
                    <div class="error"></div>
                    <i class='bx bxs-calendar'></i>   
                </div>

                <label>Date of Birth</label>
                <div class="input-field">
                    <input type="date" placeholder="Date of birth" name="DateOfBirth" required>
                    <div class="error"></div>
                    <i class='bx bxs-calendar'></i>   
                </div>
                
                <label>Password</label>
                <div class="input-field">
                    <input type="password" placeholder="Password" name="UPassword" required>
                    <div class="error"></div>
                    <i class='bx bxs-lock-alt'></i>
                </div>
            </div>

            <label><input type="checkbox" class="agree" required>Agree to terms and conditions</label>
            <div>
            <br><br>
            <button type="submit" class="btn" name="register">Register</button>
            </div>
        </form>
</div>
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
