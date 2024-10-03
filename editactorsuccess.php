<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Actor Success</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
        require 'connect.php';
        $sql_update="UPDATE actor SET firstname='$_POST[firstname]',lastname='$_POST[lastname]',address='$_POST[address]' ,tel='$_POST[tel]'WHERE aid='$_POST[aid]' ";
        $result= $conn->query($sql_update);
        if(!$result) {
            die("Error God Damn it : ". $conn->error);
            }
        else {
            echo "Edit Success <br>";
            header("refresh: 1; url=actor.php");
            }
    ?>
</body>
</html>