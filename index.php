<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Simple Static Greeting</title>
</head>
<body>

    <h2>Welcome Form</h2>

    <!-- HTML Form -->
    <form id="greetingForm">
        <label for="name">Enter your name:</label>
        <input type="text" id="name" name="name" required>
        <button type="submit">Submit</button>
    </form>

    <h3 id="greetingOutput"></h3>

    <script>
        document.getElementById('greetingForm').addEventListener('submit', function(event) {
            // Prevent the page from actually reloading
            event.preventDefault();
            
            // Get the value from the input field
            const nameInput = document.getElementById('name').value;
            
            // Display the greeting
            document.getElementById('greetingOutput').innerText = `Hello, ${nameInput}! Welcome to GitHub Pages.`;
        });
    </script>

</body>
</html>
