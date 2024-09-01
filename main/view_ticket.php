<html>
<head>
  <title>View All Tickets</title>
  <style>
    table {
      border-collapse: collapse;
      width: 100%;
    }
    th, td {
      text-align: left;
      padding: 8px;
      border-bottom: 1px solid #ddd;
    }
  </style>
</head>
<body>
  <h2>View All Tickets</h2>
  <h2 align="right"> <a href="logout.php">Go back</a></h2>
 
  <?php
    // Connect to database
    $conn = mysqli_connect("localhost", "root", "", "tester");

    // Check connection
    if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
    }

    // SQL query to fetch all tickets
    $sql = "SELECT * FROM tickets";

    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
      
      echo "<table>";
      echo "<tr>";
      echo "<th>Name</th>";
      echo "<th>Email</th>";
      echo "<th>Phone</th>";
      echo "<th>Date</th>";
      echo "<th>Time</th>";
      echo "<th>Number of Tickets</th>";
      echo "<th>Total Price</th>";
     
      echo "</tr>";
      while($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        echo "<td>".$row['name']."</td>";
        echo "<td>".$row['email']."</td>";
        echo "<td>".$row['phone']."</td>";
        echo "<td>".$row['date']."</td>";
        echo "<td>".$row['time']."</td>";
        echo "<td>".$row['num_tickets']."</td>";
        echo "<td>".$row['total_price']."</td>";
       
        echo "</tr>";
      }
      echo "</table>";
      echo "<a href=\"javascript:history.go(-1)\">GO BACK</a>";
    
    } else {
      echo "No tickets found.";
      echo "<a href=\"javascript:history.go(-1)\">GO BACK</a>";
    
    }

    // Close database connection
    mysqli_close($conn);
  ?>
</body>
</html>
