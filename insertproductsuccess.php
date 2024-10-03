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
    $sql_update="INSERT INTO product(pid,name,information,duration,date) VALUES ('$_POST[pid]','$_POST[name]','$_POST[information]' ,'$_POST[duration]' ,'$_POST[date]')";

    $result= $conn->query($sql_update);

    if(!$result) {
        die("Error God Damn it : ". $conn->error);
    } else {

    echo "Insert Success <br>";
    header("refresh: 1; url=product.php");
    }

?> 

</body>
</html>