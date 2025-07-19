<?php
include('../config/db.php');
session_start();
$roll = $_SESSION['roll'];
$res = $conn->query("SELECT s.name, r.subject, r.marks 
                     FROM results r 
                     JOIN students s ON r.student_id = s.id 
                     WHERE s.roll = '$roll'");
echo "<h2>Student Results</h2><table border='1'><tr><th>Name</th><th>Subject</th><th>Marks</th></tr>";
while ($row = $res->fetch_assoc()) {
    echo "<tr><td>{$row['name']}</td><td>{$row['subject']}</td><td>{$row['marks']}</td></tr>";
}
echo "</table>";
?>
<a href="../logout.php">Logout</a>