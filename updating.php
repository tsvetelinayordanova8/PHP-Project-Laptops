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
    <?php
        $name= $_POST["name"];
        $hardware= $_POST["hardware"];
        $cores= $_POST["cores"];
        $processor= $_POST["processor"];
        $graphic_card= $_POST["graphic_card"];
        $update_id=$_POST["update_id"];

        if (empty($name) || empty($hardware) || empty($cores) || empty($processor) || empty($graphic_card))
        {
           
            echo "<span class='errMsg'>Some field is empty!</span><br>";
            echo "<a href='javascript:history.back()' title='Връщане към предходната страница'>Обратно към редактиране</a>";
        }
        else
        {
            $txtQuery="update laptop_tbl set name='$name', hardware='$hardware', cores='$cores', processor='$processor', graphic_card='$graphic_card'  where id='$update_id'";
            $result=$myDB->query($txtQuery);
            if ($result) {
                echo "<h3 class='update_data_message'>The data was edited!</h3>";
                echo "<img src='edited.jpg' alt='Good Job' width='300px' class='img_edit'>";
            }else{
                echo "<h1 id='data'>Error!</h1>";
                echo "<img src='trouble.jpg' alt='Error' width='400px' class='img'>";
            }
            $myDB->close();
        }
    ?>  
</body>
</html>