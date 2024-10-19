<?php
// Include the database connection file
include('includes/db_connect.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/style.css">
    <title>Add New Blog Post</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css" rel="stylesheet">
    <style>
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }
        .fade-in {
            animation: fadeIn 0.5s ease-out;
        }
        .transition-all {
            transition: all 0.3s ease;
        }
    </style>
</head>
<body class="bg-gray-100 flex items-center justify-center">

<?php include('includes/header.php'); ?>

    <div class="container mx-auto px-4 py-8 max-w-2xl">
        <h1 class="text-4xl font-bold text-center mb-8 text-indigo-700 fade-in">Add New Blog Post</h1>
        
        <form id="blogForm" action="add_blog_post.php" method="POST" class="bg-white shadow-md rounded-lg px-8 pt-6 pb-8 mb-4 fade-in" style="animation-delay: 0.2s;">
            <div class="mb-6">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="title">
                    Blog Title
                </label>
                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline transition-all" id="title" type="text" name="title" placeholder="Enter blog title" required>
            </div>
            <div class="mb-6">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="content">
                    Content
                </label>
                <textarea class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline transition-all" id="content" name="content" rows="10" placeholder="Write your content here" required></textarea>
            </div>
            <div class="flex items-center justify-center">
                <button class="bg-indigo-600 hover:bg-indigo-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline transition-all transform hover:scale-105" type="submit" name="submit">
                    Add Blog Post
                </button>
            </div>
        </form>
        
        <div id="message" class="text-center mt-4"></div>
    </div>

    <script>
        document.getElementById('blogForm').addEventListener('submit', function(e) {
            e.preventDefault();
            
            setTimeout(() => {
                document.getElementById('message').innerHTML = '<p class="text-green-600 font-semibold fade-in">Blog post added successfully!</p>';
                document.getElementById('blogForm').reset();
            }, 1000);
        });
    </script>
  <?php
    if (isset($_POST['submit'])) {
        // Ensure that the connection is established
        if (isset($conn)) {
            $title = $_POST['title'];
            $content = $_POST['content'];

            // Insert blog post into the database
            $sql = "INSERT INTO blog_posts (title, content) VALUES ('$title', '$content')";

            if ($conn->query($sql) === TRUE) {
                echo "<p>Blog post added successfully!</p>";
            } else {
                echo "<p class='error'>Error: " . $conn->error . "</p>";
            }
        } else {
            echo "<p class='error'>Database connection error.</p>";
        }
    }
  ?>
</div>

<?php include('includes/footer.php'); ?>

</body>
</html>
