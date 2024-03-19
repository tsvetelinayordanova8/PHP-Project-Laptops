<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <?php include "top.html" ?>
    <?php
            
            $result = $myDB->query("select * from users where username='". addslashes($_POST["username"]) . "' and password='" . addslashes($_POST["password"]) . "'");
            $myDB->close();
            if ($row = $result->fetch_assoc())
            {
                $_SESSION["username"]=$row["username"];
                $_SESSION["usertype"]=$row["usertype"];
                $_SESSION["personname"]=htmlspecialchars($row["personname"]);
                header("Location: .");
                exit;
            }
            else echo "<span class='errMsg'>Invalid username or password!</span>";
    ?>
</body>
</html>