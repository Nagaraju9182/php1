<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<h2>using checkbox</h2>
<body>
    <form action="program7.php" method="post">
     Apples; <input type="checkbox" name="fruits[]" value="apples"><br>
     Bananas; <input type="checkbox" name="fruits[]" value="bananas"><br>
     oranges; <input type="checkbox" name="fruits[]" value="oranges"><br>
     <button type="sumbit">Sumbit</button>
</form>
<?php
    $fruits = $_POST["fruits"];
    echo $fruits[0];
    ?>
</body>
</html>