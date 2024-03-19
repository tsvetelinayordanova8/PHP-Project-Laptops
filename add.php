<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="list.css">
    <title>Adding Document</title>
</head>
<body>
    <?php include "top.html" ?>
    <h2 class="secondHeader">Adding Laptop</h2>
    <form action="adding.php" method="post" id="laptop">
        <label for="name">Laptop Name:</label><br>
        <input type="text" name="name"><br>
        <label for="hardware">Hardware:</label><br>
        <input type="text" name="hardware"><br>
        <label for="cores">Cores:</label><br>
        <input type="text" name="cores"><br>
        <label for="processor">Processor:</label><br>
        <input type="text" name="processor"><br>
        <label for="graphic_card">Graphic Card:</label><br>
        <input type="text" name="graphic_card"><br>
        <input type="submit" value="Add" class="button"><br>
        
    </form>
</body>
</html>