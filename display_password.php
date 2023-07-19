<?php
// Start the session
session_start();

// Check if the password session variable exists
if (isset($_SESSION['password'])) {
    $password = $_SESSION['password'];
    $alertMessage = "<div class='alert alert-success'>Generated Password: {$password}</div>";
} else {
    $alertMessage = "<div class='alert alert-danger'>No password generated yet!</div>";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password Display</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
    <?php
        if (!empty($alertMessage)) {
            echo $alertMessage;
        }
    ?>
    <a href="index.php" class="btn btn-primary">Go Back</a>
</body>
</html>
