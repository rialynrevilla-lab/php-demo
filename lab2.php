<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Temperature Converter </title>

    <style>
        body {
            background-color: #da5d5d;
            color: #191717;
            font-family: gergia, serif;
            font-size: 20px;
        }

        h2 {
            font-size: 40px;
        }

        input[type="number"] {
            background-color: #2c2f36;
            color: white;
            border: 1px solid #555;
            padding: 5px;
        }

        input[type="submit"] {
            background-color: #555;
            color: white;
            padding: 5px 10px;
            border: 1px solid #555;
            cursor: pointer;
        }
    </style>
</head>
<body>

<h2> Temperature Converter </h2>

<form method="POST">
    Enter Celsius: 
    <input type="number" name="celsius" required>
    <input type="submit" name="convert" value="Conver to Fahrenheit">
</form>

<h3>Result:</h3>

<?php
function convertToFahrenheit($celsius) {
    return ($celsius * 9/5) + 32;
}

if(isset($_POST['convert'])) {
    $celsius = $_POST['celsius'];
    $fahrenheit = convertToFahrenheit($celsius);

    echo "<p>{$celsius}°C = " . round($fahrenheit, 1) . "°F</p>";
}
?>

<a href="index.php"> Back to Homescreen </a>
</body>
</html>