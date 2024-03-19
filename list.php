<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="list.css">
    <title></title>
</head>
<body>
    <?php include "top.html" ?>
    <div>
        <h2 class="secondHeader">Laptop Information</h2>
    </div>
    <div id="laptop">
    <?php
        $myDB->set_charset("utf8");
        echo "<div id='list'>";
        echo "<table class='table' border='1'>";
        echo "<tr><th>Name</th><th>Hardware</th><th>Processor</th><th>Cores</th><th>Graphic Card</th>";
        
        $result = $myDB->query("select * from laptop_tbl");
        while ($row = $result->fetch_assoc()) {
            echo  "<tr><td>" . $row["name"] . "</td><td>" . $row["hardware"] . "</td><td>" . $row["processor"] . "</td><td>" . $row["cores"] . "</td><td>" . $row["graphic_card"] . "</td></tr>";
        }

        echo "</table>";
        echo "</list>";
        $myDB-> close();
    ?>
    </div>
</body>
</html>