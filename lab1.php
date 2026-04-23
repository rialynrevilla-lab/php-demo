<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fruits</title>

    <style>
        body {
            background-color: #e3678e;
            color: #22201e;
            font-family: Georgia, serif;
        }

        h1 {
            font-size: 40px;
        }

        input[type="text"] {
            background-color: #2c2f36;
            color: white;
            border: 1px solid #d89e9e;
            padding: 5px;
        }

        input[type="submit"] {
            background-color: #555;
            color: white;
            padding: 8px;
            border: 1px solid white;
            cursor: pointer;
        }
    </style>
</head>
<body>

<h1>Enter 5 Fruits</h1>

<form method="POST">
    Fruit 1: <input type="text" name="fruit1"><br><br>
    Fruit 2: <input type="text" name="fruit2"><br><br>
    Fruit 3: <input type="text" name="fruit3"><br><br>
    Fruit 4: <input type="text" name="fruit4"><br><br>
    Fruit 5: <input type="text" name="fruit5"><br><br>

    <input type="submit" name="submit" value="Save My Fruits">
</form>

<?php
if(isset($_POST['submit'])) {
    $fruits = array(
        $_POST['fruit1'],
        $_POST['fruit2'],
        $_POST['fruit3'],
        $_POST['fruit4'],
        $_POST['fruit5']
    );

    echo "<h2>Your Favorite Fruits:</h2>";
    echo "<ul>";

    foreach($fruits as $fruit) {
        echo "<li>$fruit</li>";
    }

    echo "</ul>";

    echo "<h2><strong>My favorite fruit is: " . $fruits[0] . "</strong></h2>";
}
?>
<br>
<a href="index.php"> Back to Homescreen </a>

</body>
</html>