<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Imperial to Metric Converter</title>
</head>
<body>
    <h1>Imperial to Metric Converter</h1>
    <form action="convert.php" method="post">
        <label for="value">Value:</label>
        <input type="number" id="value" name="value" step="any" required>
        
        <label for="unit">Unit:</label>
        <select id="unit" name="unit">
            <option value="inches">Inches</option>
            <option value="feet">Feet</option>
            <option value="yards">Yards</option>
            <option value="miles">Miles</option>
            <option value="lbs">Lbs</option>
            <option value="stone">Stone</option>
        </select>
        
        <input type="submit" value="Convert">
    </form>
</body>
</html>
