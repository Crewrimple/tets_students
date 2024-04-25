<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Knight's Move</title>
</head>
<body>
    <h2>Check if the Knight can move</h2>
    <form action="index.php" method="get">
        <label for="x1">Current X:</label>
        <input type="number" id="x1" name="x1" min="1" max="8" required><br><br>
        <label for="y1">Current Y:</label>
        <input type="number" id="y1" name="y1" min="1" max="8" required><br><br>
        <label for="x2">New X:</label>
        <input type="number" id="x2" name="x2" min="1" max="8" required><br><br>
        <label for="y2">New Y:</label>
        <input type="number" id="y2" name="y2" min="1" max="8" required><br><br>
        <input type="submit" value="Check Move">
    </form>
    
    <?php
    require_once 'functions.php';

    if (!empty($_GET)) {
        echo canGo($_GET['x1'], $_GET['y1'], $_GET['x2'], $_GET['y2']) ? 'Yes' : 'No';
    }
    ?>
</body>
</html>
