<?php
function generatePassword($length) {
    $password = "";

    // Generate a password of the requested length
    for ($i = 0; $i < $length; $i++) {
        // Generate a random ASCII code between 33 and 126
        $randomAscii = mt_rand(33, 126);

        // Convert the ASCII code to a character and append it to the password
        $password .= chr($randomAscii);
        
    }
    return $password;
}

// Initialize an empty message string
$alertMessage = "";

// Check if 'length' parameter exists in the GET request
if (isset($_GET['length'])) {
    // Convert the 'length' parameter to an integer
    $length = intval($_GET['length']);

    // Check if length is greater than 0
    if ($length > 0) {
            // Call the function to generate the password
            $password = generatePassword($length);

            // Store a success message in the alertMessage variable
            $alertMessage = "<div class='alert alert-success'>Generated Password: {$password}</div>";
        } else {
            // Store an error message in the alertMessage variable if length is not greater than 0
            $alertMessage = "<div class='alert alert-danger'>Password length should be greater than 0!</div>";
        }
    }
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
