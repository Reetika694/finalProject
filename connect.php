<?php
$conn = new mysqli(
  "sql303.infinityfree.com",  // Replace with your DB host
  "",             // Your username
  "",            // Your DB password
  ""     // Your DB name
);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
?>