<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert Success</title>
    <link rel="stylesheet"  href="style.css">
</head>
<body>
<?php
    require 'connect.php';
    $sql_update="INSERT INTO member(mid,firstname,lastname,address,tel) VALUES ('$_POST[mid]','$_POST[firstname]','$_POST[lastname]' ,'$_POST[address]' ,'$_POST[tel]')";

    $result= $conn->query($sql_update);

    if(!$result) {
        die("Error God Damn it : ". $conn->error);
    } else {

    echo "Insert Success <br>";
    header("refresh: 1; url=member.php");
    }

?> 

</body>
</html>