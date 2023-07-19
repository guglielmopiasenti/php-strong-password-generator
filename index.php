<?php
include 'functions.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
    <form>
        <label for="length">Password Length:</label>
        <input type="number" id="length" name="length" min="1" required>
        <input type="submit" value="Generate">
    </form>
    <?php
        if (!empty($alertMessage)) {
            echo $alertMessage;
        }
    ?>
</body>
</html>
