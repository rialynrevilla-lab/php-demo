<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            background-color: #6acdde;
            color: #1a1817;
            font-family: Georgia, serif;
            font-size: 20px;
            margin: 0;
            display: flex;
            flex-direction: column;

            align-items: center;
            height: 100vh;
        }

        h1 {
            font-size: 40px;
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

<div class="container">
     <h1>PHP Laboratories</h1>

    <p>Laboratory 1 - My Favorite Fruit</p>
    <p>Laboratory 2 - Temperature Converter</p>
    <p>Laboratory 3 - ATM Machine Simulator</p>

</div>
   
</body>
</html>