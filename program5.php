<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<h1>Building a mad Libs Game</h1>
<body>
    <form action="program5.php" method="get">
        color: <input type="text" name="color"><br><br>
        plural Noun: <input type="text" name="pluralNoun"><br><br>
        celebrity: <input type="text" name="celebrity"><br><br>
        
        <button type="sumbit">Sumbit</button>
    </form>
    <?php
    $color = $_GET["color"];
    $pluralNoun = $_GET["pluralNoun"];
    $celebrity = $_GET["celebrity"];

    echo "roses are $color <br>";
    echo "$pluralNoun are blue <br>";
    echo "i love $celebrity <br>";
    ?>
    
</body>
</html>