<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<h1>Getting user input</h1>
<body>
    <form action="program3.php" method="get">
        Name: <input type="text" name="name">
        <button type="sumbit">sumbit</button>
               </form>
    <br>
    <?php echo $_GET["name"]
    ?>

</body>
</html>