<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
  <h2>get vs post<h2>
<body>
    <form action="program6.php" method="post">
    password: <input type="password" name="password"><br>
    <button type="submit">Sumbit</button>
 </form>
 <br>
 <?php
 echo $_POST["password"];
 ?>
</body>
</html>