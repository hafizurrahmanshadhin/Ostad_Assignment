<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grade Calculator</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            display: flex;
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
            text-align: center;
            width: 300px;
        }

        h1 {
            font-size: 24px;
            margin-bottom: 20px;
            color: #333;
        }

        form {
            display: flex;
            flex-direction: column;
            gap: 10px;
        }

        label {
            font-weight: bold;
            color: #555;
        }

        input[type="number"] {
            padding: 10px;
            font-size: 16px;
            border: 1px solid #ccc;
            border-radius: 5px;
            outline: none;
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
        }

        button:hover {
            background-color: #0056b3;
        }

        .result {
            margin-top: 20px;
            font-size: 18px;
            background-color: #f5f5f5;
            padding: 15px;
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            color: #333;
        }

        .error {
            margin-top: 20px;
            font-size: 18px;
            background-color: #ffdddd;
            padding: 15px;
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            color: #d8000c;
        }
    </style>
</head>
<body>
    <div class="calculator">
        <h1>Grade Calculator</h1>
        <form action="grade_calculator.php" method="post">
            <label for="test1">Test 1:</label>
            <input type="number" name="test1" id="test1" required min="0" max="100">
            <label for="test2">Test 2:</label>
            <input type="number" name="test2" id="test2" required min="0" max="100">
            <label for="test3">Test 3:</label>
            <input type="number" name="test3" id="test3" required min="0" max="100">
            <button type="submit">Calculate</button>
        </form>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $test1 = (float)$_POST["test1"];
            $test2 = (float)$_POST["test2"];
            $test3 = (float)$_POST["test3"];
            
            if ($test1 < 0 || $test1 > 100 || $test2 < 0 || $test2 > 100 || $test3 < 0 || $test3 > 100) {
                echo "<div class='error'>Error: Test scores must be between 0 and 100.</div>";
            } else {
                $average = ($test1 + $test2 + $test3) / 3;
                $average = number_format($average, 2);
                $grade = "";

                if ($average >= 70) {
                    $grade = "A";
                } elseif ($average >= 60) {
                    $grade = "B";
                } elseif ($average >= 50) {
                    $grade = "C";
                } elseif ($average >= 40) {
                    $grade = "D";
                } else {
                    $grade = "F";
                }

                echo "<div class='result'>Average: $average<br>Grade: $grade</div>";
            }
        }
        ?>
    </div>
</body>
</html>
