<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ATM Machine Simulator</title>

    <style>
        body {
            background-color: #e4d571;
            color: #1b1918;
            font-family: Georgia, serif;
            font-size: 16px;
            margin: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        h1 {
            font-size: 28px;
        }

        input, select {
            background-color: #2c2f36;
            color: white;
            border: 1px solid #555;
            padding: 5px;
            font-family: Georgia, serif;
            font-size: 15px;
        }

        input[type="submit"] {
            background-color: #555;
            cursor: pointer;
            color: white;
            border: 1px solid #555;
            padding: 5px;
            font-size: 15px;
            width: 100%;
            margin-top: 10px;
        }

        hr {
            margin: 20px 0;
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
            box-sizing: border-box;
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

    <h1>ATM Machine Simulator</h1>

    <form method="POST">
        Account Name: <input type="text" name="name" required><br><br>
        Initial Balance: <input type="number" name="balance" step="0.01" min="0" required><br><br>

        Action:
        <select name="action">
            <option value="check">Check Balance</option>
            <option value="deposit">Deposit</option>
            <option value="withdraw">Withdraw</option>
        </select><br><br>

        Amount (for Deposit/Withdraw):
        <input type="number" name="amount" step="0.01" min="0" value="0"><br><br>

        <input type="submit" name="submit" value="Submit Transaction">
    </form>

    <hr>

    <h2>Transaction Result</h2>

    <?php

    class ATM {
        public $name;
        public $balance;

        function __construct($name, $balance) {
            $this->name = $name;
            $this->balance = floatval($balance);
        }

        function deposit($amount) {
            $amount = floatval($amount);
            $this->balance += $amount;
            return "Deposit of $" . number_format($amount, 2);
        }

        function withdraw($amount) {
            $amount = floatval($amount);
            if($amount > $this->balance) {
                return "Withdrawal failed (Insufficient Balance)";
            } else {
                $this->balance -= $amount;
                return "Withdrawal of $" . number_format($amount, 2);
            }
        }

        function checkBalance() {
            return "Current Balance: $" . number_format($this->balance, 2);
        }
    }

    if(isset($_POST['submit'])) {
        $name = htmlspecialchars($_POST['name']);
        $balance = floatval($_POST['balance']);
        $amount = floatval($_POST['amount']);
        $action = $_POST['action'];

        $atm = new ATM($name, $balance);

        echo "<p><strong>Account:</strong> " . htmlspecialchars($name) . "</p>";

        if($action == "deposit") {
            $result = $atm->deposit($amount);
            echo "<p><strong>Action:</strong> $result</p>";
            echo "<p><strong>New Balance:</strong> " . $atm->checkBalance() . "</p>";
        }
        elseif($action == "withdraw") {
            $result = $atm->withdraw($amount);
            echo "<p><strong>Action:</strong> $result</p>";
            if(strpos($result, 'failed') === false) {
                echo "<p><strong>New Balance:</strong> " . $atm->checkBalance() . "</p>";
            }
        }
        else { // check balance
            echo "<p><strong>Action:</strong> " . $atm->checkBalance() . "</p>";
        }
    }

    ?>

</body>
</html>
