<<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Item</title>
    <link rel="stylesheet" href="../css/additem.css">
    <link rel="stylesheet" href="../css/header.css">
    <script src="../js/additem.js"></script>
    
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
                <li><a href="additem.php">Add item</a></li>
                <li><a href="../aboutus.php">About us</a></li>
                <li><a href="../contact/submit.php">Contact Us</a></li>                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                     
                <li><a href="../login/login.php">Login/Sign Up</a></li>
                <li><a href="../myacc/displayuserprofile.php">My Account</a></li>

            </ul>
        </nav>
    </header>

    <div class="header-banner">
        <img src="../images/antiq4.jpg" alt="Header Image" class="header-image">
        <div class="header-columns">
            <div class="column">
                <h2>We Achieve the <br>HIGHEST Prices</h2>
            </div>
            <div class="column">
                <h2>We Spend HUGE $$$ <br>on Marketing</h2>
            </div>
            <div class="column">
                <h2>We Have a THRIVING <br>NATIONAL Audience</h2>
            </div>
        </div>
    </div>

    <div class="sell-now">
        <h1>SELL NOW</h1>
    </div>

    <section class="benefits-section">
        <div class="benefits-info">
            <h1>Achieving the highest prices with rusted on bidders nationwide!</h1>
            <h2>Why Choose AntiqueBids Auctions for Selling?</h2>
            <ul>
                <li>We achieve the HIGHEST prices: Experience our proven track record of achieving the best prices for your items.</li>
                <li>We spend HUGE $$$ on marketing: We allocate GENEROUS resources to marketing, ensuring maximum visibility for your items.</li>
                <li>We have a THRIVING NATIONAL audience: Our extensive reach brings in dedicated bidders from all corners of the country.</li>
            </ul>
        </div>
    </section>

    <section class="contact-section">
        <div class="contact-info">
            <h2>We WANT your items!</h2>
            <h4>CONTACT US TODAY!</h4>
            <p>PHONE our friendly team on +94774869896 or EMAIL AntiqueBids@gmail.com or fill out the form to the right!</p>
            <p>Sell FAST & RISK FREE with Sri Lanka's Greatest Auction House!</p>
            <ul>
                <li>RISK FREE - Absolutely NO FEES if your item does not sell</li>
                <li>HASSLE FREE - No more time-wasting back and forth enquiries</li>
                <li>SAFE & TRUSTED - No more inviting strangers to your home for inspections</li>
            </ul>
        </div>
        <div class="contact-form">
            <h2>Contact Our Friendly Team to Sell Now</h2>
            <form action="additemorder.php" method="POST" >
                <input type="text" name="name" placeholder="Name" required>
                <input type="text" name="number" placeholder="Mobile Phone Number" required>
                <input type="email" name="email" placeholder="Email" required>
                <input type="text" name="state" placeholder="Country" required>
                <input type="text" name="item" placeholder="Item Name" required>
                <textarea name="message" placeholder="Message"></textarea>
                <button type="submit" name="send">Send</button>
            </form>
        </div>
    </section>

     <section class="item-gallery">
        <div class="gallery-container">
            <marquee>
            <img src="../images/antiq3.jpg" alt="Item 1" class="gallery-item">
            <img src="../images/antiq5.jpg" alt="Item 2" class="gallery-item">
            <img src="../images/antiq6.jpg" alt="Item 3" class="gallery-item">
            <img src="../images/antiq7.jpg" alt="Item 4" class="gallery-item">
            <img src="../images/antiq9.jpg" alt="Item 5" class="gallery-item">
            <img src="../images/antiq10.jpg" alt="Item 6" class="gallery-item">
            <img src="../images/antiq11.jpg" alt="Item 7" class="gallery-item">
</marquee>
        </div>
    </section> 

   
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
