<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comparison Tool</title>
    <style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f4f4f4;
        margin: 0;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
    }

    .tool {
        background-color: #fff;
        border: 1px solid #ccc;
        border-radius: 10px;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        padding: 20px;
        text-align: center;
        width: 300px;
    }

    h1 {
        font-size: 24px;
        margin-bottom: 20px;
        color: #333;
    }

    label {
        font-weight: bold;
    }

    input[type="number"] {
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
        padding: 10px;
        font-size: 16px;
        border-radius: 5px;
        transition: background-color 0.3s ease;
        width: 100%;
    }

    button:hover {
        background-color: #0056b3;
    }

    .result {
        margin-top: 20px;
        font-size: 18px;
        background-color: #007bff;
        color: #fff;
        padding: 15px;
        border-radius: 5px;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    }
</style>

</head>
<body>
    <div class="tool">
        <h1>Comparison Tool</h1>
        <form action="comparison_tool.php" method="post">
            <label for="number1">Enter Number 1:</label>
            <input type="number" name="number1" id="number1" required>
            <label for="number2">Enter Number 2:</label>
            <input type="number" name="number2" id="number2" required>
            <button type="submit">Compare</button>
        </form>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $number1 = (int)$_POST["number1"];
            $number2 = (int)$_POST["number2"];
            $largerNumber = ($number1 > $number2) ? $number1 : $number2;
            echo "<div class='result'>The larger number is: $largerNumber</div>";
        }
        ?>
    </div>
</body>
</html>
