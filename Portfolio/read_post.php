<?php include('includes/db_connect.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="assets/style.css">
  <title>Blog Post</title>
</head>
<body>

<?php include('includes/header.php'); ?>

<div class="container">
  <?php
    if (isset($_GET['id'])) {
      $id = $_GET['id'];
      $sql = "SELECT * FROM blog_posts WHERE id=$id";
      $result = $conn->query($sql);

      if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
          echo "<h1>" . $row['title'] . "</h1>";
          echo "<p><small>Posted on: " . $row['date_posted'] . "</small></p>";
          echo "<p>" . $row['content'] . "</p>";
        }
      } else {
        echo "<p>No blog post found.</p>";
      }
    } else {
      echo "<p>Invalid request.</p>";
    }
  ?>
</div>

<?php include('includes/footer.php'); ?>

</body>
</html>
