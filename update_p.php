<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="top.css">
    <link rel="stylesheet" href="list.css">
    <title>Update Document</title>
</head>
<body>
    <?php include "top.html" ?>
    <?php
        $edit_id = $_GET["id"];
        $txtQuery="select * from laptop_tbl where id=$edit_id";
        $result=$myDB->query($txtQuery);
        if ($row=$result->fetch_assoc()) 
        {
            $name=htmlspecialchars($row["name"]);
            $hardware=$row["hardware"];
            $cores=$row["cores"];
            $processor=$row["processor"];
            $graphic_card=$row["graphic_card"];
        }
        $myDB->close();
    ?>
    <div class="form_update">
        <form action="updating.php" method="post">
            <label for="name">Name</label><br> 
            <input type="text" name="name" value="<?=$name?>"><br>
            <label for="hardware">Hardware</label><br>
            <input type="text" name="hardware" value="<?=$hardware?>"><br>
            <label for="cores">Cores</label><br>
            <input type="text" name="cores" value="<?=$cores?>"><br>
            <label for="processor">Processor</label><br>
            <input type="text" name="processor" value="<?=$processor?>"><br>
            <label for="graphic_card">Graphic Card</label><br>
            <input type="text" name="graphic_card" value="<?=$graphic_card?>"><br>
            <input type="hidden" name="update_id" value="<?=$edit_id?>">
            <input type="submit" value="Submit" class="button"><br>
        </form>
    </div>
</body>
</html>