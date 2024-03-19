<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="top.css">
    <link rel="stylesheet" href="list.css">
    <title>Updating Document</title>
</head>
<body>
<?php include "top.html" ?>
    <h2 class="secondHeader">Updating information from database</h2>
    <?php
        echo "<div class='update'>";
        echo "<table border='1'>";
        echo "<tr><th>Name</th><th>Hardware</th><th>Processor</th><th>Cores</th><th>Graphic Card</th><th>Operations</th>";
        
        $result = $myDB->query("select * from laptop_tbl");
        while ($row = $result->fetch_assoc()) {
            echo  "<tr><td>" . $row["name"] . "</td><td>" . $row["hardware"] . "</td><td>" . $row["processor"] . "</td><td>" . $row["cores"] . "</td><td>" . $row["graphic_card"]. "</td><td>" ."<a href='update_p.php?id=$row[id]'>update</a>" ."</td></tr>";
        }

        echo "</table>";
        echo "</div>";
        $myDB-> close();
    ?>
</body>
</html>