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
    $message=$_POST["message"];

    $sql = "INSERT INTO queries (name,email,message) VALUES ('$name', '$email','$message')";

       if ($conn->query($sql) === TRUE) {
             // echo "Data updated successfully.";
             //                 $conn->close();

                // Redirect to contact.php
                 header("Location: contact.php");
                 exit;
         } else {
             echo "Error inserting data: " . $conn->error;
         }
     } else {
         echo "Error";
     }
 $conn->close();
?>