<?php
include('../config/db.php');
session_start();
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $roll = $_POST['roll'];
    $query = $conn->query("SELECT * FROM students WHERE roll='$roll'");
    if ($query->num_rows > 0) {
        $_SESSION['roll'] = $roll;
        header('Location: result.php');
    } else {
        echo "Invalid Roll Number!";
    }
}
?>
<form method="post">
    Enter Roll Number: <input type="text" name="roll">
    <input type="submit" value="Login">
</form>