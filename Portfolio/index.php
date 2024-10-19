<?php include('includes/db_connect.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="assets/style.css">
  <title>Portfolio</title>
</head>
<body>

<?php include('includes/header.php'); ?>

<div class="container">
  <h1>Welcome to My Portfolio</h1>
  <p>Welcome to my portfolio! I’m a web developer with a passion for building clean, modern, and fully responsive websites. With expertise in both front-end and back-end development, I focus on creating user-friendly and scalable solutions that meet clients' needs. Whether you're a startup looking to create an online presence or a company needing a custom web application, I can bring your vision to life. Explore my work and feel free to reach out to discuss how I can help with your next project.</p>
  
  <h2>Featured Project</h2>
  <?php
    $sql = "SELECT * FROM projects ORDER BY date_added DESC LIMIT 1";
    $result = $conn->query($sql);
    
    if ($result->num_rows > 0) {
      while ($row = $result->fetch_assoc()) {
        echo "<div class='project'>";
        echo "<h3>" . $row['title'] . "</h3>";
        echo "<p>" . $row['description'] . "</p>";
        echo "<img src='" . $row['image_url'] . "' alt='Project Image'>";
        echo "</div>";
      }
    } else {
      echo "<p>No projects available.</p>";
    }
  ?>
</div>

<?php include('includes/footer.php'); ?>

</body>
</html>
