<?php
$conn = new mysqli("localhost", "root", "", "student_portal");
if ($conn->connect_error) {
 die("Connection failed: " . $conn->connect_error);
}
$username = $_POST['username'];
$password = $_POST['password'];              
$sql = "SELECT student_name FROM users WHERE username = ? AND password = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ss", $username, $password);
$stmt->execute();
$stmt->store_result();
if ($stmt->num_rows > 0) {
    $stmt->bind_result($student_name);
    $stmt->fetch();
    header("Location: Welcome.php?name=" . urlencode($student_name));
    exit();
   } else {
    echo "<p style='color:red;'>Invalid username or password. Please try again.</p>";
    echo "<a href='login.php'>Back to Login</a>";
   }
   $stmt->close();
   $conn->close();
   ?>