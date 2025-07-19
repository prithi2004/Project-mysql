<?php
include('../config/db.php');
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $roll = $_POST['roll'];
    $class = $_POST['class'];
    $sql = "INSERT INTO students (name, roll, class) VALUES ('$name', '$roll', '$class')";
    $conn->query($sql);
    echo "Student added!";
}
?>
<form method="post">
    Name: <input type="text" name="name"><br>
    Roll No: <input type="text" name="roll"><br>
    Class: <input type="text" name="class"><br>
    <input type="submit" value="Add Student">
</form>