<?php

// Get the form data
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$uname = $_POST['uname'];
$pwd = $_POST['pwd'];

// Database connection
$conn = new mysqlI("localhost", "root", "", "users");
if ($conn->connect_error) {
  die('connection failed: ' . $conn->connect_error);
} else {
  $stmt = $conn->prepare("INSERT INTO registration (fname, lname, email, phone, uname, pwd) VALUES (?, ?, ?, ?, ?, ?)");
$stmt->bind_param("sssiss", $fname, $lname, $email, $phone, $uname, $pwd);

  $stmt->execute();
  echo "Registration Successful";
  $stmt->close();
  $conn->close();
}

// Redirect the user to a success page
header("refresh:0;url=index.php");
exit;

?>
