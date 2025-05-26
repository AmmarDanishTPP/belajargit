<?php
// Basic PHP variables
$name = "Visitor";
$age = 20;

// Simple conditional
if ($age >= 18) {
    $status = "Adult";
} else {
    $status = "Minor";
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>My First PHP Page</title>
</head>
<body>
    <h1>Welcome to PHP!</h1>

    <p>Hellodfdf, <?php echo $name; ?>. You are an <?php echo $status; ?>.</p>

    <!-- Simple form using GET -->
    <form method="get">
        <label>Enter your name:</label>
        <input type="text" name="username">
        <button type="submit">Submit</button>
    </form>

    <?php
    // Handle GET request from form
    if (isset($_GET['username']) && $_GET['username'] != "") {
        echo "<p>Nice to meet you, " . htmlspecialchars($_GET['username']) . "!</p>";
    }
    ?>
</body>
</html>
