<?php
include('../config/db.php');
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $student_id = $_POST['student_id'];
    $subject = $_POST['subject'];
    $marks = $_POST['marks'];
    $conn->query("INSERT INTO results (student_id, subject, marks) VALUES ('$student_id', '$subject', '$marks')");
    echo "Result added!";
}
?>
<form method="post">
    Student ID: <input type="text" name="student_id"><br>
    Subject: <input type="text" name="subject"><br>
    Marks: <input type="number" name="marks"><br>
    <input type="submit" value="Add Result">
</form>