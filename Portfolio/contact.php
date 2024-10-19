<?php include('includes/db_connect.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="assets/style.css">
  <title>Contact</title>
  
  <!-- Embedded CSS -->
  <style>
    /* Container styling */
    .container {
      max-width: 600px;
      margin: 50px auto;
      padding: 30px;
      background-color: #f8f9fa;
      border-radius: 10px;
      box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
    }

    /* Form title */
    h1 {
      text-align: center;
      font-size: 28px;
      margin-bottom: 20px;
      color: #343a40;
    }

    /* Form layout */
    .contact-form .form-group {
      margin-bottom: 20px;
    }

    /* Labels styling */
    label {
      display: block;
      font-weight: bold;
      margin-bottom: 5px;
      color: #495057;
    }

    /* Input fields styling */
    input[type="text"], input[type="email"], textarea {
      width: 100%;
      padding: 12px;
      border: 1px solid #ced4da;
      border-radius: 5px;
      font-size: 16px;
      color: #495057;
      background-color: #fff;
      transition: border-color 0.3s;
    }

    input[type="text"]:focus, input[type="email"]:focus, textarea:focus {
      border-color: #80bdff;
      outline: none;
      box-shadow: 0 0 5px rgba(0, 123, 255, 0.25);
    }

    /* Textarea styling */
    textarea {
      resize: vertical;
    }

    /* Button styling */
    .btn-submit {
      display: block;
      width: 100%;
      padding: 12px;
      background-color: #007bff;
      color: white;
      border: none;
      border-radius: 5px;
      font-size: 18px;
      cursor: pointer;
      transition: background-color 0.3s ease;
    }

    .btn-submit:hover {
      background-color: #0056b3;
    }

    /* Success and error messages */
    .success-msg {
      color: #28a745;
      text-align: center;
      margin-top: 20px;
      font-weight: bold;
    }

    .error-msg {
      color: #dc3545;
      text-align: center;
      margin-top: 20px;
      font-weight: bold;
    }
  </style>
</head>
<body>

<?php include('includes/header.php'); ?>

<div class="container">
  <h1>Contact Me</h1>

  <form action="" method="POST" class="contact-form">
    <div class="form-group">
      <label for="name">Your Name</label>
      <input type="text" id="name" name="name" required>
    </div>

    <div class="form-group">
      <label for="email">Your Email</label>
      <input type="email" id="email" name="email" required>
    </div>

    <div class="form-group">
      <label for="message">Your Message</label>
      <textarea id="message" name="message" rows="6" required></textarea>
    </div>

    <button type="submit" name="submit" class="btn-submit">Send Message</button>
  </form>

  <?php
    if (isset($_POST['submit'])) {
      $name = $_POST['name'];
      $email = $_POST['email'];
      $message = $_POST['message'];

      $sql = "INSERT INTO contacts (name, email, message) VALUES ('$name', '$email', '$message')";

      if ($conn->query($sql) === TRUE) {
        echo "<p class='success-msg'>Message sent successfully!</p>";
      } else {
        echo "<p class='error-msg'>Error: " . $conn->error . "</p>";
      }
    }
  ?>
</div>

<?php include('includes/footer.php'); ?>

</body>
</html>
