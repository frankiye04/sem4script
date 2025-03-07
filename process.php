<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') 
{
 $name = $_POST['name'];
 $age = $_POST['age'];
 $marks = [
 $_POST['mark1'],
 $_POST['mark2'],
 $_POST['mark3'],
 $_POST['mark4'],
 $_POST['mark5']
 ];
 $total = array_sum($marks);
 $average = $total / count($marks);
 echo "<h1>Student Biodata</h1>";
 echo "<p>Name: $name</p>";
 echo "<p>Age: $age</p>";
 echo "<h3>Marks:</h3>";
 foreach ($marks as $key => $mark) {
 echo "<p>Subject " . ($key + 1) . ": $mark</p>";
 }
 echo "<h3>Results:</h3>";
 echo "<p>Total Marks: $total</p>";
 echo "<p>Average Marks: $average</p>";
}
?> 