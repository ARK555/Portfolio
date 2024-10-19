<?php include('includes/db_connect.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="assets/style.css">
  <title>Projects</title>
</head>
<body>

<?php include('includes/header.php'); ?>

<div class="container">
  <h1>My Projects</h1>

  <?php
    $sql = "SELECT * FROM projects ORDER BY date_added DESC";
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
<?php include('includes/db_connect.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="assets/style.css">
  <title>Projects</title>
</head>
<body>

<?php include('includes/header.php'); ?>

<div class="container">
  <h1>My Projects</h1>

  <?php
    $sql = "SELECT * FROM projects ORDER BY date_added DESC";
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
