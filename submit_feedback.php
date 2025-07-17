<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
?>

<?php
// submit_feedback.php
include 'connect.php'; // assumes you already have a working DB connection setup here

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = trim($_POST["name"]);
    $email = trim($_POST["email"]);
    $message = trim($_POST["message"]);

    // Optional: basic validation
    if (!empty($name) && !empty($email) && !empty($message)) {
        $stmt = $conn->prepare("INSERT INTO feedback (name, email, message) VALUES (?, ?, ?)");
        $stmt->bind_param("sss", $name, $email, $message);

        if ($stmt->execute()) {
            echo "<script>
                alert('Thank you for your feedback!');
                window.location.href = 'feedback.php';
            </script>";
        } else {
            echo "Error saving feedback: " . $stmt->error;
        }

        $stmt->close();
    } else {
        echo "All fields are required.";
    }

    $conn->close();
} else {
    echo "Invalid request.";
}
?>