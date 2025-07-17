<?php
$conn = new mysqli(
  "sql303.infinityfree.com",  // Replace with your DB host
  "if0_39486897",             // Your username
  "fIFXmqiKVb",            // Your DB password
  "if0_39486897_feedback"     // Your DB name
);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
?>