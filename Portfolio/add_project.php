<?php include('includes/db_connect.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="assets/style.css">
  <title>Add Project</title>
</head>
<body>
  <?php include('includes/header.php'); ?>
  
  <div class="container">
    <h1>Add New Project</h1>
    
    <form action="" method="POST" class="project-form">
      <div class="form-group">
        <label for="title">Project Title</label>
        <input type="text" id="title" name="title" required>
      </div>
      
      <div class="form-group">
        <label for="description">Project Description</label>
        <textarea id="description" name="description" rows="5" required></textarea>
      </div>
      
      <div class="form-group">
        <label for="image_url">Image URL</label>
        <input type="url" id="image_url" name="image_url" required>
      </div>
      
      <button type="submit" name="submit" class="btn-submit">Add Project</button>
    </form>

    <?php
    if (isset($_POST['submit'])) {
      $title = $_POST['title'];
      $description = $_POST['description'];
      $image_url = $_POST['image_url'];

      $sql = "INSERT INTO projects (title, description, image_url) VALUES ('$title', '$description', '$image_url')";

      if ($conn->query($sql) === TRUE) {
        echo "<p class='success-msg'>Project added successfully!</p>";
      } else {
        echo "<p class='error-msg'>Error: " . $conn->error . "</p>";
      }
    }
    ?>
  </div>

  <?php include('includes/footer.php'); ?>
</body>
</html>
