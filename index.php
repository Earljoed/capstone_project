<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Simple PHP Greeting</title>
</head>
<body>

    <h2>Welcome Form</h2>

    <!-- HTML Form that submits to itself -->
    <form method="POST" action="">
        <label for="name">Enter your name:</label>
        <input type="text" id="name" name="name" required>
        <button type="submit">Submit</button>
    </form>

    <?php
    // Check if the form has been submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Sanitize the input to prevent XSS
        $name = htmlspecialchars($_POST['name']);
        
        echo "<h3>Hello, $name! Welcome to PHP.</h3>";
    }
    ?>

</body>
</html>