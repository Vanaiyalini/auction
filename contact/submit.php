<?php 
  
  $connection = new mysqli("localhost", "root", "", "auction");

  if($connection->connect_error)
      {
          die("Connection failed:" .$connection->connect_error);
      }
   
    if(isset($_POST['submit']))
        {
            $firstname = $_POST['firstname'];
            $lastname = $_POST['lastname'];
            $email = $_POST['email'];
            $mobile = $_POST['mobile'];
            $message = $_POST['message'];

            $sql = "insert into contact(firstname,lastname,email,mobile,message)values('$firstname', '$lastname','$email', '$mobile', '$message')";
            $result = $connection->query($sql);

            if($result){
                    echo '<script>location.replace("success.php")</script>';
            }
            else{
                echo "Error:".$connection->error;
            }

            session_start();
            $_SESSION['firstname']=$firstname;
        }

        $connection->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
    <link rel="stylesheet" href="../css/contactus.css">
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
                <li><a href="submit.php">Contact us</a></li>
                <li><a href="../login/login.php">Login/Sign Up</a></li>
                <li><a href="../myacc/displayuserprofile.php">My Account</a></li>
            </ul>
        </nav>
    </header>

    <div class="contactUS">
    <div class="title">
        <h3>Get in Touch</h3>
    </div>
    </div>
    <div class="box">
        <!-- Form -->
        <div class="contact form">
            <h3>
                send a Message
            </h3>

            <form action="submit.php" method="post">
                <div class="formBox">
                <div class="row50">
                    <div class="inputBox">
                        <span>First Name</span>
                        <input type="text" placeholder="First Name" name="firstname">
                    </div>

                    <div class="inputBox">
                        <span>Last Name</span>
                        <input type="text" placeholder="Last Name" name="lastname">
                    </div>
                </div>   
               
                <div class="row50">
                    <div class="inputBox">
                        <span>Email</span>
                        <input type="text"  placeholder="Email" name="email">
                    </div>

                    <div class="inputBox">
                        <span>mobile</span>
                        <input type="text" placeholder="Contact no" name="mobile">
                    </div>
                </div>   

                <div class="row100">
                    <div class="inputBox">
                        <span>Message</span>
                        <textarea placeholder="write your message here" name="message"></textarea>              
                     </div>
                </div>

                <div class="row100">
                    <div class="inputBox">
                        <input type="submit" value="Submit" name="submit">             
                     </div>
                </div>


            </div>
        </form>





        </div>

    
         <!-- Form -->
        <div class="contact info">
            <h3>Contact info</h3>
            <div class="infoBox">
                <div>
                    <span><ion-icon name="pin"></ion-icon></span>
                    <p>Address</p>
                </div>
                <div>
                    <span><ion-icon name="mail"></ion-icon></span>
                    <a href="" >Mail</a>
                </div>
                <div>
                    <span><ion-icon name="call"></ion-icon></span>
                    <a href="">Number</a>
                </div>
                <!--social media-->
                <ul class="sci">
                    <li> <a href="#"><ion-icon name="logo-facebook"></ion-icon></a></li>
                    <li> <a href="#"><ion-icon name="logo-twitter"></ion-icon></a></li>
                    <li> <a href="#"><ion-icon name="logo-linkedin"></ion-icon></a></li>
                    <li> <a href="#"><ion-icon name="logo-instagram"></ion-icon></a></li>
                </ul>
            </div>
        </div>

        <!-- Map -->

        
        <div class="contact map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15843.300519725211!2d79.9752103!3d6.9115017!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae256db1a6771c5%3A0x2c63e344ab9a7536!2sSri%20Lanka%20Institute%20of%20Information%20Technology!5e0!3m2!1sen!2slk!4v1714033285898!5m2!1sen!2slk" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>        </div>
    </div>
    <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
  
  
    
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


