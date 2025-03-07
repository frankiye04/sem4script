<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "college";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
 die("Connection failed: " . $conn->connect_error);
}
if (isset($_GET['college_code'])) {
 $college_code = $conn->real_escape_string($_GET['college_code']);
 $sql = "SELECT * FROM college_details WHERE college_code = '$college_code'";
 $result = $conn->query($sql);
 if ($result->num_rows > 0) {
 echo json_encode($result->fetch_assoc());
 } else {
 echo json_encode(["error" => "College not found"]);
 }
}
$conn->close();
?>