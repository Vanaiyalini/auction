<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="TE=edge">
    <meta name="viewreport" content="width=device-width,initial-scale=1.0">
    <title>Login page</title>
    <link rel="stylesheet" href="../css/login.css">
    <script src="../js/login.js"></script>
</head>
<body>
    <img src="../images/anbids.png" style="display: block; margin: 0 auto;">
    <fieldset>
        <div class="wrapper">
            <form action="loginorder.php" method="POST" onsubmit="return validateForm()">
               
                <div class="input-box">
                    <label>User Name</label><br>
                    <input type="text" placeholder="User name" name="UserName" id="username">
                    <i class='bx bxs-user'></i>
                </div>
                
                <div class="input-box">
                    <label>Password</label><br>
                    <input type="password" placeholder="Password" name="UPassword" id="password">
                    <i class='bx bxs-lock-alt'></i>
                </div>
                
   
                
                <p>Already have an account? <button type="submit" class="btn" name="login">Sign in</button></p>

                <div class="register-link">
                    <p>Don't you have an account?  <button class="btn"><a href="register.php">Register</a></button></p>
                </div>
                
            </form>
            
        </div>
    </fieldset>

    <script>
        function validateForm() {
            var username = document.getElementById('username').value;
            var password = document.getElementById('password').value;

            if (username.length === 0 && password.length === 0) {
                alert("Username and password fields are empty!");
                return false;
            }
            else if (username.length === 0)
            {
                alert("Username fields is empty!");
                return false;
            }
            else if (password.length === 0)
            {
                alert("Password field is empty");
                return false;
            }
            return true;
        }
    </script>

</body>
</html>
