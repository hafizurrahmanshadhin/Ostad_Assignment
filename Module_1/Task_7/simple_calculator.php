<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Calculator</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .calculator {
            background-color: #fff;
            border: 1px solid #ccc;
            border-radius: 10px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            padding: 20px;
            width: 300px;
            text-align: center;
            position: relative;
        }

        h1 {
            font-size: 24px;
            margin-bottom: 20px;
            color: #333;
            text-align: center;
        }

        form {
            display: flex;
            flex-direction: column;
            gap: 10px;
        }

        input,
        select,
        button {
            padding: 10px;
            font-size: 16px;
            border: 1px solid #ccc;
            border-radius: 5px;
            outline: none;
            width: 100%;
        }

        button {
            background-color: #007bff;
            color: #fff;
            border: none;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        button:hover {
            background-color: #0056b3;
        }

        .result {
            margin-top: 20px;
            font-size: 18px;
            text-align: center;
            background-color: #f5f5f5;
            padding: 15px;
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            color: #333;
        }

        .result span {
            font-weight: bold;
            color: #007bff;
        }
    </style>
</head>
<body>
    <div class="calculator">
        <h1 class="project-name">Simple Calculator</h1>
        <form action="simple_calculator.php" method="post">
            <input type="text" name="num1" placeholder="Enter number 1" required>
            <input type="text" name="num2" placeholder="Enter number 2" required>
            <select name="operation" required>
                <option value="add">Addition (+)</option>
                <option value="subtract">Subtraction (-)</option>
                <option value="multiply">Multiplication (*)</option>
                <option value="divide">Division (/)</option>
                <option value="modulus">Modulus (%)</option>
            </select>
            <button type="submit">Calculate</button>
        </form>
        <div class="result">
            <p>Result:</p>
            <span><?php
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    $num1 = $_POST["num1"];
                    $num2 = $_POST["num2"];
                    $operation = $_POST["operation"];
                    $result = "";

                    switch ($operation) {
                        case "add":
                            $result = $num1 + $num2;
                            break;
                        case "subtract":
                            $result = $num1 - $num2;
                            break;
                        case "multiply":
                            $result = $num1 * $num2;
                            break;
                        case "divide":
                            if ($num2 != 0) {
                                $result = number_format($num1 / $num2, 2);
                            } else {
                                $result = "Cannot divide by zero!";
                            }
                            break;
                        case "modulus":
                            if ($num2 != 0) {
                                $result = $num1 % $num2;
                            } else {
                                $result = "Cannot calculate modulus with zero!";
                            }
                            break;
                    }

                    echo $result;
                }
            ?></span>
        </div>
    </div>
</body>
</html>
