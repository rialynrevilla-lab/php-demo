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
            margin: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        h2 {
            font-size: 35px;
        }

        h3 {
            font-size: 20px;
        }

        form {
            display: flex;
            flex-direction: column;
            align-items: center;
            font-size: 30px;
        }

        input[type="number"] {
            background-color: #2c2f36;
            color: white;
            border: 1px solid #555;
            padding: 5px;
            text-align: center;
        }

        input[type="submit"] {
            background-color: #555;
            color: white;
            padding: 5px 10px;
            border: 1px solid #555;
            cursor: pointer;
        }

        .navbar {
            width: 100%;
            background-color: #333;
            padding: 15px;
            text-align: center;
            display: flex;
            justify-content: center;
            gap: 25px
        }

        .navbar a {
            color: white;
            text-decoration: none;
            margin: 0 15px;
            font-weight: bold;
            font-size: 18px;
            font-family: Georgia, serif;
        }

        .navbar a:hover {
            text-decoration: underline;
        }

        .container {
            width: 90%;
            max-width: 400px;
            margin-top: 20px;
        }


        input, select {
            width: 100%;
            margin-top: 5px;
            margin-bottom: 10px;
        }
    </style>
</head>
<body>

<div class="navbar">
    <a href="index.php">Home</a>
    <a href="lab1.php">Lab 1</a>
    <a href="lab2.php">Lab 2</a>
    <a href="lab3.php">Lab 3</a>
</div>

<h2> Temperature Converter </h2>

<form method="POST">
    Enter Celsius: 
    <input type="number" name="celsius" required>
    <input type="submit" name="convert" value="Convert to Fahrenheit">
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

</body>
</html>