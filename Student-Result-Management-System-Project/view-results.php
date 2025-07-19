<?php
include('../config/db.php');
$res = $conn->query("SELECT students.name, results.subject, results.marks 
                     FROM results JOIN students ON results.student_id = students.id");
echo "<h2>All Results</h2><table border='1'><tr><th>Name</th><th>Subject</th><th>Marks</th></tr>";
while ($row = $res->fetch_assoc()) {
    echo "<tr><td>{$row['name']}</td><td>{$row['subject']}</td><td>{$row['marks']}</td></tr>";
}
echo "</table>";