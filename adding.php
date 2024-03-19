<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="list.css">
    <title>Adding PHP</title>
</head>
<body>
    <?php include "top.html" ?>
    <div class="laptop">
        <?php
            
            $name = $_POST["name"];
            $hardware = $_POST["hardware"];
            $cores = $_POST["cores"];
            $processor = $_POST["processor"];
            $card = $_POST["graphic_card"];

            $txtQuery = "insert into laptop_tbl(name, hardware, cores, processor, graphic_card) values('$name', '$hardware', $cores, '$processor', '$card')";
            $result1 = $myDB->query($txtQuery);
            if ($result1) {
                echo "<h1 class='secondHeader'>The data is saved!</h1>";
                echo "<img src='goodJob.jpg' alt='Good Job' width='250px' class='img1'>";
            }else{
                echo "<h1 id='data'>Error!</h1>";
                echo "<img src='trouble.jpg' alt='Good Job' width='400px' class='img'>";
            }
            
            $myDB-> close();
        ?>
    </div>
</body>
</html>