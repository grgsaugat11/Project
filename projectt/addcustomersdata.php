<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "sarowar";

// Create a connection to the existing database
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Retrieve form data and sanitize inputs
    $name = $_POST["name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $adults = $_POST["adults"];
    $children = $_POST["children"];
    $checkindate = $_POST["checkindate"];
    $checkoutdate = $_POST["checkoutdate"];
    $roomtype = $_POST["roomtype"];

    $sql = "INSERT INTO customers (name,email,phone,adults,children,checkindate,checkoutdate,roomtype) VALUES ('$name', '$email','$phone', '$adults','$children','$checkindate','$checkoutdate','$roomtype')";

       if ($conn->query($sql) === TRUE) {
             // echo "Data updated successfully.";
             //                 $conn->close();

                // Redirect to book.php
                 header("Location: book.php");
                 exit;
         } else {
             echo "Error inserting data: " . $conn->error;
         }
     } else {
         echo "Error";
     }
 $conn->close();
?>