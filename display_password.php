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
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .card {
            width: 40%;
            min-width: 300px;
        }
        .alert {
            margin-top: 20px;
        }
    </style>
</head>
<body class="bg-dark d-flex justify-content-center">
    <div class="container card d-flex flex-column align-items-center justify-content-between my-5 py-5 shadow-lg">
        <h1>Your new password is ready!</h1>
        <?php
            if (!empty($alertMessage)) {
                echo $alertMessage;
            }
        ?>
        <a href="index.php" class="btn btn-primary">Go Back</a>
    </div>
</body>
</html>
