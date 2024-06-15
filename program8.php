<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<h1>Associative Arrays</h1>
<body>
    <form action="program8.php" method="post">
        <input type="text" name="student"><br>
        <button type="submit">sumbit</button>
    </form>
    <?php
    $gardes = array("nagaraju"=> "A+", "shiva"=>"b-", "shankar"=>"c+");
    echo $gardes[$_POST["student"]];
    ?>
</body>
</html>