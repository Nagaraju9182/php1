<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=<, initial-scale=1.0">
    <title>Document</title>
</head>
<h2>Return statements</h2>
<body>
    <?php
    function cube($num){
        echo "hello";
        return $num * $num * $num * $num;

    }
    echo cube(1);
    ?>
</body>
</html>