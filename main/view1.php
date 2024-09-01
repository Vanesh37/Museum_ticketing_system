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
$phone = $_POST["phone"];

// Retrieve ticket information based on mobile number
$sql = "SELECT * FROM tickets1 WHERE phone = '$phone'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // Output ticket information in a table format
    echo "<table>";
    echo "<tr><th><th>Name</th><th><th><th>Email</th><th><th><th>Phone</th><th><th>Date</th><th>Time</th><th><th>Number of Tickets</th><th><th><th></th><th>Ticket_price</th><th><th></th><th>Total Price</th><th><th>\n\nQR Code</th></tr>";
    while($row = mysqli_fetch_assoc($result)) {
        echo "<tr><td><td>" .$row["name"]. "</td><td><td><td>"   .$row["email"].   "</td><td><td><td>" .$row["phone"]. "</td><td><td>".$row["date"]."</td><td>".$row["time"]."</td><td><td><td> ".$row["num_tickets"]."</td><td><td><td>\t".$row["ticket_price"]."</td><td><td><td>".$row["total_price"]."</td><td><td>\n\n".generateQRCode($row)."</td></tr>";
    }
    echo "</table>";
} else {
    echo "No ticket found for the provided mobile number";
}

mysqli_close($conn);

// Function to generate QR code using Google Charts API
function generateQRCode($row) {
    $data ="Welcome To Mysore". "\nName: ".$row["name"]."\nEmail: ".$row["email"]."\nPhone: ".$row["phone"]."\nDate: ".$row["date"]."\nTime: ".$row["time"]."\nNumber of Tickets: ".$row["num_tickets"]."\nTicket_price: ".$row["ticket_price"] . "\nTotal Price: ".$row["total_price"];
    $url = "https://chart.googleapis.com/chart?cht=qr&chs=150x150&chl=".urlencode($data);
    return "<img src='".$url."' alt='QR Code'>";
}

?>
