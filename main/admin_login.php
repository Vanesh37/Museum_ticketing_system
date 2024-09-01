<?php
session_start();
if(isset($_SESSION['admin_id'])){
    header('Location: view ticket.php');
}

if(isset($_POST['login'])){
    include 'db_connection.php';

    $email = $_POST['email'];
    $password = $_POST['password'];

    $stmt = $conn->prepare("SELECT * FROM admin WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();
    $row = $result->fetch_assoc();

    if(password_verify($password, $row['password'])){
        $_SESSION['admin_id'] = $row['admin_id'];
        header('Location: view ticket.php');
    }else{
        $error_msg = "Invalid email or password!";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        html {
    background: url('taj2.jpg') no-repeat center center fixed;
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-size: cover;
  }
    </style>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<h1 align="right"> <a href="home.html">logout</a></h1>
	<h1><a href="view_ticket.php">Hampi</a></h2>
</head>
<body>
	<h2><a href="view_ticket1.php">Mysore_Palace</a></h2>
</body>
</html>
