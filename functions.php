<?php
// Start the session
session_start();

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

// Check if 'length' parameter exists in the GET request
if (isset($_GET['length'])) {
    // Convert the 'length' parameter to an integer
    $length = intval($_GET['length']);

    // Check if length is greater than 0
    if ($length > 0) {
        // Call the function to generate the password
        $password = generatePassword($length);

        // Store the password in a session variable
        $_SESSION['password'] = $password;

        // Redirect to the password display page
        header("Location: display_password.php");
        exit;
    }
}
?>