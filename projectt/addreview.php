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
    $review=$_POST["review"];

    $sql = "INSERT INTO review (name,review) VALUES ('$name', '$review')";

       if ($conn->query($sql) === TRUE) {
             // echo "Data updated successfully.";
             //                 $conn->close();

                // Redirect to home.php
                 header("Location: home.php");
                 exit;
         } else {
             echo "Error inserting data: " . $conn->error;
         }
     } else {
         echo "Error";
     }


 $conn->close();
?>