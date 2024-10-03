<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Member Success</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
        require 'connect.php';
        $sql_update="UPDATE member SET firstname='$_POST[firstname]',lastname='$_POST[lastname]',address='$_POST[address]' ,tel='$_POST[tel]'WHERE mid='$_POST[mid]' ";
        $result= $conn->query($sql_update);
        if(!$result) {
            die("Error God Damn it : ". $conn->error);
            }
        else {
            echo "Edit Success <br>";
            header("refresh: 1; url=member.php");
            }
    ?>
</body>
</html>