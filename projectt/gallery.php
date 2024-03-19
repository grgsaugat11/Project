<!DOCTYPE html>
<html>

<head>
  <title>Sarowar Gallery</title>
  <link rel="stylesheet" type="text/css" href="./CSS/gallery.css">
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
      <li><a href="#" class="active">Gallery</a></li>
      <li><a href="contact.php">Contact</a></li>
      <li><a href="book.php" class="btn">Book Now</a></li>
    </ul>
  </nav>
  <div class="container">
    <div class="heading">
      <h3>Photo <span>Gallery</span></h3>
    </div>
    <div class="box">
      <div class="dream">
        <img src="./img/view2.jpg">
        <img src="./img/image1.jpg">
        <img src="./img/image3.jpg">
        <img src="./img/dine1.jpeg">
        <img src="./img/image7.jpg">
        <img src="./img/swim1.jpg">
        <img src="./img/restro1.jpeg">
      </div>
      <div class="dream">
        <img src="./img/dine2.jpeg">
        <img src="./img/swim2.jpg">
        <img src="./img/spa2.jpg">
        <img src="./img/swim3.jpg">
        <img src="./img/view1.jpg">
        <img src="./img/image5.jpg">
        <img src="./img/home2.jpg">
        <img src="./img/image11.jpg">
      </div>
      <div class="dream">
        <img src="./img/view3.jpg">
        <img src="./img/spa1.jpg">
        <img src="./img/view4.jpg">
        <img src="./img/spa3.jpg">
        <img src="./img/food1.jpeg">
        <img src="./img/image6.jpg">
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