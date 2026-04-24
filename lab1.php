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
            font-size: 16px;
            margin: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        h1 {
            font-size: 28px;
            margin: 10px 0;
        }

        ul {
            margin: 10px 0;
            padding-left: 20px;
        }

        li {
            margin: 3px 0;
        }

        input[type="text"],
        input[type="submit"] {
            width: 100%;
            box-sizing: border-box;
            padding: 6px;
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

<h1>Enter 5 Fruits</h1>

<form method="POST">
    Fruit 1: <input type="text" name="fruit1"><br>
    Fruit 2: <input type="text" name="fruit2"><br>
    Fruit 3: <input type="text" name="fruit3"><br>
    Fruit 4: <input type="text" name="fruit4"><br>
    Fruit 5: <input type="text" name="fruit5"><br>

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

    echo "<h1>Your Favorite Fruits:</h1>"; 
    echo "<ul>";

    foreach($fruits as $fruit) {
        echo "<li>$fruit</li>";
    }

    echo "</ul>";

    echo "<h2><strong>My favorite fruit is: " . $fruits[0] . "</strong></h2>";
}
?>

</body>
</html>