<?php include('includes/db_connect.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="assets/style.css">
  <title>Blog</title>
</head>
<body>

<?php include('includes/header.php'); ?>

<div class="container">
  <h1>Blog</h1>

  <?php
    $sql = "SELECT * FROM blog_posts ORDER BY date_posted DESC";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
      while ($row = $result->fetch_assoc()) {
        echo "<div class='blog-post'>";
        echo "<h2>" . $row['title'] . "</h2>";
        echo "<p><small>Posted on: " . $row['date_posted'] . "</small></p>";
        echo "<p>" . substr($row['content'], 0, 200) . "... <a href='read_post.php?id=" . $row['id'] . "'>Read More</a></p>";
        echo "</div>";
      }
    } else {
      echo "<p>No blog posts available.</p>";
    }
  ?>
</div>

<?php include('includes/footer.php'); ?>

</body>
</html>
