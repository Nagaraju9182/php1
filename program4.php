<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<H1>Building a basic Calculator </H1>
<body>
    <form action="program4.php" method="get">
        <input type="number" name="num1"><br>
        <input type="number" name="num2"><br>
        <button type="submit">sumbit</button><br>
        ANS:<?php echo $_GET["num1"]+ $_GET["num2"]
        ?>
    </form>
</body>
</html>