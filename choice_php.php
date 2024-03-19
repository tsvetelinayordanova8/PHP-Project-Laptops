<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="list.css">
    <title>Choice PHP</title>
</head>
<body>
    <?php include "top.html" ?>

    <?php
        $choice = "";
        
        if (isset($_POST['name'])) {
            $choice = 'name';
        }else if (isset($_POST['hardware'])) {
            $choice = 'hardware';
        }else if (isset($_POST['cores'])) {
            $choice = 'cores';
        }else if (isset($_POST['processor'])) {
            $choice = 'processor';
        }else if (isset($_POST['graphic_card'])) {
            $choice = 'graphic_card';
        }

        $select = $choice;
        $selectF = $select."S";
        $final = $_POST["$selectF"];

        echo "<div class='choice'>";
        echo "<table border='1'>";
        echo "<tr><th>Name</th><th>Hardware</th><th>Cores</th><th>Processor</th><th>Graphic Card</th>";
        
        $result = $myDB->query("select * from laptop_tbl where $choice ='$final'");
        while ($row = $result->fetch_assoc()) {
            echo  "<tr><td>" . $row["name"] . "</td><td>" . $row["hardware"] . "</td><td>" . $row["cores"] . "</td><td>" . $row["processor"] . "</td><td>" . $row["graphic_card"] ."</td></tr>";
        }
        
        echo "</table>";
        echo "</div>";
        echo "<img src='choosing.jpg' alt='Good Job' width='405px' class='img4'>";
        $myDB-> close();
    ?>
</body>
</html>