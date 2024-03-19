<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="list.css">
    <title>Deleting</title>
</head>
<body>
    <?php include "top.html" ?>
    <?php
        $id = $_GET['id'];

        $sql = "DELETE FROM laptop_tbl WHERE id = $id";
        $result=$myDB->query($sql);
        if ($result){
            echo "The data for laptop is deleted.";
            echo "<img src='deleted.jpg' alt='Good Job' width='300px' class='img3'>";
        }else{
            echo "<h1 id='data'>Error!</h1>";
            echo "<img src='trouble.jpg' alt='Error' width='400px' class='img'>";
        }
        $myDB-> close();

        
    ?>
</body>
</html>