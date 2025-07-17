<?php
session_start();
if (!isset($_SESSION['admin'])) {
    echo "Access denied.";
    exit();
}

require('connect.php');
$result = $conn->query("SELECT * FROM feedback ORDER BY created_at DESC");

echo "<h2>All Feedbacks</h2>";
echo "<table border='1'><tr><th>Name</th><th>Email</th><th>Feedback</th><th>Time</th></tr>";
while ($row = $result->fetch_assoc()) {
  echo "<tr><td>{$row['name']}</td><td>{$row['email']}</td><td>{$row['message']}</td><td>{$row['created_at']}</td></tr>";
}
echo "</table>";
$conn->close();
?>

<form action='logout.php' method='post' style='text-align: right;'>
    <button type='submit' style='padding: 6px 12px;'>Logout</button>
</form>