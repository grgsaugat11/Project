<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "sarowar";

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $dob = $_POST["dob"];
    $email = $_POST["email"];
    $password = password_hash($_POST["password"], PASSWORD_DEFAULT);

    $sql = "INSERT INTO users (username, dob, email, password) VALUES ('$username', '$dob', '$email', '$password')";

    if ($conn->query($sql) === TRUE) {
        // Redirect to login_form.php 
        header("Location: login_form.php");
        exit;
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
$conn->close();
?>