<?php
if (!isset($_GET['name'])) {
 header("Location: login.php");
 exit();
}
$student_name = htmlspecialchars($_GET['name']);
?>
<!DOCTYPE html>
<html>
<head>
 <title>Welcome</title>
</head>
<body>
 <h1>Welcome, <?php echo $student_name; ?>!</h1>
</body>
</html> 