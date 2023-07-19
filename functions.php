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
