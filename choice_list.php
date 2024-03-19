<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="list.css">
    <title>Choice List</title>
</head>
<body>
    <?php include "top.html" ?>
    <h1 class="secondHeader">Please, select a custom information to show you the results!</h1>

    <h3 class="formName">From name:</h3>
    <form action="choice_php.php" method="post" class="form">
        <select name="nameS">
            <option>-- Select name --</option>
            <option value="">
            <?php
                $result = $myDB->query("select distinct name from laptop_tbl");
                while ($row = $result->fetch_assoc()) {
                    echo "<option value= '" . $row['name'] ."'>" . $row['name'] ."</option>";
                }
            ?>
            </option>
        </select>
        <input type="submit" name="name" vlaue="Submit"  class="button">
    </form>

    <h3 class="formName">From hardware:</h3>
    <form action="choice_php.php" method="post" class="form">
        <select name="hardwareS">
            <option>-- Select hardware --</option>
            <option value="">
            <?php
                $result = $myDB->query("select distinct hardware from laptop_tbl");
                while ($row = $result->fetch_assoc()) {
                    echo "<option value= '" . $row['hardware'] ."'>" . $row['hardware'] ."</option>";
                }
            ?>
            </option>
        </select>
        <input type="submit" name="hardware" vlaue="Submit"  class="button">
    </form>

    <h3 class="formName">From cores:</h3>
    <form action="choice_php.php" method="post" class="form">
        <select name="coresS">
            <option>-- Select core --</option>
            <option value="">
            <?php
                $result = $myDB->query("select distinct cores from laptop_tbl");
                while ($row = $result->fetch_assoc()) {
                    echo "<option value= '" . $row['cores'] ."'>" . $row['cores'] ."</option>";
                }
            ?>
            </option>
        </select>
        <input type="submit" name="cores" vlaue="Submit"  class="button">
    </form>

    <h3 class="formName">From processor:</h3>
    <form action="choice_php.php" method="post" class="form">
        <select name="processorS">
            <option>-- Select processor --</option>
            <option value="">
            <?php
                $result = $myDB->query("select distinct processor from laptop_tbl");
                while ($row = $result->fetch_assoc()) {
                    echo "<option value= '" . $row['processor'] ."'>" . $row['processor'] ."</option>";
                }
            ?>
            </option>
        </select>
        <input type="submit" name="processor" vlaue="Submit"  class="button">
    </form>

    <h3 class="formName">From graphic card:</h3>
    <form action="choice_php.php" method="post" class="form">
        <select name="graphic_cardS">
            <option>-- Select graphic card --</option>
            <option value="">
            <?php
                $result = $myDB->query("select distinct graphic_card from laptop_tbl");
                while ($row = $result->fetch_assoc()) {
                    echo "<option value= '" . $row['graphic_card'] ."'>" . $row['graphic_card'] ."</option>";
                }
            ?>
            </option>
        </select>
        <input type="submit" name="graphic_card" vlaue="graphic_card"  class="button">
    </form>
</body>
</html>