<?php
session_start();
require('db_connect.php'); // connect to the database

if (isset($_POST['username']) && isset($_POST['password'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Query the database for admin user
    $query = "SELECT * FROM admins WHERE username='$username'";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);

        // Verify password
        if (password_verify($password, $row['password'])) {
            $_SESSION['admin_id'] = $row['id']; // save the admin ID in session variable
            header("Location: admin_dashboard.php"); // redirect to admin dashboard
        } else {
            echo "Invalid password.";
        }
    } else {
        echo "Admin user not found.";
    }
}
?>
