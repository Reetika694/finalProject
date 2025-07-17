
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Submit Feedback</title>
  <style>
    body {
      background: linear-gradient(to right, #6a11cb, #2575fc);
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      margin: 0;
    }

    .feedback-container {
      background: white;
      padding: 30px 40px;
      border-radius: 15px;
      box-shadow: 0 10px 30px rgba(0,0,0,0.2);
      width: 100%;
      max-width: 500px;
    }

    h2 {
      text-align: center;
      margin-bottom: 20px;
      color: #333;
    }

    label {
      display: block;
      margin-top: 15px;
      font-weight: bold;
      color: #555;
    }

    input[type="text"],
    input[type="email"],
    textarea {
      width: 100%;
      padding: 10px;
      margin-top: 5px;
      border: 1px solid #ccc;
      border-radius: 8px;
      font-size: 16px;
      box-sizing: border-box;
    }

    textarea {
      resize: vertical;
      min-height: 100px;
    }

    button {
      margin-top: 20px;
      background: #2575fc;
      color: white;
      border: none;
      padding: 12px 20px;
      border-radius: 8px;
      width: 100%;
      font-size: 16px;
      cursor: pointer;
      transition: background 0.3s ease;
    }

    button:hover {
      background: #005ce6;
    }

    .success-message {
      color: green;
      text-align: center;
      margin-top: 15px;
    }
  </style>
</head>
<body>
  <div class="feedback-container">
    <h2>📝 Feedback Form</h2>
    <form action="submit_feedback.php" method="POST">
      <label for="name">Your Name</label>
      <input type="text" name="name" id="name" required>

      <label for="email">Your Email</label>
      <input type="email" name="email" id="email" required>

      <label for="message">Your Feedback</label>
      <textarea name="message" id="message" required></textarea>

      <button type="submit">Submit Feedback</button>
    </form>
  </div>
</body>
</html>