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
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .card {
            width: 60%;
            min-width: 500px;
        }
        .form-control {
            width: 80px;
        }
        h1, h2 {
            color: #007bff;
        }
        label {
            font-size: 20px;
            margin-right: 10px;
        }
        .alert {
            margin-top: 20px;
        }
    </style>
</head>

<body class="bg-dark">
    <div class="container card d-flex flex-column align-items-center justify-content-between my-5 py-5 shadow-lg">
        <h1 class="py-1">Strong Password Generator</h1>
        <h2 class="py-2">Genera una password sicura</h2>
        <form class="py-5 d-flex align-items-center ">
            <label for="length">Password Length:</label>
            <div class="col-auto">
                <input class="form-control" type="number" id="length" name="length" min="1" required >
            </div>
            <div class="col-auto">
                <input type="submit" value="Generate" class="btn btn-primary">
            </div>
        </form>
    </div>
    <?php
        if (!empty($alertMessage)) {
            echo $alertMessage;
        }
    ?>
</body>
</html>
