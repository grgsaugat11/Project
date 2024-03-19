<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Book Your Room</title>
  <link rel="stylesheet" href="./CSS/book.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" />
  <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css" />
  <script src="script.js" defer></script>
  <style>
    .error {
      color: red;
    }
  </style>

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
      <li><a href="#" class="btn">Book Now</a></li>
    </ul>
  </nav>
  <div class="box">
    <section class="booking-form">
      <h2>Book a Room</h2>
      <form id="booking-form" onsubmit="return validateForm()" method="post" action="addcustomersdata.php">

        <label for="guest-name" style="margin-right: 25px;">Guest Name:</label>
        <input type="text" id="name" name="name" required placeholder="Enter Your Name">
        <span class="error" id="nameError"></span><br>

        <label for="phone" style="margin-right: 64px;">Phone:</label>
        <input type="tel" id="phone" name="phone" required placeholder="Enter Your Phone Number">
        <span class="error" id="phoneError"></span><br>

        <label for="guest-email" style="margin-right: 69px;">Email:</label>
        <input type="email" id="email" name="email" required placeholder="Enter Your Email Address">
        <span class="error" id="emailError"></span><br>

        <label for="check-in-date" style="margin-right: 12px;">Check-in Date:</label>
        <input type="date" id="checkindate" name="checkindate" required><br>

        <label for="check-out-date">Check-out Date:</label>
        <input type="date" id="checkoutdate" name="checkoutdate" required><br>

        <label for="room-type" style="margin-right: 33px;">Room Type:</label>
        <select id="roomtype" name="roomtype">
          <option value="Standard">Standard Room</option>
          <option value="Deluxe">Deluxe Room</option>
          <option value="Executive">Executive Room</option>
          <option value="Family">Family Room</option>
          <option value="Deluxe Twin">Deluxe Twin Room</option>
          <option value="Superior Queen">Superior Queen Room</option>
          <option value="Swiss Select">Swiss Select Room</option>
          <option value="Phewa Suite">Phewa Suite</option>
        </select>

        <label for="no-of-adult" style="margin-right: 65px;">Adults:</label>
        <input type="number" id="adults" name="adults" required><br>

        <label for="no-of-children" style="margin-right: 51px;">Children:</label>
        <input type="number" id="children" name="children" required><br>

        <button type="submit" onclick="done()">BOOK</button>
      </form>
      <script>
        function done() {
          alert("Booking Successful!!");
        }
      </script>
      <script>
        var date = new Date();
        var tdate = date.getDate();
        var month = date.getMonth();
        tdate = tdate + 1;
        month = month + 1;
        if (tdate < 10) {
          tdate = '0' + month;
        }
        if (month < 10) {
          month = '0' + month;
        }
        var year = date.getUTCFullYear();
        var minDate = year + "-" + month + "-" + tdate;
        document.getElementById("checkindate").setAttribute('min', minDate);
        document.getElementById("checkoutdate").setAttribute('min', minDate);
      </script>
      <script>
        function validateForm() {
          name = document.getElementById('name').value;
          phone = document.getElementById('phone').value;
          email = document.getElementById('email').value;

          nameError = document.getElementById('nameError');
          phoneError = document.getElementById('phoneError');
          emailError = document.getElementById('emailError');

          namePattern = /^[A-Za-z]{1,32}/;
          phonePattern = /^\d{10}$/;
          emailPattern = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;

          if (!name) {
            nameError.textContent = 'Please enter your phone number.';
          } else if (!namePattern.test(name)) {
            nameError.textContent = 'Note: Cannot include numbers in name.';
          } else {
            nameError.textContent = '';
          }

          if (!phone) {
            phoneError.textContent = 'Please enter your phone number.';
          } else if (!phonePattern.test(phone)) {
            phoneError.textContent = 'Note: A valid 10-digit phone number required.';
          } else {
            phoneError.textContent = '';
          }

          if (!email) {
            emailError.textContent = 'Please enter your email address.';
          } else if (!emailPattern.test(email)) {
            emailError.textContent = 'Note: A valid email address required.';
          } else {
            emailError.textContent = '';
          }

          return !(nameError.textContent || phoneError.textContent || emailError.textContent);
        }
      </script>
    </section>
  </div>
</body>
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

</html>