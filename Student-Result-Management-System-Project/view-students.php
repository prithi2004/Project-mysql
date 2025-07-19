<?php
include('../config/db.php');
$result = $conn->query("SELECT * FROM students");
echo "<h2>All Students</h2><table border='1'><tr><th>ID</th><th>Name</th><th>Roll</th><th>Class</th></tr>";
while ($row = $result->fetch_assoc()) {
    echo "<tr><td>{$row['id']}</td><td>{$row['name']}</td><td>{$row['roll']}</td><td>{$row['class']}</td></tr>";
}
echo "</table>";