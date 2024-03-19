<!DOCTYPE html>
<html lang="en">
<head>
    <title>Contact Us</title>
    <link rel="stylesheet" href="./CSS/contact.css" />
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" />
   <script src="script.js" defer></script>
</head>
<body>
    <nav class="nav">
      <i class="uil uil-bars navOpenBtn"></i>
      <img src="./img/Hotel.png" style="height: 50px; width: 260px;">
        <ul class="nav-links">
            <i class="uil uil-times navCloseBtn"></i>
            <li><a href="home.php">Home</a></li>
            <li><a href="#about">About Us</a></li>
            <li><a href="room.php">Rooms</a></li>
            <li><a href="gallery.php">Gallery</a></li>
            <li><a href="#" class="active">Contact</a></li>
            <li><a href="book.php" class="btn">Book Now</a></li>
        </ul>
    </nav>
    <div class="box">
    <section class="contact">
        <div class="contact-info">
            <h2>Contact Us</h2>
            <p>If you have any querries, feel free to get in touch with us.</p>
            <address>
                <p><strong>Hotel SAROWAR</strong></p>
                <p style="font-size: 14px;"> &#9993; : info@hotelsarowar.com</p>
                <i class="fa fa-phone" style="font-size: 18px;"></i><span style="font-size: 14px;"> : +977 9876543210</span><br><br>
                <p><iframe class="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3515.9345189492783!2d83.95567167548538!3d28.209301975898477!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3995951e9cb03e75%3A0x4a427e142153b30c!2sHotel%20Sarowar!5e0!3m2!1sen!2snp!4v1699763468103!5m2!1sen!2snp" width="700" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></p>
            </address>
        </div>
        <div class="contact-form">
            <h2>Send us a Message</h2>
            <form action="addqueriesdata.php" method="post">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" required>

                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>

                <label for="message">Message:</label>
                <textarea id="message" name="message" rows="4" required></textarea>

                <button type="submit" class="submit-button">Send</button>
            </form>
        </div>
    </section>
    </div>
    <section class="footer">
      <div class="footer-row">
        <div class="footer-col">
          <h4>Information</h4>
          <ul class="links">
            <li><a href="#">About Us</a></li>
            <li><a href="#">Customers</a></li>
            <li><a href="#">Services</a></li>
          </ul>
        </div>

        <div class="footer-col">
          <h4>News & Updates</h4>
          <ul class="links">
            <li><a href="#">Media Kit</a></li>
            <li><a href="#">New Uploads</a></li>
            <li><a href="#">Newsletter Signup</a></li>
          </ul>
        </div>

        <div class="footer-col">
          <h4>Terms & Conditions</h4>
          <ul class="links">
            <li><a href="#">Customer Agreement</a></li>
            <li><a href="#">Privacy Policy</a></li>
            <li><a href="#">Security</a></li>
            <li><a href="#">Testimonials</a></li>
          </ul>
        </div>

        <div class="footer-col">
          <h4>Newsletter</h4>
          <p>
            Subscribe to our newsletter for a weekly dose
            of news, updates, and exclusive offers.
          </p>
          <form action="#">
            <input type="text" placeholder="Your email" required>
            <button type="submit">SUBSCRIBE</button>
          </form>
          <div class="icons">
            <div style="font-size: 17px; color: white;">Follow Us : </div>
            <i class="fa-brands fa-facebook-f" style="font-size: 20px;"></i>
            <i class="fa-brands fa-twitter" style="font-size: 20px;"></i>
            <i class="fa-brands fa-instagram" style="font-size: 20px;"></i>
          </div>
        </div>
      </div>
      <footer>
        <p style="font-size: 15px">&copy; 2023 Hotel SAROWAR. All rights reserved.</p>
      </footer>
    </section>
</body>
</html>
