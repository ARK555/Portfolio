<?php
session_start();

// Check if the admin is logged in
if (!isset($_SESSION['admin_id'])) {
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../assets/style.css">
  <title>Admin Dashboard</title>
</head>
<body>

<div class="container">
  <h1>Admin Dashboard</h1>

  <nav>
    <ul>
      <li><a href="add_project.php">Add Project</a></li>
      <li><a href="add_blog_post.php">Add Blog Post</a></li>
      <li><a href="logout.php">Logout</a></li>
    </ul>
  </nav>
</div>

</body>
</html>
