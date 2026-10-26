<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array Sorting Practice</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            max-width: 650px;
            margin: 40px auto;
            padding: 20px;
            line-height: 1.5;
        }
        label {
            display: inline-block;
            width: 100px;
            margin-bottom: 12px;
        }
        input {
            padding: 8px;
            width: 180px;
        }
        button {
            padding: 10px 16px;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <h1>Array Sorting Practice</h1>
    <p>Enter eight numbers, then click Submit to see the array operations.</p>

    <form action="display_output.php" method="post">
        <div>
            <label for="value1">Value 1:</label>
            <input type="number" step="any" id="value1" name="values[]" required>
        </div>
        <div>
            <label for="value2">Value 2:</label>
            <input type="number" step="any" id="value2" name="values[]" required>
        </div>
        <div>
            <label for="value3">Value 3:</label>
            <input type="number" step="any" id="value3" name="values[]" required>
        </div>
        <div>
            <label for="value4">Value 4:</label>
            <input type="number" step="any" id="value4" name="values[]" required>
        </div>
        <div>
            <label for="value5">Value 5:</label>
            <input type="number" step="any" id="value5" name="values[]" required>
        </div>
        <div>
            <label for="value6">Value 6:</label>
            <input type="number" step="any" id="value6" name="values[]" required>
        </div>
        <div>
            <label for="value7">Value 7:</label>
            <input type="number" step="any" id="value7" name="values[]" required>
        </div>
        <div>
            <label for="value8">Value 8:</label>
            <input type="number" step="any" id="value8" name="values[]" required>
        </div>
        <button type="submit">Submit Values</button>
    </form>
</body>
</html>
