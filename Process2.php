<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "student_db";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
 die("Connection failed: " . $conn->connect_error);
}
$register_number = "";
$output = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
 $register_number = $_POST['register_number'];
 $sql = "SELECT name, subject1, subject2, subject3, subject4, subject5 FROM student_marks
WHERE register_number = ?";
 $stmt = $conn->prepare($sql);
 $stmt->bind_param("s", $register_number);
 $stmt->execute();
 $result = $stmt->get_result();
 if ($result->num_rows > 0) {
 $row = $result->fetch_assoc();
 $name = $row['name'];
 $marks = [$row['subject1'], $row['subject2'], $row['subject3'], $row['subject4'], $row['subject5']];
 $passing_marks = 40;
 $result_status = "Pass";
 foreach ($marks as $mark) {
 if ($mark < $passing_marks) {
 $result_status = "Fail";
 break;
 }
 }
 $output = "Student Name: $name<br>";
 $output .= "Marks: " . implode(", ", $marks) . "<br>";
 $output .= "Result: $result_status";
 } else {
 $output = "Error: Register number not found.";
 }
 $stmt->close();
}
$conn->close();
?>
<!DOCTYPE html>
<html>
<head>
 <title>Student Result</title>
</head>
<body>
 <h2>Enter Register Number</h2>
 <form method="POST" action="">
 <label for="register_number">Register Number:</label>
 <input type="text" id="register_number" name="register_number" required>
 <button type="submit">Submit</button>
 </form>
 <h3>Result:</h3>
 <p><?php echo $output; ?></p>
</body>
</html>