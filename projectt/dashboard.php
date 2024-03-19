<?php
    session_start();

    // Check if the user is authenticated
    if (!isset($_SESSION["id"])) {
        header("Location: login_form.php"); // Redirect to login page
        exit();
    }
?>
<!DOCTYPE html>
<html>
<head>
    <title>Sarowar Data Management System</title>
    <link rel="stylesheet" href="CSS/dash.css">
</head>
<body>
    <h1 style="color:white; background-color: #0077b6; padding: 10px; margin-top: 0px;">Sarowar Data Management System</h1>
    <h1 style="margin-top: 30px;">Customers List <button style="background-color: #0077b6; padding: 10px; margin-left: 82%; margin-top:0px; cursor: pointer;"><a href="logout.php" style="color:white; text-decoration: none;">Log Out</a></button></h1>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Adults</th>
            <th>Childrens</th>
            <th>Checkin date</th>
            <th>Checkout date</th>
            <th>Type of room</th>
            <th>Delete</th>
        </tr>
        <?php
        // Fetch data from the database
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

        // SELECT query to fetch data from the "customers" table
        $sql = "SELECT * FROM customers";

        // Execute the query
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            // Output data of each row
            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row["id"] . "</td>";
                echo "<td>" . $row["name"] . "</td>";
                echo "<td>" . $row["email"] . "</td>";
                echo "<td>" . $row["phone"] . "</td>";
                echo "<td>" . $row["adults"] . "</td>";
                echo "<td>" . $row["children"] . "</td>";
                echo "<td>" . $row["checkindate"] . "</td>";
                echo "<td>" . $row["checkoutdate"] . "</td>";
                echo "<td>" . $row["roomtype"] . "</td>";
                echo "<td><form action='deletecustomerdata.php' method='post'>
                          <input type='hidden' name='delete_id' value='" . $row["id"] . "'>
                          <input type='submit' value='Delete'>
                      </form></td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='6'>No data found.</td></tr>";
        }

        // Close the database connection
        $conn->close();
        ?>
    </table><br><br>

    <h1 style="margin-top:0px">Queries</h1>
    <table border="1">
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Email</th>
        <th>Message</th>
        <th>Delete</th>
    </tr>
    <?php
    // Fetch data from the database
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

    // SELECT query to fetch data from the "queries" table
    $sql = "SELECT * FROM queries";

    // Execute the query
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Output data of each row
        while ($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row["id"] . "</td>";
            echo "<td>" . $row["name"] . "</td>";
            echo "<td>" . $row["email"] . "</td>";
            echo "<td>" . $row["message"] . "</td>";
            echo "<td><form action='deletequeries.php' method='post'>
                      <input type='hidden' name='delete_id1' value='" . $row["id"] . "'>
                      <input type='submit' value='Delete'>
                  </form></td>";
            echo "</tr>";
        }
    } else {
        echo "<tr><td colspan='6'>No data found.</td></tr>";
    }

    // Close the database connection
    $conn->close();
    ?>
    </table>

    <h1 style="margin-top: 30px;">Reviews</h1>
    <table border="1">
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Review</th>
        <th>Delete</th>
    </tr>
    <?php
    // Fetch data from the database
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

    // SELECT query to fetch data from the "reviews" table
    $sql = "SELECT * FROM review";

    // Execute the query
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Output data of each row
        while ($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row["id"] . "</td>";
            echo "<td>" . $row["name"] . "</td>";
            echo "<td>" . $row["review"] . "</td>";
            echo "<td><form action='deletereviewdata.php' method='post'>
                      <input type='hidden' name='delete_id2' value='" . $row["id"] . "'>
                      <input type='submit' value='Delete'>
                  </form></td>";
            echo "</tr>";
        }
    } else {
        echo "<tr><td colspan='6'>No data found.</td></tr>";
    }

    // Close the database connection
    $conn->close();
    ?>
    </table>
</body>
</html>