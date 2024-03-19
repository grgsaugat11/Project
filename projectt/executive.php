<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Room Description</title>
  <link rel="stylesheet" type="text/css" href="./CSS/describe.css">
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
            <li><a href="contact.php">Contact</a></li>
            <li><a href="book.php" class="btn" style="color: white;">Book Now</a></li>
        </ul>
  </nav>
  <div class="room-description">
  <h2>Executive Room</h2>
  <div class="room-info">
    <img src="./img/room1.jpeg" alt="Executive Room">
    <div class="room-details">
      <h3>Description</h3>
      <p style="margin-bottom: 15px;">Experience sophistication and comfort in our executive rooms. Tailored for discerning travelers, these refined spaces offer modern amenities, and exclusive services, ensuring a premium stay designed for both leisure and business travelers seeking an elevated experience.</p>
      <h3 style="margin-bottom: 15px;">Max Capacity : <span style="color: grey;">5</span></h3>
      <h3>Amenities</h3>
      <ul type="square">
        <li>King-Sized Beds</li>
        <li>Workstation</li>
        <li>Air-Conditioner</li>
        <li>En-suite Bathroom</li>
        <li>Flat-screen TV</li>
        <li>24/7 Room Service</li>
        <li>Free Wi-Fi</li>
        <li>Minibar or Refreshments</li>
      </ul>
      <h3 style="margin-top: 15px;">Price</h3>
      <p><b style="color: grey;">Starting at $75 per night</b></p>
      <a href="room.php"><-Back To Rooms</a><a href="book.php" style="margin-left: 10px;">Book</a>
    </div>
  </div>
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