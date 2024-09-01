<?php

// Connect to the database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "tester";

$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Retrieve form data
$name = $_POST["name"];
$email = $_POST["email"];
$phone = $_POST["phone"];
$date = $_POST["date"];
$time = $_POST["time"];
$num_tickets = $_POST["num_tickets"];
$ticket_price = 10; // constant price per ticket
$total_price = $num_tickets * $ticket_price;

// Insert data into tickets table
$sql = "INSERT INTO tickets (name, email, phone, date, time, num_tickets,ticket_price, total_price)
VALUES ('$name', '$email', '$phone', '$date', '$time', '$num_tickets',10, '$total_price')";

if (mysqli_query($conn, $sql)) {
    echo "Ticket Booked Successfully \n";
    echo "<a href=\"login.html\">View Ticket</a>\n";
    echo "<a href=\"javascript:history.go(-2)\">GO BACK</a>";
    
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>
